/**
 * Interlanguage specific hints
 *
 * Blendet einen Hinweis ein, dass die Seite auch in der Muttersprache des
 * Benutzers existiert, falls er extern reinkam, da die Sprachwahl sonst doch
 * recht versteckt ist.
 *
 * Kuemmert sich ausserdem darum, hinzuweisen, dass eine Seite nicht in anderer Sprache existiert
 * 
 **/


if(!t29) window.t29 = {}; // the t29 namespace
t29.interlang = {};

t29.interlang.get_prefered_language = function() {
	// TODO: Really get user language from HTTP header here, which is
	// not that easy from pure JavaScript
	return "en";
}

t29.interlang.alternate_language_title = function () {
	// returns "false" if there is no alternate language present
	// and the name of that page if it is present
	return (l=$("link[rel=alternate]")).length ? l.attr('title') : false;
}

t29.interlang.setup_interlang_hint = function() {
	// Noch deaktiviert, da get_prefered_language() nocht nicht implementiert ist
	return;
	
	
	// User doesn't see yet his preferred language
	not_yet_preferred_lang = t29.interlang.get_prefered_language() != t29.conf.lang;
	// And there is an alternate title
	alt_title = t29.interlang.alternate_language_title();
	// and the user is *not* coming from any technikum29 website
	// (which covers cases like a manual language switch)
	if(document.referrer)
		is_from_t29 = /technikum29|heribert|localhost/.test(document.referrer);
	else	is_from_t29 = false;
	
	is_from_t29 = false;
	
	if(not_yet_preferred_lang && alt_title && !is_from_t29) {
		// show a nice info box which offers to change languages.
		t29.log.info({
			heading: t29.msg.get('js-interlang-notify-heading'),
			text: t29.msg.get('js-interlang-notify-text').replace('%s', alt_title),
			dismissable: true,
			//dismissable_callback
		});
	}
}

t29.interlang.catch_nonexistent_interlang = function() {
	$("nav.top li.nonexistent a").click(function() {
		// seiteninhalt per ajax kriegen
		$.get(this.href + "&ajax", function(data) {
			t29.log.notice({
				//heading: $("h2", content).detach().html(),
				text: data,
				dismissable: true
			});
		});
		
		// link nicht folgen
		return false;
	});
}

t29.interlang.setup = function() {
	t29.interlang.setup_interlang_hint();
	t29.interlang.catch_nonexistent_interlang();
}