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

if(!t29) window.t29 = {}; // the t29 namespace
 
t29.img_license = {}; // img license namespace
t29.img_license.settings = {
	// enable or disable system (e.g. used as API in Translation subsystem)
	enabled : true,

	// content for the license tags (depending on language)
	text : "placeholder",

	// min size of pictures to display the license tag
	treshold_size : [255,100], // [w,h]
	
	// selector to exclude images from being license tagged
	exclude : "img.no-copyright, .no-copyright img, .start img, .impressum img"
};

// configuration end

// helper elements in t29.img_license namespace:
// * hover_in, hover_out: functions called by apply()
// * img: The current image element where the license tag is shown
// * tag: The jquery element of the image license tag
// * tag_top: helper function for css top setting for tag.
t29.img_license.hover_in = function(){
	if(!t29.img_license.settings.enabled
	      || this.width < t29.img_license.settings.treshold_size[0]
	      || this.height < t29.img_license.settings.treshold_size[1])
		return;
	t29.img_license.img = $(this);
	t29.img_license.tag.css({
		left: $(this).offset().left,
		// top: tag_top();
		width: $(this).width(),
		display: "block"
	});
	t29.img_license.tag_top();
	t29.img_license.tag.css("margin-top", -t29.img_license.tag.height()); // erst in zweitem schritt
};
t29.img_license.hover_out = function(){
	t29.img_license.tag.hide();
	t29.img_license.img = null;
};
t29.img_license.tag_top = function() {
	if(t29.img_license.img)
		t29.img_license.tag.css("top", Math.min(
			t29.img_license.img.offset().top + t29.img_license.img.height(),
			$(window).scrollTop()+$(window).height()));
};

// use this function from outer, see setup for help.
// improvement possibility: converse to $.fn so can call $("img#my").img_license();
t29.img_license.apply = function($elem) {
	$elem.hover(t29.img_license.hover_in, t29.img_license.hover_out);
};

t29.img_license.setup = function() {
	$("body").append('<div id="img-license-tag"><p>'+t29._('js-img-license')+'</p></div>');
	t29.img_license.tag = $("#img-license-tag");

	$(window).scroll(t29.img_license.tag_top);
	t29.img_license.tag.hover(function(){ $(this).show(); }, function(){ $(this).hide(); });

	// enable on all images
	t29.img_license.apply( $("img").not(t29.img_license.settings.exclude) );
};