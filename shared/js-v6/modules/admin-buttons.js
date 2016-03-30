/**
 * Small style switcher for quickly testing new layout tools.
 *
 *
 **/

if(!t29) window.t29 = {}; // the t29 namespace
t29.admin = {};

t29.admin.bodyclass_button = function(className, label, afterClick) { /* this is a class */
	var self = this;
	var id = this.id = "admin-bodyclass-"+className;
	this.isActive = function() { return t29.prefs.get(id, false); }
	// API interaction
	this.set = function(state) {
		t29.prefs.set(id, state);
		self.button.checked = state;
		$('body').toggleClass(className, this.checked);
	}
	// Human interaction
	this.changed = function(e) {
		self.set(this.checked);
		if(afterClick) afterClick(self);
	};

	this.button = $('<label for="'+id+'"><input type="checkbox" id="'+id+'" /> '+label+'</label>')
		.appendTo(t29.admin.section).find('input').on('change', this.changed).get(0);

	// initial state
	if(this.isActive()) this.set(true);
}

t29.admin.setup = function() {
	// poor mans check if the admin buttons should load
	// (should be coupled to t29Host)

	if(!location.hostname.match(/^design|localhost|heribert/i))
		return;

	t29.admin.section = $("<section id='admin-buttons'></section>").appendTo('body');
	
	t29.admin.b1 = new t29.admin.bodyclass_button('bg-test1-design',
		'Neuer Hintergrund März 2016', function(button){
			$(window).scrollTop(0);
			t29.log.info('Neues Design ist <b>'+(button.isActive()?"eingeschaltet":"ausgeschaltet")+'</b> für alle weiteren Seitenbesuche auf <a href="'+location.hostname+'">'+location.hostname+'</a>.');
	});
};
