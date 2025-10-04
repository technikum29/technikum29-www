/**
 * t29v6: user specific preferences (persistent storage via cookieS)
 *
 * t29.prefs is the domain for user settings, whereas
 * t29.conf is a global page specific storage for server side
 * information.
 *
 * Examples for typical content:
 *
 *   where       name       typical content    desc
 *   -----       ----       ---------------    ----
 *   t29.conf    lang       "de", "en"         Page language
 *   t29.conf    seiten_id  "suche"            current page name
 *   t29.prefs   scroll...  some menu prefs
 *
 *
 * 2012 Sven Koeppel, Public Domain
 *
 **/

if(!t29) window.t29 = {}; // the t29 namespace
t29.prefs = {};

// configuration for prefs system
t29.prefs.conf = {
	cookie_name: "t29prefs",
	cookie_options: { path: '/', expires: 7 },
};

// internal members (private)
t29.prefs._store = {};

t29.prefs.setup = function() {
	c = t29.prefs.conf;
	$.cookie.defaults = t29.prefs.cookie_options; // TEST/TODO: Bugfix cookie path ignored!
	// read initial data
	json_str = $.cookie(c.cookie_name);
	t29.prefs._store = json_str ? JSON.parse(json_str) : {};
}

/**
 * Get a setting value. The value will be read out from the local
 * storage which is synced by cookie on setup.
 * @param key Name of the setting
 * @param fallback_value default value if setting is not given yet.
 **/
t29.prefs.get = function(key, fallback_value) {
	if(fallback_value === undefined) fallback_value = null;
	return (t29.prefs._store[key] !== undefined) ? t29.prefs._store[key] : fallback_value;
}

/** 
 * Store a setting value. The cookie storage will be updated, too.
 * @param key Name of the setting. Shall be string by convention.
 * @param value Value to store
 **/
t29.prefs.set = function(key, value) {
	t29.prefs._store[key] = value;
	$.cookie(t29.prefs.conf.cookie_name, JSON.stringify(t29.prefs._store), t29.prefs.cookie_options);
	//log("new prefs: "+$.cookie(t29.prefs.conf.cookie_name));
};

t29.prefs.del = function() {
	// be nice and kill the cookie
	log("Delete called but not created yet");
	//$.cookie(t29.prefs.conf.cookie_name, null, t29.prefs.cookie_options);
};

/*!
 * jQuery Cookie Plugin
 * https://github.com/carhartl/jquery-cookie
 *
 * Copyright 2011, Klaus Hartl
 * Dual licensed under the MIT or GPL Version 2 licenses.
 * http://www.opensource.org/licenses/mit-license.php
 * http://www.opensource.org/licenses/GPL-2.0
 */
(function($) {
    $.cookie = function(key, value, options) {

        // key and at least value given, set cookie...
        if (arguments.length > 1 && (!/Object/.test(Object.prototype.toString.call(value)) || value === null || value === undefined)) {
            options = $.extend({}, $.cookie.defaults, options);

            if (value === null || value === undefined) {
                options.expires = -1;
            }

            if (typeof options.expires === 'number') {
                var days = options.expires, t = options.expires = new Date();
                t.setDate(t.getDate() + days);
            }

            value = String(value);

            return (document.cookie = [
                encodeURIComponent(key), '=', options.raw ? value : encodeURIComponent(value),
                options.expires ? '; expires=' + options.expires.toUTCString() : '', // use expires attribute, max-age is not supported by IE
                options.path    ? '; path=' + options.path : '',
                options.domain  ? '; domain=' + options.domain : '',
                options.secure  ? '; secure' : ''
            ].join(''));
        }

        // key and possibly options given, get cookie...
        options = value || $.cookie.defaults || {};
        var decode = options.raw ? function(s) { return s; } : decodeURIComponent;

        var cookies = document.cookie.split('; ');
        for (var i = 0, parts; (parts = cookies[i] && cookies[i].split('=')); i++) {
            if (decode(parts.shift()) === key) {
              return decode(parts.join('='));
            }
        }
        return null;
    };

    $.cookie.defaults = {};

})(jQuery);