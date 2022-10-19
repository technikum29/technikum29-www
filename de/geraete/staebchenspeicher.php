<?php
	$seiten_id = 'magnetic-stick-memory';
	$version = '$Id';
	$titel = 'Detailerklärung der Stäbchenspeicher';
	
	require '../../lib/technikum29.php';
?>

<h2><?php print $titel; ?></h2>

<div class="center">
   <img src="/shared/photos/rechnertechnik/speichermedien/staebchenspeicher.jpg" alt="Stäbchenspeicher" width="600" height="404" />
   <div class="bildtext-bildbreite" style="width: 600px;"></div>
     <p>Der Festwertspeicher (ROM=Read-only-Memory) besteht aus 8 x 18 = 144 Ferritkernen (Stäbchen) mit je einer Sekundärwicklung (200 Windungen), die fest mit dem Rahmen verbunden sind.
Als Primärwicklung dienen die bis zu 256 Fädeldrähte pro Einschub (2 Einschübe sind möglich). Der Fädeldraht benötigt nur knapp eine Windung um eine Eins zu erzeugen, siehe Bild. Der Einschub, hier neben den Stäbchen abgebildet, wird so positioniert, dass die Fädelungen den Stab umschlingen. Diese Klein-Transformatoren sind  matrixförmig zu 8 Zeilen x 18 Spalten angeordnet. Damit können 8 x 256 x 2 = 4096 Wörter (je 18 Bit) generiert werden.<br/>
In der Abbildung (aus dem NIXDORF Manual) ist einer von 256 Fädeldrähten gezeichnet. Werden nun nacheinander 8 Taktimpulse durch diesen Draht gejagt, so können die 8 mal 18-Bit Wörter seriell ausgelesen werden. 18 Leseverstärker bewirken, dass jedes Wort parallel zur Verfügung steht. Durch Induktion werden in den Sekundärwicklungen Einsen erzeugt, wenn eine Umschlingung vorhanden ist (daher heißt ein solcher Speicher u.a. auch "Indunktionsspeicher").<br/>
Die unteren beiden Wörter hätten dann den Wert   111000000000001001 bzw. 000111100000011100.<br/>
Es war sehr zeitaufwändig, bis zu 256 Drähte um je bis zu 144 Stäbchen zu führen. Aber Halbleiter-ROM´s gab es 1967 noch nicht. Dafür konnte man ein solches ROM jederzeit reparieren bzw. "umstricken": Den alten Draht abklemmen (er muss nicht entfernt werden) und dafür einen neuen Draht legen. Jedes Bit so groß wie eine Erbse, ein solches ROM hat einen historischen Lerneffekt.
</p>

</div>
