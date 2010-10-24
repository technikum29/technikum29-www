/**
 * technikum29.de | Translation contribution system
 *
 * This is a one-of-a-kind "almost wiki" interactive feedback system for user driven
 * improvements directly on the page. There is almost no way to make it more easier
 * for users to improve the translation.
 *
 * $Id$
 * (c) GPL, Sven Koeppel, 01.09.2010
 **/
 
if(!t29) t29 = {};       // defined in tools.js
if(!t29.tr) t29.tr = {}; // this namespace, also defined in tools.js

// Basic Settings
t29.tr.settings = {
    disable_img_license_system: true, // when tr system enabled, disable img licenses for more cleareness
	editable_elements: function(){ return $("#content").find("p, ul, ol, blockquote, dl, table, h2, h3"); },
	messages_url: "/en/dev/translation/messages.xml"
};

// Message system
t29.tr.msg = {};
t29.tr.load_messages = function() {
	$.ajax({
		dataType: "xml",
		url: t29.tr.settings.messages_url,
		async: false, timeout: 2000, // ms
		success: function(xml) {
			$("body > span, body > section", xml).each(function(){
				t29.tr.msg[this.id] = (this.tagName == "span") ? $(this).text() : $(this).contents()
			});
		},
		error: function(xhr, status) {
			alert("Error while fetching translation messages: "+status);
		}
	});
}

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
	t29.tr.sidebar.find(".tr-enabled .button").attr("href","#back_to_normal_mode").click(t29.tr.call("set_enabled",false));	
	t29.tr.load_messages();
	t29.tr.defaultvalue(); // as general system
	// initial value
	//t29.tr.set_enabled(true); // won't work any more (call t29.tr.preloader.start)
};

// helper: foobar.click(t29.tr.call(anything, value)); is shorthand for
//         foobar.call(function(){ t29.tr.anything(value); });
t29.tr.call = function(f, v){ return function(){ t29.tr[f](v);} };

// helper: default value input elements. highly compressed selfwritten :)
// usage: <input value="my default value bla" class="defaultvalue"/>
t29.tr.defaultvalue = function(){
	$("input.defaultvalue").live('focus', function(){
		if(!(dv=(t=$(this)).data('dv'))) t.data('dv', t.val());
		if(t.val()==dv) t.val('');
	}).live('blur', function(){
		if((dv=((t=$(this)).data('dv'))) && /^\s*$/.test(t.val())) t.val(dv);
	});
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
		t29.tr.editables
			.hover(t29.tr.mouseover_editables, t29.tr.mouseout_editables)
			.click(t29.tr.click_editables);
			
		// doesn't work yet (nachschauen)
		/*$(document).keyup(function(e) {
			var code = e.keyCode || e.which;
			if (code == 27)  // escape key -> quit system
				t29.tr.set_enabled(false);
		}); */
	} else {
		// system powered off
		t29.tr.set_editing(false); // for safety, just another time
		t29.tr.editables.unbind(); // safely remove *all* hovering handlers
		// remove any old trash:
		$(".tr-inspecting").removeClass("tr-inspecting");
		t29.tr.mouseout_editables(); // falls noch was uebrig ist
	}
	return true; // success
} // set_enabled

/**
 * Helper function for set_enabled(): Set up the general User Interface for
 * the translation system, that is the inspection widgets. The function
 * remembers if it has created them already, so it's safe to call this multiple
 * times on each set_enabeld(true) call.
 **/
t29.tr.create_ui = function() {
	// Create #tr-info, #tr-editor, all ".tr-editable"s, etc.
	if(!t29.tr.ui_created) {
		t29.tr.ui_created = true; // Now create all those nice elements

		// Sidebar arrow
		t29.tr.sidebar.append(t29.tr.msg.sidebar_arrow);
		
		// create Infobox, editorbox, topnoticebox, design elements
		$("body").append(t29.tr.msg.create_ui_body_append);
		$("#content").before(t29.tr.msg.create_ui_topbox);
		$.each(["infobox", "editorbox", "topbox"], function(){ t29.tr[this] = $("#tr-"+this); });
		
		// make topbox being fixed at top scrolling
		var top = t29.tr.topbox.offset().top; // - parseFloat($('#comment').css('marginTop').replace(/auto/, 0))
		$(window).scroll(function(e) {
			var now_fixed = $(this).scrollTop() >= top;
			// since topbox was embedded in content (not sidebar), place is
			// removed there when switching from static to fixed. Setting the
			// height is a workaround.
			(p=t29.tr.topbox.parent()).css('height', now_fixed ? p.height() : '');
			t29.tr.topbox.toggleClass('fixed', now_fixed);
		});
		
		// create all event handlers in the topbox
		
		// Fields where clicking yields extender bar (poor man tab bar)
		var hideall_tabs = function() {
			t29.tr.topbox.find(".field.extends").removeClass('active');
			t29.tr.topbox.find(".extender > div").slideUp();
		}
		t29.tr.topbox.find(".field.extends").toggle(function(){
			hideall_tabs(); // make sure no other is shown
			var extender = $(this).hasClass('name') ? 'name' : 'feedback';
			t29.tr.topbox.find('.extender .'+extender).slideDown()
			$(this).addClass('active');
		}, hideall_tabs);

		// User name box form
		t29.tr.topbox.find(".name :text").keyup(function(){
			t29.tr.settings[$(this).attr('name')] = $(this).val();
			t29.tr.topbox.find('.name .feedback').html("<b>"+t29.tr.settings.name+"</b> from <b>"+t29.tr.settings.location+"</b>");
			t29.tr.topbox.find('.name .stored').text(' - Thank you');
		});
		
		// Edit whole page button
		t29.tr.topbox.find('.field.editwhole').click(t29.tr.edit_whole_page);
		t29.tr.topbox.find('.field.help').click(t29.tr.help);
		t29.tr.topbox.find('.field.exit').click(t29.tr.call('set_enabled', false));
		

		// Create Editor UI (only once)
		t29.tr.editorbox.html(t29.tr.msg.create_editorui_editorbox); // remove all possible old classes
		t29.tr.editorbox.find(".cancel").click(t29.tr.stop_editing);
		t29.tr.editorbox.find(".submit").click(t29.tr.submit_editing);
		t29.tr.editorbox.find(".help").click(t29.tr.help);

			
		// create all wrapper elements (most important step)
		t29.tr.settings.editable_elements().wrapInner("<span class='tr-editable'/>");
		t29.tr.editables = $(".tr-editable");
	} // INITIAL ui created
	
	// regular ui creations:
	// update the nice arrow in the sidebar =) (some timeout for slow startups)
	setTimeout(function(){
		t29.tr.sidebar.find(".arrow").css({ "border-bottom-width":
		(a=Math.floor(t29.tr.sidebar.outerHeight()/2-1)),"border-top-width": a });
	}, 1000);
}

