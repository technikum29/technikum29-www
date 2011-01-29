/**
 * technikum29.de | page wide javascripts
 *
 * Dies ist eine Sammlung von kleinen jQuery-Funktionen, die jeweils kleine
 * Anpassungen und Verbesserungen an der www.technikum29.de-Website bieten.
 * Fuer seitenspezifische Scripts siehe common.js.
 * Per Default werden alle Funktionen am Ende dieses Scripts beim Seitenladen
 * ausgefuehrt.
 * Dieses Script benoetigt eine aktuelle jquery.js.
 *
 * 2010 Sven Koeppel $Id$
 * Released under the public domain
 *
 **/
 
var t29 = {}; // the t29 namespace

/**
 * Common helper functions
 **/
 
// get the language of the current document
t29.language = function(){ return $("h1").hasClass("de") ? "de" : "en"; }

// T29 Gettext. Usage:
//   t29.gettext("deutscher text", "englsischer text");
//   t29.gettext({ de: "deutscher Text", en: "englischer Text" });
//   t29.gettext(anything, null) wont work, use t29.gettext({ de: anything, en: null});
t29.gettext  = function(de, en) {
	if(!en){ en=de.en; de = de.de; }
	return t29.language()=="de" ? de : en;
}

/**
 * technikum29.de | javascript: Unobstructive copyright information
 *
 * Since there are so many people copying pictures from the website without
 * even knowing ot the copyright statements on the imprint, we tested some
 * jQuery-powered ways to inform them in an "unobstructive" way:
 * 
 * - hovering a picture replaces it with the "hotlinking picture"
 *   (see http://dev.technikum29.de/src/hotlinking), that is, an embedded
 *   watermark / copyright tag
 * - hovering some more time over the picture yields a small informative
 *   box (containing the alt-label of the picture) that informs about the
 *   copyright message
 *
 * See Revision 169 for these features. They have been completely developed,
 * but removed again for a much smaller and lighter solution (just some black
 * box at the bottom corner of the picture).
 *
 * 2010 Sven Koeppel
 **/
t29.img_license_settings = {
	// enable or disable system (e.g. used as API in Translation subsystem)
	enabled : true,

	// content for the license tags (depending on language)
	text : {
		de: '&copy; technikum29. <a href="/de/impressum.shtm#image-copyright">Lizenzbestimmungen</a>',
		en: '&copy; technikum29. <a href="/en/contact.shtm#image-copyright">Licensing terms</a>',
	},

	// min size of pictures to display the license tag
	treshold_size : [255,100], // [w,h]
	
	// selector to exclude images from being license tagged
	exclude : "img.no-copyright, .no-copyright img, .start img, .impressum img"
};

// configuration end

t29.img_license = function() {
	$("body").append('<div id="img-license-tag"><p>'+
		// detect language by heading language (ripped from t29_gmaps...)
		t29.img_license_settings.text[t29.language()]+'</p></div>');
	var tag = $("#img-license-tag");
	var tag_top = function() { if(t29.img_license_settings.img)
		tag.css("top", Math.min(
			t29.img_license_settings.img.offset().top + t29.img_license_settings.img.height(),
			$(window).scrollTop()+$(window).height()));
	};
	$("img").not(t29.img_license_settings.exclude).hover(function(){
		if(!t29.img_license_settings.enabled
		      || this.width < t29.img_license_settings.treshold_size[0]
		      || this.height < t29.img_license_settings.treshold_size[1])
			return;
		t29.img_license_settings.img = $(this);
		tag.css({
			left: $(this).offset().left,
			// top: tag_top();
			width: $(this).width(),
			display: "block"
		});
		tag_top();
		tag.css("margin-top", -tag.height()); // erst in zweitem schritt
	}, function(){ tag.hide(); t29.img_license_settings.img = null; });
	$(window).scroll(tag_top);
	tag.hover(function(){ $(this).show(); }, function(){ $(this).hide(); });
};

/**
 * technikum29.de | javascripts: window-size-classes
 *
 * Seit August 2010 gibt es endlich eine saubere Moeglichkeit, mit verschieden
 * grossen Monitoren vs. grossen Bildern gut umgehen zu koennen. Per CSS kann
 * nun unterschieden werden zwischen
 *   body.lesser1024  -  es liegt Bildschirmbreite <= 1024 vor
 *   body.greater1024 -  es liegt Bildschirmbreite < 1024 vor
 *   body.greater1028 -  es liegt Bildschirmbreite >= 1280 vor
 * 
 * Wird etwa fuer das Univac-Titelbild verwendet.
 * 
 **/
t29.window_size = function() {
	var body = $("body"); // Reichenzeit sparen
	$(window).resize(function(){
		var width = window.innerWidth;
		body.toggleClass("lesser1024", width < 1024)
		    .toggleClass("greater1024", width >= 1024)
		    .toggleClass("greater1280", width >= 1280); 
	}).resize();
}

