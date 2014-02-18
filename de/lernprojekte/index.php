<?php
	$seiten_id = 'lernprojekte';
	$version = '$Id$';
	$titel = 'Lernprojekte';
	
	require "../../lib/technikum29.php";
?>
 <h2>Lernprojekte</h2>

<p>Die <i>technikum29-Lernprojekte</i> sind u.a. eine Sammlung von Präsentationsdateien, die zum Teil nur gegen Passworteingabe zugänglich sind. 

Bei Problemen beim Zugriff wenden sie sich an <a href="/de/impressum.php">das Projektmanagament</a>.</p>

<h3 id="aes"> Das technikum29-Team unterstützt Projekte an der Schule</h3>

<p>Microcontroller revolutionieren die Welt, wie an Schulen zukunftsweisende Projekte geplant und ausgeführt werden können.<br>
Worum geht es? <br>
6 Schüler der Q1 (früher 12. Klasse) des Albert-Einstein-Gymnasiums in Schwalbach suchten für ihre Projektwoche ein interessantes Thema aus den Gebieten Physik/Mathematik/Informatik. Hier bot sich eine Zusammenarbeit der Schule mit dem technikum29  an.  
Ziel war es, die Technik der 50er Jahre an die aktuelle Zeit anzubinden: Eine Kommunikation zwischen eigentlich nicht zusammenpassenden  Welten!<br>
<div class="box left">
        <img src="/shared/photos/kommunikationstechnik/arduino1.jpg" width="606" height="335" />
       </div>
<p>Um eine solche Kommunikation herzustellen bedurfte es bisher eines „Herrschaftswissens“ welches sich auf wenige spezialisierte Informatiker und Ingenieure beschränkte. Dafür musste man wochenlang Datenblätter lesen und dann kryptische Codes in Assembler schreiben.
Seit 2009 gibt es ein preiswertes unscheinbares Modul, den „Arduino* -Controller“, ein kleiner Microcontroller (ATmega 328, mit 32 kB Speicher), der auch relativen Laien  mit überschaubaren Programmierkenntnissen zugänglich ist.  Hiermit können Erfinder, Visionäre, Künstler und Designer ihre kreativen Möglichkeiten drastisch erhöhen. Es geht ganz allgemein um die Anbindung der realen, physikalischen Welt an einen Computer. <br>
	 
<p>Dieses kleine Modul lässt sich als Interface für alle nur denkbare Zwecke programmieren. Die Schüler beabsichtigten, ein Faxgerät der Frühzeit (Siemens KF108, Baujahr 1956) mit einem PC kommunizieren zu lassen. Bei diesem Fax, damals noch „Fernkopierer“ genannt, wird das Blatt mit der zu übertragenden Information (z.B. ein Bild) auf eine Walze gespannt und schraubenförmig durch Rotation ab gescannt. Ein solches Gerät kann natürlich mit den Heutigen nicht kommunizieren. Hier hilft der Microcontroller als Bindeglied. Die Schüler mussten sich in die Programmierung eines solchen Controllers einarbeiten. Dabei sind jedoch einige Hürden zu überwinden, schließlich waren die Schüler (noch) keine Star-Programmierer. Während falsch aufgebaute Hardware umständlich zerpflückt werden müsste, sind falsch laufende Programme schnell korrigiert. Und so entstand nach einer Woche Projektarbeit die perfekte Anbindung dieser zwei so verschiedenen Technikwelten.<br>

<div class="box left">
        <img src="/shared/photos/kommunikationstechnik/arduino2.jpg" width="606" height="354" />
       </div>
 <p>Das Fax sendet eine Tonfrequenz von 1,5 kHz beim scannen schwarzer Pixel und keinen Ton bei weißen Pixel. Dies muss in ein binäres Signal mit 5V-Level gewandelt werden.<br>
Eine Verstärkerschaltung mit nachgeschaltetem RC-Glied übernimmt diesen Part.
Zum Aufbau des Bildes wird noch eine Information für den jeweiligen Beginn einer neuen Zeile benötigt. Dies wurde durch das Befestigen eines kleinen Supermagneten an der Drehachse realisiert. Ein in ca. 2cm Entfernung befindlicher Reedkontakt wird bei jeder Umdrehung für kurze Zeit aktiviert.<br>
Die eigentliche Programmierarbeit wurde von den Schülern selbst entwickelt und kann hier eingesehen werden. <a href="arduino-projekt-programme" class="go">Source-Code-Ordner öffnen</a> <br>

