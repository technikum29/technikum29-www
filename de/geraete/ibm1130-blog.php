<?php
	$seiten_id = 'ibm1130-blog';
	$version = '$Id';
	$titel = 'IBM 1130-Reparatur-Blog, Fortsetzung';
	
	require '../../lib/technikum29.php';
?>

<h2><?php print $title; ?></h2>

Den Beginn finden Sie hier: <a href="/de/rechnertechnik/ibm1130.php#blog-ibm"><b> IBM-Blog</b> </a>


<p>
<b>8.1.2014:</b> Der 2. Fehler (6.1.) war relativ schnell gefunden: Im 2. Speichermodul fehlte ein "Headconnector" der entsprechende Verbindungen von den Boards zum Kernspeichermodul herstellt. Vollkommen unklar, wie so ein Teil verschwinden kann.<br>
		Der 1. Fehler ist ein tückischer Fehler in der Speicheradressierung, das ist eine harte Nuss!<br><br>
		
		<b>11.1.2014:</b> Die harte Nuss entpuppt sich als starker Frust! Die Adressrechnung für den Speicher läuft falsch, da der Treiber für die Adressen 11, 12, 13, 14 fehlt. Die verantwortliche Steckkarte 7342 ist nicht vorhanden. Das ist so das Schlimmste, was passieren kann. Nach gründlicher Überprüfung zeigte sich, dass auch das 16-Bit Pufferregister (4628) für den Drucker fehlt.<br><br>
		
		<b>7.6.2014:</b> Die gesuchte Steckkarte 7342 befindet sich nur in Anlagen mit Speichererweiterung. Diese waren viel seltener als die "kleine" IBM 1130 ohne den linksseitigen Tisch-Zusatz. Daher sind sowohl die gesuchte Karte als auch deren Schaltbild nirgends zu erhalten.<br>
		Wir haben das Schaltbild aus den Leiterbahnverläufen und Messungen herausgearbeitet und die Karte nachgebaut. Jetzt läuft der Kernspeicher einwandfrei. Das ist ein deutlicher Fortschritt.<br><br>
		
	<div class="desc-left">
		<a class="popup" href="/shared/photos/rechnertechnik/1130-reparatur.jpg">
	<img src="/shared/photos/rechnertechnik/1130-reparatur.jpg" alt="1130 während der Reparatur" width="391" height="269" /></a>
	<p class="small">So sieht es während der Reparatur aus. Unsichtbar: Messpark und viele gleichzeitig geöffnete Manuals.<br>
	Vergrößern: Bild anklicken!</p></div>
		
		<b>16.6.2014:</b> Nun geht es in großen Schritten voran: Nach der intensiven Reinigung und Justage der Lesestation des Lochkartenlesers (IBM 1442) konnten wir zunächst die 7 "one-Card-Diagnostic" Programme laufen lassen um sicher zu stellen, dass sehr grobe Fehler in der CPU nicht vorhanden sind. Das sind sehr einfache Tests, die auch dann noch laufen, wenn gewisse Fehler vorhanden sind. Diese Tests liefen ohne Probleme. Der nächste größere Diagnostic-Test prüft den Konsoldrucker. Ohne dessen Funktion ist eine Kommunikation mit dem Rechner nicht möglich. Hier zeigt sich, dass der Kugelkopf-Drucker noch einige Defekte aufweist. In der Regel ist es verharztes Öl, was die Funktion stark beeinträchtigt.<br><br>
		
		<b>31.8.2014:</b> Wir möchten uns beim "Verein für ein Museum der Lochkartentechnik": cosecans.ch herzlich für die Überlassung eines Steckkartensatzes für den Prozessor 1131 bedanken. Für eine Reparatur sind solche Ersatzkarten sehr hilfreich.<br>
		Weitere Tests haben ergeben: Der Speicher-Test sowie der CPU-Test laufen korrekt, der Keyboard-Printer-Test jedoch falsch.<br><br>
		
		<b>7.9.2014:</b> Wie schon bei den anderen größeren Anlagen muss man bei der ersten Instandsetzung nach jahrzehntelangem Stillstand mit mehreren Fehlern rechnen. Hier zeigt sich, dass ohne die Diagnostic-Tests eine Reparatur fast unmöglich wäre. Der "Keyboard-Printer-Test" zeigt:<br>
		Errormeldung: "E0001 &nbsp; &nbsp; INVLD" was bedeutet, dass die im Switch-Register eingestellte Adresse für einen speziellen Test ungültig ist. Sie ist jedoch korrekt, wird aber als ungültig identifiziert. Es gibt also noch einiges zu tun.<br><br>
		
		<b>13.9.2014:</b> Die nächste Aktion bestand darin, den Lochkartenstanzer 1442 mit Hilfe des Diagnostic-Tests zu prüfen. Dazu werden vom Programm aus Lochkartenmuster gestanzt, die danach eingelesen und auf korrekte Stanzung kontrolliert werden. Unser Stanzer stanzt jedoch nur die ersten 40 Spalten einer Lochkarte. Hier liegt bereits ein Fehler vor.<br>
		Erstaunlicherweise arbeitet der Konsol-Printer offensichtlich einwandfrei, obwohl beim Konsol-Test eine Fehlermeldung kam, siehe 7.9.<br><br>
		
		<b>20.9.2014:</b> "Erst einmal die Fehler sammeln und weitermachen", nach diesem Prinzip ist nun der Drucker 1132 dran. Hier ist besondere Vorsicht angebracht. Nach einer Standzeit von mindestens 30 Jahren ist das Öl verharzt. Ein Einschalten könnte verheerende Auswirkungen haben. Man muss zunächst alle bewegliche Teile per Hand prüfen. Es zeigte sich, dass die Motorwelle fest sitzt. Dazu wurde der Motor ausgebaut und gangbar gemacht. Nun wurde der gesamte Druckerblock mit Hilfe eines Heizlüfters aufgeheizt und anschließend mit W40 Öl eingesprüht. Dann kann man vorsichtig die Welle drehen. Da jetzt alles leichtgängig ist, lässt sich im noch warmen Zustand der Motor des Druckers einschalten. Die Mechanik läuft ohne merkwürdige Geräusche.<br><br>
		
	
		<p><b>Fortsetzung folgt</b></p>
