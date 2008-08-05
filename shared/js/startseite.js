/*
 * technikum29.de Startseitenscript (seit v5.5.6)
 *
 * Mit diesem Script kann man die Sprach"boxen"
 * zusätzlich anklicken (Seite funktioniert einwandfrei
 * auch ohne JavaScript)
 *
 **/

 var lang = new Array("de", "en");

 function initHovers() {
     // Handler für Sprachelemente einrichten (beim Laden)
     var le;
     for(var x=0; x < lang.length; x++) {
         le = document.getElementById(lang[x]);
         le.langcounter = x;
         le.onmouseover = highlightLanguage;
         le.onmouseout = blurLanguage;
         le.onclick = chooseLanguage;
     }
 }

 function highlightLanguage() {
     // mit der Maus über ein Sprachelement gefahren
     this.style.cursor = "pointer";
     this.style.border = "2px solid #7991b7";
     this.style.margin = "-2px";
     // etc. pp.
 }

 function blurLanguage() {
     // mit der Maus ein Sprachelement verlassen
     this.style.border = "none";
     this.style.margin = "0";
 }

 function chooseLanguage() {
     // mit der Maus auf ein Sprachelement geklickt
     document.location.href = "/"+lang[this.langcounter]+"/";
 }


 window.onload = initHovers;
