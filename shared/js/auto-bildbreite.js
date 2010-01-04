/*
 * technikum29.de | javscripts: auto-bildbreite
 * $Id$
 *
 * Zur Ergaenzung des Bildbox-Konzepts wurde Januar 2010 die automatische
 * Erkennung der Breiten der Bilder hinzugefuegt. Funktionsweise:
 *
 * <div class="box center auto-bildbreite">
 *   <img ... />
 *   <p class="bildtext"> bla bla bla </p>
 * </div>
 * 
 * Dieses Script parst alle divs und setzt die Breite der boxen auf die Breite
 * des ersten enthaltenen Bildes.
 *
 * (c) 2010 Sven Koeppel
 * Released under the public domain.
 */
 
var t29_auto_bildbreite_class = /\bauto-bildbreite\b/i;
 
var t29_auto_bildbreite_old_onload = window.onload;
window.onload = function() {
	if (typeof(t29_auto_bildbreite_old_onload)=="function")
		t29_auto_bildbreite_old_onload();

	if( /msie|MSIE 6/.test(navigator.userAgent) ) {
		// is IE6 (we silently ignore the even older IE5)
		return;
	}
	
	// get all divs
	var divs = document.getElementsByTagName('div');
	var divNum;
	
	for(var i = 0; i < divs.length; i++) {
		if(!divs[i].getAttribute("class"))
			continue; // skip this one

		if(divs[i].getAttribute("class").search(t29_auto_bildbreite_class) != -1) {
			// found class
			var imgs = divs[i].getElementsByTagName("img");
			if(imgs[0]) {
				// has at least one img
				var width = imgs[0].width;
				var old_style = divs[i].getAttribute("style");
				if(!old_style) old_style = "";
				divs[i].setAttribute("style", "width: " + width + "px; " + old_style);
			}
		} // if found class
	} // for
};