/**
 * technikum29.de | Google Maps widget for imprint page
 *
 * Dieses JavaScript wird auf den Impressumsseiten eingebunden, um
 * per Google Maps API diese einzubinden. Dazu ist noch ein kurzes
 * Schnipsel HTML in der Form <div id="map">...</div> noetig,
 * ausserdem muss dieses JavaScript eingebunden werden:
 * <script src="http://maps.google.com/maps?file=api&amp;v=2&amp;sensor=false&amp;key=ABQIAAAAraTKZ5cINardZ8ITNVssKhRcOoEBtCgYLJRQznXYEV8m1M3fRRRT9wMSvFwhyo62fD3KyiwQxe5ruw" type="text/javascript"></script>
 *
 * Als Konstanten koennen in diesem Script bearbeitet werden:
 *  * Der Google Maps API Key
 *  * Der Inhalt der Sprechblasen an der Museumsposition
 *    fuer die jeweilige Sprache
 *  * Die Ausgansposition der Karte fuer die jeweilige Sprache
 *
 * 2009 Sven Koeppel $Id$
 * Released under the public domain
 **/

// if not on this domain => deactivate script since google
// will print out error otherwise
var t29_gmaps_valid_domain = "www.technikum29.de";
 
var t29_gmaps_content = {
	"de": "<b>technikum29</b><br/>Am Flachsland 29<br/>Kelkheim/Taunus"
			+"<br/><a href='http://maps.google.com/maps?&daddr=Am+Flachsland+29,+Kelkheim&layer=&sll=50.092393,10.195313&sspn=38.370164,57.392578&ie=UTF8&z=16&om=1&iwloc=addr'>Route berechnen...</a>",
	"en": "<b>technikum29</b><br/>Close to Frankfurt/Main<br/>Germany"
};

var t29_gmaps_center = {
	// map.setCenter(new GLatLng( .. , .. ), .. )
	// so [     xpos        ,      ypos        , zoom]
	"de": [50.12101835522268, 8.510284423828125, 11],
	"en": [51.6452940493054,  8.173828125,       5]
};

function t29_gmaps_detect_page_language() {
	// try to detect page language by heading
	return t29.conf.lang;
}

// das schnipsel hier geht unterm IE sowieso nicht:
function t29_gmaps_include_once(src) {
    // hole alle vorhandenen Script-Elemente
    var scripts = document.getElementsByTagName('script');

    if(scripts) {
        for(var k=0; k<scripts.length; k++) {
			// script schon geladen, abbrechen
            if(scripts[k].src == src)
              return;
		}
	}

    // script noch nicht geladen, binde es ein
    var script = document.createElement('script');
    script.src = src;
    script.type = 'text/javascript';
    (document.getElementsByTagName('HEAD')[0] || document.body).appendChild(script);
}

// damit verweigert Google den Dienst (unter localhost gehts aber...)
//t29_gmaps_include_once("http://maps.google.com/maps?file=api&amp;v=2&amp;sensor=false&amp;key="+t29_gmaps_key);

var gmap;
$(function() {
	var lang = t29_gmaps_detect_page_language();

	if(location.hostname != t29_gmaps_valid_domain) {
		document.getElementById("map").getElementsByTagName("div")[0].firstChild.data = 
			"Karte kann nur auf www.technikum29.de geladen werden, nicht auf anderen Kopien der Homepage!";
	}

	if(GBrowserIsCompatible()) {
		var map = new GMap2(document.getElementById("map"));
		gmap = map;
		map.setUIToDefault();

		// Position vom Museum
		var t29_pos = new GLatLng(50.145129,8.445667);

		// Uebersichtsfensterchen rechts unten, will Heribert nicht
		//map.addControl(new GOverviewMapControl(new GSize(200,150)));
		
		// Zentrum der Karte, kann mit Firebug (gmap.getCenter(), gmap.getZoom())
		// nach rumschieben bestimmt werden.
		map.setCenter(new GLatLng(t29_gmaps_center[lang][0], t29_gmaps_center[lang][1]), t29_gmaps_center[lang][2]);
		
		//map.setMapType(G_HYBRID_MAP);
		map.enableContinuousZoom();
		var marker = new GMarker(t29_pos);
		map.addOverlay(marker);
		
		// fenster anzeigen
		GEvent.addListener(marker, "click", function() {
			marker.openInfoWindowHtml(t29_gmaps_content[lang]);
		});
		marker.openInfoWindowHtml(t29_gmaps_content[lang]);
	}
});

