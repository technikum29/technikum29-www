<?php
	$seiten_id = 'ibm1130';
	$version = '$Id: ibm1130.php 271 2013-04-23 19:23:24Z heribert $';
	$titel = 'IBM 1130 Elektronische Rechenanlage';
	
	require "../../lib/technikum29.php";
?>
	
	<h2><b>IBM 1130</b></h2>
	
	
	<div class="box center clear-after">
		<img src="/shared/photos/rechnertechnik/ibm-register.jpg"  width="860" height="309" />	
	</div>
	<p>Seit Dezember 2013 sind wir im Besitz einer schönen und auch sehr interessanten "Elektronischen Rechenanlage" von IBM. Dieser Typ wurde 1965 zum ersten Mal ausgeliefert. Die Anlage war vorwiegend für Wissenschaftler, Ingenieure und Mathematiker konzipiert.<br>
		An die Anlage ist u.a. das "AMPEX TMZ" Magnetbandlaufwerk (Digital Tape Memory System) angeschlossen, für welches wir dringend noch Manuals (Schaltpläne usw.) suchen.<br>
		Es gibt viel darüber zu berichten aber zunächst erfolgen die optische und dann die elektrische Sanierung (siehe "Reparatur-Blog"). Lesen Sie demnächst mehr an dieser Stelle. </p>
	
	
	<div class="box center clear-after">
		<img src="/shared/photos/rechnertechnik/ibm-1130.jpg" alt="IBM 1130 Elektronische Rechenanlage" width="700" height="603" />
		<p class="bildtext"><b>IBM 1130</b></p>
	</div>
			
		<div class="desc-left borderless no-copyright">
			<a class="popup" href="/shared/photos/rechnertechnik/facit4000.jpg">
				<img src="/shared/photos/rechnertechnik/facit4000.jpg" alt="Lochstreifengeräte" width="352" height="137" />
			</a>
			<p class="small"><b>Facit Lochstreifengeräte</b><br>
			Aufwickler Type 4015, Stanzer Type 4060, Leser Type 4001 und Stanzerelektronik Type 5104.<br>
			Vergrößern: Bild anklicken!</p>
		</div>
	
		<p>Die abgebildeten Lochstreifengeräte der Facit 4000er Serie waren an die Anlage angeschlossen.<br>
		<br>
		<small>Diese Anlage wurde uns freundlicherweise vom <a href="http://www.fitg.de">FITG (Frankfurt)</a> übereignet.</small></p>

		<div class="clear"></div>
		
		<h3 id="blog-ibm">Reparatur-Blog</h3>
		<p class="small">
		Wie schon für den UNIVAC Rechner 9200 werden wir auch für diese IBM Anlage einen Reparatur-Blog erstellen. Die Schwierigkeit bei der Instandsetzung des Rechners liegt darin, dass er damals, mitte der 60er Jahre, sehr fortschrittlich aufgebaut war: Hier wurden kaum noch herkömmliche Transistoren verwendet, sondern sogenannte <b>SLT</b>-Bausteine (Solid Logic Technology). Das sind kleine Keramit-"ICs" (keine integrierten Schaltungen im heutigen Sinne), in welchen die Transistoren, Dioden und Widerstände, eben noch lokalisierbar, untergebracht wurden. Diese Bausteine sind nicht mehr erhältlich und müssen bei defekten praktisch "repariert" werden, was sehr aufwändig ist. Die fortschrittliche IBM-Technik von damals ist daher heute für die Instandsetzung ein großer Nachteil. Zur gleichen Zeit baute z.B. BULL noch mit großformatigen Pertinax-Platinen und Germanium-Transistoren. Zwei Welten, wie sie unterschiedlicher nicht sein konnten!<br>
		<br>
		</small>
	
		<div class="desc-left">
		<a class="popup" href="/shared/photos/rechnertechnik/ibm-1130-board.jpg">
	<img src="/shared/photos/rechnertechnik/ibm-1130-board.jpg" alt="Modul der IBM1130" width="195" height="247" /></a>
	<p class="small">Typisches <b>SLT-Modul</b>. Den Schaltplan hat IBM auf Schnell- druckern hergestellt. Nachteil: Schwer lesbar da alle Logik- elemente gleich aussehen.<br>
	Vergrößern: Bild anklicken!</p></div>
		
		<p class="small">
		Die Zeitinvestitionen für ein solches Vorhaben sind riesig. Zum Glück weiß man vorher nicht, was auf einem zukommt (siehe BULL Gamma 55: über 30 Fehler!). Sonst würde manch eine Reparatur gar nicht erst begonnen werden.<br>
		Der Blog beginnt hier und geht auf einer Extraseite weiter (siehe unten).<br><br>
		
		
		<b>Dezember 2013:</b> Wie bei "neuen" Anlagen üblich, werden diese erst einmal gründlich gesäubert und von den verklebten oder zerfallenen Schaumgummimatten (zur Schalldämmung) befreit. Danach erfolgt der grobe optische Test auf Vollständigkeit der Anlage.<br><br>
		
		<b>30.12.2013:</b> Die Neugierde ist groß, daher wird am Anfang viel Zeit investiert! Nachdem die Installation des Memory´s mit 32 kB Kapazität (bei einer Wortbreite von 16 Bit) erfolgt ist, kam der erste Einschaltvorgang (ohne Peripherie). Keine Sicherung verabschiedete sich, keine Rauchwolken stiegen empor....immerhin. Die Netzteilspannungen waren o.k. Nur der Konsolendrucker, eine IBM Kugelkopfschreibmaschine, machte lautstark einen dauernden Wagenrücklauf. Also schnell wieder ausschalten......<br><br>
		
		<b>2.1.2014:</b> Der Konsolendrucker musste ausgebaut und separat placiert werden.<br> Um die Anlage zu schonen wurde er unmittelbar an die Netzspannung angeschlossen. Nach ca. 3 Stunden Suchen war der Fehler gefunden: 4 durch Federn gehaltene Blättchen (kaum sichtbar) waren durch verharztes Öl unbeweglich. Nach der "Entfettung" und neuer Ölzufuhr (W40) war der Fehler behoben.<br><br>
		
		<b>4.1.2014:</b> Da der Konsolendrucker nun ruhig und gemächlich läuft, konnten die ersten Versuche gestartet werden Informationen in den Speicher zu schreiben und auszulesen. Es braucht schon Zeit, bis man diese Manipulationen beherrscht. Voreilig kann man sagen: Der Speicher funktioniert zumindest etwas......<br><br>
		
		<b>6.1.2014:</b> Nachdem langsam die manuelle Bedienung des Speichers klar wird, zeigt sich, dass mindestens 2 Fehler vorhanden sind:<br>
		1.  Eine kontinuierliche Eingabe Adresse für Adresse läuft falsch<br>
		2.  Im "oberen" Bereich des Speichers entstehen Paritätsfehler, d.h. 2 von 15 Bits fehlen. Das fängt ja gut an.....<br>
		
		</small>
		
		<p><a class="go" href="/de/geraete/ibm1130-blog.php"><b>Hier geht es zur Fortsetzung des Blogs</b></a>	
	
		
