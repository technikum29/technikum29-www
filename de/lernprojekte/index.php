<?php
	$seiten_id = 'lernprojekte';
	$version = '$Id$';
	$titel = 'Lernprojekte';
	
	require "../../lib/technikum29.php";
?>
 <h2>Lernprojekte</h2>


<h3 id="aes"> Rotationsfax der 50er Jahre sendet Bild an einen Laptop</h3>

<p>Microcontroller revolutionieren die Welt, wie an Schulen zukunftsweisende Projekte geplant und ausgeführt werden können.<br>
Worum geht es? <br>
5 Schüler der Q1 des Albert-Einstein-Gymnasiums suchten für ihre Projektwoche ein interessantes Thema aus den Gebieten Physik/Mathematik/Informatik. Hier bot sich eine Zusammenarbeit der Schule mit dem technikum29 an.  
Ziel war es, die Technik der 50er Jahre an die aktuelle Zeit anzubinden: Eine Kommunikation zwischen eigentlich nicht zusammenpassenden  Welten!
<div class="box left">
        <img src="/shared/photos/kommunikationstechnik/arduino1.jpg" width="303" height="189" />
       </div>
<p>Im Rahmen von "Physical-Computing" gibt es seit 2009 ein preiswertes unscheinbares Modul, den „Arduino* -Controller“, ein kleiner Microcontroller (ATmega 328, mit 32 kB Speicher), in dessen Programmierung sich auch relative Laien schnell einarbeiten können. Hiermit ergibt sich die Möglichkeit für Erfinder, Visionäre, Künstler und Designer ihre Kreativität drastisch zu erhöhen. Es geht ganz allgemein um die Anbindung der realen, physikalischen Welt an einen Computer. <br>
	 
<p>Dieses kleine Modul lässt sich als Interface für alle nur denkbare Zwecke programmieren.<br> 
Die Schüler beabsichtigten, ein Faxgerät der Frühzeit (Siemens KF108, Baujahr 1956) mit einem PC kommunizieren zu lassen. Bei diesem Fax, damals noch „Fernkopierer“ genannt, wird das Blatt mit der zu übertragenden Information (z.B. ein Bild) auf eine Walze gespannt und schraubenförmig durch Rotation gescannt. Ein solches Gerät kann natürlich mit den Heutigen nicht kommunizieren. Hier hilft der Microcontroller als Bindeglied. Die Schüler haben sich in die Programmierung eines solchen Controllers eingearbeitet. Während falsch aufgebaute Hardware umständlich zerpflückt werden müsste, sind falsch laufende Programme schnell korrigiert. Und so entstand nach einer Woche Projektarbeit die perfekte Anbindung dieser zwei so verschiedenen Technikwelten.<br>

<div class="box center">
        <img src="/shared/photos/kommunikationstechnik/kf108+laptop.jpg" width="700" height="438" />
      
	   <p class="bildtext small"> Projekt Fax-PC: Unten links der Versuchsaufbau für die Impulsgenerierung, Mitte: Fertige Schaltung (s.u.). Etwa die Hälfte des Bildes wurde hier bereits gescannt.</p></div>
	   
 <p>Das Fax sendet eine Tonfrequenz von 1,5 kHz beim scannen schwarzer Pixel und keinen Ton bei weißen Pixeln. Dies muss in ein binäres Signal mit 5V-Level gewandelt werden. Es werden also "Tonpakete" ausgesendet, von denen nur noch die Hüllkurve mit 5V-Pegel benötigt wird. Im einfachsten Fall übernimmt eine Verstärkerschaltung mit nachgeschaltetem RC-Glied diesen Part. In einer verbesserten Version haben wir mit Hilfe des bekannten "555-Timer-IC" mittels der Schaltung <a class="go"href="http://www.electronicsinfoline.com/pin/11479" target="_blank">"Basic Missing Pulse Detector"</a> die Hüllkurve noch exakter reproduzieren können.<br>
<div class="box left">
        <img src="/shared/photos/kommunikationstechnik/impulsgenerierung.jpg" width="303" height="221" />
		<p class="bildtext small">Schaltung als Bindeglied zwischen Fax und Arduino</p></div>
	   
Zum Aufbau des Bildes wird auch die Information für den jeweiligen Beginn einer neuen (senkrechten) Zeile benötigt. Dies wurde durch das Befestigen eines kleinen Supermagneten an der Drehachse realisiert. Ein in ca. 2cm Entfernung befindlicher Reedkontakt wird bei jeder Umdrehung für kurze Zeit aktiviert.<br>
In unserem Fall wurden die weißen Pixel (kein Ton) durch den Arduino in eine "0" umgesetzt, die schwarzen Pixel in eine "1" und ein Zeilensprung (Zylinderumlauf) in eine "2". Damit sendet der Arduino einen aus den Ziffern 0;1;2 bestehenden Datenstream.<br>
Mit Hilfe des Programms "Processing" generiert der angeschlossene Laptop schließlich daraus das Bild. <br>

Gemächlich wird das schraubenförmig abgetastete Bild in Realtime (ca. 4,5 Minuten!) auf den PC übertragen. Mit guter Auflösung zeichnet sich Zeile für Zeile eine historische Micky-Maus auf dem Monitor des Laptops ab. Das Experiment ist geglückt und macht Mut zu weiteren kreativen Anwendungen dieser zukunftsweisenden Technik.<br>
Die eigentliche Programmierarbeit wurde von den Schülern selbst entwickelt und später vom technikum29-Team weiter verbessert. <a href="arduino-projekt-programme" class="go">Source-Code-Ordner öffnen</a> </p>


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
	Die Dokumentation hierzu finden Sie hier:

<a href="lerncomputer">Siemens Demo-Computer</a>


  
