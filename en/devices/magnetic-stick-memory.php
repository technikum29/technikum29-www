<?php
	$seiten_id = 'magnetic-stick-memory';
	$version = '$Id';
	$titel = 'The magnetic stick memory';
	
	require '../../lib/technikum29.php';
?>

<h2><?php print $title; ?></h2>

<div class="center">
   <img src="/shared/photos/rechnertechnik/speichermedien/staebchenspeicher.jpg" alt="magnetic stick memory" width="600" height="404" />
   <div class="bildtext-bildbreite" style="width: 600px;"></div>
       <p>This ROM consists of 8 times 18 = 144 ferrite rods with one secondary winding each which are mounted on the frame of the module. Every module features 256 wires acting as primary windings. To represent a 1 the primary winding of such a rod has to be threaded around the rod while threading it past the rod will yield a 0.
       <br/>The pictures (taken from a NIXDORF manual) shows one of these 256 threading wires. The read out of the ROM is done in parallel, so there are 18 read out amplifiers connected to the 18 groups of secondary windings of the rod matrix.
       <br/>The two words shown on the bottom have the values 111000000000001001 and 000111100000011100 respectively. Obviously threading up to 256 wires through and/or around 144 rods was a very time consuming and tedious job. The main advantage of this type of read only memory was the fact that its contents could still be modified manually.</p>
       
       <!--
> ! Anmerkung: Solch ein Faedelspeicher wurde auch in den Bordrechnern der
> ! Apollo-Raumkapseln eingesetzt (entwickelt am MIT), siehe "Journey to
> ! the moon" bzw. die entsprechenden Unterlagen der Stark
Draper-Laboratories,
> ! die im Netz zu finden sind.
       -->
   
</div>
