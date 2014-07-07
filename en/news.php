<?php
	$seiten_id = 'news';
	$version = '$Id$';
	$titel = "What's new?";
	
	$neues_menu = <<< MENU
	
- titel: "Art: Notes on digital"
  text: "German art"
  link: "#June_2014"
	
- titel: "Facit papertape device"
  text: "IBM1130"
  link: "#May_2014"
  
- titel: "IBM 1130"
  text: ""
  link: "#January_2014"
  
-titel: "IBM 514"
  text: "Reproducing Punch"
  link: "#December_2013"
  
- titel: "Gamma 55 is up und running"
  text: ""
  link: "#September_2013"
  
- titel: "Punch-Card-Music"
  text: "Technique and art"	
  link: "#Mai_2013"
	
 

MENU;
// ende der menue-Eintraege

	if(!require("../lib/technikum29.php")) return;
?>

<h2>What's new?</h2>

    <p>This is a news feed for the recent changes on our homepage. The latest
       posts are on top.</p>

<ul class="news-feed news-ng">

<li><a href="/de/kommunikationstechnik/faxtechnik.php#decoder">
	<h3>July 2014</h3>
        <img src="/shared/photos/kommunikationstechnik/telegrafenalphabet.jpg" width="153" height="144" />
	<em>A historic 5-bit character decoder</em> from the university. Here it is used as a decryption engine in our experimental workshop.
</a></li>

<li><a href="http://www.kunst-stoff.fr/tresorraum/wir-die-iborgs/">
	<h3>June 2014</h3>
	<img src="/shared/photos/rechnertechnik/tuebingen.jpg" width="153" height="149" />
	Our Cardpunch IBM029 were on jorney: For some time, it were part of an art installation in Tübingen (Baden-Wüttemberg, near Stuttgart).
	
</a></li>


<li><a href="/en/computer/ibm1130.php#1130">
	<h3>May 2014</h3>
        <img src="/shared/photos/rechnertechnik/facit4000.jpg" width="352" height="137" />
	Periphery of the 1130: Facit tape devices
</a></li>

<li><a href="/en/computer/ibm1130.php#ibm1130">
	<h3>January 2014</h3>
        <img src="/shared/photos/rechnertechnik/ibm-1130.jpg" alt="IBM 1130" width="225" height="194" />
	A new callenge: IBM 1130 Mainframe
</a></li>

<li><a href="/en/computer/punchcard.php#reproducing">
	<h3>December 2013</h3>
	<img src="/shared/photos/rechnertechnik/ibm-514.jpg" alt="IBM 514" width="225" height="195" />
	Recruit: A large IBM reproducing punch from the early days of computing
</a></li>

<li><a href="/en/computer/gamma55.php#ge-55">
	<h3>September 2013</h3>
	<img src="/shared/photos/rechnertechnik/leser617.jpg" alt="Lochkartenleser" width="241" height="149" />
	Success! The BULL GAMMA 55 is up and running! An historical moment.
</a></li>

    </ul>



