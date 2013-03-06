/**
 * t29v6 Logging subsystem
 * 
 * Logging on client side is splitted in two parts:
 *   1. Javascript console.log calls which won't offend the user
 *   2. the t29.log class to notify the user.
 * 
 * Considering console.log, the code is borrowed by HTML5 Boilerplate
 * 
 *
 **/

// usage: log('inside coolFunc', this, arguments);
// paulirish.com/2009/log-a-lightweight-wrapper-for-consolelog/
window.log = function(){
  log.history = log.history || [];   // store logs to an array for reference
  log.history.push(arguments);
  if(this.console) {
    arguments.callee = arguments.callee.caller;
    var newarr = [].slice.call(arguments);
    (typeof console.log === 'object' ? log.apply.call(console.log, console, newarr) : console.log.apply(console, newarr));
  }
};

// make it safe to use console.log always
(function(b){function c(){}for(var d="assert,count,debug,dir,dirxml,error,exception,group,groupCollapsed,groupEnd,info,log,timeStamp,profile,profileEnd,time,timeEnd,trace,warn".split(","),a;a=d.pop();){b[a]=b[a]||c}})((function(){try
{console.log();return window.console;}catch(err){return window.console={};}})());


if(!t29) window.t29 = {}; // the t29 namespace
t29.log = {}; // the t29.log namespace

t29.log.setup = function() {
	// setup our spaces
	t29.log.$panel = $(".messages.panel");
	t29.log.$end = $(".messages.footer");
	
	// find end messages and push them to the first
	if((end_li = t29.log.$end.find("li")).length) {
		end_li.appendTo(t29.log.$panel);
		t29.log.$end.hide(); // hide bottom panel
		t29.log.$panel.removeClass("empty"); // show top panel
	}
	
	// setup some functions
	levels = ["emerg", "alert", "crit", "error", "warn", "notice", "info"];
	$.each(levels, function() {
		level = this;
		t29.log[level] = function(msg) { t29.log.append(level, msg) }
	});
}

t29.log.append = function(level, msg) {
	// tell the panel that it's now not empty (thus it will become CSS visible)
	t29.log.$panel.removeClass("empty");
	
	if(jQuery.type(msg) == "string")
		s = msg;
	else {
		s = "";
		if(msg.dismissable) s += "<button class='close'>&times;</button>";
		if(msg.heading) s += "<h5>"+msg.heading+"</h5>";
		if(msg.text) s += "<p>"+msg.text+"</p>";
	}
	infoelement = $("<li>", {"class": level}).html(s).hide().appendTo(t29.log.$panel).slideDown();
	
	// fill eventual close button with action
	$(infoelement).find("button.close").click(function(){
		$(this).closest("li").slideUp();
	});
}