/**
 * technikum29 OpenStreetMapss / Leaflet maps widget
 * Successor of the Google Maps widget from 2009-2018.
 * Installed by Sven at 2019-01-12
 * 
 * Requires the Leaflet scripts/css available, cf. https://leafletjs.com/download.html
 **/

var t29_gmaps_content = {
	"de": "<b>technikum29</b><br/>Am Flachsland 29<br/>Kelkheim/Taunus"
			+"<br/><a href='http://maps.google.com/maps?&daddr=Am+Flachsland+29,+Kelkheim&layer=&sll=50.092393,10.195313&sspn=38.370164,57.392578&ie=UTF8&z=16&om=1&iwloc=addr'>Route berechnen...</a>",
	"en": "<b>technikum29</b><br/>Close to Frankfurt/Main<br/>Germany"
};


var t29_maps_center = {
	// map.setCenter(new GLatLng( .. , .. ), .. )
	// so [     xpos/lat        ,      ypos        ]
	"de": [50.08005710712455, 8.510284423828125],
	"en": [51.6452940493054,  8.173828125      ]
};

var t29_maps_zoom = { "de": 11, "en": 5 };

// Position of museum
var t29_maps_pos = [ 50.14522,8.44604 ];


function t29_gmaps_detect_page_language() {
	// try to detect page language by heading
	return t29.conf.lang;
}

$(function() {
	var lang = t29_gmaps_detect_page_language();
	var map = L.map('map').setView(t29_maps_center[lang], t29_maps_zoom[lang]);
	if(t29) t29.map = map; // save back for debugging

	L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
	    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
	}).addTo(map);

	L.marker(t29_maps_pos).addTo(map)
	    .bindPopup(t29_gmaps_content[lang])
	    .openPopup();
});