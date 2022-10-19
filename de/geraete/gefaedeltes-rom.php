<?php
	$seiten_id = 'threaded-rom';
	$version = '$Id';
	$titel = 'ROM-Ausschnitt';
	
	require '../../lib/technikum29.php';
?>
<h2><?php print $title; ?></h2>

<div class="center">
   <img src="/shared/photos/rechnertechnik/speichermedien/nixdorf-rom-ausschnitt.jpg" alt="Ausschnitt Nixdorf-ROM" width="594" height="446" />
   <div class="bildtext-bildbreite" style="width: 594px;"></div>
     <p>Jeder Ringkern bildet quasi einen winzigen Transformator. Läuft ein Draht durch ihn durch, so bildet dieser die Primärwiklung des Trafos. Die Sekundärwicklung besteht aus 4 Windungen, die jeweils unten andeutungsweise zu sehen sind. Läuft ein Draht durch diesen Kern, so wird dann eine Spannung induziert (= logisch "1"), wenn durch ihn ein Taktimpuls saust. Geht der Draht am Kern vorbei, passiert nichts (= logisch "0"). Die Diodenmatrix rechts hat eine Größe von 8x16. Es können also 128 Drähte "gefädelt" werden. Jeder Draht durchläuft in Schlangenlinien 16 Kernreihen mit je 18 Kernen. Hier sind also 128x16=2048 Wörter abgelegt. <br>
     Wenn man einen Befehl ändern möchte, kann man den entsprechenden Draht (falls einer reicht!) abtrennen und stattdessen einen neuen Draht mit Hilfe einer gekrümmten Nadel durch die Kerne fädeln. Dieses Fädelverfahren wurde von Nixdorf in dem folgenden Stäbchenspeicher durch einen anderen Aufbau perfektioniert.
    </p>
</div>