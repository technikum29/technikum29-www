<?php
	$seiten_id = 'Tektronix 4052';
	$version = '$Id';
	$titel = 'Tektronix 4052';
	
	require '../../../lib/technikum29.php';
?>

<h2><?php print $titel; ?></h2>

	<p>
	*** ACHTUNG BAUSTELLE ! ***
	Stand: 17. Juni 2023
</p>

	<p> An dieser Stelle berichten wir über die Bestandsaufnahme zu dem Tektronix 4052 und der zugehörigen 
	Hardcopyeinheit Tektronix 4631 und die Wiederinbetriebnahme der Maschinen.
	Die Seite wird kontinuierlich mit neuen Inhalten ergänzt.
</p>


		
		


<h3>Herkunft des 4052 und der Hardcopyeinheit 4631</h3>
<p>Wir erhielten den Rechner und die Hardcopy-Einheit zusammen mit viel Dokumentation von der Firma Hammann (Hassloch, Pfalz) in 2023. Die Firma 
	hatte sie seinerzeit gebraucht erworben und nutzte sie im produktiven Einsatz bis sie eingelagert wurde.
</p>

<h3>Technische Details</h3>

<p>Die 4052 basiert auf einem 16-Bit-Prozessor in Bit Slice Technik (AMD 2901, 2 MHz). Sie emuliert eine 6800 CPU, verfügt 
	über einen größeren Befehlssatz und hat einen 16-Bit Datenbus (6800: 8 Bit). Der Nutzerspeicher beträgt 32 kB, mit einer 
	Speicheraufrüstung (wie in unserer Maschine) 64 kB (davon max 56 kB nutzbar). In 8 St. 8kB ROMs befindet sich das BASIC-
	Betriebssystem. An der Geräterückseite befinden sich in einer Erweiterung eine serielle Schnittstelle und 2 Steckplätze 
	für Erweiterungs-ROM-Einschübe.<br>
	Der Bildschirm ist eine "direct view storage CRT" (Speicherbildröhre) mit 1024 * 780 Pixeln in s/w. An Schnittstellen sind 
	eine GPIB-Schnittstelle, ein Joystick-Anschluss und eine Drucker-Schnittstelle (Hardcopy, Tektronix 4631) serienmäßig. Die 
	serielle Schnittstelle ist optional. Diese verwandelt die 4052 bei Bedarf in ein 4012-kompatibles Terminal.<br>
	Ein DC300 Bandlaufwerk dient der Datenspeicherung.<br>
	Mit der komfortablen Programmierung in BASIC, dem GPIB-Anschluß für z.B. Meßgeräte und der hohen Grafikauflösung war der
	Rechner ideal für den Einsatz in Labor und Fertigung.<br><br>
	Due Hardcopy-Einheit 4631 ermöglicht die Ausgabe des Bildschirminhalts des 4052 auf einem Spezialpapier. Das Gerät enthält 
	eine Bildröhre mit nur einer Zeile. Das Computerbild wird zeilenweise abgetastet und auf dieser "eindimensionalen" Bildröhre 
	wiedergegeben. An dieser Bildröhre wird ein silberhaltiges Spezialpapier vorbei geführt, dabei entsteht ein latentes Abbild des 
	Computerbildschirms. Das Papier wird in einer anschließenden Heizstation entwickelt und fixiert.<br>
	Das Spezialpapier ist schon lange nicht mehr lieferbar. In unser 4631 befindet sich noch eine angefangene Rolle hiervon. Und 
	wir erhielten eine noch ungeöffnete Ersatzrolle. Tektronix gab für dieses Papier eine max. Lagerzeit von 6 Monaten an, 
	damit schwindet die Hoffnung, dass wir noch Kopien werden erstellen können.
</p>

<h3>einige Detailbilder</h3>

	<p>Zum Vergrößern der Bilder bitte anklicken !</p>

