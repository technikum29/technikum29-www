/**
 * technikum29.de fresh/screen-Design-Unterscheidung
 * Dieses JavaScript wird seit v5.7 von allen IEs der Version 5.x geladen.
 * Diese stellen damit automatisch* auf das alte screen.css um, da sie das
 * neue fresh.css nicht darstellen koennen (transparente pngs, kaputtes boxmodel,
 * etc. pp). Übrigens sieht es im IE5.5 gar nicht so schlimm aus.
 * Nur IE5.0 braucht wirklich das alte Design. Trotzdem kriegen es jetzt
 * alle IE5er. Einfach mal so aus Prinzip. Denn, ich zitiere aus
 * /shared/css/fresh-iefixing.css:
 * 
** Man beachte die aktuellen Statistiken, hier aus April/Mai/Juni 2007:
** 
** 40.60%  Gecko-Engine (z.B. Firefox) und KHTML (Konqueror, Safari)
** 31.90%  Internet Explorer 6
** 16.50%  Internet Explorer 7
**  3.39%  Opera
**  1.01%  Internet Explorer 5
**  1.85%  Bots (z.B. Suchmaschinen)
 *
 * Na, also für gerade mal 1% aller Homepagebesucher dieses folgende Script
 * hier. Ich will die IE5-Benutzer an der Stelle gar nicht mehr beschimpfen,
 * denn wer einen fast 10 jahre alten Browser benutzt und meint, damit heute
 * noch Webseiten anschauen zu wollen, dem ist eh nicht mehr zu helfen.
 *
 * Warum dann dieses Script? Die Zahlen da oben waren mir echt neu (sie sind
 * vom eigenen modularen Logfileanalsyseprogramm). Monatelang glaubte ich dem,
 * was der Webalizer als Auswertung gegeben hat:
 *
 * 50.31%  Internet Explorer (6.0 vermute ich mal)
 * 41.38%  Internet Explorer 5.0
 * 2.71%   Opera
 * 1.11%   Netscape 
 *
 * Diese Statistiken lügen, dass sich die Balken biegen. Gesteigerten Wert wird
 * auf den IE5 jetzt nur noch gelegt, weil er, glaub ich, noch auf einigen
 * Windows 2000-Computern hier im Haus installiert ist. Na und die können sich
 * jetzt sogar noch exquisit am alten design erfreuen.
 *
 * Ginge es nach mir, dann könnten die 30% IE6-Benutzer mit ihrer Dummheit auch
 * mit dem alten Design bestraft werden, aber das soll wohl nicht so sein. Naja,
 * 30% sind ja auch nicht viel. Tendenz fallend.
 *
 **/

function setActiveStyleSheet(title) {
   var i, a, main;
   for(i=0; (a = document.getElementsByTagName("link")[i]); i++) {
     if(a.getAttribute("rel").indexOf("style") != -1
        && a.getAttribute("title")) {
       a.disabled = true;
       if(a.getAttribute("title") == title) a.disabled = false; 
       /*alert(a.getAttribute("title") + " ["+a.getAttribute("href")+"] wurde "+(a.disabled?"deaktiviert":"aktiviert"));*/
     }
   }
}

setActiveStyleSheet("technikum29 old");