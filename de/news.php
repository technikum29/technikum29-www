<?php
	$seiten_id = 'news';
	$version = '$Id$';
	$titel = 'Was gibt es Neues?';
	
	$neues_menu = <<< MENU
	
- datum: "August 2014"
  titel: "Robotik-Kurs"
  untertitel: "für Kids von 11-13"
	
- datum: "Juli 2014"
  titel: "Dechiffriermaschine"
  untertitel: "Historischer 5-Bit Decoder"
	
- datum: "Juni 2014"
  titel: "Notizen zum Digitalen"
  untertitel: "IBM029 auf Reisen"
	
- datum: "Mai 2014"
  titel: "Neu: Peripherie der IBM1130"
  untertitel: "Lochstreifengeräte"
	
- datum: "Januar 2014"
  titel: "Neu: IBM 1130 Anlage"
  untertitel: "Eine neue Herausforderung"
  
- datum: Dezember 2013
  titel: "Neuzugang: Lochkartendoppler"
  untertitel: ""

- datum: September 2013
  titel: "Gamma 55 jetzt voll funktionsfähig!"
  untertitel: ""
  
	
MENU;
// ende der menue-Eintraege

	if(!require("../lib/news.php")) return; // keine verschachtelten Aufrufe
?>
    <h2>Was gibt es Neues?</h2>
	
	
	<p>Damit alle die öfters unsere Homepage besuchen einen schnellen Einblick in Neuigkeiten und Erweiterungen haben,
	wurde diese Rubrik eingeführt. Die Neuigkeiten können sie auch <a href="?format=rss" title="technikum29-Neuigkeiten abonnieren">als RSS-Feed abonnieren</a>.</p>

<ul class="news-feed news-ng">


<li><a href="/robotik">
<h3>August 2014</h3>
<img src="/robotik/robotik.jpg" width="153" height="115" />
Robotik-Ferienkurs für Kids zwischen 11 und 13 Jahren im technikum29.<br>
Hochinteressant und sehr lehrreich.
</a> 

</li>

<li><a href="/de/kommunikationstechnik/faxtechnik.php#decoder">
	<h3>Juli 2014</h3>
        <img src="/shared/photos/kommunikationstechnik/telegrafenalphabet.jpg" width="153" height="144" />
	Ein historischer 5-Bit-Zeichen-Decoder aus der Hochschule. Hier wird er als Dechiffriermaschine in unserem Experimental-Workshop eingesetzt.
</a></li>

<li><a href="http://www.kunst-stoff.fr/tresorraum/wir-die-iborgs/">
	<h3>Juni 2014</h3>
        <img src="/shared/photos/rechnertechnik/tuebingen.jpg" width="153" height="149" />
	Unser Lochkartenstanzer IBM029 war auf Reisen: In Tübingen wurde er als Rhythmusgerät und zur
        Einbindung in Kunstobjekte für das Event <em>Notizen zum Digitalen: Wir, die #iBorgs</em> verwendet.
	
</a></li>

<li><a href="/de/rechnertechnik/ibm1130.php#1130">
	<h3>Mai 2014</h3>
        <img src="/shared/photos/rechnertechnik/facit4000.jpg" width="352" height="137" />
	Peripherie der 1130: Facit-Lochstreifengeräte.
</a></li>

<li><a href="/de/rechnertechnik/ibm1130.php#1130">
	<h3>Januar 2014</h3>
        <img src="/shared/photos/rechnertechnik/ibm-1130.jpg" alt="IBM 1130" width="225" height="194" />
	IBM 1130, eine neue Herausforderung.
</a></li>



<li><a href="/de/rechnertechnik/lochkarten-edv.php#doppler">
	<h3>Dezember 2013</h3>
        <img src="/shared/photos/rechnertechnik/ibm-514.jpg" alt="IBM 514" width="225" height="195" />
	Neuzugang: Ein schöner Lochkartendoppler aus der Frühzeit der EDV.
</a></li>
	

<li><a href="/de/rechnertechnik/gamma55.php#ge55">
	<h3>September 2013</h3>
	<img src="/shared/photos/rechnertechnik/leser617.jpg" alt="Lochkartenleser" width="241" height="149" /><br><br>
	BULL GAMMA 55 läuft! Ein historischer Moment.
</a></li>
</ul>

