<?php
	$seiten_id = 'news';
	$version = '$Id$';
	$titel = 'Was gibt es Neues?';
	
	$neues_menu = <<< MENU

- titel: "Unterstützung von Schulen"
  text: "Das technikum29-Team unterstützt Schulprojekte"
  link: "#April_2012"
  bild: "/shared/img-v6/topnav-neues1.jpg"
  
- titel: "Neue Anlage: LPG-21"
  text: "Ein neuer seltener Rechner im Museum"
  link: "#März_2012"
  bild: "/shared/img-v6/topnav-neues2.jpg"

- titel: "Neue Anlage: Nova 2"
  text: "Wissenschaftlicher Rechner ab 1969"
  link: "#Februar_2012"
  bild: "/shared/img-v6/topnav-neues3.jpg"

MENU;
// ende der menue-Eintraege

	if(!require("../lib/technikum29.php")) return;
?>
    <h2>Was gibt es Neues?</h2>
	
	
	<p>Damit alle die öfters unsere Homepage besuchen einen schnellen Einblick in Neuigkeiten und Erweiterungen haben, wurde diese Rubrik eingeführt. Das Neueste steht ganz oben.</p>

<ul class="news-feed">

<li><h3>April 2012</h3>
<div class="box left">

<img src="/shared/photos/rechnertechnik/univac/lochkarten.jpg" width="350" height="87"/>
</div> 
Unglaublicher Software-Fund für unsere UNIVAC 9200.
<a href="/de/rechnertechnik/univac9200.shtm#lochkarten"><b>Lesen Sie hier:</b></a>
<div class="clear"></div></li>

<li><h3>März 2012</h3><div class="box left">
 <img src="/shared/photos/start/leander.jpg" alt="Leander Schwarzer" width="303" height="231" </div>
 Künstler arbeiten im technikum29. Leander Schwarzer beim Stanzen von Lochkarten.
<a href="/de/sonstiges.shtm#leander"><b>Zum Artikel</b></a>
 <div class="clear"></div></li>

 
<li><h3>Februar 2012</h3>
<div class="box left">
<img src="/shared/photos/kommunikationstechnik/arduino1.jpg" width="303" height="172"/>
</div> 
Das technikum29-Team unterstützt Schulprojekte: Schauen Sie hier:
<a href="/de/lernprojekte/#aes"><b>Lernprojekte</b></a>
<div class="clear"></div></li>







	
	</ul>
	
	