<?php
	$seiten_id = 'news';
	$version = '$Id$';
	$titel = 'Was gibt es Neues?';
	
	$neues_menu = <<< MENU
- titel: "Philosophie"
  text: ""
  link: "#August_2013"
	
- titel: "Punch-Card-Music"
  text: "Technik und Kunst"
  link: "#Mai_2013" 
	
- titel: "Experimentieren im technikum"
  text: ""
  link: "#Mai_2013"  
	
- titel: "Lochkartenstanzer IBM026"
  text: ""
  link: "#April_2013"
	
- titel: "Funktionserklärung einer Pianola"
  text: ""
  link: "#März_2013"
	


  



  
MENU;
// ende der menue-Eintraege

	if(!require("../lib/news.php")) return; // keine verschachtelten Aufrufe
?>
    <h2>Was gibt es Neues?</h2>
	
	
	<p>Damit alle die öfters unsere Homepage besuchen einen schnellen Einblick in Neuigkeiten und Erweiterungen haben, wurde diese Rubrik eingeführt. Das Neueste steht ganz oben.</p>

<ul class="news-feed">

<li><h3>August 2013</h3><br>
<div "box left clear-after">
	<img src="/shared/photos/start/philosophie.jpg" width="498" height="157" class="nomargin-bottom" /><br><br>
	Philosopie im technikum29: Die Referenten Patrick Hedfeld und Prof. Dr. Ulmann begeisterten die Besucher des völlig ausgebuchten Votrages: "Wie Sprache das Denken verändert".<br>
	Das Bild zeigt einen Teil der Besucher, die auch zwischen den historischen Rechnern sitzen mussten. Wegen der großen Nachfrage wird der Vortrag im November wiederholt. Siehe Start-Seite.


<li><h3>Mai 2013</h3><br>
<div "box left clear-after">
	<img src="/shared/photos/rechnertechnik/ross-moll.jpg" width="300" height="196" class="nomargin-bottom" />
	Wir unterstützen Künstler, schauen Sie unter 
	<a href="/de/sonstiges.php#music"> Punch-Card-Music </a>
	</div>
		

</li><br>


<li><h3>Mai 2013</h3><br>
<div class="box left clear-after">
    <img src="/shared/photos/rallye/exp12.jpg"  width="300" height="198" />
	Selbst experiementieren im technikum29, lesen Sie <a href="/de/lehrerinfo.php#experimente" width="150" height="99"><b> hier:</b></a><br>
	</div>



<li><h3>April 2013</h3><br>
<div class="box left clear-after">
<img src="/shared/photos/rechnertechnik/ibm26.jpg" width="300" height="287" />
Den nun ältesten Lochkartenstanzer im technikum29 finden Sie <a href="/de/rechnertechnik/lochkarten-edv.php#026"><b>hier:</b></a><br>

</div>

<li><h3>März 2013</h3><br>
<div class="box left clear-after">
    <img src="/de/geraete/pianola-funktionserklaerung/einzelbilder/Bild1.png"
width="300" height="225">

Ab sofort für alle Leser ohne Passwort erreichbar: <br> <br>
  <a href="/de/geraete/pianola-funktionserklaerung/"> <b>Die Funktionserklärung einer Pianola.</b></a>
</li>

<div class="clear"></div>









	
	</ul>
	
	
