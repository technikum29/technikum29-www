stoplabel = {"de": "Animation stoppen", "en": "stop animation"};
startlabel = {"de": "Animation starten", "en": "start animation"};
repeatlabel = {"de": "Animation wiederholen", "en": "repeat animation"};

// script wird zur laufzeit von pagescripts.js eingebunden,
// da ist t29 schon definiert
lang = t29.conf.lang;

var slider = new Array();
slider[1] = new Object();
slider[1].min = 0;
slider[1].max = 100;
slider[1].val = 0;
slider[1].playerStepTimeout = 100; // ms
slider[1].playerStepDistance = 1.6; // in min/max/val-Einheiten!
slider[1].playerStopLabel = stoplabel[lang];
slider[1].playerStartLabel = startlabel[lang];
slider[1].playerRepeatLabel = repeatlabel[lang];
slider[1].playerAutoReverse = false;
slider[1].playerAutoStart = true;
slider[1].playerRepeatFromMin = true;
slider[1].onchange = setTransparency;


function setTransparency(val, blubb) {
	val = val / 100; // normierung auf [0,1]
	// bereits ab 0.75 ist der Kasten nicht mehr zu sehen
	setOpacity("zu",            -val/0.75 + 1);
	// ab 0.75 erscheint die Beschriftung, hoch 3 potenziert
	setOpacity("beschriftung",  Math.pow(val - 0.75, 3)*64 );
	// alternativ ein linearer Zuwachs:
	//setOpacity("beschriftung",  (val-0.75)*4  );
	//document.getElementById("zu").style.opacity = 1-val;
	//document.getElementById("beschriftung").style.opacity = val / 2;
}

function setOpacity(id, value) {
	if(value >= 1) value = 1.0;
	if(value <= 0) value = 0;
	document.getElementById(id).style.opacity = value;
	if(document.all) {
		// IE 7 kann (immer!) noch kein opacity, daher ein
		// haessliches workaround:
		document.getElementById(id).style.setAttribute("filter", "alpha(opacity="+Math.round(100*value)+")", 0);
		if(value == 1.0)
			// der filter zerschiesst alpha-Transparenz -- noch ein workaround
			document.getElementById(id).style.removeAttribute("filter", 0);
	}
}