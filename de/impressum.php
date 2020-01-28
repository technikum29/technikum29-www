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


    <h2>Über das Museum</h2>
    <p>Das technikum29 ist ein privates Computermuseum im Rhein-Main-Gebiet.
    In <a href="/de/transparenz.php">unserem Transparenzbericht</a> legen wir unsere Struktur und Ziele offen.
    Regionale und überregionale Zeitungen berichten regelmäßig:

    <ul style="text-align:left">
      <li>1999: <a href="/download/zeitungsartikel/ULB-Scans Zeitungen DEZ2019/1999-12-02 FR als A4.pdf">Lebendiges Museum mit Computer-Opas und anderen Veteranen</a> (Frankfurter Rundschau)
      <li>1999: <a href="/download/zeitungsartikel/ULB-Scans Zeitungen DEZ2019/1999-12-08 Kelkheimer-Zeitung.pdf">Ein Haus am Mainblick voller technier Raritäten</a> (Kelkheimer Zeitung)
      <li>2000: <a href="/download/zeitungsartikel/ULB-Scans Zeitungen DEZ2019/2000-01-04 FAZ besser.pdf">Aus alten Kästen tönen moderne Klänge: Privates Technikmuseum in Kelkheim / Funktionstüchtige Exponate vom Radio bis zum Rechner</a> (Frankfurter Allgemeine Zeitung/FAZ)
      <li>2000: <a href="/download/zeitungsartikel/ULB-Scans Zeitungen DEZ2019/2000-01-26 Kreis-Anzeiger.pdf">Mehr Transparenz statt technischem Firlefanz</a> (Kreis-Anzeiger)
      <li>2002: <a href="/download/zeitungsartikel/ULB-Scans Zeitungen DEZ2019/2002-10-12 HK.pdf">Ein Paradies für Fans alter Technik</a> (Höchster Kreisblatt)
      <li>2003: <a href="/download/zeitungsartikel/ULB-Scans Zeitungen DEZ2019/2003-06-21 HK.pdf">Ein Museum in der früheren Naspa-Filiale</a> (Höchster Kreisblatt)
      <li>2003: <a href="/download/zeitungsartikel/ULB-Scans Zeitungen DEZ2019/2003-08-01 FR.pdf">Ein Heim für Geräte, die unser Leben veränderten</a> (Frankfurter Rundschau)
      <li>2004: <a href="/download/zeitungsartikel/ULB-Scans Zeitungen DEZ2019/2004-01-10 HK zwei.pdf">Neues Domizil für alte Technikstücke: Die technische Vergangenheit wird 1:1 erfahren</a> (Höchster Kreisblatt)
      <li>2004: <a href="/download/zeitungsartikel/ULB-Scans Zeitungen DEZ2019/Vier Artikel von 2004-2009.pdf">Im Museum: Fesselnde Technik</a> (Diverse)
      <li>2005: <a href="/download/zeitungsartikel/ULB-Scans Zeitungen DEZ2019/2005-05-14 HK.pdf">Im Herbst will Heribert Müller sein Museum in Hornau eröffnen: Technik zum Anfassen</a> (Höchster Kreisblatt)
      <li>2005: <a href="/download/zeitungsartikel/ULB-Scans Zeitungen DEZ2019/2005-06-23 FAZ besser.pdf">"Archaische Technik" hilft Computer begreifen: Physiklehrer baut ein privates Museum für Rechner, Fernseher und Radios auf / Schüler sollen Geräte ausprobieren</a> (Frankfurter Allgemeine Zeitung/FAZ)
      <li>2005: <a href="/download/zeitungsartikel/ULB-Scans Zeitungen DEZ2019/2005-08-02 FR.pdf">Spielwiese für Maschinen-Liebhaber: Der Diplom-Physiker Heribert Müller erfüllt sich einen Traum und eröffnet in Kelkheim ein Technikmuseum</a> (Frankfurter Rundschau)
      <li>2007: <a href="/download/zeitungsartikel/ULB-Scans Zeitungen DEZ2019/2007-03 Inside.pdf">Ab ins Museum: IT zum Anschauen</a> (Magazin "Inside")
      <li>2009: <a href="/download/zeitungsartikel/ULB-Scans Zeitungen DEZ2019/2009-05-18 FR.pdf">Computer so groß wie ein SChrank: Im Technikum29 sammelt Heribert Müller Rechner, Radios und ein Pianola</a> (Frankfurter Rundschau)
      <li>2009: <a href="/download/zeitungsartikel/ULB-Scans Zeitungen DEZ2019/2009-09-19 HK.pdf">Einblick ins Innere des Klaviers: Klein aber fein, das Technikum29</a> (Höchster Kreisblatt)
      <li>2014: <a href="/download/zeitungsartikel/ULB-Scans Zeitungen DEZ2019/2014-01-28 FR.pdf">Die Urahnen des Smartphones: Das Technikum29 präsentiert Computergeschichte</a> (Frankfurter Rundschau)
      <li>2014: <a href="/download/zeitungsartikel/ULB-Scans Zeitungen DEZ2019/2014-08-25 HK-FNP.pdf">Lego-Roboter werden zu Rechenkünstlern</a> (Frankfurter Neue Presse/FNP)
      <li>2014: <a href="/download/zeitungsartikel/Kelkheimer Zeitung 2014/nachrichtenartikel.pdf">Roboter in den Ferien programmieren</a> (Kelkheimer Zeitung)
      <li>2019: <a href="/download/zeitungsartikel/Kelkheimer Zeitung 2019.pdf">Das technikum29 soll erhalten bleiben - Gemeinnütziger Verein</a> (Kelkheimer Zeitung)
      <li>2019: <a href="/download/zeitungsartikel/Höchster Kreisblatt 2019.jpg">Die Rettung für das Technikum29: Viele Interessenten wollen bei Wiederbelebung helfen - Verein soll gegründet werden</a> (Frankfurter Neue Presse)
    </ul>