<div class="box center"> 
		<a  href="/de/geraete/Tektronix_4052/Tektronix_4052_Bilder/Tektronix_4052_4631_gr.jpeg" class="popup">
		<img src="/de/geraete/Tektronix_4052/Tektronix_4052_Bilder/Tektronix_4052_4631_kl.jpeg" width="300"  "/>
	</a>
		<a  href="/de/geraete/Tektronix_4052/Tektronix_4052_Bilder/Tektronix_4052_vorne_gross.jpeg" class="popup">
		<img src="/de/geraete/Tektronix_4052/Tektronix_4052_Bilder/Tektronix_4052_vorne_mi.jpeg" width="160" "/>
	</a>
		<a  href="/de/geraete/Tektronix_4052/Tektronix_4052_Bilder/Tektronix_4052_hinten_gr.jpeg" class="popup">
		<img src="/de/geraete/Tektronix_4052/Tektronix_4052_Bilder/Tektronix_4052_hinten_kl.jpeg" width="240" />
	</a>
		<p class="bildtext"><b>4052</b> Rechner mit Hardcopy-Einheit 4631 (li), Front 4052 (mi), Rückseite 4052 (re)</p>
	</div>

<div class="box center"> 
		<a  href="/de/geraete/Tektronix_4052/Tektronix_4052_Bilder/Tektronix_4052_Zubehoer_gr.jpeg" class="popup">
		<img src="/de/geraete/Tektronix_4052/Tektronix_4052_Bilder/Tektronix_4052_Zubehoer_kl.jpeg" width="230"  "/>
	</a>
		<a  href="/de/geraete/Tektronix_4052/Tektronix_4052_Bilder/Tektronix_4052_Platine_1_gr.jpeg" class="popup">
		<img src="/de/geraete/Tektronix_4052/Tektronix_4052_Bilder/Tektronix_4052_Platine_1_kl.jpeg" width="280" "/>
	</a>
		<a  href="/de/geraete/Tektronix_4052/Tektronix_4052_Bilder/Tektronix_4052_Platine_2_gr.jpeg" class="popup">
		<img src="/de/geraete/Tektronix_4052/Tektronix_4052_Bilder/Tektronix_4052_Platine_2_kl.jpeg" width="230" />
	</a>
		<p class="bildtext"><b>4052</b> Zubehör (li), Rechnerplatine 1 (mi), Rechnerplatine 2 (re)</p>
	</div>




<h3>Wiederinbetriebnahme der Anlage</h3>


	<p>Nach dem ersten Einschalten startete das BASIC-System, der Bildschirm gab Zeichen aus, aber eine Eingabe von BASIC-Statements
		war nicht möglich. Zum Glück funktionierte die komplexe Speicherbildröhre noch, hier wäre ein Austausch/eine Reparatur 
		nur schwer möglich gewesen.<br>
		Unsere 4052 bedurfte nur einiger kleinerer Reparaturen: zwei dynamische RAM-Chips waren defekt und 2 der 8 ROMs zeigten 
		Fehler beim CRC-Check. RAMs des Typs 4116 hatten wir noch in Reserve, Ersatz-ROMs erhielten wir dankenswerterweise 
		von Jos Dreesen (Vielen Dank !). Von Jos erhielten wir auch einen Nachbau des "Diagnostic ROM Packs". Mit dessen Hilfe
		kann die Funktion der CPU, der RAMs und der ROMs im Detail geprüft werden.<br>
		Nach diesen Reparaturen lief der Rechner wieder. <br>
		Das Magnetband-Laufwerk spult Bänder zwar vor und zurück, versagt aber beim Lesen. Darum müssen wir uns noch 
		kümmern.</p>
	
	
	<div class="box center"> 
		<a  href="/de/geraete/Tektronix_4052/Tektronix_4052_Bilder/Tektronix_4052_CRC_Test_gr.jpeg" class="popup">
		<img src="/de/geraete/Tektronix_4052/Tektronix_4052_Bilder/Tektronix_4052_CRC_Test_kl.jpeg" width="300"  "/>
	</a>
	<a  href="/de/geraete/Tektronix_4052/Tektronix_4052_Bilder/Tektronix_4052_vorne_gross.jpeg" class="popup">
		<img src="/de/geraete/Tektronix_4052/Tektronix_4052_Bilder/Tektronix_4052_vorne_mi.jpeg" width="370"  "/>
	</a>
		
		<p class="bildtext"><b>links: </b>Bildschirmausgabe des Diagnostic-Moduls: CRC-Test der ROMs. Die Ausgabe zeigt den defekten ROM-Zustand an (falsche CRC-Werte in der 3. und 8. Zeile)
		<br><b>rechts: </b>Tektronix 4052 im BASIC-Modus mit gemischter Text- und Grafikdarstellung</p>
	</div>