/**
 * technikum29.de | javascripts: hostinfo
 *
 * Um optisch zwischen verschiedenen Hosts der Website unterscheiden zu koennen,
 * wurde im August das hostinfo-System eingefuehrt. Es laedt per AJAX die un-
 * versionierte "hostinfo.shtm" aus dem Homepage-Root (wo auch /de, etc. ist).
 * Dort kann beliebiges HTML stehen, was in eine Box in die Sidebar gesetzt wird.
 * Beispiel fuer hostinfo.shtm:
 *
 * <!-- Dies ist die Hostinfo fuer technikum29.irgendein.server.lan -->
 * <div class="de">Deutscher Erklaerungstext</div>
 * <div class="en">Englischer Erklaerungstext</div>
 * <script ...></script>
 *
 **/
t29.hostinfo = function() {
	if(location.hostname != "www.technikum29.de") {
		$.get("/hostinfo.shtm", function(data) {
			$("#sidebar").append("<div class='box' id='sidebar-hostinfo'/>");
			$("#sidebar-hostinfo").html(data);
		});
	}
}

/**
 * technikum29.de | javscripts: auto-bildbreite
 *
 * Zur Ergaenzung des Bildbox-Konzepts wurde Januar 2010 die automatische
 * Erkennung der Breiten der Bilder hinzugefuegt. Funktionsweise:
 *
 * <div class="box center auto-bildbreite">
 *   <img ... />
 *   <p class="bildtext"> bla bla bla </p>
 * </div>
 * 
 * Im Januar wurde ein 60-zeiliges JavaScript geschrieben, was nun in einen
 * jQuery-oneliner (!) migriert wurde
 **/
t29.auto_bildbreite = function() {
	$("div.auto-bildbreite, div.desc-right").each(function(){ $(this).css("width", $("img", this).width()); });
}

/**
 * technikum29.de | javascripts: links to headings
 *
 * Um auf Ueberschriften direkt verweisen zu können, erzeugt diese Funktion
 * fuer jede Ueberschrift einen Anker, der dann per CSS formatiert wird.
 * Ankernamen koennen etwa mit
 *  <h2 id="Ankername">...
 *  <h3 title="Ankername">...
 * erzwungen werden. Ansonsten wird wie in Wikipedia die Ueberschrift selbst
 * verwendet:
 *  <h2>Foo Bar</h2>  =>  #Foo_Bar
 **/
t29.heading_links = function() {
	$("#content").find("h2,h3").not("h2:first").each(function(){
		anchor = ($(this).attr("title") || $(this).attr("id") || $(this).text())
			.replace(/\s+/g, '_').replace(/[?!"']/g, '').replace(/^_+|_+$/g, '');
		$("<a class='anchor'> \u00B6</a>").attr({
			href: "#"+anchor,
			name: anchor,
			title: t29.gettext("Direktlink zu diesem Abschnitt", "Link to this section")
		}).appendTo(this);
	});
	
	// Opera und Internet Explorer machen mit, Firefox nicht, also:
	if((hash=location.hash.substr(1)).length && (link=$("a[name="+hash+"]")).length)
		//$('html, body').animate({scrollTop: link.offset().top}, 1000);  // smooth scrolling
		$('html, body').scrollTop(link.parent().offset().top); // springen
}


/**
 * technikum29.de | javascripts: english translation system loader
 *
 * Um die Ladezeiten des translation systems geringer zu halten, werden
 * JavaScript und CSS dynamisch nachgeladen.
 * @param success_function Function to execute after set_enabled(true) has been called.
 * @returns immediately returns, asynchronous content loading
 **/
if(!t29.tr) t29.tr = {}; // translation system namespace
t29.tr.preloader = {}; // namespace for this preloading system
t29.tr.preloader.enabled_string = // text for sidebar with enabled tr system
	"<h3>Improve this page</h3><p>Simply click on any paragraph to correct it. Thank you!</p>"
	+"<span class='button gray'>Finished!</span>";

t29.tr.preloader.start = function(success_function) {
	// kruder Hack, um die Ladezeit zu ueberstehen: schon mal Designaenderung
	$("body").toggleClass("tr-enabled tr-disabled");
	$.getScript('/en/dev/translation/editor.js', function(){
		t29.tr.set_enabled(true); if(success_function) success_function(); });
	$.get('/en/dev/translation/editor.css', function(css) {
		$("<style type='text/css'/>").html(css).appendTo("head");
	});
	
	// text, nur einmal und so. bessere bedingung - schauen ob schon mal gestartet wurde.
	if(!$("#sidebar-tr .tr-enabled").length) {
		$("<div class='tr-enabled'/>").html(t29.tr.preloader.enabled_string).appendTo('#sidebar-tr');
	}
};

t29.tr.preloader.onload = function() {
	$("#sidebar-tr a").click(function() {
		t29.tr.preloader.start();
		return false;
	}).attr('href', '#help_with_mistakes');

	// startup tr system with query string like ?tr or ...tr-...
	// or for people who opened link in another tab
	if(location.search.match(/tr-|^tr/i) || location.hash.match(/help_with_mistakes/)) {
		t29.tr.preloader.start(function(){ t29.tr.display_startup_notice('querystring'); });
	} else if(location.hostname.match(/^edit/i)) {
		t29.tr.preloader.start(function(){ t29.tr.display_startup_notice('editdomain'); }); 
	}
}

 

$(t29.auto_bildbreite);
$(t29.hostinfo);
$(t29.window_size);
$(t29.img_license);
$(t29.heading_links);
$(t29.tr.preloader.onload);