<?php
	$seiten_id = 'robotik-ferienkurs'; 'robotik-workshop';
	$version = '$Id: robotik$';
	$titel = 'Robotik Workshop im technikum29 und an Schulen in Kelkheim und Schwalbach';

$sidebar_content = <<<SIDEBAR_ENDE

<div class="text-block alertbox">
	Seite zuletzt aktualisiert:
	<br>28.3.2016
</div>

<div class="spacing"></div>

<div class="bild-block">
	<a href="https://goo.gl/maps/Rq4Ep" title="5min Fußweg vom Bahnhof Kelkheim-Hornau"><img src="wegskizze-bahnhof.png" style="width:100%"></a>
	<p class="bildtext">Das technikum29 ist 4 Minuten vom <a href="http://www.rmv.de/auskunft/bin/jp/stboard.exe/dn?input=3004295&time=00:56&maxJourneys=10&dateBegin=28.06.15&dateEnd=12.12.15&selectDate=&productsFilter=1111111111111111&start=yes&dirInput=&view=STATIONINFO">Bahnhof Kelkheim-Hornau</a> entfernt und auch mit Bus 263 gut erreichbar.</p>
</div>


<div class="bild-block">
	<a href="roboter.jpg" class="popup"><img src="roboter.jpg" alt="Roboter" /></a>
	<p class="bildtext">Bestückt mit 3 Motoren und 5 Sensoren: <a href="roboter.jpg" class="popup">LEGO Mindstorms-Roboter</a></p>
</div>




<div class="text-block">
	<b>Zeitungsecho</b>
	<ul>
	
	<li>Höchster Kreisblatt vom 14.04.2015: <a href="http://www.fnp.de/lokales/main-taunus-kreis/Junge-Roboter-fahren-zwischen-alten-Computern-Slalom;art676,1352844" target="blank">Junge Roboter fahren zwischen alten Computern Slalom</a>
	<li>Frankfurter Neuen Presse vom 25.08.2014: <a href="http://www.fnp.de/lokales/main-taunus-kreis/Lego-Roboter-werden-zu-Rechenkuenstlern;art676,1000098" target="blank">Lego-Roboter werden zu Rechenkünstlern</a>
	<li>Kelkheimer Zeitung vom 28.07.2014: <a href="Kelkheimer-Zeitung.pdf">Roboter in den Ferien programmieren</a>
	</ul>
</div>


<div class="bild-block">
	<a class="popup" href="2-roboter.jpg">
		<img src="2-roboter.jpg" />
	</a>
</div>

<div class="text-block">
	<strong>Robotik in der Schule:</strong>
	<p>Das technikum29 sponsert je einen Robotik-Workshop an folgenden Schulen: Eichendorffschule (EDS), Kelkheim sowie Albert-Einstein-Schule (AES), Schwalbach. Hier werden für die Klassen 6/7 zwei Stunden pro Woche angeboten und von den Schülern mit Begeisterung angenommen! <br>
	Diese Kurse sind total ausgebucht: An der AES gab es über 40 Anmeldungen aus den 6. Klassen.<br><br>
	Siehe auch: <a href="http://www.aesmtk.de/cms/index.php/49-ueber-uns/mint/765-robotik-workshop-begeistert-sechstklaessler-der-aes"> Robotik-Workshop begeistert Sechstklässler der AES</a> </p>
</div>


SIDEBAR_ENDE;
	
	require "../lib/technikum29.php";
?>

<header class="teaser">
	<h2>
	<span class="subtext">Spaßig-intelligente Alternative für die Ferien:</span>
	Roboter bauen und programmieren
	</h2>
	<img class="no-copyright" src="header-bild.jpg">
</header>


<div class="cols">

<div class="leftcol">

<p><b>Fun for Future:</b> Roboter werden in Zukunft eine immer größere Bedeutung haben. Diese zu bauen und programmieren macht Spaß, da man hier richtig kreativ "spielen" kann. In dem <b>Ferienworkshop</b> lernst du mit einer grafischen Methode, wie man Programme erstellt.
<br>Du erfährst, wie der Roboter exakt deine Anweisungen ausführt. Wenn alle Sensoren im Einsatz sind, kann sich der Roboter mühelos in einem fremden Umfeld bewegen. Er findet sich sogar in einem Labyrinth zurecht!<br>

<p>
<img src="aes-gruppe2016.jpg" width="405"  height="197"/> 
<div class="small">Die AES-Robotik-Gruppe</small></div>
</p>
<p>
Als Mars-Rover sucht er selbstständig nach Objekten und nähert sich ihnen vorsichtig an. So scannt er eine unbekannte Fläche ab. Er kann auch tanzen, die Länge von Strecken vermessen oder auf "Straßen" navigieren.<br>
Es gibt per Programmierung unendlich viele Möglichkeiten, den Roboter "intelligent" zu machen.<br><br>

Der Workshop richtet sich an <b>technikinteressierte Schüler(innen)</b> im Alter von <b>11 bis 13 Jahren</b>. Es gibt Kurse für Anfänger und welche für Fortgeschrittene.</p>