<p>Die Hardcopystation hat noch einen Fehler im Netzteil und wartet auf die Reparatur ...
	</p>
	
<h3>Option 01: serielle Schnittstelle</h3>
	
	<p>Unser Gerät hat die Option 01 "serielle Schnittstelle" eingebaut. In den Terminallmodus gelangt man mit dem BASIC-Befehl 'CALL "TERMIN" '.
	Wenn keine Gegenstelle angeschlossen ist, leuchten die BUSY und die IO Lampe im Wechsel und das Gerät gibt ein Klacken von sich. Der Zustand ist nur
	durch ein RESET (an dem Diagnosemodul) zu beenden oder durch Ausschalten. Für den Betrieb ist es wichtig, an der Buchse der ser. Schnittstelle die 
	Leitungen 4-5 und 8-20 zu verbinden. Damit wird der Schnittstelle Sende-/Empfangsbereitschaft angezeigt. Jetzt kann man mit 3 Leitungen verbinden: 
	2-Empfangsdaten, 3-Sendedaten und 7-Ground.</p>
	<p><br></p>
	
	<div class="box center"> 
		
	<a  href="/de/geraete/Tektronix_4052/Tektronix_4052_Bilder/Tektronix_4052_shuttle_gr.jpeg" class="popup">
		<img src="/de/geraete/Tektronix_4052/Tektronix_4052_Bilder/Tektronix_4052_shuttle_kl.jpeg" width="370"  "/>
	</a>
		
		<p class="bildtext">Tektronix 4052 im Terminalmodus empfängt Grafikdaten</p>
	</div>	
		<p/>
<p>Die serielle Schnittstelle kann von BASIC aus auch zum Abspeichern und Wiedereinlesen von Programmen	genutzt
	werden: Der Befehl "SAVE @40:" schreibt das aktuelle BASIC-Programm als ASCII über die serielle Schnittstelle 
	raus. Mit "OLD @40:" kann der ASCII-String wieder eingelesen werden, wobei ein evtl. im Speicher vorhandenes 
	Programm überschrieben wird. <br>Die Terminalemulation am anderen Ende der seriellen Leitung muss mit dem 
	verwendeten Zeilenendezeichen (CR) ohne das übliche zusätzliche (LF) zurechtkommen. Beim Wiedereinlesen 
	muss das Terminalprogramm nach jeder Zeile eine kurze Pause einlegen (ca 0.1s reicht), um dem Tektronix-BASIC-Editor 
	Zeit für Syntaxüberprüfung und Abspeichern zu lassen.<br>
	Auf diese Weise können wir Programme speichern und laden, obwohl unser Magnetband-Laufwerk noch defekt ist.<br>
	<br>
</p>


<p> *** wird fortgesetzt *** 
		</p>
		

		
		
		
		
<!--
<h3>Broschüren und Manuals zum Download</h3>

<p>zum Download unserer Scans zur TA1000 geht es <a href="/de/geraete/TA1000/TA1000_PDFs">hier</a>
</p>
-->
