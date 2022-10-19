<?php
	$seiten_id = 'threaded-rom';
	$version = '$Id';
	$titel = 'Details of the ROM';
	
	require '../../lib/technikum29.php';
?>
<h2><?php print $title; ?></h2>

<div class="center">
   <img src="/shared/photos/rechnertechnik/speichermedien/nixdorf-rom-ausschnitt.jpg" alt="Nixdorf ROM" width="594" height="446" />
   <div class="bildtext-bildbreite" style="width: 594px;"></div>
       <p>The idea is to represent every single bit by a tiny transformer with two separate windings. A primary winding and a secondary one (the latter one is threaded four times throught the core). The primary winding will by able to induce a signal in the secondary coil when threaded through the core. This is equivalent to storing a 1. To store a 0 the primary winding is threaded past the core.
       <br/>The diode matrix on the right of the printed circuit board contains 8 times 16 diodes &ndash; this equals 128 wires which can be threaded through or past the cores of this ROM plane. Every wire runs in wiggly lines through 16 rows of 18 cores each. All in all 128 times 16 = 2048 bytes can be stored.
       <br/>To change a word stored in this ROM, it is necessary to remove (or simply cut) the proper wire and thread a new wire (sometimes more than one wire has to be replaced). This tedious technique has been improved in form of the NIXDORF rod memory.
       </p>
</div>
