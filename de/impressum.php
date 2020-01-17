<?php
	$seiten_id = 'impressum';
	$version = '$Id$';
	$titel = 'Impressum';
	$header_prepend = array( # Open Source https://leafletjs.com library for OpenStreetMaps
		'<link rel="stylesheet" href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css" />',
		'<script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js"></script>'
	);
	
	require "../lib/technikum29.php";
?>
    <h2>Impressum</h2>

    <p>Seit dem plötzlichen <a href="/heribert-mueller/">Verlust von Heribert Müller</a>
       im April 2018 unterliegt das Museum der Leitung durch dem Museum nahestehenden
       Freunden und Helfern. Das <a href="team.php">Museums-Team</a> ist erreichbar unter:
    </p>

    <!-- Maschinenlesbare Visitenkarte: -->
    <div class="vcard" id="address">
       <div class="org">technikum29 Computermuseum</div>
       <div class="fn">Kommissarische Leitung: Dr. Sven Köppel</div>
       <div class="adr">
           <div class="street-address">Am Flachsland 29</div>
           <span class="postal-code">65779</span> <span class="locality">Kelkheim (Taunus)</span>
           <span class="country-name hidden">Deutschland</span>
       </div>
       <div>Telefon: <del>06195/805777</del> (derzeit nicht tel. erreichbar)</div><!-- class tel -->
       <div>E-Mail: <a class="email" href="mailto:kontakt@technikum29.de">kontakt@technikum29.de</a></div>
       <div>Internet: <a class="url" href="http://www.technikum29.de">www.technikum29.de</a></div>
       <div class="hidden">Foto: <img class="photo" src="/shared/photos/start/museum.jpg" alt="Foto des Museums" /></div>
       <div class="hidden">Logo: <img class="logo" src="/shared/img/banner/light.png" alt="technikum29-Logo" /></div>
    </div>

     <p>Heribert Müller war Mitglied in der <a class="arrow" href="http://www.gfgf.org" title="www.gfgf.org">Gesellschaft der Freunde der Geschichte des Funkwesens e.V.</a> und im Frankfurter <a class="arrow" href="http://www.fitg.de" title="www.fitg.de">Förderkreis für Industrie- und Technikgeschichte e.V.</a>.</p>

     <h3>Lage / Anfahrt</h3>
     <p>Das Museum befindet sich mitten im Rhein-Main-Gebiet. Über die A66 und B8 ist es 20 Autominuten, mit der
     Königsteiner Bahn 40 Zugminuten vom Frankfurter Hauptbahnhof zum Bahnhof Kelkheim-Hornau.
     </p>
	<div id="map" style="border: 1px solid #979797; background-color: #e5e3df; height: 320px;">
        <div style="padding: 1em; color: gray"><span class="js">Karte wird geladen ...</span></div>
		<noscript>
			<p>Zur <a href="http://maps.google.de/maps?f=q&hl=de&q=Flachsland+29,+Kelkheim&layer=&sll=50.092393,10.195313&sspn=38.370164,57.392578&ie=UTF8&z=16&om=1&iwloc=addr" class="go">Wegbeschreibung bei Google Maps</a>
		</noscript>
        </div>

	<h3 id="image-copyright">Hinweise für die Nutzung von Bildern aus der Website des  technikum29</h3>

	<!-- Alte Erklärung von Heribert -->
	<!--
	<p>Wegen der großen Nachfrage an Bildern aus unserer Homepage geben wir Ihnen hier ein paar allgemeine Erläuterungen.<br>
	Die Bilder sind prinzipiell gemäß des Urheberrechts (UrhG, neueste Fassung) kopierrechtlich geschützt.</p>

	<ol><li>Wenn Sie ein Bild oder mehrere Bilder rein privat nutzen möchten, so können Sie dies ohne weiteres tun (z.B. Vorträge, Präsentationen)</li><br>

	<li>Falls Sie Bilder veröffentlichen möchten und damit nachvollziehbar kein finanzieller Gewinn erzielt werden soll, können wir Ihnen auf Nachfrage eine kostenlose Erlaubnis dazu erteilen (z.B. Nutzung auf privaten Websites, firmeninterne Veröffentlichungen, Hochschulskripten)</li><br>

	<li>Möchten Sie unsere Bilder veröffentlichen und ist damit ein Gewinnstreben beabsichtigt (z.B.  kommerzielle Magazine und Bücher) so ist die Erlaubnis hierfür mit einer Nutzungsgebühr verbunden</li><br></ol>

	<p>Wenn 2. oder 3. zutrifft, setzen Sie sich bitte mit uns in Verbindung.</p>
	-->

	<!-- Stattdessen endlich ein richtiger Text: -->
	<p>
	<a href="http://creativecommons.org/licenses/by-nc/4.0/"><img src="https://licensebuttons.net/l/by-nc/4.0/88x31.png" style="float:right; margin: 0 0 1em 1em;"></a>
	Alle Bilder aus unserer Homepage sind mit mittels
	<a href="http://creativecommons.org/licenses/by-nc/4.0/">Creative Commons (CC BY-NC 4.0)</a>
	lizensiert. Dies bedeutet, dass Sie die Bilder für nichtkommerzielle Zwecke nach Belieben Teilen und
	Verändern dürfen, unter der Bedingung dass Sie unseren Namen ― technikum29 Computer Museum, gerne auch mit Link
	zu <a href="http://technikum29.de">technikum29.de</a> ― erwähnen.

	<p>Falls Sie Bilder veröffentlichen möchten und damit ein Gewinnstreben beabsichtigt ist (z.B. kommerzielle
	Magazine und Bücher), so bieten wir unsere Bilder alternativ zu einer finanziellen Gegenleistung an. In diesem
	Fall setzen Sie sich bitte mit uns in Verbindung.


    <h3>Über die Website</h3>
    <p>
    Wir freuen uns jederzeit über Korrekturen zu unserer Website.
    Die Website wird gemeinschaftlich betrieben. Jeder kann in unserem
    <a href="https://github.com/technikum29/technikum29-www">öffentlichen Github-Repository</a> Änderungen
    vorschlagen (es <a href="https://github.blog/2012-12-05-creating-files-on-github/">ist einfach</a>).
    
    <p>
    Unsere <a href="/de/datenschutz.php">Datenschutzhinweise</a> gemäß DSGVO beinhalten naheligende Informationen
    zur Informationsverarbeitung auf unserer Website.






