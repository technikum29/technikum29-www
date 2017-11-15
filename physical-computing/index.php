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

<header class="teaser physical-computing seitenstart">
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
	<img src="aes-2.jpg" width="402"  height="301"/> 
	Ob der Sketch läuft?
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

<div class="box center">
	<img src="pcr-4.jpg" width="402"  height="150"/> 
</div>

<p>
Vorkenntnisse in dieser Programmiersprache sind nicht erforderlich, jedoch solltest du gerne logisch denken, teamfähig und neugierig sein.
Wie in dieser Materie üblich beginnen wir mit der blinkenden LED (Leuchtdiode). Anhand solcher einfachen Sketche (Arduino-Programme) versteht man schnell die Methoden dieser Programmierung. Die Aufgabenstellungen werden durch die Einführung vieler neuer Sensoren immer interessanter, schließlich soll unser Roboter intelligent interagieren können, selbst das Sprechen werden wir ihm beibringen.<br>

Durch die Einbindung von sogenannten "Libraries" (Programm-Bibliotheken) können wir verblüffende Effekte erzielen, der Spaßfaktor steigt kontinuierlich an. Wer immer mit Erfolg daran teilnimmt, kann von sich behaupten, in der Entwicklung unserer digitalen Welt als Schüler ganz vorne zu stehen. Du leistest etwas Besonderes und setzt eventuell den Grundstein für ein tolles, anspruchsvolles Hobby oder gar für ein späteres Studium.<br>
Falls noch genügend Zeit vorhanden ist, werden wir uns auch mit einem vorhandenen 3D-Drucker sowie dessen Programmierung beschäftigen. Dann lassen sich u.a. zusätzliche Teile für unsere Roboter-Fahrzeuge herstellen.</p>

<div class="box center">
	<img src="robo.jpg" width="320"  height="200"/> 
<div class="small">Roboter-Fahrzeug (noch nicht fertig!)</div>
</div>
	
Um dir die Möglichkeiten zu geben, auch Zuhause Aufgaben, Analysen und Sketche aus dem Unterricht nachlesen zu können, werden diese hier mit einem Link veröffentlicht. Ferner findest du Links auf andere Seiten, die gegebenenfalls zur Vertiefung oder zum Nacharbeiten geeignet sind.<br>
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
<a href="/physical-computing/ph5.pdf" target="_blank"><b> Physical-Computing Blatt 5 (PDF)</b></a><br><br>
</div>
<div class="rightcol">

<a href="/physical-computing/A-D_und_PWM.pdf" target="_blank"><b> Info über analoge Eingänge und PWM (PDF)</b>

</div>
</div>
<br>

<?php $zaun_aes->printAnchor(); ?>

	Infos speziell für Schüler der AES: 
	
	&nbsp;   <?php $zaun_aes->printMiniForm(); ?> &nbsp; <small>(Zuletzt aktualisiert am 15.11.2017)</small><br>

	<?php $zaun_aes->start(); ?><br><hr>
	<b>Aktuell</b>:<br>
	Wir werden die AG umstrukturieren müssen. Zurzeit läuft es ineffizient. Bedenke, wie (wenig) weit wir in der letzten Stunde gekommen sind!<br>
	Verhaltensauffällige Schüler werden den Kurs verlassen müssen. In kleinerer Runde werden wir komplett anders "arbeiten". Näheres erfährst du in der nächsten Stunde.<br><br>
	Das Aufgabenblatt 4 ist um die Info "busy-waiting" erweitert worden. Wäre toll, wenn du dir das mal anschauen würdest.<hr>
	
	
	Vom 13.11.: Der Beginn um 13:50 Uhr hat sich nicht bewährt. Also bleibt es bei 14:00 Uhr.<br>
	Nach wie vor der Appell: Tu´was! Die 90 Minuten in der AES reichen nicht! Nur mit Durchblick macht die AG Spaß. Du musst dir zunächst die Arduino-Software installieren. Die erhältst du kostenlos z.B. hier: <a href="https://www.heise.de/download/product/arduino-ide-84057/download" target="_blank"> Arduino-Software-Download.</a><br>
	
	Damit kannst du den erläuterten Sketch für das Hochzählen unserer Ziffernanzeige öffnen (möglicherweise geht es auch ohne die Arduino-Software):<br>
	<a href="/physical-computing/Ziffernanzeige_mit_zweidim_Array"> <b>Sketch für die Ziffernanzeige</b></a><br>
	<hr>
	
	
	<br>Hier die Liste mit Arduino Bauteilen falls du selbst basteln möchtest:<br>
	<a href="/physical-computing/zuhause.pdf" target="_blank"><b> Bezugsquellen (PDF)</b></a><br><br>
	
	
	<?php $zaun_aes->end(); ?>
	
	



