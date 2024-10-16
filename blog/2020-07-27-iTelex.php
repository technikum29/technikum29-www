<?php
	$blog_title = "Unsere Fernschreiber sind ans Telex-Netzwerk angebunden";
	$blog_title_kurz = "Installation eines i-Telex-Systems im technikum29";
	$blog_author = "Sven";
	$blog_date = "2020-07-27";

	require "blog.php";
	
	print_blog_title();
?>

<!-- Todo: Use blog system for authorship... -->
<p><em>Folgender Gastbeitrag wurde von Detlef G. verfasst:</em>

<p>
Am 25.07. traf sich mal wieder die Fernschreib-Gruppe (Franz, Jochen und Detlef) im
technikum29, um die Instandsetzung des Siemens T37, des Lorenz Lo15 und der zugehörigen
Fernschaltgeräte (Wahleinrichtungen) abzuschließen.

<p>
Damit waren nun diese beiden Fernschreiber, die bisher über eine improvisierte Standleitung
verbunden waren, bereit für den Anschluss an das
<a href="https://www.i-telex.net/" class="go">i-Telex-System</a>. Das i-Telex funktioniert
wie eine Telefonanlage für Fernschreiber und simuliert eine Fernschreibvermittlungsstelle.
Die Bedienung und die Anwahl mit Wählscheibe funktionieren genau so, wie es lange Zeit in
den richtigen Fernschreibnetzen Standard war. Über das Internet sind viele TeilnehmerInnen
mit ihren Fernschreibern angebunden, es gibt ein
<a href="http://tlnserv3.teleprinter.net/">Telefonbuch</a> in dem nun auch zwei der
technikum29-Fernschreibern mit den Telex-Nummern <em>622936</em> und
<em>4188848</em> aufgelistet sind (Unsere Fernschreiber sind aber nicht immer erreichbar,
sondern nur wenn wir sie anmachen).

<p>
Da es mit dem i-Telex möglich ist, mehr als zwei Fernschreiber anzuschließen, wurde das
lokale Fernschreibnetz gleich noch um einen bereits zuvor instand gesetzten Siemens T68
Streifenschreiber ergänzt.

<p>
Zusätzlich zu den Wählverbindungen zwischen den lokalen Fernschreibern ermöglicht das i-
Telex über das Internet die Anwahl von Fernschreibern des i-Telex-Netzwerkes, an das
bereits weltweit über 100 Fernschreib-Enthusiasten mit mehr als 300 Geräten angeschlossen
sind.
<br>
Während zukünftiger Führungen werden die Fernschreiber des technikum29 auch von außen
über das i-Telex-Netzwerk erreichbar sein.
<br>
Für die kommenden Termine ist geplant, nach und nach weitere Kommunikationsgeräte, wie
die Hell-Schreiber und Hell-Faxgeräte und die automatischen Morsesender und -empfänger in
Betrieb zunehmen. Und der eine oder andere seltene Fernschreiber steht ebenfalls auf der
Todo-Liste. 

<div class="box center auto-bildbreite">
   <a href="/shared/photos/blog/2020-07-27-iTelex.jpg" class="popup">
      <img src="/shared/photos/blog/2020-07-27-iTelex.jpg" width="500">
   </a>
   <p class="bildtext">
     Der Vermittlungskasten im i-Telex-System hat nur noch die Größe eines Schuhkartons.
     Hierin befinden sich auf Baugruppenträger (Frontpanels im 3D-Druck hergestellt)
     von links nach rechts der Internet-Uplink sowie bis zu vier Anschlüsse für
     Fernschreiber sowie die Spannungsversorgung, die auch die 80 Volt
     Linienspannung erzeugt.
   </p>
</div>



<?php print_author_info(); ?>