<p>
<img src="eds-gruppe-2016.jpg" width="405"  height="250"/> 
<div class="small">Die EDS-Robotik-Gruppe</small></div>
</p>
<h3>Anmeldung</h3>  

<p>
per E-Mail an <a class="email" href="mailto:post@technikum29.de">post@technikum29.de</a>
</p>

</div><!--/leftcol -->

<div class="rightcol">

<h3>Inhalt</h3>
<ul>
<li>Aufbau der Roboter, Erklärung der Sensoren.
<li>Selbstständiges lineares Programmieren nach Vorgaben. Einführung von Schleifen. Eigenes Planen und Testen von Programmen.
<li>Programmverzweigungen, Unterprogramme und parallel laufende Programme (Multitasking), spezielle Programmiertechniken. Interrupts.
<li>Linie fahren. Programmierte Navigation, Mars-Rover sucht Objekte, Farben erkennen, Sprachaufzeichnung, Linien zählen, Roboter zeichnet Figuren (Grafik-Roboter).
<li> Datenleitungen, Variablen speichern und verwenden, Mathe-Block. Zählen, Vergleichen, logische Entscheidungen Treffen, im Raum navigieren, Spiele entwickeln usw.
</ul>
<p>Das Grundprinzip lautet: Es soll vor allem Spaß machen! Das Niveau wird dem Alter der Schüler angepasst.</p>

<h3>Voraussetzungen</h3>
<p>Im Einsteigerkurs sind keine Programmierkenntnisse erforderlich. Du erfährst und lernst alles hier. Du benötigst allerdings Geduld, auch mal Durchhaltevermögen, musst <b>teamfähig sein</b> und solltest <b>Spaß am logischen Denken haben</b>! Im zweiten Kurs sind die grundlegenden Kenntnisse der EV3-Programmierung erforderlich. Er baut auf unsere Einführungskurse auf und eignet sich auch noch für 14-jährige Schüler.</p>

<h3>Bedingungen und Kosten</h3>
<p>Pro Kurs können 10 Personen teilnehmen. Je zwei Teilnehmer programmieren einen Roboter mit dem System LEGO MINDSTORMS Education EV3. Das Material wird während der Kurszeit zur Verfügung gestellt. Die Roboter sind für den Oster-Kurs bereits aufgebaut, so dass mehr Zeit für die Programmierung vorhanden ist.<br>
Die Kursgebühr für den Ferienkurs (10 Zeitstunden) beträgt 40 Euro.</p>

<h3>Termine in den Ferien</h3>
<p>In den Osterferien bieten wir wieder einen Robotik-Workshop an:<br>
Montag 4.4. bis Freitag 8.4.2016 jeweils von 14 bis 16 Uhr.<br>
Teilnehmer:<i> Ferdi, Oskar, Nick, Vincent, Linus, Ben, Caroline, Valerie, Frederic, Sebastian.</i><br>
Wegen der großen Nachfrage haben wir noch einen zweiten Workshop vom 29.3. bis 1.4. eingerichtet.<br>
Teilnehmer:<i> Christian, Lasse, Tim, Leopold, Mark, Florian, Liam.</i><br>
Ein Fortsetzungskurs wird in der letzten Woche der Sommerferien angeboten.
</p>

</div><!-- /rightcol -->
</div><!-- /cols -->
<div class="clear cols">


		<div  class="box bordered nomargin-bottom" id="camp">
	<p class="bildtext"><big><big><b>Robotik-Camp für Schüler der Klassen 6/7</b></big></big> <br><br>
	Im Rahmen des Junioren-Programms der "Route der Industriekultur Rhein-Main" bieten wir vom 4. Juli bis 14. Juli ein Robotik-Camp für Schulen an.
	Hier können interessierte Schüler an einem Tag die Grundlagen der Programmierung von Robotern erlernen und erfahren. Dies geschieht anhand von 3 Modulen. Jeder "Theoriephase" von max. 30 Minuten folgt jeweils eigenes Programmieren und Testen anhand bereits aufgebauter Universal-Roboter.<br>Empfohlener Beginn jeweils um 9 Uhr, Ende ca. 14 Uhr (die Uhrzeiten sind auch veränderbar). Maximale Schülerzahl: 12 </p>
</div>

		<div  class="box bordered nomargin-bottom" id="geburtstag">
	<p class="bildtext"><big><big>Geburtstags-Event für 11- bis 13-Jährige</big></big> <br><br>
	Das technikum29 bietet für Kinder und Jugendliche im Alter von 11 bis 13 Jahren einen Geburtstags-Event der besonderen Art an: <br>
	Zunächst erfolgt eine kurze altersgemäße Führung durch die Epochen der Computerwelten. Hier werden die Kids immer mit einbezogen.<br>
	Nach einer kleinen Pause experimentieren die Kids in Gruppen an wirklich interessanten Projekten die so viel Spaß machen, dass das Ende der "Feier" schwer fällt. 
	Eine abwechslungsreiche und intelligente Alternative zu den sonst üblichen Geburtstagspartys. Dauer ca. 2 bis 2,5 Stunden.</p>
</div>


