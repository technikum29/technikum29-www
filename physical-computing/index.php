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
	<p>Das technikum29 sponsert zur Zeit einen Physical-Computing-Workshop an der Albert-Einstein-Schule (AES) in Schwalbach. Hier werden für Schüler ab Klasse 8 zwei Stunden pro Woche angeboten.<br>
	
	
</div>


SIDEBAR_ENDE;
	
	require "../lib/technikum29.php";
?>

<header class="teaser physical-computing seitenstart">
	<h2>
	Physical-Computing &amp; Robotics
	</h2>
	<img class="no-copyright" src="robotics.jpg">
</header>

<div class="cols clear-after">
<div class="leftcol">

<h3>Grundsätzliches (Didaktik)</h3> 
<p>
Schon immer üben Roboter eine Faszination auf Kinder und Jugendliche aus. Diese Faszination sollte man nutzen, um einen altersgerechten Einstieg in die Programmierung zu ermöglichen.
Im Vergleich zu den ausschließlich am Bildschirm dargestellten virtuellen Simulationen, wie sie im üblichen Informatikunterricht ablaufen, werden hier physikalisch anfassbare Objekte bewegt. Diese interessanten Anwendungen sind für Jugendliche äußerst motivierend. Spielerisches Lernen wird real erfahrbar.<br>
<div class="box center">
	<img src="aes-2.jpg" width="402"  height="301"/> 
	Ob der Sketch läuft?
</div>

Im Workshop "Physical-Computing & Robotics" wird ein Microcontroller mit der physikalischen Außenwelt durch Sensoren und Aktoren verbunden. Diese Controller steuern z.B. intelligent einen Roboter. Bei der Roboter-Programmierung hat man sofort ein greifbares Feedback an dem Jugendliche erkennen können, ob das implementierte Programm läuft oder nicht. Da kann schon mal ein Roboter sprichwörtlich "gegen die Wand fahren".
 Im Laufe des Kurses werden die Aufgaben immer freier lösbar, dadurch wird das eigenverantwortliche Lernen adressiert.<br>
 Erfahrungsgemäß macht den meisten das Lösen der recht offen gestalteten Gesamtaufgaben großen Spaß, da sie hier ihrer Kreativität freien Lauf lassen können.<br>
 
 <div class="box center">
	<img src="t29-3d-drucker.jpg" width="301"  height="286"/> 
	3D-Drucker
</div>
 Für besonders begabte Schülerinnen und Schüler ergibt sich immer die Möglichkeit zusätzlich schwierigere Programmteile einzubauen. Das erhöht das Selbstwertgefühl und schafft eine natürliche ungezwungene Binnendifferenzierung.<br>
 
Ein weiterer Vorteil ist, dass Schüler sowohl mit Hard- als auch Software konfrontiert werden, wobei die Grenzen dieser beiden Welten zunehmend verschwimmen.<br></div><!--/leftcol -->

<div class="rightcol">
<br><br>
Es ist unübersehbar, dass dieser Themenbereich ein hohes Maß an Abwechslung, einen kreativen Freiraum sowie das Erlernen von Teamplaying (Zweierteams) bietet und zudem absolut "up-to-date" ist, eben ein HIGHLIGHT einer Schule.<br>
"Digitale Alphabetisierung ist ein Projekt moderner Aufklärung." [GEO Magazin 12/14: Digital macht schlau!]<br></p>

<h3>Für Schüler</h3> 
<p>
In diesem Workshop, den man auch mit <b>Arduino-Labor</b> oder <b>Wie tickt unsere digitale Welt?</b> bezeichnen könnte, lernst du das Programmieren von Arduino-Microcontrollern. Wir arbeiten zunächst mit dem "UNO" und später mit dem größeren "MEGA". Im Gegensatz zur grafischen Programmierung im Robotik-Workshop (Klasse 6) erfolgt hier die Programmierung in C/C++ bzw. einer stark daran angelehnten Sprache. Geeignet ist der Kurs für Schüler/innen ab der 8. Klasse.

