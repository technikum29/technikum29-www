<?php
	$seiten_id = 'gamma10';
	$version = '$Id$';
	$title = 'A second generation calculator: The BULL GAMMA 10';
	
	require "../../lib/technikum29.php";
?>
    <h2>A second generation calculator:  <b>BULL GAMMA&nbsp;10</b></h2>

    <div class="box center auto-bildbreite">
        <img src="/shared/photos/rechnertechnik/bull-gamma-10.jpg"
             alt="BULL GAMMA 10" width="640" height="390" />
		<p class="bildtext"><b>BULL Gamma 10 electronic data processing system</b></p>
	</div>
	
	<p>
        In 1963 BULL (General Electric) presented the BULL GAMMA 10 (G10)
        which was intended for commercial purpose and puchcard
        computing. It was the direct successor of the <a
        href="tabulating-machine.php">Tabulating Machine</a>.
        Compared to the really big mainframes, the G10 was intended to
        be set up in a 20 square meter room, without air conditioning.
        The maximum power input was 2.5 kW.
        <br/>The standard equipment contains a CPU with
        panel, a punchcard reader/puncher unit and a barrel printer.
        The core memory has a capacity of 1024 characters (expandable to 4096 characters). 
	A character consists of 6 bit plus an additional 7th parity bit.
	There are 56 different
        opcodes to program the CPU.
        <br/>The cycle time from the core memory is 7 micro
        seconds. The calculator is capable of reading and
        punching 300 cards per minute. Five punchcards per
        second, that is an amazing speed &ndash;
        therefore the punching unit is generously built. The
        printer can only print up to 300 lines per minute. Compared
        to our <a href="univac9400.php">Univac 9400</a> this
        is quite slow &ndash; the Univac 9400 is capable of
        printing more than 1000 lines per minute.
    </p>
<div class="box center manuelle-bildbreite" style="width: 650px;">
	    <img src="/shared/photos/rechnertechnik/gamma10,offen.jpg" alt="BULL GAMMA 10 without panels" width="650" height="564" /></div>
	<div class="box center manuelle-bildbreite" style="width: 650px;">
	    <img src="/shared/photos/rechnertechnik/gamma10,rueckseite.jpg" alt="BULL GAMMA 10 from the back" width="650" height="633" />
		
		
		<p class="bildtext"><b>Gamma 10 uncovered</b></p>
	</div>
	
	<p>
          The chassis is metallic bright and glossy. It is clearly arranged
          and therefore the machine is quite easy to maintain.
		  <!--
          <br/>We want to repair this computer, too (see our page
          <a href="/en/search.php">We are looking for...</a>). By now the
          complete mechanics works again. After tuning the temperature
          of the heated core memory and switching some defect
          transistors, we can already execte a program for duplicating
          punch cards, as well as the first mathematical programs.
          That's really sensational for such an old computer.
		  -->
		  <br>By now the whole mechanics are working again, which is the core
		  part of the computer. After adjusting the temperature of the
		  heated core memory and replacing some broken transistors, the
		  program for duplication punch cards runs again, as well as some
		  mathematical programs. 
    </p>

	<!-- Idiotisch - den selben Absatz unten nochmal uebersetzt, sogar mit Bild -->
	<!--
    <div class="box left">
         <img src="/shared/photos/rechnertechnik/modul-gamma10.jpg"
            alt="Typical GAMMA 10 module" height="345" width="485">
         <p class="bildtext">
            This is one of 570 modules from the GAMMA 10 computer.
            On the base plate the conductor tracks are aligned
            horizontally while they are aligned vertically on the
            small boards (flip flops, amplifier, etc.). Almost all
            transistors are still Germanium transistors.
         </p>
         <div class="clear"></div>
    </div>
	-->

    <div class="box left clear-after">
	<img src="/shared/photos/rechnertechnik/steuerpult.jpg"
            alt="A part from the control panel" width="485" height="379" />
        <p class="bildtext">
           The control panel could be used for monitoring running
           programs, as well as for early "test driven development"
           for programmers. <!-- hehe -->
           <br/>The picture shows details of the programmer's part of
           the control panel. These buttons and switches are intended
           for debugging a program step-by-step and for reading out
           the contents of registers, the ALU and RAM, and, finally,
           for assembling and executing new computer instructions.
           <br/>All output is driven by lime-green "DM 160" miniature
           tubes.
        </p>
    </div>

    <div class="box left clear-after">
        <img src="/shared/photos/rechnertechnik/modul-gamma10.jpg"
           alt="Picture of a typical BULL GAMMA 10 module (board)"
           width="485" height="345" />
        <p class="bildtext">
	   This is a picture of a typical GAMMA 10 board. On the mainboard,
	   all conductor paths are aligned horizontally while on the small
	   plug-in boards (flip-flops, amplifiers, etc.) they are mostly
	   vertically oriented. Almost all transistors are made of germanium.
	   <br/>The slow non-time-critical logic (like card controlling)
	   is performed by 573 relays. Building up such an amount of
	   wear parts is quiete brave. <!-- stupid mode... -->
           <br/>Summing up, there were about 570 boards like this one in
           the GAMMA 10 (without counting the printer interface). The
           GAMMA 10 was sold as a quite cheap electronic data processing
           system. We have gotten an original list of prices for this device
           from 1968/69, when this model was already out-of-date and
           hence very cheap:
           <br/>CPU with 4kB core memory: 267.000,- DM (about 133.000,- Euro or Dollar)
           <br/>Printer: 105.000,- DM (about 50.000,- Euro, Dollar)
        </p>
     </div>

     <p>While our GAMMA 10 is in a very good shape, we cannot use the
        printer any more, since all electronics are missing.<br>
        But we were very lucky: An original printer has been donated to the museum by
the F.E.B. (Federation des Equipes Bull) in France. Although the enclosure is
missing completely as well as some other parts, we were able to rebuild a
fully functional printer basied on this devices together with the parts
already in the collection. The result is remarkable (see below).</p>

<div class="box center auto-bildbreite">
		<img src="/shared/photos/rechnertechnik/bull-i50,vor-nachher.jpg" alt="Drucker-I 50" width="851" height="316" />
		<div class="bildtext">
		<p><b>BULL I 50: Before a printer fragment and afterwards fully functional </b></p>
		</div></div>

<p class="small">
Some interesting technical data: The computer contains more than 4,000
discrete transistors, about 10,000 diodes and more then 2,500 test points
which aide the service technician.
Tracking down errors by swapping boards was not possible since the logical
functions are spread over the whole chassis and are not concentrated on
single cards. A typical errorneous function had to be traced from card 17,
which is connected to card 95, which is, in turn, connected to card 43 and
card 293 which contains a flipflop which is necessary to implement this
particular basic function. Without detailed schematics and cycle diagrams it
would be impossible to repair this machine.</p>


		


