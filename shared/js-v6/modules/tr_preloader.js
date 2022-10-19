/**
 * technikum29.de | javascripts: english translation system loader
 *
 * Um die Ladezeiten des translation systems geringer zu halten, werden
 * JavaScript und CSS dynamisch nachgeladen.
 * @param success_function Function to execute after set_enabled(true) has been called.
 * @returns immediately returns, asynchronous content loading
 **/
 
if(!t29) window.t29 = {}; // the t29 namespace
 
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

//$(t29.tr.preloader);