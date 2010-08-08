/**
 * technikum29.de | Unobstructive Copyright Information
 *
 * Since there are so many people copying pictures from the website without
 * even knowing ot the copyright statements on the imprint, this jquery based
 * script implements some rather "unobstructive" ways of informing them:
 *
 * - hovering a picture replaces it with the "hotlinking picture"
 *   (see http://dev.technikum29.de/src/hotlinking), that is, an embedded
 *   watermark / copyright tag
 * 
 * - hovering some more time over the picture yields a small informative
 *   box (containing the alt-label of the picture) that informs about the
 *   copyright message
 *
 * 2010 Sven Koeppel $Id$
 * Released under the public domain
 **/
 
var t29_copyright_box_text = {
	// Variablen: %ALT  = ALT-Titel des Bildes
	//            %ORIG = Pfad zur Originalfoto
	//            %COPY = Pfad zu Foto mit eingebettetem Copyright
	"de": '<h4>%ALT</h4> \
		<p>Dieses Bild ist kopierrechtlich geschützt. Lesen sie bei \
		Interesse die <a href="/de/impressum.shtm">Hinweise für die Nutzung von Bildern aus der Website des technikum29</a>.\
		<p>Folgende Versionen stehen Ihnen zur Verfügung: \
		<ul> \
		   <li><a href="%ORIG">Originalbild</a> \
		   <li><a href="%COPY">Bild mit eingebettetem Copyright-Emblem</a> \
		</ul> \
		',
	"en": "bla",
};

function t29_copyright_detect_page_language() {
	// try to detect page language by heading (just copied from t29_gmaps_...)
	return $("h1.de").length ? "de" : "en";
}
 
function t29_copyright_hide() {
	// do not show any copyright hints when no element (img or copyright-box) is hovered
	return !$(".copybox-hover").length;
}

function t29_embedded_copyright_on_hover(img) {
	// wird in t29_copyright_box_init eingerichtet
	try {
		if(!this.src_original) {
			var path = this.src.match(/shared(.+)$/)[1];
			this.src_original = this.src;
			this.src_copy = "http://dev.technikum29.de/src/hotlinking" + path;
			// noch nicht existierende bilder umgehen (ist spaeter unnoetig)
			$(this).error(function(){ this.src = this.src_original; });
		}
		
		this.src = //(this.src == this.src_copy)
		!t29_copyright_hide() ? this.src_original : this.src_copy;
	} catch(e){}
}

var t29_copyright_box_global_id_counter = 0;
function t29_copyright_box_img_init(img) {
	// img: the image object (e.g. $("img")[0]), that is, no $("img") list.
	img.cid = ++t29_copyright_box_global_id_counter;
	img.copybox = "copyright-box-"+img.cid; // wird gleich zu $(img.copybox) geaendert!
	
	var box_text = t29_copyright_box_text[t29_copyright_detect_page_language()]
					.replace(/%ALT/g, $(img).attr("alt"))
					//.replace(/%PFAD/g, this.src_original.match(/shared(.+)$/)[1]);
					.replace(/%ORIG/g, img.src_original)
					.replace(/%COPY/g, img.src_copy);
	$("body").append("<div class='image-copyright-box' id='"+img.copybox+"'>"
						+box_text+"<div class='arrow'></div></div>");
	img.copybox = $("#"+img.copybox);
	img.copybox_image = img; // for fast cross reference
	img.copybox[0].cid = img.cid;
	img.copybox[0].copybox = img.copybox; // for fast cross reference
	img.copybox[0].copybox_image = img; // for fast cross reference
	img.copybox[0].is_copybox = true;
	img.copybox.hover(function(){
			//if(console) console.log("mouseover on copyrightbox "+$(this).context.nodeName);
			$(this).addClass("copybox-hover");
			// sicherstellen, dass angezeigt (ziemlich wichtig)
			$(this).show();
			this.src = this.src_copy;
		}, t29_copyright_box_mouseout);
}



function t29_copyright_box_mouseout() {
	// mouse *out* of image or .copyright-box
	$(this).removeClass('copybox-hover');
	//if(console) console.log("mouseout auf "+(this.is_copybox?"copybox":"img"));
	
	if(t29_copyright_hide()) {
		this.copybox.hide();
		this.copybox_image.src = this.copybox_image.src_original;
	}
}

function t29_copyright_box_init() {
	// img hover handling
	$("img").not(".no-copyright").hover(function(){
		// mouse *hover*
		$(this).addClass("copybox-hover");
		//if(console) console.log("mouseover on image "+this.cid);
		
		// init hotlinking-picture
		try {
			if(!this.src_original) {
				var path = this.src.match(/shared(.+)$/)[1];
				this.src_original = this.src;
				this.src_copy = "http://dev.technikum29.de/src/hotlinking" + path;
				// noch nicht existierende bilder umgehen (ist spaeter unnoetig)
				$(this).error(function(){ this.src = this.src_original; });
			}
		} catch(e){}
		
		// init copyrightbox for this image, if not present
		if(!this.copybox)
			t29_copyright_box_img_init(this);
			
		// fix position
		this.copybox.css({
			top: $(this).offset().top + 1/2 * $(this).height()
				- 1/2 * this.copybox.height(),
		
			left: $(this).offset().left + $(this).width() - 10
		});
		
		// display hotlinking picture
		this.src = this.src_copy;
	
		// display copybox, when hidden
		e=this;	setTimeout("e.copybox.fadeIn()", 1500);
	}, t29_copyright_box_mouseout);
	
	// for tall pictures: direct mouse handling...
	$("img").mousemove(function(e){
		// bei sehr hohen bildern sinnvoll, sonst nicht
		/*this.copybox.css({
			top: e.pageY - 1/2 * $("#ln-"+this.uid).height()
		});*/
	});
}

//$(t29_copyright_box_init);


$(function(){
	$("body").append('<div id="img-license-tag"><p>&copy; technikum29. <a href="/de/impressum.shtm">Lizenzbestimmungen</a></p></div>');
	var tag = $("#img-license-tag");
	$("img").not(".no-copyright").hover(function(){
		tag.css({
			left: $(this).offset().left,
			top: $(this).offset().top + $(this).height(),
			width: $(this).width(),
			display: "block"
		});
		tag.css("margin-top", -tag.height()); // erst in zweitem schritt
	}, function(){ tag.hide(); });
	tag.hover(function(){ $(this).show(); }, function(){ $(this).hide(); });
});