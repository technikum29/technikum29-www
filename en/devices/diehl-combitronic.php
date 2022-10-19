<?php
	$seiten_id = 'diehl';
	$version = '$Id';
	$titel = 'Details of the Diehl Combitronic and Algotronic';
	
	require '../../lib/technikum29.php';
?>
<h2><?php print $title; ?></h2>

<div class="box center">
      <div style="white-space:nowrap">
        <img src="/shared/photos/rechnertechnik/combitronic-lochstreifen.jpg" width="330" height="247" alt="Paper Tape used for booting" />
        <img src="/shared/photos/rechnertechnik/combitronic-logik.jpg" width="322" height="247" alt="Combitronic logic boards" style="margin-left:14px" />
      </div>
      <p>These two pictures show some details from the Combitronic. In the picture on the left
         hand you see the metallic paper tape that is used for booting the device. It is driven
         by the engine from the printer. The picture on the right hand shows germanium transistors
         on the upper board and ceramic ROM ICs on the lower board.</p>

     <!-- paragraph new: 29.12.2008 16:38 -->
     <p>It is quite interesting to see DIEHL improving quite slowly but
        continuing their hardware: The successor model <b>DIEHL Algotronic</b>
	(1973/74) featured 2x 21 shift registers with each 512 bits storage
	capacity instead of the delay line. Thus the device had
	about 20 kbit storage capacity, so the metallic boot tape could be
        extended: The new boot tape had 3 tracks (including one timing track).
        While the first track was read in while moving the tape forward, the
	second one was read in while rewinding the tape. This "boot device"
	contained micro programs for scientifical functions (sin, cos, tan,
	ln, exp, etc.). If the computer was intended for e.g. statistical
	functions, it needed another boot tape.
	<br/>These Diehl computers look like the Combitronic, but they are
	equipped with a few more keys. All in all the hardware architecture
	from this desk computer was obsolete, even for that time. It was
	partily still made using germanium transistors. After these computers,
	Diehl built the completely new computer "Alphatronic, DS 300, DS 400"
	that is no more interesting for our museum.</p>
</div>
