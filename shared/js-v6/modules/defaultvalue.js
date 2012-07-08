/**
 * t29v6: defaultvalue
 *
 * There is also a jquery plugin which can do this, but I wrote
 * my code before. It does exactly what it is supposed to do in
 * a very short way:
 *
 *  <input data-defaultvalue="Search" value="">
 *
 * Now has the same feature like a HTML5 <input placeholder="">
 *
 * 2012 Sven Koeppel, Public Domain
 *
 **/

if(!t29) window.t29 = {}; // the t29 namespace

t29.defaultvalue = {};
t29.defaultvalue.setup = function() {
	// JS default value
	$("input[data-defaultvalue]").each(function(){
		var t=$(this); var d=t.data("defaultvalue"); t.val(d).addClass("defaultvalue"); // init
		t.focus(function(){ if(t.val()==d) t.val("").toggleClass("defaultvalue no-defaultvalue"); });
		t.blur(function(){ if(/^\s*$/.test(t.val())) t.val(d).toggleClass("defaultvalue no-defaultvalue"); });
	});
	// button check click; quick and dirty! Nur fuer Testseite.
	$("input.button").click(function(){
		if($("input.text").hasClass("defaultvalue")) {i.focus();return false;}
	});
};
