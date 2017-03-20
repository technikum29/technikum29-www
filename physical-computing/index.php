<?php
	$seiten_id = 'physical-computing';
	$version = '$Version$';
	$titel = 'Physical-Computing & Robotics';
	
	$dynamischer_inhalt = true;
	require "../lib/simplepassword.php";
	$zaun_aes = new t29FencedContent('Schulgeheimnisse-AES');
	$zaun_aes->password = "pcr";
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
	<p>Das technikum29 sponsert zur Zeit je einen Physical-Computing-Workshop an folgenden Schulen: Albert-Einstein-Schule (AES), Schwalbach sowie an der Eichendorffschule (EDS) in Kelkheim. Hier werden für die 8. Klassen zwei Stunden pro Woche angeboten.
	
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
	<img src="eds-4.jpg" width="402"  height="179"/> 
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
In diesem Workshop, den man auch mit <b>Arduino-Labor</b> bezeichnen könnte, lernst du das Programmieren von Arduino-Microcontrollern. Wir arbeiten zunächst mit dem "UNO" und später mit dem größeren "MEGA". Im Gegensatz zur grafischen Programmierung im Robotik-Workshop (Klasse 6) erfolgt hier die Programmierung in C/C++ bzw. einer stark daran angelehnten Sprache. Vorkenntnisse mit dieser Programmiersprache werden nicht erwartet, jedoch solltest du gerne logisch denken, teamfähig und neugierig sein.
Wie in dieser Materie üblich beginnen wir mit der blinkenden LED (Leuchtdiode). Anhand solcher einfachen Sketche (Arduino-Programme) versteht man schnell die Methoden dieser Programmierung. Die Aufgabenstellungen werden durch die Einführung vieler neuer Sensoren immer interessanter, schließlich soll unser Roboter intelligent interagieren können, selbst das Sprechen werden wir ihm beibringen.<br>
<div class="box left">
	<img src="aes-2.jpg" width="220"  height="262"/> 
</div>


Durch die Einbindung von sogenannten "Libraries" (Programm-Bibliotheken) können wir verblüffende Effekte erzielen, der Spaßfaktor steigt kontinuierlich an. Wer immer mit Erfolg daran teilnimmt, kann von sich behaupten, in der Entwicklung unserer digitalen Welt als Schüler ganz vorne zu stehen. Du leistest etwas Besonderes und setzt eventuell den Grundstein für ein tolles, anspruchsvolles Hobby oder gar für ein späteres Studium.<br>
Falls noch genügend Zeit vorhanden ist, werden wir uns auch mit einem vorhandenen 3D-Drucker sowie dessen Programmierung beschäftigen. Dann lassen sich u.a. zusätzliche Teile für unsere Roboter-Fahrzeuge herstellen.

<div class="box right">
	<img src="arduino.jpg" width="220"  height="171"/> 
</div>

Um dir die Möglichkeiten zu geben, auch Zuhause Aufgaben, Analysen und Sketche aus dem Unterricht nachlesen zu können, werden diese hier mit einem Link veröffentlicht. Ferner findest du hier Links auf andere Seiten, die gegebenenfalls zur Vertiefung oder zum Nacharbeiten geeignet sind.<br>
Für alle "Fremdleser" sei angemerkt, dass dieser Kurs in der Entstehungsphase ist. Noch ist nicht alles perfekt.<br>

</p>

</div><!-- /rightcol -->
</div><!-- /cols -->

<hr>
<div class="cols clear-after">

<div class="leftcol">

	<a href="/physical-computing/ph1.pdf"> Physical-Computing Blatt 1 (PDF)</a><br>
	<a href="/physical-computing/ph2.pdf"> Physical-Computing Blatt 2 (PDF)</a><small> &nbsp; Update Version 1.2</small><br>
	
	</div>