Gemächlich wird das schraubenförmig abgetastete Bild in Realtime auf den PC übertragen. Mit guter Auflösung zeichnet sich Zeile für Zeile eine historische Micky-Mouse auf dem Monitor des Laptops ab. Das Experiment ist geglückt und macht Mut zu weiteren kreativen Anwendungen dieser zukunftsweisenden Technik.</p>
<p class="small">
*)  Arduino: …ist nach dem König „Arduino von Ivrea“, der im Mittelalter in Norditalien lebte, benannt. Dort wurde auch der Controller entwickelt und nicht wie sonst üblich in Fernost oder Silicon Valley.
</small>

<h3 id="demo">Siemens Demo-Computer</h3>
	
	<div class="box center">
        <img src="/shared/photos/rechnertechnik/siemens-democomputer.jpg" alt="Siemens-Democomputer" width="700" height="587" class="nomargin-bottom" />
		<p class="center"><b>Siemens Lern-Computer</b></p>
	</div>
	<p>Im Jahre 1973, als Computer noch nicht in der Privatsphäre existent waren und Techniker sowie Ingenieure erst auf diese neuen Errungenschaften geschult wurden, entstand das obige Demonstrationsmodell.<br>
	Das recht große Gerät wurde in kleiner Stückzahl für die Ausbildung in der gerade aufblühenden Informatik gebaut. Mit ihm lassen sich noch heute die Vorgänge beim Ablauf von Zyklen und Befehlen sehr anschaulich beobachten. Die Wortbreite mit 4 Bit ist zwar spärlich, dafür bleibt aber die Übersicht gewahrt.<br>
	Links lässt sich das Programm mit Hilfe von Steckmodulen generieren. Anhand der Stecker ist sofort die entsprechende Binärkombination ablesbar (quasi eine Übersetzung vom mnemotechnischen Assemblercode auf den Binärcode der Maschine). Der "Rechner" kann im Befehlsmodus oder im Zyklenmodus arbeiten. Dabei sind verschiedene Taktfrequenzen oder eine Einzelauslösung einstellbar. 126 Lämpchen zeigen die Datenflüsse sowie den Status von Registern, Steuerung, Rechenwerk und Arbeitsspeicher an. Das Demomodell entspricht in seiner Gesamtheit einem programmgesteuerten Digitalrechner mit Parallelverarbeitung.<br>
	Hier ist ein Programm für die "binäre Addition mit gekoppelten Arbeitsspeicherzellen" gesteckt. Es zeigt, dass die Binärstellenzahl eines Datenwortes nicht unbedingt eine Beschränkung der Zahlenmenge zur Folge hat.<br>
	Ein wunderbares Gerät, mit welchem man die Vorgänge elementar verstehen kann, die sich auch heute noch in jedem Computer abspielen.<br>
	Die Dokumentation hierzu finden Sie in der untenstehenden Tabelle.</p>

<div class="box center">
<h3>Liste anderer Projekte</h3>
<p>Jedes Projekt ist möglicherweise mit einer eigenen Benutzer/Passwort-Kombination gesichert.
<br><b>Als Benutzer ist stets der Name des Projekts </b>(kleingeschrieben)<b> einzugeben!</b></p>

<table>
<tr><th><a href="/de/geraete/pianola-funktionserklaerung/">Pianola</a>          <td>Funktionserklärung und Entwurf einer Präsentation
<tr><th><a href="schach">Schach</a>            <td>Anleitung für ein Schachspiel gegen den PDP 8 Computer mit 8KB Arbeitsspeicher (freier Zugriff, kein Passwort erforderlich)
<tr><th><a href="speichermedien">Speichermedien</a>   <td>Entwurf einer Präsentation über historische Speichermedien
<tr><th><a href="telegrafie">Telegrafie</a>   <td>Präsentationsentwurf für Telegrafie, Bildtelegrafie und Faximiletechnik

<tr><th><a href="nipkow">Nipkow</a>            <td>Präsentation, welche die physikalischen Grundlagen und Techniken des Fernsehens nach Paul Nipkow zeigt
<tr><th><a href="lerncomputer">Demo-Computer</a><td>Dokumentation des Siemens Lern-Computers (kein Passwort erforderlich)
</table>

</div><!--box-->

<!-- Fussbereich -->
<div style="text-align:right;"><a href="http://www.technikum29.de/projekte/admin/">Administration der Projekte (online)</a></div>
