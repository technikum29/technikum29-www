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

 <li><a href="/en/computer/storage-media.php#core-memory">
	<h3 lang="de">December 2014</h3>
    <img src="/shared/photos/rechnertechnik/speichermedien/demo-kernspeicher.jpg" width="153" height="115" />
	Huge core memory model of the university
</a></li>

	   <li><a href="http://www.techrepublic.com/pictures/bringing-the-first-computers-back-to-life-contenders-for-a-computer-conservation-award/8/" target="_blank">  
<h3>November 2014</h3>
<img src="http://pixelprosemedia.com/wp-content/uploads/2013/02/techrepublic.png" width="150">
The technikum29 has applied to the <i> Tony Sales Award </i> and is
described in the online-journal <i> techrepublic </i> "The world's greatest restoration projects":  
</a></li>
	   
	<li><a href="/en/communication/fax.php#decoder">
				<h3>July 2014</h3>
				<img src='/shared/photos/kommunikationstechnik/telegrafenalphabet.jpg' alt='Historic workshop device'>				<em>A historic 5-bit character decoder</em> from the university. Here it is used as a decryption engine in our experimental workshop.			</a></li>
			<li><a href="http://www.kunst-stoff.fr/tresorraum/wir-die-iborgs/">
				<h3>June 2014</h3>
				<img src='/shared/photos/rechnertechnik/tuebingen.jpg' alt='Art installation with cards'>				Our Cardpunch IBM029 were on jorney: For some time, it were part of an art installation in Tübingen (Baden-Wüttemberg, near Stuttgart).			</a></li>
			<li><a href="/en/computer/ibm1130.php#1130">
				<h3>May 2014</h3>
				<img src='/shared/photos/rechnertechnik/facit4000.jpg' alt='Facit papertape device'>				Periphery of the 1130: Facit tape devices			</a></li>
			
			
			
			</ul>
</ul>