<div class="rightcol">	
	
	<a href="/physical-computing/ph3.pdf"> Physical-Computing Blatt 3 (PDF)</a><br>
	<a href="/physical-computing/ph4.pdf"> Physical-Computing Blatt 4 (PDF)</a>
	 <br><br>
	 </div>
	 </div>
	
	<?php $zaun_aes->printAnchor(); ?>
	Speziell für Schüler der AES: &nbsp;   <?php $zaun_aes->printMiniForm(); ?> &nbsp; <small>(Zuletzt aktualisiert am 19.3.2017)</small><br><br>

	<?php $zaun_aes->start(); ?>
	
	<a href="/physical-computing/ph6.pdf"> Physical-Computing Blatt 6 (PDF)</a> &nbsp; <small>Update Version 1.5</small><br>
	<a href="/physical-computing/ph7.pdf"> Physical-Computing Blatt 7 (PDF)</a> &nbsp; <small>Update Version 1.1</small><br>
	<a href="/physical-computing/ph8.pdf"> Physical-Computing Blatt 8 (PDF)</a> &nbsp; <small>Update Version 1.3</small><br>
	<a href="/physical-computing/Analysen-3.pdf"> Analysen-3: Manuelles Einlesen in TM1638, LED & KEY</a> 
	<br><br>
	Im Moment bin ich etwas ratlos, wie es weiter gehen soll. Einige Schüler bringen einfach nicht die notwendige Konzentration auf, um etwas schwierigere Sketches zu verstehen.
	Die Gruppe wird wohl noch etwas schrumpfen und wir müssen damit leben, dass der Niveau-Unterschied sehr groß bleibt.<br>
	Dann soll halt für die Restlaufzeit gelten: Die mit "für Profis" gekennzeichneten Aufgabenstellungen müssen nicht unbedingt verstanden werden. Wir werden sie auch nicht mehr besprechen, sondern nur die Lösungen hier einstellen.
	Toll wäre es natürlich, wenn ein Ehrgeiz entsteht, es doch zu kapieren......bei manchen Schülern habe ich aber das Gefühl "dabei sein" reicht ihnen völlig aus. Naja.<br>
	Die Analyse "Keyboard mit Buttons aus LED & KEY" wird demnächst hier eingestellt.<br>
	
	<br>
	
	Hier noch die Sketches zur Anwendung des Moduls: LED & KEY. Für die spätere Anwendung lohnt es sich schon, mal in die Sketches reinzuschauen!<br><br>
	<a href="/physical-computing/TM1638-1"> TM1638-1</a>, manuelles Einlesen von Daten<br>
	<a href="/physical-computing/TM1638-1_dominik">  TM1638-1_dominik</a>, komfortables manuelles Einlesen von Daten (Dominik + Victor)<br>
	<a href="/physical-computing/TM1638-zaehler-text">  TM1638-zaehler-text</a>, Zahlen und anschließend Text anzeigen<br>
	<a href="/physical-computing/TM1638_Lauftext"> TM1638_Lauftext </a>, Lauftext anzeigen<br>
	<a href="/physical-computing/Text-und-Zahl"> Text-und-Zahl</a>, Text und Zahl (Variable) gleichzeitig anzeigen<br><br>
	<!--  <font color="silver"><hr> -->
	
	<hr>	<br>
	
	<?php $zaun_aes->end(); ?>

	<?php $zaun_eds->printAnchor(); ?>
	Speziell für Schüler der EDS: &nbsp;   <?php $zaun_eds->printMiniForm(); ?> &nbsp; <small>(Zuletzt aktualisiert am 18.3.2017)</small><br>

	<?php $zaun_eds->start(); ?>
	<br><hr>
	Für alle Schüler, die Zuhause selbst mit Arduino experimentieren möchten befinden sich hier ein paar Tipps:<br><br>
	<a href="/physical-computing/zuhause.pdf"> Infos, Bezugsquellen, Preise usw. für Arduino Zuhause.....</a><br><br>
	Die Aufgabenblätter sind nicht passwortgeschützt und stehen oben.<br>
	
	
	<?php $zaun_eds->end(); ?>
	



