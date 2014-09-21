<?php
	$seiten_id = 'ibm1130-blog';
	$version = '$Id';
	$titel = 'IBM 1130-Blog, Fortsetzung';
	
	require '../../lib/technikum29.php';
?>

<h2><?php print $title; ?></h2>


<p class="small">
<b>8.1.2014:</b> Der 2. Fehler (6.1.) war relativ schnell gefunden: Im 2. Speichermodul fehlte ein (von 18) "Headconnector" der entsprechende Verbindungen von den Boards zum Kernspeichermodul herstellt. Vollkommen unklar, wie so ein Teil verschwinden kann.<br>
		Der 1. Fehler ist ein tückischer Fehler in der Speicheradressierung, das ist eine harte Nuss!<br><br>
		
		<b>11.1.2014:</b> Die harte Nuss entpuppt sich als starker Frust! Die Adressrechnung für den Speicher läuft falsch, da der Treiber für die Adressen 11, 12, 13, 14 fehlt. Die verantwortliche Steckkarte 7342 ist nicht vorhanden. Das ist so das Schlimmste, was passieren kann. Nach gründlicher Überprüfung zeigte sich, dass auch das 16-Bit Pufferregister (4628) für den Drucker fehlt.<br><br>
		
		<b>7.6.2014:</b> Die gesuchte Steckkarte 7342 befindet sich nur in Anlagen mit Speichererweiterung. Diese waren viel seltener als die "kleine" IBM 1130 ohne den linksseitigen Tisch-Zusatz. Daher sind sowohl die gesuchte Karte als auch deren Schaltbild nirgends zu erhalten.<br>
		Wir haben das Schaltbild aus den Leiterbahnverläufen und Messungen herausgearbeitet und die Karte nachgebaut. Nun läuft der Kernspeicher einwandfrei. Das ist ein deutlicher Fortschritt.<br><br>
		
		<b>16.6.2014:</b> Nun geht es in großen Schritten voran: Nach der intensiven Reinigung und Justage der Lesestation des Lochkartenlesers (IBM 1442) konnten wir zunächst die 7 "one-Card-Diagnostic" Programme laufen lassen um sicher zu stellen, dass sehr grobe Fehler in der CPU nicht vorhanden sind. Das sind sehr einfache Tests, die auch dann noch laufen, wenn gewisse Fehler vorhanden sind. Diese Tests liefen ohne Probleme. Der nächste größere Diagnostic-Test prüft den Konsoldrucker. Ohne dessen Funktion ist eine Kommunikation mit dem Rechner nicht möglich. Hier zeigt sich, dass der Kugelkopf-Drucker noch einige Defekte aufweist. In der Regel ist es verharztes Öl, was die Funktion stark beeinträchtigt.<br><br>
		
		<b>31.8.2014:</b> Wir möchten uns beim "Verein für ein Museum der Lochkartentechnik": cosecans.ch herzlich für die Überlassung eines Steckkartensatzes für den Prozessor 1131 bedanken. Für eine Reparatur sind solche Ersatzkarten sehr hilfreich.<br>
		Weitere Tests haben ergeben: Der Speicher-Test sowie der CPU-Test laufen korrekt, der Keyboard-Printer-Test jedoch falsch.<br><br>
		
		<b>7.9.2014:</b> Wie schon bei den anderen größeren Anlagen muss man bei der ersten Instandsetzung nach jahrzehntelangem Stillstand Rückschläge hinnehmen. Wir haben es noch mit mindestens 2 Fehlern zu tun. Hier zeigt sich, dass ohne die Diagnostic-Tests eine Reparatur fast unmöglich wäre. Alleine der "Keyboard-Printer-Test" zeigt:<br>
		Fehler 1: Nach längerer Betriebszeit kommt beim erneutem Laden der Programme (auf Lochkarten) die Meldung auf der Konsol-Schreibmaschine<br>
		"E0004 &nbsp; &nbsp; CKSUM"<br>
		was bedeutet, dass nach dem Lesen der Karten die von der CPU berechnete Prüfsumme nicht mit der vorgegebenen übereinstimmt.<br>
		Fehlerursachen: Eine Karte im Stapel fehlt/ist zuviel/ist vertauscht, Leser 1442 liest falsch, die CPU 1131 berechnet die Prüfsumme falsch. Hier kommen nur die beiden letzten Ursachen in Betracht.<br>
		Fehler 2 mit folgender Meldung:<br>
		"E0001 &nbsp; &nbsp; INVLD"<br>
		was bedeutet, dass die im Switch-Register eingestellte Adresse für einen speziellen Test ungültig ist. Sie ist jedoch korrekt, wird aber als ungültig identifiziert. Es gibt also noch einiges zu tun.
		
		</small>
		<p>Fortsetzung folgt</p>
