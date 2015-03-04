<?php
	$seiten_id = 'news';
	$version = '$Id$';
	$titel = 'Was gibt es Neues?';
	
	// muss noch restlos entfernt werden:
	$neues_menu = "";
    // ende der menue-Eintraege

	if(!require("../lib/news.php")) return; // keine verschachtelten Aufrufe
?>
    <h2>Was gibt es Neues?</h2>
	
	
	<p>Damit alle die öfters unsere Homepage besuchen einen schnellen Einblick in Neuigkeiten und Erweiterungen haben,
	wurde diese Rubrik eingeführt. Die Neuigkeiten können sie auch <a href="?format=rss" title="technikum29-Neuigkeiten abonnieren">als RSS-Feed abonnieren</a>.</p>
	
	<br><br>

<ul class="news-feed news-ng">

<li><a href="/de/rechnertechnik/ibm1130.php#1130">
	<h3>März 2015</h3>
    <img src="/shared/photos/rechnertechnik/ibm-1130.jpg" width="153" height="108" />
	Endlich: Die IBM-1130 Anlage läuft perfekt! Diese Seite wurde stark ausgebaut.
</a></li>


<li><a href="/de/rechnertechnik/speichermedien.php#kernspeicher">
	<h3 lang="de">Dezember 2014</h3>
    <img src="/shared/photos/rechnertechnik/speichermedien/demo-kernspeicher.jpg" width="153" height="115" />
	Riesiges Kernspeichermodell aus der Hochschule
</a></li>

<li><a href="http://www.techrepublic.com/pictures/bringing-the-first-computers-back-to-life-contenders-for-a-computer-conservation-award/8/" target="_blank">

<h3>November 2014</h3>
<img src="http://pixelprosemedia.com/wp-content/uploads/2013/02/techrepublic.png" width="150">
Das technikum29 hat sich für den <i>Tony Sales Award</i> beworben und wird
in der Onlinezeitschrift <i>techrepublic</i> unter: "The world's greatest restoration projects" aufgeführt.
</a></li>


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
	
</ul>

