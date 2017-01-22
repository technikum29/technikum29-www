<?php
	$seiten_id = 'physical-computing';
	$version = '$Version$';
	$titel = 'Physical-Computing & Robotics';
	
	$dynamischer_inhalt = true;
	require "../lib/simplepassword.php";
	$zaun = new t29FencedContent('Schulgeheimnisse');
	$zaun->password = "pcs";

$sidebar_content = <<<SIDEBAR_ENDE

<div class="text-block">
Diese Seite ist im Aufbau.
	Sie wurde zuletzt am 22.1.2017 aktualisiert
	
</div>

<div class="spacing"></div>

<div class="bild-block">
	<a href="https://goo.gl/maps/Rq4Ep" title="5min Fußweg vom Bahnhof Kelkheim-Hornau"><img src="../robotik/wegskizze-bahnhof.png" style="width:100%"></a>
	<p class="bildtext">Das technikum29 ist 4 Minuten vom <a href="http://www.rmv.de/auskunft/bin/jp/stboard.exe/dn?input=3004295&time=00:56&maxJourneys=10&dateBegin=28.06.15&dateEnd=12.12.15&selectDate=&productsFilter=1111111111111111&start=yes&dirInput=&view=STATIONINFO">Bahnhof Kelkheim-Hornau</a> entfernt und auch mit Bus 263 gut erreichbar.</p>
</div>

<div class="text-block">
	<strong>Physical-Computing in der Schule:</strong>
	<p>Das technikum29 sponsert zur Zeit einen Physical-Computing-Workshop an folgender Schule: Albert-Einstein-Schule (AES), Schwalbach. Hier werden für die 8. Klassen zwei Stunden pro Woche angeboten und von den Schülern mit Begeisterung angenommen! 
	
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
Im Vergleich zu den ausschließlich am Bildschirm dargestellten virtuellen Simulationen, wie sie im üblichen Informatikunterricht ablaufen, werden hier physikalisch anfassbare Objekte bewegt. Diese interessanten Anwendungen sind für Jugendliche äußerst motivierend. Spielerisches Lernen wird hier Realität.<br>
<div class="box center">
	<img src="aes-4.jpg" width="402"  height="193"/> 
</div>

Im Workshop "Physical-Computing & Robotics" wird ein Microcontroller mit der physikalischen Außenwelt durch Sensoren und Aktoren verbunden. Diese Controller steuern z.B. intelligent einen Roboter. Bei der Roboter-Programmierung hat man sofort ein greifbares Feedback, an dem Jugendliche erkennen können, ob das implementierte Programm läuft oder nicht. Da kann schon mal ein Roboter sprichwörtlich "gegen die Wand fahren".
	<div class="box left">
	<img src="yannik.jpg" width="180"  height="230"/> 
</div>
 Im Laufe des Kurses werden die Aufgaben immer freier lösbar, dadurch wird das eigenverantwortliche Lernen adressiert.<br>
 Erfahrungsgemäß macht den meisten das Lösen der recht offen gestalteten Gesamtaufgaben großen Spaß, da sie hier ihrer Kreativität freien Lauf lassen können.<br>
 Für besonders begabte Schülerinnen und Schüler ergibt sich immer die Möglichkeit zusätzlich schwierigere Programmteile einzubauen. Das erhöht das Selbstwertgefühl und schafft eine natürliche ungezwungene Binnendifferenzierung.<br>
Ein weiterer Vorteil ist, dass Schüler sowohl mit Hard- als auch Software konfrontiert werden, wobei die Grenzen dieser beiden Welten zunehmend verschwimmen.<br>
Es ist unübersehbar, dass dieser Themenbereich ein hohes Maß an Abwechslung, einen kreativen Freiraum sowie das Erlernen von Teamplaying (Zweierteams) bietet und zudem absolut "up-to-date" ist, eben ein HIGHLIGHT einer Schule.<br><br>

</div><!--/leftcol -->

<div class="rightcol">

<h3>Für Schüler</h3> <br>
In diesem Workshop lernst du das Programmieren von Arduino-Microcontrollern. Wir arbeiten zunächst mit dem "UNO" und später mit dem größeren "MEGA". Im Gegensatz zur grafischen Programmierung im Robotik-Workshop (Klasse 6) erfolgt hier die Programmierung in C/C++ bzw. einer stark daran angelehnten Sprache. Vorkenntnisse mit dieser Programmiersprache werden nicht erwartet, jedoch solltest du gerne logisch denken, teamfähig und neugierig sein.
Wie in dieser Materie üblich beginnen wir mit der blinkenden LED (Leuchtdiode). Anhand solcher einfachen Sketche (Arduino-Programme) versteht man schnell die Methoden dieser Programmierung. Die Aufgabenstellungen werden durch die Einführung vieler neuer Sensoren immer interessanter, schließlich soll unser Roboter intelligent interagieren können, selbst das Sprechen werden wir ihm beibringen.<br>
<div class="box left">
	<img src="aes-2.jpg" width="220"  height="262"/> 
</div>


Durch die Einbindung von sogenannten "Libraries" (Programm-Bibliotheken) können wir verblüffende Effekte erzielen, der Spaßfaktor steigt kontinuierlich an. Wer immer mit Erfolg daran teilnimmt, kann von sich behaupten, in der Entwicklung unserer digitalen Welt als Schüler ganz vorne zu stehen. Du leistest etwas Besonderes und setzt eventuell den Grundstein für ein tolles, anspruchsvolles Hobby oder gar für ein späteres Studium.

<div class="box right">
	<img src="arduino.jpg" width="220"  height="171"/> 
</div>

Um dir die Möglichkeiten zu geben, auch Zuhause Aufgaben, Analysen und Sketche aus dem Unterricht nachlesen zu können, werden diese hier mit einem Link veröffentlicht. Ferner findest du hier Links auf andere Seiten, die gegebenenfalls zur Vertiefung oder zum Nacharbeiten geeignet sind.<br>
Für alle "Fremdleser" sei angemerkt, dass dieser Kurs in der Entstehungsphase ist. Noch ist nicht alles perfekt.<br>

</p>

</div><!-- /rightcol -->
</div><!-- /cols -->

<hr>


	<a href="/physical-computing/ph4.pdf"> Physical-Computing Blatt 4 (PDF)</a> &nbsp; <small>Update Version 1.1</small><br>
	<a href="/physical-computing/ph5-2.pdf"> Physical-Computing Blatt 5 (PDF)</a> &nbsp; <small>Update Version 1.2</small><br>
	<a href="/physical-computing/shift-1.pdf"> 74HC595, 8 Bit Schieberegister mit Latch, Sketche und Analysen (PDF)</a>&nbsp; <small>Update Version 1.1</small> <br><br>

	
	<?php $zaun->printAnchor(); ?>
	Speziell für Schüler der AES: &nbsp;  <?php $zaun->printMiniForm(); ?>

	<?php $zaun->start(); ?>
	Texte folgen....
		
	<?php $zaun->end(); ?>

	



