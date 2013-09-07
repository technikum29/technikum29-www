<?php
	$seiten_id = 'news';
	$version = '$Id$';
	$titel = "What's new?";
	
	$neues_menu = <<< MENU
	
- titel: "Gamma 55 is up und running"
  text: ""
  link: "#September_2013"
  
- titel: "Punch-Card-Music"
  text: "Technique and art"	
  link: "#Mai_2013"
	
- titel: "IBM 026 Card-Punch"
  text: ""
  link: "#April_2013"
	
- titel: "Pianola"
  text: "Functional explanation of the pianola"
  link: "#March_2013"
  

  

MENU;
// ende der menue-Eintraege

	if(!require("../lib/technikum29.php")) return;
?>
<h2>What's new?</h2>

    <p>This is a news feed for the recent changes on our homepage. The latest
       posts are on top.</p>


    <ul class="news-feed">
	
	<li><h3>September 2013</h3>
<div class="box left">
		<img src="/shared/photos/rechnertechnik/leser617.jpg" alt="Lochkartenleser" width="241" height="149" /><br><br>
		</div>
Success! The BULL GAMMA 55 is up and running! An historical moment, <a href="/en/computer/gamma55.php#ge-55"><b>look here</a></b><br><br><br><br>


	<li><h3>May 2013</h3><br>
<div "box left clear-after">
	<img src="/shared/photos/rechnertechnik/ross-moll.jpg" width="300" height="196" class="nomargin-bottom" />
	We support artists, look here  
	<a href="/en/miscellaneous.php#music"> <b>Punch-Card-Music</b> </a>
	</div>
	
	
	
<li><h3>April 2013</h3><br>
<div class="box left clear-after">
<img src="/shared/photos/rechnertechnik/ibm26.jpg" width="300" height="287" />
IBM 026 Card Punch now in the technikum29 <a href="/en/computer/punchcard.php#026"><b><br>Look here</b></a><br><br>

</div>
	<li><h3>March 2013</h3><br>
<div class="box left clear-after">
    <img src="/de/geraete/pianola-funktionserklaerung/einzelbilder/Bild1.png"
width="300" height="225">

New on our website: <br> <br>
  <a href="/en/devices/functional-explanation-pianola.php/"> <b>Functional explanation of the pianola</b></a>
</li>


	
	
	

    </ul>



