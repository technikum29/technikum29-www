<?php
	$seiten_id = 'news';
	$version = '$Id$';
	$titel = "What's new?";
	
	$neues_menu = <<< MENU

- titel: "UNIVAC Software discovery"
  text: "Foobar"
  link: "#Februar_2012"
  bild: "/shared/img-v6/topnav-neues1.jpg"
  
- titel: "Artists at the museum"
  text: "Leander Schwarzer punching cards"
  link: "#August_2011"
  bild: "/shared/img-v6/topnav-neues2.jpg"

- titel: "School projeccts"
  text: "We support schools"
  link: "#Juli_2011"
  bild: "/shared/img-v6/topnav-neues3.jpg"

MENU;
// ende der menue-Eintraege

	if(!require("../lib/technikum29.php")) return;
?>

    <p>This is a news feed for the recent changes on our homepage. The latest
       posts are on top.</p>


    <ul class="news-feed">
	
	<li><h3>April 2012</h3>
	<div class="box left">
<img src="/shared/photos/rechnertechnik/univac/lochkarten.jpg" width="350" height="87"/>
</div> 
	Unbelievable software-discovery for our UNIVAC 9200 <a href="/en/computer/univac9200.shtm#cards"><b>Read more here:</b></a>
<div class="clear"></div></li>
	
	<li><h3>March 2012</h3><div class="box left">
	
	<img src="/shared/photos/start/leander.jpg" alt="Leander Schwarzer" width="303" height="231" </div>
	Artists are working in technikum29. Leander Schwarzer punching cards.
	<a href="/en/miscellaneous.shtm#leander"><b>View article</b></a>
	<div class="clear"></div></li>
	


<li><h3>February 2012</h3>
<div class="box left">
<img src="/shared/photos/kommunikationstechnik/arduino1.jpg" width="303" height="172"/>
</div> 

technikum29 supports school projects: 
<a href="/en/miscellaneous.shtm#Q1"><b>Look here</b></a>
<div class="clear"></div></li>
</li>




    </ul>