Vorkenntnisse in dieser Programmiersprache sind nicht erforderlich, jedoch solltest du gerne logisch denken, teamfähig und neugierig sein.
Wie in dieser Materie üblich beginnen wir mit der blinkenden LED (Leuchtdiode). Anhand solcher einfachen Sketche (Arduino-Programme) versteht man schnell die Methoden dieser Programmierung. Die Aufgabenstellungen werden durch die Einführung vieler neuer Sensoren immer interessanter, schließlich soll unser Roboter intelligent interagieren können, selbst das Sprechen werden wir ihm beibringen.<br>

<div class="box left">
	<img src="sketch.jpg" width="220"  height="145"/>
<small>Sketch-Ausschnitt</small>	
</div> 

Durch die Einbindung von sogenannten "Libraries" (Programm-Bibliotheken) können wir verblüffende Effekte erzielen, der Spaßfaktor steigt kontinuierlich an. Wer immer mit Erfolg daran teilnimmt, kann von sich behaupten, in der Entwicklung unserer digitalen Welt als Schüler ganz vorne zu stehen. Du leistest etwas Besonderes und setzt eventuell den Grundstein für ein tolles, anspruchsvolles Hobby oder gar für ein späteres Studium.<br>
Wir werden uns auch mit einem vorhandenen <b>3D-Drucker</b> sowie dessen Programmierung beschäftigen. Dann lassen sich u.a. zusätzliche Teile für unsere Roboter-Fahrzeuge herstellen.</p>

<div class="box center">
	<img src="robo.jpg" width="320"  height="200"/> 
<div class="small">Roboter-Fahrzeug (Version 1.0)</div>
</div>
	
Um dir die Möglichkeiten zu geben, auch Zuhause Aufgaben, Analysen und Sketche aus dem Unterricht nachlesen zu können, werden diese hier mit einem Link veröffentlicht.<br>
<br>

</p>

</div><!-- /rightcol -->
</div><!-- /cols -->

<div class="clear"></div>

<header class="teaser-nicht-mobil digitale-denker">
	<h2><big>Club der digitalen Denker</big></h2>
	<img class="no-copyright" src="vorlage-2.jpg"> 
</header>

Hier sind aktuelle (Unterrichts-)Materialien abrufbar, wie kurze Erläuterungen der verwendeten Begriffe und insbesondere Aufgabenstellungen, die laufend erweitert werden. Jeder, der sich dafür interessiert, kann darauf zugreifen. Spezielle Infos, Analysen und Lösungen für Schüler des Clubs sind nur mit Passwort zugänglich.<br><br>

<div class="cols clear-after">
<div class="leftcol">

<a href="/physical-computing/ph1.pdf" target="_blank"><b> Physical-Computing Blatt 1 (PDF)</b></a><br>
<a href="/physical-computing/ph2.pdf" target="_blank"><b> Physical-Computing Blatt 2 (PDF)</b></a><br>
<a href="/physical-computing/ph3.pdf" target="_blank"><b> Physical-Computing Blatt 3 (PDF)</b></a><br>
<a href="/physical-computing/ph4.pdf" target="_blank"><b> Physical-Computing Blatt 4 (PDF)</b></a><br>
<a href="/physical-computing/ph5.pdf" target="_blank"><b> Physical-Computing Blatt 5 (PDF)</b></a><br>
</div>
<div class="rightcol">


<a href="/physical-computing/ph6.pdf" target="_blank"><b> Physical-Computing Blatt 6 (PDF)</b></a><br>
<a href="/physical-computing/A-D_und_PWM.pdf" target="_blank"> Info über analoge Eingänge und PWM (PDF)</a><br>
<!--<a href="/physical-computing/Clock-Fan-Frequenz" target="_blank"> Rotationsgeschwindigkeit der USB-Clock (ino)</a><br>
 <a href="/physical-computing/Ziffernanzeige_mit_button-library" target="_blank"> Ziffernanzeige mit Button-Library (ino)</a><br>
