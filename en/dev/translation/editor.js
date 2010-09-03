/**
 * technikum29.de | Translation contribution system
 *
 * This is a one-of-a-kind "almost wiki" interactive feedback system for user driven
 * improvements directly on the page. There is almost no way to make it more easier
 * for users to improve the translation.
 *
 * (c) GPL, Sven Koeppel, 01.09.2010
 **/
 
if(!t29) t29 = {}; // defined in tools.js
t29.tr = {};       // this namespace

t29.tr.settings = {
    disable_img_license_system: true, // when tr system enabled, disable img licenses for more cleareness
	editable_elements: function(){ return $("#content").find("p, ul, blockquote, h2, h3"); },
	infobox_default: "<b>Click</b> to contribute a better translation",
	infobox_corrected: "<span class='thanks'>Thank you for your correction.</span> Click to improve your text again.",
	editorbox_heading: "Contribute a better translation"
};

/* SYSTEM STATE:       PAGE STATE:     USER STATE:
   enabled = true      inspecting      already_edited = true => cookie
   disabled = false    editing         never_edited = false
*/


/**
 * Onload handler: Some basic preparations for translation system.
 * tasks:
 *  - Prepare sidebar box link handlers
 **/
t29.tr.onload = function(){
	if(!t29.tr.is_enabled()) $("body").addClass("tr-disabled"); // prepare
	t29.tr.sidebar = $("#sidebar-tr");
	t29.tr.sidebar.find(".tr-disabled a").click(function() {
		t29.tr.set_enabled(true);
		return false;
	}).attr('href', '#help_with_mistakes'); // href for nicer look
	
	t29.tr.sidebar.find(".tr-enabled .button").click(t29.tr.call("set_enabled",false));
	
	// initial value
	//t29.tr.set_enabled(true);
};

// helper: foobar.click(t29.tr.call(anything, value)); is shorthand for
//             """.call(function(){ t29.tr.anything(value); });
t29.tr.call = function(f, v){ return function(){ t29.tr[f](v);} };
t29.tr.arrow = function() {
	// update the nice arrow in the sidebar =)
	t29.tr.sidebar.find(".arrow").css({ "border-bottom-width": (a=Math.floor(t29.tr.sidebar.outerHeight()/2-1)),
		"border-top-width": a });
};

/**
 * Tells if the translation system is started up (e.g. the user started it) or not
 * (which means just an ordinary page)
 * @returns boolean
 **/
t29.tr.is_enabled = function() {
	return t29.tr.enabled ? true : false;
};

/**
 * The main switch to turn the translation system on or off. Turning on will always
 * success (the system switches into inspection mode immediately), turning off will
 * check if the user just modified a text - if yes and if the user want to continue,
 * it will fail. In every case this is a clean operation.
 * @param value boolean true: Turn system on, false: Turn it off
 * @returns boolean if operation succeeded.
 **/
t29.tr.set_enabled = function(value) {
	if(!value && t29.tr.is_really_editing() && t29.tr.stop_editing()) {
		// currently enabled + user is editing
		// + user interrupted process => fail, still enabled
		return false;
	}
	
	t29.tr.enabled = value;
	// toggle image license system
	if(t29.tr.settings.disable_img_license_system)
		t29.img_license_settings.enabled = ! t29.tr.enabled;
	// set infos on body
	$("body").toggleClass("tr-enabled", t29.tr.enabled)
		.toggleClass("tr-inspecting", t29.tr.enabled && !t29.tr.is_editing())
		.toggleClass("tr-disabled", !t29.tr.enabled);

	if(t29.tr.enabled) {
		// system powered on.
		t29.tr.create_ui();
		t29.tr.arrow(); // ;-)
		t29.tr.editables
			.hover(t29.tr.mouseover_editables, t29.tr.mouseout_editables)
			.click(t29.tr.click_editables);
	} else {
		// system powered off
		// t29.tr.set_editing(false) already called.
		// so we can safely remove any handlers
		t29.tr.editables.unbind();
	}
	return true; // success
} // set_enabled

/**
 * Mouseover (mouseenter) handler for all editables. This will handle infobox
 * styling and content and setup other handlers.
 **/
t29.tr.mouseover_editables = function() {
	if(t29.tr.is_editing())	return; // disable while editing
	t29.tr.current_editable = $(this).addClass('tr-inspecting');

	// show infobox for current editable
	t29.tr.infobox.html( (h=t29.tr.current_editable.hasClass("tr-corrected"))
		? t29.tr.settings.infobox_corrected : t29.tr.settings.infobox_default);
	if(h) t29.tr.infobox.addClass("tr-corrected"); // tell infobox that current editable is corrected (for css)
	
	// position infobox for current editable
	t29.tr.infobox.css({
		top: t29.tr.current_editable.offset().top - t29.tr.infobox.outerHeight(),
		left: t29.tr.current_editable.offset().left
	}).show();
	
	$(document).bind("mousemove", t29.tr.mouseover_editables_positioner);
};

