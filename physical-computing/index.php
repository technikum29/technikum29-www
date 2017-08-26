<?php
	$seiten_id = 'physical-computing';
	$version = '$Version$';
	$titel = 'Physical-Computing & Robotics';
	
	$dynamischer_inhalt = true;
	require "../lib/simplepassword.php";
	$zaun_aes = new t29FencedContent('Schulgeheimnisse-AES');
	$zaun_aes->password = "+aes+";
	$zaun_eds = new t29FencedContent('Schulgeheimnisse-EDS');
	$zaun_eds->password = "1eds2";

$sidebar_content = <<<SIDEBAR_ENDE

<div class="text-block">

	
</div>

<div class="spacing"></div>

<div class="bild-block">
	<a href="https://goo.gl/maps/Rq4Ep" title="5min Fußweg vom Bahnhof Kelkheim-Hornau"><img src="../robotik/wegskizze-bahnhof.png" style="width:100%"></a>
	<p class="bildtext">Das technikum29 ist 4 Minuten vom <a href="http://www.rmv.de/auskunft/bin/jp/stboard.exe/dn?input=3004295&time=00:56&maxJourneys=10&dateBegin=28.06.15&dateEnd=12.12.15&selectDate=&productsFilter=1111111111111111&start=yes&dirInput=&view=STATIONINFO">Bahnhof Kelkheim-Hornau</a> entfernt und auch mit Bus 263 gut erreichbar.</p>
</div>

<div class="text-block">
	<strong>Physical-Computing in der Schule:</strong>
	<p>Das technikum29 sponsert zur Zeit einen Physical-Computing-Workshop an der Albert-Einstein-Schule (AES) in Schwalbach. Hier werden für die 8. Klassen zwei Stunden pro Woche angeboten und mit Begeisterung angenommen.<br>
	
	
</div>


SIDEBAR_ENDE;
	
	require "../lib/technikum29.php";
?>

<header class="teaser physical-computing">
	<h2>
	Physical-Computing &amp; Robotics
	</h2>
	<img class="no-copyright" src="robotics.jpg">
</header>


<div class="cols clear-after">

<div class="leftcol">

<p><h3>Grundsätzliches (Didaktik)</h3> <br>

Schon immer üben Roboter eine Faszination auf Kinder und Jugendliche aus. Diese Faszination sollte man nutzen, um einen altersgerechten Einstieg in die Programmierung zu ermöglichen.
Im Vergleich zu den ausschließlich am Bildschirm dargestellten virtuellen Simulationen, wie sie im üblichen Informatikunterricht ablaufen, werden hier physikalisch anfassbare Objekte bewegt. Diese interessanten Anwendungen sind für Jugendliche äußerst motivierend. Spielerisches Lernen wird real erfahrbar.<br>
<div class="box center">
	<img src="eds-4.jpg" width="402"  height="179"/> 
</div>

Im Workshop "Physical-Computing & Robotics" wird ein Microcontroller mit der physikalischen Außenwelt durch Sensoren und Aktoren verbunden. Diese Controller steuern z.B. intelligent einen Roboter. Bei der Roboter-Programmierung hat man sofort ein greifbares Feedback an dem Jugendliche erkennen können, ob das implementierte Programm läuft oder nicht. Da kann schon mal ein Roboter sprichwörtlich "gegen die Wand fahren".
	<div class="box left">
	<img src="sketch.jpg" width="220"  height="145"/>
<small>Sketch-Ausschnitt</small>	
</div>  
 Im Laufe des Kurses werden die Aufgaben immer freier lösbar, dadurch wird das eigenverantwortliche Lernen adressiert.<br>
 Erfahrungsgemäß macht den meisten das Lösen der recht offen gestalteten Gesamtaufgaben großen Spaß, da sie hier ihrer Kreativität freien Lauf lassen können.<br>
 Für besonders begabte Schülerinnen und Schüler ergibt sich immer die Möglichkeit zusätzlich schwierigere Programmteile einzubauen. Das erhöht das Selbstwertgefühl und schafft eine natürliche ungezwungene Binnendifferenzierung.<br>
Ein weiterer Vorteil ist, dass Schüler sowohl mit Hard- als auch Software konfrontiert werden, wobei die Grenzen dieser beiden Welten zunehmend verschwimmen.<br>
Es ist unübersehbar, dass dieser Themenbereich ein hohes Maß an Abwechslung, einen kreativen Freiraum sowie das Erlernen von Teamplaying (Zweierteams) bietet und zudem absolut "up-to-date" ist, eben ein HIGHLIGHT einer Schule.<br>
"Digitale Alphabetisierung ist ein Projekt moderner Aufklärung." [GEO Magazin 12/14: Digital macht schlau!]<br></p>

</div><!--/leftcol -->

<div class="rightcol">