/**
 * Mouseover (mouseenter) handler for all editables. This will handle infobox
 * styling and content and setup other handlers.
 **/
t29.tr.mouseover_editables = function() {
	if(!t29.tr.is_enabled() || t29.tr.is_editing())	return; // disable while editing
	if(t29.tr.current_editable) {
		// this is weird and should not be - cleanup missed!
		t29.tr.current_editable.removeClass("tr-inspecting");
	}
	t29.tr.current_editable = $(this).addClass('tr-inspecting');

	// show infobox for current editable
	t29.tr.infobox.empty().append( (h=t29.tr.current_editable.hasClass("tr-corrected"))
		? t29.tr.msg.infobox_corrected : t29.tr.msg.infobox_default);
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
	} else if(!editing_target_or_false && !t29.tr.is_editing()) {
		// hab gar nicht bearbeitet.
		return;
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
		if(old_editor) { // falls es noch irgendeinen anderen Muell geben sollte
			old_editor.add(".tr-editing").attr("contenteditable", "false").removeClass("tr-editing");
		}
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
 * Shorthand method to start editing the whole #content area. May be called with
 * callbacks, directly, etc. Will make sure that there is no other editor.
 **/
t29.tr.edit_whole_page = function() {
	t29.tr.set_editing(false); // make sure there is no other editor
	$("#content").wrapInner("<div class='tr-editable'/>");
	t29.tr.set_editing( $("#content > .tr-editable") );
};

/**
 * Button callback for Submitting in the Editor engine. This will compose the
 * HTTP POST call and send it via AJAX. Especially it immediately returns.
 **/
t29.tr.submit_editing = function() {
	// button submitting
	if(!t29.tr.is_really_editing()) {
		// funktioniert nicht zuverlaessig.
		//alert("You didn't make any changes to the text. Where's the improvement? :-)");
		//return false;
	}
	
	$.ajax({
		type: 'POST',
		url: '/en/dev/translation/submit.php',
		success: t29.tr.submit_successful,
		error: function(req, textStatus) {
			t29.tr.editorbox.removeClass('loading').addClass('error');
			t29.tr.editorbox.find('h3').html("Sending your improved text failed!");
			t29.tr.editorbox.find('p').html("Please consult the <span class='button small red'>Help</span>")
				.find('.button').click(t29.tr.help);
			if(req.responseText)
				t29.tr.editorbox.find('p').prepend("<b>"+req.responseText+"</b> ");
			alert("Submitting your text failed!");
		},
		data: {
			source: 'ajax',
			page: location.href,
			node: "foobar", // t29.tr.editor XQUERY PATH
			initial_text: t29.tr.initial_editor.text().replace(/\s+/g,' '),
			initial_html: t29.tr.initial_editor.html(),
			new_text: t29.tr.editor.text().replace(/\s+/g,' '),
			new_html: t29.tr.editor.html()
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
	// Basic initial setup of the editorbox (HTML, callbacks) is already done in general UI)

	
	t29.tr.editorbox.removeClass()
		.css('width', t29.tr.editor.width()) // IMPORTANT - to be done before outerHeight() call
		.css({
			top: t29.tr.editor.offset().top - t29.tr.editorbox.outerHeight(),
			left: t29.tr.editor.offset().left
	}).show();
};

/**
 * Open a nice help window
 **/
 t29.tr.help = function() {
	window.open("http://dev.technikum29.de/wiki/%dcbersetzung/Help");

};



t29.tr.display_top_notice = function() {
	//$("<div id='tr-topnotice'/>").html(t29.tr.settings.top_notice_text).prependTo("#content");
	alert("No one needs this method any more!");
};


// Master entry point: Load onload handler at startup.
$(t29.tr.onload);