/**
 * Mouseover helper: Another handler for mouse movements to nicely arrange the
 * infobox according to the mouse cursor x position.
 **/
t29.tr.mouseover_editables_positioner = function(e) {
	if(e.pageX) { // document.mousemove event
		var left = e.pageX - t29.tr.infobox.outerWidth()/2;
		// check boundaries
		left = Math.max(left, t29.tr.current_editable.offset().left);
		left = Math.min(left, t29.tr.current_editable.offset().left + t29.tr.current_editable.outerWidth() - t29.tr.infobox.outerWidth());
		t29.tr.infobox.css("left", left);
	}
}

/**
 * Mouseout (mouseleave) handler: Makes a nice cleanup. Can be called multiple times,
 * will detect if already cleaned up. This should be done, since it unbinds a
 * nervous mousemove handler.
 **/
t29.tr.mouseout_editables = function() {
	if(t29.tr.current_editable) {
		t29.tr.current_editable.removeClass('tr-inspecting');
		t29.tr.current_editable = null;
		t29.tr.infobox.hide().removeClass(); // remove all classes
		$(document).unbind("mousemove", t29.tr.mouseover_editables_positioner);
	}
};

/** 
 * Click handler for clicking editables. This will immediately start the editing
 * engine if the user is not already editing another text.
 **/
t29.tr.click_editables = function() {
	if(t29.tr.is_editing()) return;
	t29.tr.set_editing($(this));
};

/**
 * Testing function to find out if user is currently editing, that is: There is an editor
 * window currently open. ("The editor engine is running").
 * @returns boolean value if an editor window is open
 **/
t29.tr.is_editing = function() {
	// user is editing.
	return (t29.tr.editor && !jQuery.isEmptyObject(t29.tr.editor));
};

/**
 * Testing function to find out if user modified something in the currently opened editing,
 * if avaliable. If the user doesn't currently edit at all, this returns false.
 * @returns boolean User works with local modified text and will be angry if you delete it
 */
t29.tr.is_really_editing = function() {
	// user is editing and has made some changes
	return t29.tr.is_editing() && (t29.tr.editor.html() != t29.tr.initial_editor.html())
};

/**
 * This is the main switch for the editor engine. Calling this function you can safely
 * start or stop editing. Starting is simple: Just tell it what to edit:
 *   t29.tr.set_editing($("your element"));
 * Stopping is a brutal action, since this low level function does NOT check if there
 * are modifications. Use stop_editing() for an interactive version. Especially,
 * set_editing(false) won't fail :-)
 * @param editing_target_or_false false for turning off, any jQuery object for turning on
 * @returns nothing
 */
t29.tr.set_editing = function(editing_target_or_false) {
	if(editing_target_or_false && t29.tr.is_editing()) {
		alert("Bad state: Starting editing while editing?");
		return; // bad
	}
	
	var old_editor = t29.tr.editor; // backup old editor for cleanup
	t29.tr.editor = editing_target_or_false;
	$("body").toggleClass("tr-editing", t29.tr.is_editing());
	$("body").toggleClass("tr-inspecting", t29.tr.is_enabled() && !t29.tr.is_editing());

	if(t29.tr.is_editing()) {
		// start up editing

		// setup editor
		t29.tr.initial_editor = t29.tr.editor.clone(); // make a backup of the original, for the form
		t29.tr.editor.attr("contenteditable", "true").addClass("tr-editing").focus();
		
		// switch the boxes
		t29.tr.mouseout_editables(); // rauemt vom editing auf (infobox.hide(), etc.)
		t29.tr.create_editorui();
		
		// ask at window unloading
		window.onbeforeunload = function() { 
			if(t29.tr.is_really_editing()) {
				return ("You have made changes on this page that you have not yet submitted."
				 +"If you navigate away from this page you will loose your work.");
			}
		};
	} else {
		// stop editing
		t29.tr.initial_editor = null;
		old_editor.attr("contenteditable", "false").removeClass("tr-editing");
		t29.tr.editorbox.hide();
	}
}; // set_editing

/**
 * This is the interactive version of set_editing(false). If the user modified the
 * document, it will ask him if he wants to quit. If no, it returns false.
 * @returns boolean true if editing was stopped, false if not.
 **/
