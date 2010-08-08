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

var t29_img_license = {
	// content for the license tags (depending on language)
	text : {
		de: '&copy; technikum29. <a href="/de/impressum.shtm">Lizenzbestimmungen</a>',
		en: '&copy; technikum29. <a href="/en/imprint.shtm">Licensing terms</a>',
	},

	// min size of pictures to display the license tag
	treshold_size : [255,100], // [w,h]
	
	// selector to exclude images from being license tagged
	exclude : "img.no-copyright, .no-copyright img, .start img, .impressum img"
};

// configuration end

t29_img_license.init = function() {
	$("body").append('<div id="img-license-tag"><p>'+
		// detect language by heading language (ripped from t29_gmaps...)
		t29_img_license.text[$("h1").hasClass("de") ? "de" : "en"]+'</p></div>');
	var tag = $("#img-license-tag");
	var tag_top = function() { if(t29_img_license.img) tag.css("top", Math.min(t29_img_license.img.offset().top + t29_img_license.img.height(), $(window).scrollTop()+$(window).height())); };
	$("img").not(t29_img_license.exclude).hover(function(){
		if(this.width < t29_img_license.treshold_size[0]
		       || this.height < t29_img_license.treshold_size[1])
			return;
		t29_img_license.img = $(this);
		tag.css({
			left: $(this).offset().left,
			// top: tag_top();
			width: $(this).width(),
			display: "block"
		});
		tag_top();
		tag.css("margin-top", -tag.height()); // erst in zweitem schritt
	}, function(){ tag.hide(); t29_img_license.img = null; });
	$(window).scroll(tag_top);
	tag.hover(function(){ $(this).show(); }, function(){ $(this).hide(); });
};

$(t29_img_license.init);