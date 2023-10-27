<?php
	$seiten_id = 'LGP30_Details';
	$version = '$Id';
	$titel = 'LGP30';
	
	require '../../../lib/technikum29.php';
?>

<h2><?php print $titel; ?></h2>

	<p>
	*** ACHTUNG BAUSTELLE ! ***
	Stand: Nov. 2022
</p>

	<p> An dieser Stelle berichten wir über die Fortschritte bei der Restaurierung der LGP30.
</p>
<p>
<h3>Bestandsaufnahme November 2022</h3>
</p>

<p>Bereits in 2018 entschieden wir uns, die defekte Trommel durch eine Replika auf FPGA-Basis zu
ersetzen. Die Schäden an der Trommel und ggf. auch an den Magnetköpfen waren zu gravierend. 
FPGA-Hard- und Softwaredesign zogen sich einige Monate hin, das Resultat lief aber 
leider nicht zufriedenstellend auf unserer Maschine. Ob ein Fehler in der Replika vorlag 
oder in der LGP30 (oder beides) liess sich nicht entscheiden.</p>

<p>Wir entschieden uns, die Replika an der funktionierenden LGP30 im <a href="http://computermuseum.informatik.uni-stuttgart.de/"target="_blank">Computermuseum-Stuttgart</a>
 zu testen. Im Januar 2020 konnten wir erfolgreich ein Spiel Black Jack mit einem Programmabbild auf der 
 Trommel auf der dortigen LGP30 spielen - die Replika funktioniert !</p>
 
 <p>Um nicht weiter nur an einzelnen Fehlersymptomen herumzuwerkeln haben wir unsere Maschine einer
 gründlichen Inspektion unterworfen:</p>
 <p>- Das Netzteil wurde geprüft, alle Spannungen wo notwendig auf Sollwerte gebracht
</p>

<p>- alle Röhren und Dioden wurden geprüft und ggf. ersetzt.
</p>

<p>- alle Einschubkarten wurden getestet.
</p>
 <p>Aus der Phase hier einige Bilder der offenen Anlage, das letzte Foto zeigt die FPGA-Platine. 
 Durch Anklicken vergrößern sich die Bilder !
 </p>
<div class="box center">
   <a  href="/de/geraete/LGP30/LGP30_Bilder/LGP30_1.jpeg" class="popup">
      <img src="/de/geraete/LGP30/LGP30_Bilder/LGP30_1.jpeg" width="200"/>
      </a>
	<a  href="/de/geraete/LGP30/LGP30_Bilder/LGP30_2.jpeg" class="popup">
      <img src="/de/geraete/LGP30/LGP30_Bilder/LGP30_2.jpeg" width="200"/>
      </a>
    <a  href="/de/geraete/LGP30/LGP30_Bilder/LGP30_3.jpeg" class="popup">
      <img src="/de/geraete/LGP30/LGP30_Bilder/LGP30_3.jpeg" width="200"/>
      </a>
    <a  href="/de/geraete/LGP30/LGP30_Bilder/LGP30_4.jpeg" class="popup">
      <img src="/de/geraete/LGP30/LGP30_Bilder/LGP30_4.jpeg" width="156"/>
      </a>
    <p class="bildtext">Gleichspannungsnetzteil, Frontansicht, Front von oben und 
        Rückansicht linke Seite mit Analogboards</p>
</div>

<p>
</p>

<div class="box center">
   <a  href="/de/geraete/LGP30/LGP30_Bilder/LGP30_5.jpeg" class="popup">
      <img src="/de/geraete/LGP30/LGP30_Bilder/LGP30_5.jpeg" width="146"/>
      </a>
	<a  href="/de/geraete/LGP30/LGP30_Bilder/LGP30_6.jpeg" class="popup">
      <img src="/de/geraete/LGP30/LGP30_Bilder/LGP30_6.jpeg" width="200"/>
      </a>
    <a  href="/de/geraete/LGP30/LGP30_Bilder/LGP30_7.jpeg" class="popup">
      <img src="/de/geraete/LGP30/LGP30_Bilder/LGP30_7.jpeg" width="200"/>
      </a>
    <a  href="/de/geraete/LGP30/LGP30_Bilder/LGP30_8.jpeg" class="popup">
      <img src="/de/geraete/LGP30/LGP30_Bilder/LGP30_8.jpeg" width="200"/>
      </a>
    <p class="bildtext">Rückseite rechte Seite mit Digitalboards und Relaiskasten, 
        Blick auf die Spannungskonstanter, Rückseite Oszilloskop und FPGA-Platine</p>
</div>
<p>Wir hatten die letzten Monate genutzt, einige Depots aufzuräumen. Dabei fanden wir
eine Menge Abdeckungen und Kleinteile zur LGP30, die Heribert dort zwischengelagert 
hatte - jetzt ist unsere Maschine auch mechanisch wieder komplett !
</p>


<h3>Weitere Arbeiten zur Restaurierung</h3>

<p>Zur Zeit wird die FPGA nochmals überprüft, ob zwischenzeitlich ggf. ein Defekt 
entstanden ist. Vielleicht noch im Dezember, spätestens Anfang 2023 steht ein neuer
Testlauf an !
</p>
<br>
<p><b>Status Oktober 2023</b><br>
	Mittlerweile konnte die Trommelreplika mit unserer LGP30 in Betrieb genommen werden ! Die bisherigen Probleme lagen
	an der Pegelanpassung der FPGA an die 0V / -20V Pegel der LGP30. In dem Zusammenhang wurde auch ein Fehler in den 
	Schaltplänen gefunden. Die korrekte Schaltung der -20V Versorgung ist diese hier:
</p>
<div class="box center">
   <a  href="/de/geraete/LGP30/LGP30_Bilder/LGP30_20_V_Versorgung.jpg" class="popup">
      <img src="/de/geraete/LGP30/LGP30_Bilder/LGP30_20_V_Versorgung.jpg" width="350"/>
      </a>
    <a  href="/de/geraete/LGP30/LGP30_Bilder/LGP30_CRT_gr.jpeg" class="popup">
      <img src="/de/geraete/LGP30/LGP30_Bilder/LGP30_CRT_kl.jpeg" width="400"/>
      </a>
    <p class="bildtext">korrigierte Schaltung der -20 V Versorgung (li), Anzeige der Registerinhalte an der LGP-30 Konsole (re)</p>
</div>
<p>Im jetzigen Zustand liest die LGP30 beim Hochfahren das Trommelabbild von der Speicherkarte ein und zeigt 
	die Registerinhalte an. Mit den Schaltern der Konsole kann man die div. Speicherworte nacheinander anzeigen. 
	Bei der probeweisen Eingabe vom Flexowriter ergaben sich aber Fehler bei der Übergabe der Daten in den Akkumulator, die auf dejustierte 
	Schalterkotakte des Flexowriters zurückgeführt werden konnten. Hier steht jetzt eine Neujustage an...
</p>

<p> *** wird fortgesetzt *** 
		</p>