t29.tr.stop_editing = function() {
	// Frontend Function to *ask* user if he wants to stop editing
	if(!t29.tr.is_really_editing(true) || 
	   confirm("Do you want to quit the currently edited paragraph and loose all changes?")) {
		t29.tr.set_editing(false);
		return true;
	} else {
		return false;
	}
};

/**
 * Button callback for Submitting in the Editor engine. This will compose the
 * HTTP POST call and send it via AJAX. Especially it immediately returns.
 **/
t29.tr.submit_editing = function() {
	// button submitting
	if(!t29.tr.is_really_editing()) {
		alert("You didn't make any changes to the text. Where's the improvement? :-)");
		return false;
	}
	
	$.ajax({
		type: 'POST',
		url: '/en/dev/translation/submit.php',
		success: t29.tr.submit_successful,
		error: function(req, textStatus) {
			alert("I'm sorry, submitting the text failed due to "+textStatus
				+"\nPlease mail your text to "+"ed.92mukinhcet@ved".split("").reverse().join(""));
			t29.tr.editorbox.removeClass('loading');
		},
		data: {
			source: 'ajax',
			page: location.href,
			node: "foobar", // t29.tr.editor XQUERY PATH
			initial_text: t29.tr.initial_editor.html(),
			new_text: t29.tr.editor.html()
		}
	});
	
	// wg. langen Ladezeiten: Buttons ausblenden!
	t29.tr.editorbox.addClass('loading');
};

/**
 * Callback function for success AJAX submission call. This will display a short
 * nice message before shutting down nicely the editor engine, leaving the user back
 * to inspect just another element.
 **/
t29.tr.submit_successful = function(server_data) {
	// Editorbox
	t29.tr.editorbox.removeClass('loading').addClass('success').prepend("<div class='response'>Thank you! :-)</div>");
	t29.tr.editorbox.delay(1100).fadeOut(1000, function(){
		t29.tr.set_editing(false); // sic - hard finishing.
		// + TODO REMARK "USER already edited"!
	});
	
	// Editor
	t29.tr.editor.addClass("tr-corrected");
	
	// System, user credits
	$("body").addClass("tr-successful");
	t29.tr.sidebar.find(".dynamic").text(
		"Thank you very much for your contribution! Blablabla"
	);
};

/**
 * Helper function for set_editing(): Set up the User Interface elements for
 * the editor engine. This function can and should be called on each
 * set_editing(true) call, since it also cleans up :)
 **/
t29.tr.create_editorui = function() {
	t29.tr.editorbox.html(
		"<div class='spinner'><img src='/en/dev/translation/loading.gif' title='Ongoing Data transmission'> saving...</div>"
		+"<div class='buttons'>"
			+"<div class='smaller'>"
				+"<div class='button white small help'>Help</div>"
				+"<div class='button white small cancel'>Cancel</div>"
			+"</div>"
			+"<button class='button green submit'>Submit</button>"
		+"</div>"
		+"<div class='left'>"
			+"<h3>"+t29.tr.settings.editorbox_heading+"</h3>"
			+"<p>Just start to type in the text field</p>"
		+"</div>"
	).removeClass(); // remove all possible old classes
	t29.tr.editorbox.find(".cancel").click(t29.tr.stop_editing);
	t29.tr.editorbox.find(".submit").click(t29.tr.submit_editing);
	
	t29.tr.editorbox.css({
		top: t29.tr.editor.offset().top - t29.tr.editorbox.outerHeight(),
		left: t29.tr.editor.offset().left,
		width: t29.tr.editor.width()
	}).show();
};

/**
 * Helper function for set_enabled(): Set up the general User Interface for
 * the translation system, that is the inspection widgets. The function
 * remembers if it has created them already, so it's safe to call this multiple
 * times on each set_enabeld(true) call.
 **/
t29.tr.create_ui = function() {
	// Create #tr-info, #tr-editor, all ".tr-editable"s
	if(!t29.tr.ui_created) {
		t29.tr.ui_created = true; // Now create all those nice elements
		
		// create Info Bubble
		t29.tr.infobox = $("<div/>").appendTo("body").attr("id", "tr-info");
		// create editor window
		t29.tr.editorbox = $("<div/>").appendTo("body").attr("id", "tr-editor");
			
		// create all wrapper elements
		t29.tr.settings.editable_elements().wrapInner("<span class='tr-editable'/>");
		t29.tr.editables = $(".tr-editable");
	} // ui created
}

// Master entry point: Load onload handler at startup.
$(t29.tr.onload);