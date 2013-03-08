/**
 * A Css and JavaScript load system for t29v6.
 * 
 * This is needed because the t29Host web_prefix system, so the website can be
 * loaded at some different point than the document root.
 * 
 * Sven Koeppel, 08.03.2013, GPL
 **/

if(!t29) window.t29 = {}; // the t29 namespace
t29.load = {};

t29.load.css = function(file) {
	file = t29.load.get_path(file);
	$("<style type='text/css'/>").html('@import url("'+file+'")').appendTo("head");
};

t29.load.js = function(file, callback) {
	file = t29.load.get_path(file);
	$.getScript(file, callback);
};

/**
 * Convert a t29 relative path like /shared/css/foo to
 * a path converting the webroot, like /path/to/t29/site/shared/css/foo
 * @return string
 **/
t29.load.get_path = function(file) {
	return t29.conf.web_prefix + file;
};

t29.load.setup = function() {
	if(!t29.conf.web_prefix) t29.conf.web_prefix = "";
};
