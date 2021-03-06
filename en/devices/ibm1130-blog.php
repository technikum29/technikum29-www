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

<b>13.09.2014:</b> The next step involved testing the card punch 1442 by means of
the diagnostic tests. The test program punches cards with certain patterns in
a first step. These cards are then read back in a second step and compared
with the expected patterns to reveal any differences. Our punch only punches
the first 40 columns of a card which is obviously an error. Fortunately, the
console printer works fine despite the error message generated by the
console-test program (07.09.2014).<br><br>

<div class="desc-left">	
	<a href="/shared/photos/rechnertechnik/ibm1130/SLT-layout+schematic.pdf">
	<img src="/shared/photos/rechnertechnik/slt.jpg"  width="233" height="234" /></a>
	<p class="small"><a href="/shared/photos/rechnertechnik/ibm1130/SLT-layout+schematic.pdf">Opened SLT-block</a><br>
	Enlarge: click on picture!</p></div>
	
<b>20.09.2014:</b> We are currently creating a list of known problems regarding the
1132 printer. Its restoration is especially challenging. After being unused
for more than 30 years, the oil has become gummy, so just powering the
printer is not an option, too many things could and would be damaged. Thus,
all moving parts have to be inspected manually. It turned out that the
central driveshaft is stuck. Therefore, the motor was removed and restored
indecently. In addition to this, the remaining printer parts have been heated
with a heater blower and sprayed with W40 lubricating oil. After these steps,
the driveshaft could be rotated manually, so the motor was installed again.
Now the mechanics of the printer runs smoothly without any signs of trouble.<br><br>

<b>30.09.2014:</b> The printer test finally works but there were still problems in the printout:
Characters were overprinted every 16th column. This could be traced back to
the buffer memory of the printer. Bit 6 of the buffer, an SLT-flip-flop, was
stuck. How an SLT circuit can be repaired is described in more detail here:
<a href="/shared/photos/rechnertechnik/ibm1130/SLT-layout+schematic.pdf">Deeper insights.</a>
<br><br>

<b>3.12.2014:</b> As already noted on September 13th, the IBM 1442 model 6 card punch
creates erroneous hole patterns on the cards. Fortunately, we have a second 
IBM 1442 which we connected to the machine after adjusting all necessary parts.
 This is a model 7 and thus faster than the model 6 it replaced. With a working
card punch it is now clear that the processor is working correctly, and the
fault must be on the side of the original 1142. <br>
 We were also able to repair the defective 6th bit in the printer buffer (cf.
30.09.2014) by replacing the faulty SLT module (the two defective transistors 
could not be replaced). <br><br>
		
		<b>25.1.2015:</b> After cleaning all moving parts in the 1132 printer as well as in
the console printer and adjusting both of them, the overall system is now fully
working as a punched card computer.<br> 
The next project will be the restauration of the 2310 disk drive. Unfortunately we have no spare hard sectored removeable disks with eight sectors for this drive. All we have are hard sectored disks with 16 sectors. Accordingly we will try to convert one of these to eight
sectors by masking every second index slot.<br><br>

<b>10.07.2016:</b> Finally we found time to repair the 2310 disk drive. After
replacing a 16 bit buffer register it works like a charm. We already compiled
some FORTRAN programs which ran flawlessly. This completes the restoration of
this unique machine which is now fully operational again.<br><br>

<b>29.01.2017:</b> We managed to repair the paper tape readers for the 1130. By now
we can load the ASCII picture "SNOOPY" from paper tape and print it. The
machine can also punch arbitrary data to tape with by means of a program
written in FORTRAN and assembly language. This program occupies 392 punch
cards. Now only the plotter needs to be connected to the machine.<br><br>

</p>

