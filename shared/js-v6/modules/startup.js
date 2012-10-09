/**
 * Reihenfolge spielt eine Rolle: Manche Module brauchen andere,
 * um was sinnvolles machen zu koennen!!
 *
 * Insbesondere sind systemkritisch: t29.msg (braucht kein startup) und t29.prefs
 *
 *
 *
 **/
 
if(!t29) window.t29 = {}; // the t29 namespace

t29.startup = {};

t29.startup.modules = [
	// independent #content enrichment
	'auto_bildbreite',
	'defaultvalue',
	'heading_links',
	'img_license',
	'lightbox',

	// ganz am anfang
	'prefs',

	// needs prefs
	'menu',
	'piwik',
	
	// ggf verbaendelt mit menu wg scroll lock
	'smoothscroll',

	// shall be at end
	'page',
];

t29.startup.setup = function(){
	$.each(t29.startup.modules, function(){
		if(t29[this] && t29[this].setup)
			t29[this].setup();
		else
			log("t29Startup: No setup found for "+this);
	});
};

$(t29.startup.setup);