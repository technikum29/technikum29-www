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

<li><a class="popup" href="/shared/photos/rechnertechnik/lochkartenraum.jpg">
	<h3>Juni 2015</h3>
    <img src="/shared/photos/rechnertechnik/lochkartenraum.jpg" width="153" height="86" />
	Ungewöhnliches Angebot: Ein kompletter Lochkartenraum (8 Lochkartenstanzer)<br> und viele Vorräte an Lochkarten.... wir berichten demnächst hierüber
	</a>
</li>


<li><a href="/de/rechnertechnik/lochkarten-edv.php#129">
	<h3>April 2015</h3>
    <img src="/shared/photos/rechnertechnik/ibm129.jpg" width="153" height="99" />
	Das letzte Stanzermodell der Lochkartenära: IBM 129<br>
	mit voll elektronischer Steuerung (1971)
</a></li>



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
<h3>...seit August 2014</h3>
<img src="/robotik/roboter.jpg" width="153" height="122" />
Robotik-Ferienkurse für Kids zwischen 11 und 14 Jahren im technikum29.<br>
Die spaßig intelligente Ferienalternative.
</a> 

</li>



	
</ul>

