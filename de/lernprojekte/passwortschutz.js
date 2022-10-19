/**
 * Irgendwo ist Quick & Dirty doch auch toll ;-)
 * Zusammen zu laden mit /srv/js/http-auth.js gibt das hier einen billig anmutenden
 * Javascript-Passwortschutz, hinter dem sich aber ein ordentlicher HTTP-Authentifikationsschutz
 * verbirgt ;-)
 *
 **/

function passwort(a) {
	var name = "\""+a.text+"\"";
	var url = a.target;
	var help_url = "fehler.shtm?"+a.text;

	var pwd = prompt(
		"Bitte geben sie das Passwort für das Projekt "+name+
		" ein.\nWenn das Projekt nicht passwortgeschützt " +
		"ist, dann klicken sie einfach auf OK.");
	var prompt_text;
	if(!pwd) {
		// Benutzer hat abgebrochen
		return false;
	} else if(pwd == "" && !login(url, a.text.toLowerCase(), pwd)) {
		// Benutzer hat leeres Passwort eingegeben, und Projekt war doch
		// passwortgeschützt
		prompt_text = "Leider ist das Projekt "+name+" nicht öffentlich, "+
			"d.h. ein Passwort für den Zugriff wird gefordert.\n" +
			"Klicken sie auf Abbrechen, falls sie weitere Hilfe benötigen "+
			"oder geben sie das richtige Passwort ein und klicken sie auf OK.";
	} else if(!login(url, a.text.toLowerCase(), pwd)) {
		// Projekt war passwortgeschützt, Benutzer hat falsches Passwort eingegeben.
		prompt_text = "Das eingegebene Passwort für das Projekt "+name+" stimmt "+
			"leider nicht.\nGeben sie das richtige Passwort ein oder klicken "+
			"sie auf Abbrechen, falls sie weitere Hilfe benötigen.";
	}
	// Wer hier ankommt, will Passwort nochmal eingeben.
	for(var x=0;;x++) {
		pwd = prompt(prompt_text);

		if(pwd == "") {
			// Benutzer will zu Hilfeseite
			location.href = help_url;
		} else if(!pwd) {
			// Benutzer bricht ab (wie auch immer)
			return false;
		} else if(!login(url, a.text.toLowerCase(), pwd)) {
			// Benutzer hat immernoch falsches Passwort
			continue;
		} else {
			// Benutzer hat gar nichts und so.
			return true;
		}
	} // for
} // function

window.onload = function() {
	if(getHTTPObject()) { // can do such things
		var projekte = document.getElementsByTagName("th");
		for(var th=0; th < projekte.length; th++) {
			if(projekte[th].firstChild.nodeName == 'A')
				projekte[th].firstChild.setAttribute("onclick", "return passwort(this);");
		} // for th
	}
}; // onload