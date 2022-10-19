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
		<!--<div class="org hidden">technikum29 Computer Museum</div>-->
		<div class="fn">technikum29 Computer Museum</div>
		<div class="fn">Provisional managament: Dr. Sven Köppel</div>
		<div class="adr">
			<div class="street-address">Am Flachsland 29</div>
			<span class="postal-code">65779</span> <span class="locality">Kelkheim/Taunus</span>
			<div class="country-name">Germany</div>
		</div>
		<div>e-mail: <a class="email" href="mailto:contact@technikum29.de">contact@technikum29.de</a></div>
		<!--<div>phone (mail box): <a href="tel:00496195805777">0049-6195-805777</a></div>-->
		<div>website: <a class="url" href="http://www.technikum29.de/">www.technikum29.de</a></div>
		<div class="hidden">Photo: <img class="photo" src="/shared/photos/start/museum.jpg" alt="Photography of the museum building" /></div>
		<div class="hidden">Logo: <img class="logo" src="/shared/img/banner/light.png" alt="technikum29 Logo (black on white)" /></div>
    </div>

        <h3>Location</h3>
        <p>The museum is located close to Frankfurt airport and the city Frankfurt am Main in Germany.
        It is a 20 minutes travel by car/taxi from the airport or Frankfurt downtown. There is a direct
        train connection from Frankfurt main station (travel time 35 minutes, commuter line 
        <a href="https://en.wikipedia.org/wiki/K%C3%B6nigstein_Railway">RB12</a>). You can exit either at
        <a href="https://en.wikipedia.org/wiki/Kelkheim_station">Kelkheim station</a> or, even closer, at
        <em>Kelkheim (Hornau) station</em>. It is a five minute walk from the station.

	<div id="map" style="border: 1px solid #979797; background-color: #e5e3df; height: 320px;">
        <div style="padding: 1em; color: gray"><span class="js">Map is being loaded ...</span></div>
		<noscript>
			<p>See <a href="http://maps.google.com/maps?f=q&source=s_q&hl=de&geocode=&q=Am+Flachsland+29,+65779+Kelkheim,+Deutschland&sll=50.275299,8.745117&sspn=7.598462,15.930176&ie=UTF8&hq=&hnear=Am+Flachsland+29,+65779+Kelkheim+(Taunus),+Main-Taunus-Kreis,+Hessen,+Deutschland&ll=50.373496,6.855469&spn=15.17797,31.860352&z=5" class="go">our location at Google Maps</a>
		</noscript>
        </div>
        

    <h3 id="image-copyright">Image use policy and information about reusing technikum29 website contents</h3>
	<!-- Stattdessen endlich ein richtiger Text: -->
	<p>
	<a href="http://creativecommons.org/licenses/by-nc/4.0/"><img src="https://licensebuttons.net/l/by-nc/4.0/88x31.png" style="float:right; margin: 0 0 1em 1em;"></a>
	All selfmade photographies on our website are relased under the 
	<a href="http://creativecommons.org/licenses/by-nc/4.0/">Creative Commons (CC BY-NC 4.0)</a>
	license. This means you can use these pictures for any noncommercial purpose. You
	also may share and modify them as you like. The only condition is that you mention the source of these
	pictures, i.e. our name: <em>technikum29 computer museum</em>. We also would like to see a link to our
	website <a href="http://technikum29.de">technikum29.de</a>.
	
	<p>In case you want to publish pictures in a commercial project, for instance within a magazine
	or book which is supposed to monetary compensate it's author, we offer an alternative licensing
	model. If this applies, please contact us.

