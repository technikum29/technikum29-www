/**
 * Heuristischer JavaScript-Counter fuer technikum29.de, v5.8,
 * selbstgeschrieben.
 * (Ziffern von http://www.digitmania.holowww.com/odometer.html)
 *
 * Auf Wunsch von Heribert, 10.07.2009
 * 
 * Sven Koeppel
 **/

// Allgemeine... Parameter:

// bei stand wird die Bildkomposition eingesetzt
var t29_counter_text = function(stand){
	var s = "<p>Sie sind der</p>";
	s += "<p class='center'>"+stand+"</p>";
	s += "<p>Besucher dieser Homepage</p>";
	return s;
}

// Zeug zum zurueckgeben fuer eine Zahl
var t29_counter_image = function(digit) {
	// variante 1: Per CSS holen (elegant)
	//counterBox += "<span class='digit"+s+"'>"+s+"</span>";

	// variante 2: selbst composen (schnell)
	return "<img src='/shared/js/counter-digits/"+digit+"A.GIF' alt='"+digit+"' />";
}

var t29_counter_get_value = function() {
	// Anfangswerte, von denen hochgerechnet wird
	var seed = 142735; // geschaetzt am 11.07.09...
	var seed_date = new Date(2009, 6, 8); // achtung, zaehlt ab 0=Januar, 8=9. tag
	var hits_per_day = 200;

	// Sehr simple Annahme: Linear verteilt hits_per_day Benutzer pro
	// Tag dazu... also dann einfach:
	var now = new Date();
	var one_day = 60*60*24*1000; // Millisekunden an einem Tag

	// Time.getTime() gibt ms seit der Epoche zurueck
	var days_since_seed = Math.max( /* min: falls seed_date in Zukunft */
		( now.getTime() - seed_date.getTime() ) / one_day,
		0
	);

	// und hier die simple interpolation, als lineare Funktion
	return Math.round(seed + hits_per_day * days_since_seed);
}

// hier beginnt dann das richtige Programm:

// unobstructives onload-Anheften
var t29_counter_old_onload = window.onload;
window.onload = function(){
	if (typeof(t29_counter_old_onload)=="function")
		t29_counter_old_onload();

	// print data
	counter_text = "";
	snumber = t29_counter_get_value().toString();
	for(x = 0; x < snumber.length; x++) {
		s = snumber.charAt(x);
		counter_text += t29_counter_image(s);
	}
	
	counterBox = t29_counter_text(counter_text);

	// inject counterBox
	footnode_id = 'sidebar-footnote';
	if( document.getElementById(footnode_id) ) {
		document.getElementById(footnode_id).innerHTML += counterBox;
	} else {
		contentNode = document.getElementById('content');
		contentNode.innerHTML += "<div id='"+footnode_id+"'>"+counterBox+"</div>";
	}
};