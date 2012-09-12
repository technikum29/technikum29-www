<?php
	$seiten_id = 'wang320';
	$version = '$Id';
	$titel = 'Wang 320 SE';
	
	require '../../lib/technikum29.php';
?>
<h2><?php print $titel; ?></h2>

<div class="box center auto-bildbreite">
   <img src="/shared/photos/rechnertechnik/wang320,keyboard.jpg" alt="Wang 320 SE Keyboard and a punch card" width="600" height="596"/>

   <p>
      For displaying 10x10 digits, 9 decimal places and the leading sign the device
	  needs only 14 data lines. Hence Wang already implemented multiplexing.
      <br>The punch card contains a program for computing sinus values. It actually
	  simulates keyboard input. The display shows the result for <code>sin(60°)</code>,
	  whereas the last four positions are inaccurate.
	  <br>The picture below shows some details from the inner life with keyboard and
	  nixie tubes, glow lamps (for showing the comma) and transistors for amplifying.
	  The switches in the background are part of the keyboard.
   </p>

   <img src="/shared/photos/rechnertechnik/wang-nixietube.jpg" alt="Wang Nixie tubes" width="595" height="446"/>
</div>