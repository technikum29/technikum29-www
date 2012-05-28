/**
 * technikum29.de | Lightbox-Implementierung
 *
 * Nutze Fancybox (http://www.fancybox.net) als Lightbox-Variante seit
 * Februar 2011, an verschiedenen Stellen.
 *
 **/
 
if(!t29) window.t29 = {}; // the t29 namespace
 
t29.lightbox = function() {
	var elements = $("#content .popup");
	if(elements.length) {
		// we have fancybox elements on this page. Load Javascript and CSS
		$("<style type='text/css'/>").html('@import url("/shared/js/fancybox/jquery.fancybox-1.3.4.css")').appendTo("head");
		$.getScript('/shared/js/fancybox/jquery.fancybox-1.3.4.pack.js', function(){
			elements.fancybox({
				onComplete: function() {
					// etwas quick and dirty:
					if(! this.orig.is(".no-copyright")) {
						t29.img_license.apply( $("#fancybox-img") );
						// little hacky:
						$("#img-license-tag").css("z-index", "10000"); // make sure much bigger than fancybox
						// fire "hover in" because images are typically big
						// and mouse cursor may not move on picture
						t29.img_license.hover_in.call($("#fancybox-img")[0]);
					}
				},
				onClosed: function() {
					// wieder de-applying
					$("#fancybox-img").unbind('mouseenter mouseleave');
				}
			});
		});
	} // if lightbox elements
}

$(t29.lightbox);