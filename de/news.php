<?php
	$seiten_id = 'news';
	$version = '$Id$';
	$titel = 'Was gibt es Neues?';
	
	$neues_menu = <<< MENU
	
- titel: "Neu: Peripherie der IBM1130"
  text: "Lochstreifengeräte"
  link: "#Mai_2014"	
	
- titel: "Neu: IBM 1130 Anlage"
  text: "Eine neue Herausforderung"
  link: "#Januar_2014"
  
- titel: "Neuzugang: Lochkartendoppler"
  text: ""
  link: "#Dezember_2013"

- titel: "Gamma 55 jetzt voll funktionsfähig!"
  text: ""
  link: "#September_2013"
  
	
MENU;
// ende der menue-Eintraege

	if(!require("../lib/news.php")) return; // keine verschachtelten Aufrufe
?>
    <h2>Was gibt es Neues?</h2>
	
	
	<p>Damit alle die öfters unsere Homepage besuchen einen schnellen Einblick in Neuigkeiten und Erweiterungen haben, wurde diese Rubrik eingeführt. Das Neueste steht ganz oben.</p>

<ul class="news-feed">

<li><h3>Mai 2014</h3>
<div class="box left clear-after">
        <img src="/shared/photos/rechnertechnik/facit4000.jpg" width="352" height="137" />
		
		Peripherie der 1130: Facit-Lochstreifengeräte <a href="/de/rechnertechnik/ibm1130.php#1130"><br>
		<b>siehe hier</b></a> 
		</div>

<li><h3>Januar 2014</h3>
<div class="box left clear-after">
        <img src="/shared/photos/rechnertechnik/ibm-1130.jpg" alt="IBM 1130" width="225" height="194" />
		
		IBM 1130, eine neue Herausforderung: <a href="/de/rechnertechnik/ibm1130.php#1130"><br>
		<b>lesen Sie hier weiter</b></a> 
		</div>



<li><h3>Dezember 2013</h3>

<div class="box left clear-after">
        <img src="/shared/photos/rechnertechnik/ibm-514.jpg" alt="IBM 514" width="225" height="195" />
		
		Neuzugang: Ein schöner Lochkartendoppler aus der Frühzeit der EDV <a href="/de/rechnertechnik/lochkarten-edv.php#doppler"><br>
		<b>lesen Sie hier</b></a> 
		</div>
	

<li><h3>September 2013</h3>
<div class="box left">
		<img src="/shared/photos/rechnertechnik/leser617.jpg" alt="Lochkartenleser" width="241" height="149" /><br><br>
		
BULL GAMMA 55 läuft! Ein historischer Moment, <a href="/de/rechnertechnik/gamma55.php#ge55"><b>siehe hier</b></a>
</div>

</li><br>



<div class="clear"></div>









	
	</ul>
	
	