<h3>Für Schüler</h3> <br>
In diesem Workshop, den man auch mit <b>Arduino-Labor</b> oder <b>Wie tickt unsere digitale Welt?</b> bezeichnen könnte, lernst du das Programmieren von Arduino-Microcontrollern. Wir arbeiten zunächst mit dem "UNO" und später mit dem größeren "MEGA". Im Gegensatz zur grafischen Programmierung im Robotik-Workshop (Klasse 6) erfolgt hier die Programmierung in C/C++ bzw. einer stark daran angelehnten Sprache. Geeignet ist der Kurs für Schüler/innen ab der 8. Klasse.
<br>Vorkenntnisse in dieser Programmiersprache sind nicht erforderlich, jedoch solltest du gerne logisch denken, teamfähig und neugierig sein.
Wie in dieser Materie üblich beginnen wir mit der blinkenden LED (Leuchtdiode). Anhand solcher einfachen Sketche (Arduino-Programme) versteht man schnell die Methoden dieser Programmierung. Die Aufgabenstellungen werden durch die Einführung vieler neuer Sensoren immer interessanter, schließlich soll unser Roboter intelligent interagieren können, selbst das Sprechen werden wir ihm beibringen.<br>
<div class="box left">
	<img src="eds-2.jpg" width="220"  height="223"/> 
</div>


Durch die Einbindung von sogenannten "Libraries" (Programm-Bibliotheken) können wir verblüffende Effekte erzielen, der Spaßfaktor steigt kontinuierlich an. Wer immer mit Erfolg daran teilnimmt, kann von sich behaupten, in der Entwicklung unserer digitalen Welt als Schüler ganz vorne zu stehen. Du leistest etwas Besonderes und setzt eventuell den Grundstein für ein tolles, anspruchsvolles Hobby oder gar für ein späteres Studium.<br>
Falls noch genügend Zeit vorhanden ist, werden wir uns auch mit einem vorhandenen 3D-Drucker sowie dessen Programmierung beschäftigen. Dann lassen sich u.a. zusätzliche Teile für unsere Roboter-Fahrzeuge herstellen.

<div class="box left">
<a href="/physical-computing/robo.jpg">
	<img src="robo.jpg" width="250"  height="156"/> 
	<small>Roboter-Fahrzeug<br></a>(noch nicht fertig!)</small>

</div>
		
Um dir die Möglichkeiten zu geben, auch Zuhause Aufgaben, Analysen und Sketche aus dem Unterricht nachlesen zu können, werden diese hier mit einem Link veröffentlicht. Ferner findest du Links auf andere Seiten, die gegebenenfalls zur Vertiefung oder zum Nacharbeiten geeignet sind.<br>
<br>




</p>

</div><!-- /rightcol -->
</div><!-- /cols -->

<hr>
<div class="cols clear-after"><br>

Aktuelle Materialien:<br>
<a href="/physical-computing/ph1.pdf" target="_blank"> Physical-Computing Blatt 1 (PDF)</a><br><br>

<?php $zaun_aes->printAnchor(); ?>

	Infos speziell für Schüler der AES: 
	
	&nbsp;   <?php $zaun_aes->printMiniForm(); ?> &nbsp; <small>(Zuletzt aktualisiert am 26.8.2017)</small><br>

	<?php $zaun_aes->start(); ?>
	
	<br>Dies ist nur ein Text zum Testen!!
	<hr>
	
	<?php $zaun_aes->end(); ?>
	
<br>	
	

<?php $zaun_eds->printAnchor(); ?>

	Infos speziell für Schüler der EDS: 
	
	&nbsp;   <?php $zaun_eds->printMiniForm(); ?> &nbsp; <small>(Zuletzt aktualisiert am 24.8.2017)</small><br>

	<?php $zaun_eds->start(); ?>
<!--     <div class="leftcol">

<br>

	<a href="/physical-computing/ph2.pdf" target="_blank"> Physical-Computing Blatt 2 (PDF)</a><br>
	<a href="/physical-computing/ph3.pdf" target="_blank"> Physical-Computing Blatt 3 (PDF)</a><br>
	<a href="/physical-computing/ph4.pdf" target="_blank"> Physical-Computing Blatt 4 (PDF)</a><br>
	</div>
	
<div class="rightcol"><br>	
	
	<a href="/physical-computing/ph5.pdf" target="_blank"> Physical-Computing Blatt 5 (PDF)</a><br>
	<a href="/physical-computing/ph6.pdf" target="_blank"> Physical-Computing Blatt 6 (PDF)</a><br>
	<a href="/physical-computing/ph7.pdf" target="_blank"> Physical-Computing Blatt 7 (PDF, LED&KEY))</a>
	 <br><br>
	 </div>
	 </div>
	-->
	<br>
	Während an der AES ein Run auf "Physical-Computing" ist, interessiert sich an der EDS aus der 8. Klasse niemand hierfür. Die restlichen Teilnehmer der "alten" Gruppe können donnerstags nicht mehr. Es wird sehr schwierig, hier einen neuen Termin zu finden. Ich könnte nur noch den Mittwoch anbieten, wenn die Gruppe als untere Schmerzgrenze aus mind. 4-5 Schülern bestehen würde. Bitte weiter sagen und mir eine Mail schicken!
	<hr>
	<?php $zaun_eds->end(); ?>
	



