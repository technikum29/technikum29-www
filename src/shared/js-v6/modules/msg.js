/**
 * t29v6 - messaging system (I18N / L10N)
 *
 * Multi language strings (or system messages) can be provided with
 * this multi language script. It will get content from the t29Messages
 * class PHP array data as json encoded data.
 **/

if(!t29) window.t29 = {}; // the t29 namespace
 
t29.msg = {};
t29.msg.get = t29._ = function(str) { // t29._ is shorthand!
	if(!t29.msg.data) {
		return '(failed loading msg data)'
	}
	if(t29.msg.data.msg[str]) {
		if($.isArray(t29.msg.data.msg[str]))
			return t29.msg.data.msg[str][ t29.msg.data.order[ t29.conf.lang ]];
		else
			return t29.msg.data.msg[str];
	} else {
		return "&lt;"+str+"&gt;";
	}
};

// t29.msg.data = {json} inserted by js.php postprocessing. Do not include
// the msg.js file directly.

// EOF. No $(setup) required.