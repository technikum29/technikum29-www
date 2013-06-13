<?php
	$seiten_id = 'impressum';
	$version = '$Id$';
	$titel = 'Impressum';
	$header_scripte = array(
		'http://maps.google.com/maps?file=api&amp;v=2&amp;sensor=false&amp;key=ABQIAAAAraTKZ5cINardZ8ITNVssKhRcOoEBtCgYLJRQznXYEV8m1M3fRRRT9wMSvFwhyo62fD3KyiwQxe5ruw',
		'/shared/js/gmaps-impressum.js'
	);
	
	require "../lib/technikum29.php";
?>
    <h2>Impressum</h2>

    <!-- Maschinenlesbare Visitenkarte: -->
    <div class="vcard" id="address">
       <div class="org hidden">technikum29 Computermuseum</div>
       <div class="fn">Dipl. Phys. H. Müller</div>
       <div class="adr">
           <div class="street-address">Am Flachsland 29</div>
           <span class="postal-code">65779</span> <span class="locality">Kelkheim/Taunus</span>
           <span class="country-name hidden">Deutschland</span>
       </div>
       <div>Telefon: <span class="tel">06195/2170</span></div>
       <div>E-Mail: <a class="email" href="mailto:post@technikum29.de">post@technikum29.de</a></div>
       <div>Internet: <a class="url" href="http://www.technikum29.de">www.technikum29.de</a></div>
       <div class="hidden">Foto: <img class="photo" src="/shared/photos/start/museum.jpg" alt="Foto des Museums" /></div>
       <div class="hidden">Logo: <img class="logo" src="/shared/img/banner/light.png" alt="technikum29-Logo" /></div>
    </div>

     <p>Wir sind Mitglied in der <a class="arrow" href="http://www.gfgf.org" title="www.gfgf.org">Gesellschaft der Freunde der Geschichte des Funkwesens e.V.</a> und im <a class="arrow" href="http://www.fitg.de" title="www.fitg.de">Förderkreis für Industrie- und Technikgeschichte e.V.</a> (Frankfurt).</p>

	<h3>Lage / Anfahrt</h3>
	<div id="map" style="border: 1px solid #979797; background-color: #e5e3df; height: 320px;">
        <div style="padding: 1em; color: gray">Karte wird geladen ...</div>
		<noscript>
			<p>Zur <a href="http://maps.google.de/maps?f=q&hl=de&q=Flachsland+29,+Kelkheim&layer=&sll=50.092393,10.195313&sspn=38.370164,57.392578&ie=UTF8&z=16&om=1&iwloc=addr" class="go">Wegbeschreibung bei Google Maps</a>
		</noscript>
    </div>

	<h3 id="image-copyright">Hinweise für die Nutzung von Bildern aus der Website des  technikum29</h3>

<p>Wegen der großen Nachfrage an Bildern aus unserer Homepage geben wir Ihnen hier ein paar allgemeine Erläuterungen.<br>
Die Bilder sind prinzipiell gemäß des Urheberrechts (UrhG, neueste Fassung) kopierrechtlich geschützt.</p>

<ol><li>Wenn Sie ein Bild oder mehrere Bilder rein privat nutzen möchten, so können Sie dies ohne weiteres tun (z.B. Vorträge, Präsentationen)</li><br>

<li>Falls Sie Bilder veröffentlichen möchten und damit nachvollziehbar kein finanzieller Gewinn erzielt werden soll, können wir Ihnen auf Nachfrage eine kostenlose Erlaubnis dazu erteilen (z.B. Nutzung auf privaten Websites, firmeninterne Veröffentlichungen, Hochschulskripten)</li><br>

<li>Möchten Sie unsere Bilder veröffentlichen und ist damit ein Gewinnstreben beabsichtigt (z.B.  kommerzielle Magazine und Bücher) so ist die Erlaubnis hierfür mit einer Nutzungsgebühr verbunden</li><br></ol>

<p>Wenn 2. oder 3. zutrifft, setzen Sie sich bitte mit uns in Verbindung.</p>
