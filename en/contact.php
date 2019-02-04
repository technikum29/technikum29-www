<?php
	$seiten_id = 'impressum';
	$version = '$Id$';
	$title = 'Contact';
	$header_prepend = array( # Open Source https://leafletjs.com library for OpenStreetMaps
		'<link rel="stylesheet" href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css" />',
		'<script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js"></script>'
	);
	
	require "../lib/technikum29.php";
?>
    <h2>Contact</h2>
    <p>Since the sudden <a href="/heribert-mueller/">pass away of Heribert Müller</a> in April
    2018, the provisional lead of the museum is up to the community of heirs as well as
    friends and volunteers of the museum. We are reachable via:

    <div class="vcard" id="address">
		<div class="org hidden">technikum29 Computer Museum</div>
		<div class="fn">Dipl. Phys. H. M&uuml;ller, Community of Heirs</div>
		<div class="adr">
			<div class="street-address hidden">Am Flachsland 29</div>
			<span class="postal-code">65779</span> <span class="locality">Kelkheim/Taunus</span>
			<span class="country-name">Germany</span>
		</div>
		<div>e-mail: <a class="email" href="mailto:contact@technikum29.de">contact@technikum29.de</a></div>
		<div>phone (mail box): <a href="tel:00496195805777">0049-6195-805777</a></div>
		<div>internet: <a class="url" href="http://www.technikum29.de/">www.technikum29.de</a></div>
		<div class="hidden">Photo: <img class="photo" src="/shared/photos/start/museum.jpg" alt="Photography of the museum building" /></div>
		<div class="hidden">Logo: <img class="logo" src="/shared/img/banner/light.png" alt="technikum29 Logo (black on white)" /></div>
    </div>

        <h3>Location</h3>
	<div id="map" style="border: 1px solid #979797; background-color: #e5e3df; height: 320px;">
        <div style="padding: 1em; color: gray"><span class="js">Map is being loaded ...</span></div>
		<noscript>
			<p>See <a href="http://maps.google.com/maps?f=q&source=s_q&hl=de&geocode=&q=Am+Flachsland+29,+65779+Kelkheim,+Deutschland&sll=50.275299,8.745117&sspn=7.598462,15.930176&ie=UTF8&hq=&hnear=Am+Flachsland+29,+65779+Kelkheim+(Taunus),+Main-Taunus-Kreis,+Hessen,+Deutschland&ll=50.373496,6.855469&spn=15.17797,31.860352&z=5" class="go">our location at Google Maps</a>
		</noscript>
        </div>

    <h3 id="image-copyright">Image use policy and information about reusing technikum29 website contents</h3>
    <p>Since we received a great number of image usage requests, the following information
       may give you an overview how you can resue the contents, especially the pictures,
       of the museum website.</p>
    <p>Basically, everything on this website is protected by international copyright
       law. On the other hand, there are useful limitations and exceptions to copyright
       law. To create clarification, please distinguish:</p>

    <ol>
       <li>If you want to use one or multiple pictures in the private domain, e.g. for
           presentations, you can take any pictures without request.</li>

       <li>If you want to publish our pictures within your document, but without any
           view to profit (e.g. on private websites, company-internal publications,
           anything in the educational and scientifical domain like lectures, papers,
           books, presentations, etc.), we can grant you free authorization on request
           if it is clearly evident that your work is for non-profit.</li>

       <li>If you want to publish our pictures within your document and you want
           to make profit with that document (e.g. commercial magazines, books, web
           sites, stock image usage, etc.) you must make a request. We usually grant
           permissions for royalty. Prices vary heavily depending on the intended
           usage, picture size, print run, etc.</li>
    </ol>

    <p>We can send you partially high resolution pictures. If the situations #2 or #3
       apply in your case, please get in touch with us.</p>