<a href="/physical-computing/Zufallstoene_Bl.5_Aufg.3" target="_blank"> Zufallstöne, Aufgabe 3 von Blatt 5 (ino)</a><br>
<a href="/physical-computing/henry_ampel_korrigiert" target="_blank">  Ampelsketch, Aufgabe 6 von Blatt 5 (ino)</a><br>  -->

</div>
</div>
<br>

<?php $zaun_aes->printAnchor(); ?>

	Infos speziell für Schüler der AES: 
	
	&nbsp;   <?php $zaun_aes->printMiniForm(); ?> &nbsp; <small>(Zuletzt aktualisiert am <b>31.1.2018</b>)</small><br>

	<?php $zaun_aes->start(); ?><br><hr>
	
	<font color="#FF0000"><b>Aktuell:<br><br>
	Neu:</font></b><br>
	Die geschrumpfte AG bietet auch neue Chancen: Ich werde am Montag einen 3D-Drucker mitbringen, der erst einmal an der Schule bleiben kann. Damit haben wir ganz neue Möglichkeiten und könnten die AG auch mit dem Ableger "3-D-Kunstobjekte" o.ä. erweitern.<br>
	Die Einarbeitung in den 3D-Druck ist nicht übermäßig schwer und erweitert unsere Möglichkeiten stark. Wenn es gut läuft, könnte man eventuell noch einen zweiten oder 3. Drucker anschaffen. Voraussetzungen dafür sind jedoch top-engagierte Schüler!! Nur mal hingehen und gucken reicht bei weitem nicht.<br>
	<br>
	
	Zukunft der AG:<br>
	Diese AG einfach zu schließen wurde erst einmal verworfen. Es besteht allgemein ein Interesse an einer Fortführung in einer reduzierten Gruppe wirklich interessierter und engagierter Schüler.
	Die Schwerpunkte werden anders gesetzt: Mehr eigenverantwortliches Handeln durch gegenseitige Hilfe. Nur noch selten frontal-"Unterricht" und wenn, dann nur sehr kurze Phasen.<br>
	Ich stelle euch das Material zur Verfügung und entwerfe das Gerippe für die Inhalte. Ich weise auf Libraries und Lösungsideen im Netz hin und versuche unter eurer Mitsprache Zielsetzungen zu finden. In spontanen Gruppen werden experimentelle Lösungen erarbeitet.<br>
	Vorteil für euch: Mehr Dynamik, eigenverantwortliches, weitgehend selbstbestimmtes Lernen.<br>
	Nachteil: Ihr müsst mehr selbst denken und handeln. Tipps wird es weiterhin geben aber komplette Lösungen zu den "Aufgaben" werdet ihr gemeinschaftlich erarbeiten. Das muss dann natürlich von jemanden zusammengestellt werden. Du bestimmst, wie viel und schnell du lernst. Bedenke aber: Inhaltlich müssen wir schon in etwa parallel laufen.<br>
	Es ist ein Experiment: Kann gelingen, kann aber auch total in die Hose gehen. Du bist selbst verantwortlich!! Es kann spannend werden, ist aber nix für Faulies.
	
	<br><br>
	
	<a href="/physical-computing/theorie.pdf" target="_blank"> <b>Zusammenfassung der Theorie</b></a><br>
	<br>
	<a href="/physical-computing/74HC595_shiftregister_mit_latch.pdf" target="_blank"> <b>Shift-Register mit Latch (PDF)</b></a><br>
	<br>
	
	
 <a href="https://www.heise.de/download/product/arduino-ide-84057/download" target="_blank"> Arduino-Software-Download.</a><br>
	
	<br>Hier die Liste mit Arduino Bauteilen falls du selbst basteln möchtest:<br>
	<a href="/physical-computing/zuhause.pdf" target="_blank"><b> Bezugsquellen (PDF)</b></a><br><br>
	
	
	<?php $zaun_aes->end(); ?>
	
	



