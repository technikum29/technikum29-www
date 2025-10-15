/**
 * t29v6 Mobile javascript support
 *
 * For whatever reason, this was not started before 2015.
 *
 **/


if(!t29) window.t29 = {}; // the t29 namespace
 
t29.mobile = {};
t29.mobile.setup = function() {
	// Copy the bigfooter ".in-sheet" to the bottom, as in-sheet looks ugly
	// in mobile layout. This basically reverses the PHP efforts to move the
	// bigfooter to the footer.in-sheet.

	// this is only nonempty if the bigfooter is inside the sheet
	var bigFooterCopy = $("footer.in-sheet div.bigfooter").clone();
	if(bigFooterCopy.length)
		$("footer.attached").addClass("for-mobile").append(bigFooterCopy);

	// the menu button for medium/tablet screens
	$("nav a[href='#tour-navigation']").click(function(){
		if(!t29.mobile.slidedown_menu) {
			t29.mobile.slidedown_menu = $("section.sidebar.top").clone().addClass("mobile")
				// initial value for slided-up
				.css("display","none");
			$("header.banner").append(t29.mobile.slidedown_menu);
		}

		t29.mobile.slidedown_menu.slideToggle();
		$(this).toggleClass("menu_visible");
		return false; // do not follow link
	});
}

