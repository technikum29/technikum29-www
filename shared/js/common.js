/**
 * technikum29.de | javascript: Page specific scripts
 *
 * common.js ist das gleiche wie common.css, nur fuer Javascript: Die Auslagerung
 * von seitenspezifischen Javascript-Spielereien in eine zentrale Datei mit dem
 * Vorteil, dass Redundanzen zwischen de/en wefallen, gegenueber dem Nachteil einer
 * Mehrarbeit fuer den Browser bei jedem Ladezyklus, der bei JavaScript natuerlich
 * deutlich heftiger ausfaellt als bei CSS, weswegen dieses Script nur fuer KURZE
 * seitenspezifische Scripts ist. Groessere Dinge (etwa > 20 Zeilen jQuery-Code)
 * muessen in eine eigene JavaScript-Datei ausgelagert werden.
 *
 * Derzeit gibt es etwa groessere seitenspezifische Scripte fuer
 *  - telefunken_t40w.shtm: Slider-Extraseite (kein jQuery)
 *  - impressum.shtm: Google Maps API (gmaps-impressum.js)
 *
 * Funktionsweise:
 *  a) Seitenname (SSI "location"-Variable) entnehmen
 *  b) t29.page.seitenname bzw. t29.page["seitenname-wenn-mit-bindestrichen"]
 *     als Funktion anlegen. Diese Funktion wird dann automatisch beim Laden dieser
 *     einen Seite aufgerufen.
 *
 * (c) Sven Koeppel 2010
 * $Id$
 */
 

if(!t29) t29 = {}; // defined in tools.js
t29.page = {};     // all page functions

t29.page.faxtechnik = function() {
	// Hellfax Schachteloeffnung
	$("#hellfax-zu, #hellfax-offen").css("cursor", "pointer");
	$("#hellfax-offen").hide();
	
	$("#hellfax-zu").click(function(){     $(this).hide(); $("#hellfax-offen").show(); });
	$("#hellfax-offen").click(function(){  $(this).hide(); $("#hellfax-zu").show();    });
}

t29.page.efzet = function() {
	// Efzet-Extraseite: Bildergallerie
	$(".thumbnails a").click(function(){
		$("#gross")[0].src = $("img", this)[0].src;
		$(".thumbnails a").removeClass("active");
		$(this).addClass("active");
		return false;
	});
}

t29.common = function(){
	// Alle Seiten ueberpruefen und ausfuehren, wenn aktuell auf dieser Seite
	for(var pagename in t29.page) {
		if($("body div:first").hasClass(pagename))
			t29.page[pagename]();
	}
};

// to execute, run:
$(t29.common);