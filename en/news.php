<?php
	$seiten_id = 'news';
	$version = '$Id$';
	$titel = "What's new?";
	
	$neues_menu = <<< MENU
	
	- titel: "Pianola"
  text: "Functional explanation of the pianola"
  link: "#March_2013"
	
	
- titel: "Gamma10"
  text: "The Gamma10-Printer has arrived at the museum"
  link: "#November_2012"

	
- titel: "Gamma55"
  text: "A new new acquisition"
  link: "#July_2012"

- titel: "UNIVAC Software discovery"
  text: "A bunch of punch cards"
  link: "#April_2012"
  
- titel: "Artists at the museum"
  text: "Leander Schwarzer punching cards"
  link: "#March_2012"


MENU;
// ende der menue-Eintraege

	if(!require("../lib/technikum29.php")) return;
?>
<h2>What's new?</h2>

    <p>This is a news feed for the recent changes on our homepage. The latest
       posts are on top.</p>


    <ul class="news-feed">
	
	<li><h3>March 2013</h3><br>
<div class="box left clear-after">
    <img src="/de/geraete/pianola-funktionserklaerung/einzelbilder/Bild1.png"
width="300" height="225">

New on our website: <br> <br>
  <a href="/en/devices/functional-explanation-pianola.php/"> <b>Functional explanation of the pianola</b></a>
</li>
	
	<li><h3>November 2012</h3>
	The Gamma 10 is now complete: the printer (fragment) has arrived here from France. Thus the BULL GAMMA 10 computer-system is finally complete. See "BULL GAMMA 10"
	<div class="box left">
<img src="/shared/photos/rechnertechnik/bull-i50.jpg" alt="Drucker-Fragment" width="320" height="240" />
</div> 
<div class="clear"></div>
	
	<li><h3>September 2012</h3>
We have overhauled our web pages. The most important changes are a better
outline, better navigation and an overall better appearance.

<li><h3>July 2012</h3>
<div class="box left">
<img src="/shared/photos/rechnertechnik/bull-ge55.jpg" width="375" height="195"/>
</div> 
<div class="clear"></div>

<p>A "new" computer back from the punch card era has arrived at the museum: A BULL
Gamma 55 (also known as GE-55). A wonderful system that has been built in
1966/1967 and survived 26 years in storage in Switzerland. Since the system
comes with all of the necessary documentation we are planning to restore it to
working condition (cf. the section describing the Gamma 55).</p><br>
	
	
	<li><h3>April 2012</h3>
	<div class="box left">
<img src="/shared/photos/rechnertechnik/univac/lochkarten.jpg" width="350" height="87"/>
</div> 
	Unbelievable software-discovery for our UNIVAC 9200 <a href="/en/computer/univac9200.php#cards"><b>Read more here:</b></a>
<div class="clear"></div></li>
	
	<li><h3>March 2012</h3><div class="box left">
	
	<img src="/shared/photos/start/leander.jpg" alt="Leander Schwarzer" width="303" height="231" </div>
	Artists are working in technikum29. Leander Schwarzer punching cards.
	<a href="/en/miscellaneous.php#leander"><b>View article</b></a>
	<div class="clear"></div></li>
	







    </ul>



