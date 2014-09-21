<?php
	$seiten_id = 'ibm1130-blog';
	$version = '$Id';
	$titel = 'IBM 1130 Reparation Blog';
	
	require '../../lib/technikum29.php';
?>

<h2>IBM 1130 Reparation Blog, continuation</h2>

<br>

The beginning you'll find here <a href="/en/computer/ibm1130.php#blog-ibm"> <b>IBM-Blog, start</b> </a>
<br><br>

<b>7.6.2014:</b> The card 7432 we are looking for is only used in systems with a memory 
expansion. These mainframes are much rarer than the smaller IBM 1130 systems
without the additional left enclosure. Therefore both, the card missing in 
out machine as well as its schematics have apparently not been preserved. 
Accordingly, we reverse-engineered the circuit diagram based on measurements
on an existing card and rebuilt the card. Now the core memory of our IBM 1130
is working like a charm which is a significant milestone.<br><br>

<div class="desc-left">
		<a class="popup" href="/shared/photos/rechnertechnik/1130-reparatur.jpg">
	<img src="/shared/photos/rechnertechnik/1130-reparatur.jpg" alt="1130 während der Reparatur" width="391" height="269" /></a>
	<p class="small">So it looks while repairing. Invisible: Measuring Park and many simultaneously opened Manuals.<br>
Enlarge: click on picture!</p></div>

<b>16.6.2014:</b> Giant leaps: After an intensive cleaning effort with adjustments following,
the card reader IBM 1442 is now fully operational and we could successfully
run the seven so-called "One-Card-Diagnostic" programs. This demonstrated
that the CPU is at least basically operating (since these tests are quite
simple in nature they can not detect subtle faults).<br>
The next test involved the console printer: A working console printer is necessary to communicate
with the machine - unfortunately, this test showed that the printer is still
faulty. Currently, we suspect resinified oil as the culprit. <br><br>

<b>31.08.2014:</b> We would like to thank the people from the "Verein fuer ein Museum
der Lochkartentechnik", cosecans.ch, who donated a set of plug in cards
for the IBM 1131 processor. Without these spares our repair attempts would be
next to impossible due to the SLT technology.<br>
 Further tests showed that memory and CPU test run flawlessly but the
keyboard/printer-test still fails.<br><br>

<b>07.09.2014:</b> We experienced some set-backs during our initial restoration
attempts. This was not that unexpected since the machines have been sitting
idle for several decades. We have at least two different problems in the
machine. Without diagnostic programs, any repair attempt would be in vain. Just
the keyboard/printer test shows an error:<br>

"E0001   INVLD" denoting an erroneous
address in the switch register for that particular test. Unfortunately the
address set on the switches is correct so another problem is still lurking in
the machine.<br><br>


<p><b><em>This section will be gradually continued.</em></b></p>

