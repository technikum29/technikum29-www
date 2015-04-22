<?php
	$seiten_id = 'news';
	$version = '$Id$';
	$titel = "What's new?";
	$menu_version = 2;

	// muss noch entfernt werden:
	$neues_menu = "";
	if(!require("../lib/news.php")) return;
?>

<h2>What's new?</h2>

    <p>This is a news feed for the recent changes on our homepage. The latest
       posts are on top.</p>

	   <ul class="news-feed news-ng">
	   
	   <li><a href="/en/computer/ibm1130.php#ibm1130">
				<h3>March 2015</h3>
				<img src='/shared/photos/rechnertechnik/ibm-1130.jpg' alt='IBM 1130'>	
The mainframe IBM 1130 is now working perfect. This page has been greatly expanded.			</a></li>
	   
	   
	<li><a href="/en/communication/fax.php#decoder">
				<h3>July 2014</h3>
				<img src='/shared/photos/kommunikationstechnik/telegrafenalphabet.jpg' alt='Historic workshop device'>				<em>A historic 5-bit character decoder</em> from the university. Here it is used as a decryption engine in our experimental workshop.			</a></li>
			<li><a href="http://www.kunst-stoff.fr/tresorraum/wir-die-iborgs/">
				<h3>June 2014</h3>
				<img src='/shared/photos/rechnertechnik/tuebingen.jpg' alt='Art installation with cards'>				Our Cardpunch IBM029 were on jorney: For some time, it were part of an art installation in Tübingen (Baden-Wüttemberg, near Stuttgart).			</a></li>
			<li><a href="/en/computer/ibm1130.php#1130">
				<h3>May 2014</h3>
				<img src='/shared/photos/rechnertechnik/facit4000.jpg' alt='Facit papertape device'>				Periphery of the 1130: Facit tape devices			</a></li>
			
			<li><a href="/en/computer/punchcard.php#reproducing">
				<h3>December 2013</h3>
				<img src='/shared/photos/rechnertechnik/ibm-514.jpg' alt='Reproducing punch'>				Recruit: A large IBM reproducing punch from the early days of computing			</a></li>
			
			</ul>
</ul>



