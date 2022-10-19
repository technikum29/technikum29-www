/**
 * Piwik-Statistiken
 * Asynchron geladen, siehe
 * http://piwik.org/docs/javascript-tracking/
 *
 **/
 
if(!t29) window.t29 = {}; // the t29 namespace
t29.piwik = {}; // logs namespace
var _paq = _paq || []; // piwik asynchronous queries - must be global

t29.piwik.setup = function() {
	var u = t29.msg.get('js-piwik-url-prefix');
	_paq.push(['setSiteId', t29.msg.get('js-piwik-siteid')]);
	_paq.push(['setTrackerUrl', u+'piwik.php']);
	_paq.push(['trackPageView']);
	_paq.push(['enableLinkTracking']);
	var d=document,
	    g=d.createElement('script'),
	    s=d.getElementsByTagName('script')[0];
	g.type='text/javascript';
	g.defer=true;
	g.async=true;
	g.src=u+'piwik.js';
	s.parentNode.insertBefore(g,s);
}