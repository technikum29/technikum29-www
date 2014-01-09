<?php
	$seiten_id = 'ibm1130';
	$version = '$Id: ibm1130.php 271 2013-04-23 19:23:24Z heribert $';
	$titel = 'IBM 1130 Elektronische Rechenanlage';
	
	require "../../lib/technikum29.php";
?>
	<!-- per CSS wird das Hintergrundbild unter /shared/photos/rechnertechnik/ibm-logo.jpg
         eingebunden -->
	<h2 class="hidden"><b>IBM 1130</b> "Elektronische Rechenanlage"</h2>
	<div id="1130" class="text-ersatz" style="height: 21px;">
		<img src="/shared/photos/rechnertechnik/ibm-logo.jpg"  width="304" height="42" />
	</div>
	
    <div class="box center clear-after">
		<img src="/shared/photos/rechnertechnik/ibm-1130.jpg" alt="IBM 1130 Elektronische Rechenanlage" width="700" height="603" />
		<div class="bildtext">
		<p><b>IBM 1130</b></p>
		</div>
		<br>
		<p>Seit Dezember 2013 sind wir im Besitz einer schönen und auch sehr interessanten "Elektronischen Rechenanlage" von IBM. Dieser Typ wurde 1965 zum ersten Mal ausgeliefert. Die Anlage war vorwiegend für Wissenschaftler, Ingenieure und Mathematiker konzipiert.<br>
		An die Anlage ist u.a. das "AMPEX TMZ" Magnetbandlaufwerk (Digital Tape Memory System) angeschlossen, für welches wir dringend noch Manuals (Schaltpläne usw.) suchen.<br>
		Es gibt viel darüber zu berichten aber zunächst erfolgen die optische und dann die elektrische Sanierung (siehe "Reparatur-Blog"). Lesen Sie demnächst mehr an dieser Stelle. </p>
		
		<p><small>Diese Anlage wurde uns freundlicherweise vom <a href="http://www.fitg.de">FITG (Frankfurt)</a> übereignet.</small></p>
		
		
		<h3 id="blog-ibm">Reparatur-Blog</h3>
		<p class="small">
		Wie schon für den UNIVAC Rechner 9200 werden wir auch für diese IBM Anlage einen Reparatur-Blog erstellen. Die Schwierigkeit bei der Instandsetzung des Rechners liegt darin, dass er damals, mitte der 60er Jahre, sehr fortschrittlich aufgebaut war: Hier wurden kaum noch herkömmliche Transistoren verwendet, sondern sogenannte <b>SLT</b>-Bausteine (Solid Logic Technology). Das sind kleine Keramit-"ICs" (keine integrierten Schaltungen im heutigen Sinne), in welchen die Transistoren, Dioden und Widerstände, eben noch lokalisierbar, untergebracht wurden. Diese Bausteine sind nicht mehr erhältlich und müssen bei defekten praktisch "repariert" werden, was sehr aufwändig ist. Die fortschrittliche IBM-Technik von damals ist daher heute für die Instandsetzung ein großer Nachteil. Zur gleichen Zeit baute z.B. BULL noch mit großformatigen Pertinax-Platinen und Germanium-Transistoren. Zwei Welten, wie sie unterschiedlicher nicht sein konnten!<br>
		Die Zeitinvestitionen für ein solches Vorhaben sind riesig. Zum Glück weiß man vorher nicht, was auf einem zukommt (siehe BULL Gamma 55: über 30 Fehler!). Sonst würde manch eine Reparatur gar nicht erst begonnen werden.</p><br>
		
		
		<div class="desc-left">
		<a class="popup" href="/shared/photos/rechnertechnik/ibm-1130-board.jpg">
	<img src="/shared/photos/rechnertechnik/ibm-1130-board.jpg" alt="Modul der IBM1130" width="195" height="247" /></a>
	<p class="small">Typisches <b>SLT-Modul</b>. Den Schaltplan darunter hat IBM auf Schnelldruckern herge- stellt. Nachteil: Schwer lesbar da alle Logikelemente gleich aussehen.<br>
	Vergrößern: Bild anklicken!</p></div>
		
		<p class="small">
		
		<b>Dezember 2013:</b> Wie bei "neuen" Anlagen üblich, werden diese erst einmal gründlich gesäubert und von den verklebten oder zerfallenen Schaumgummimatten (zu Schalldämmung) befreit. Danach erfolgt der grobe optische Test auf Vollständigkeit der Anlage.<br><br>
		
		<b>30.12.2013:</b> Die Neugierde ist groß, daher wird am Anfang viel Zeit investiert! Nachdem die Installation des Memory´s mit 16 kB Kapazität erfolgt ist, kam der erste Einschaltvorgang (ohne Peripherie). Keine Sicherung verabschiedete sich, keine Rauchwolken stiegen empor....immerhin. Die Netzteilspannungen waren o.k. Nur der Konsolendrucker, eine IBM Kugelkopfschreibmaschine, machte lautstark einen dauernden Wagenrücklauf. Also schnell wieder ausschalten......<br><br>
		
		<b>2.1.2014:</b> Der Konsolendrucker musste ausgebaut und separat placiert werden.<br> Um die Anlage zu schonen wurde er unmittelbar an die Netzspannung angeschlossen. Nach ca. 3 Stunden Suchen war der Fehler gefunden: 4 durch Federn gehaltene Blättchen (kaum sichtbar) waren durch verharztes Öl unbeweglich. Nach der "Entfettung" und neuer Ölzufuhr (W40) war der Fehler behoben.<br><br>
		
		<b>4.1.2014:</b> Da der Konsolendrucker nun ruhig und gemächlich läuft, konnten die ersten Versuche gestartet werden Informationen in den Speicher zu schreiben und auszulesen. Es braucht schon Zeit, bis man diese Manipulationen beherrscht. Voreilig kann man sagen: Der Speicher funktioniert zumindest etwas......<br><br>
		
		<b>6.1.2014:</b> Nachdem langsam die manuelle Bedienung des Speichers klar wird, zeigt sich, dass mindestens 2 Fehler vorhanden sind:<br>
		1.  Eine kontinuierliche Eingabe Adresse für Adresse läuft falsch<br>
		2.  Im "oberen" Bereich des Speichers entstehen Paritätsfehler, d.h. 2 von 15 Bits fehlen.<br>
		.....Das fängt ja gut an.....<br><br>
		
		<b>8.1.2014:</b> Der 2. Fehler (6.1.) war relativ schnell gefunden: Im 2. Speichermodul fehlte ein (von 18) "Headconnector" der entsprechende Verbindungen von den Boards zum Kernspeichermodul herstellt. Vollkommen unklar, wie so ein Modul verschwinden kann.<br>
		Der 1. Fehler ist ein tückischer Fehler in der Speicheradressierung, das ist eine harte Nuss!<br><br>
		
		</small>
		<p>Fortsetzung folgt</p>
		
		
		