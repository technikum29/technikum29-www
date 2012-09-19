<?php
	$seiten_id = 'news';
	$version = '$Id$';
	$titel = 'Was gibt es Neues?';
	
	$neues_menu = <<< MENU
- titel: "Neues Website-Design"
  text: "Neu gestaltete Website"
  link: "#September_2012"

- titel: "Gamma55"
  text: "Ein neuer Rechner im Museum"
  link: "#Juli_2012"
  
- titel: "Softwarefund"
  text: "Unglaublicher Softwarefund für die Univac9200"
  link: "#April_2012"

- titel: "Kunst im Museum"
  text: ""
  link: "#März_2012"

MENU;
// ende der menue-Eintraege

	if(!require("../lib/technikum29.php")) return;
?>
    <h2>Was gibt es Neues?</h2>
	
	
	<p>Damit alle die öfters unsere Homepage besuchen einen schnellen Einblick in Neuigkeiten und Erweiterungen haben, wurde diese Rubrik eingeführt. Das Neueste steht ganz oben.</p>

<ul class="news-feed">
<li><h3>September 2012</h3>
Sie besuchen gerade unsere völlig neu überarbeitete Website. Bessere Gliederung, bequemere Navigation und mehr Übersicht sind die wichtigsten Neuerungen.<br>
Bitte benachrichtigen Sie uns, falls Sie auf Fehler stoßen.</li>

<li><h3>Juli 2012</h3>
<div class="box left">

<img src="/shared/photos/rechnertechnik/bull-ge55.jpg" width="375" height="195"/>

</div> 
<div class="clear"></div>
<p>Ein "neuer" Computer aus der Lochkartenära ist im technikum29 angekommen: BULL Gamma 55 (GE-55). Eine schöne Anlage aus den Jahren 1966/67, die in der Schweiz 26 Jahre eingelagert war. Da die EDV-Anlage vollständig dokumentiert ist werden wir auch diese wieder zur Funktion bringen. 
Siehe <a href="/de/rechnertechnik/gamma55.php"><b>Gamma 55</b></a>

</p><br>

<li><h3>April 2012</h3>
<div class="box left">

<img src="/shared/photos/rechnertechnik/univac/lochkarten.jpg" width="350" height="87"/>
</div> 
Unglaublicher Software-Fund für unsere UNIVAC 9200.
<a href="/de/rechnertechnik/univac9200.php#lochkarten"><b>Lesen Sie hier:</b></a>
<div class="clear"></div></li>

<li><h3>März 2012</h3><div class="box left">
 <img src="/shared/photos/start/leander.jpg" alt="Leander Schwarzer" width="303" height="231"> </div>
 Künstler arbeiten im technikum29. Leander Schwarzer beim Stanzen von Lochkarten.
<a href="/de/sonstiges.php#leander"><b>Zum Artikel</b></a>
 <div class="clear"></div></li>



	
	</ul>
	
	