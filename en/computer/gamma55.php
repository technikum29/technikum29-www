<?php
	$seiten_id = 'gamma55';
	$version = '$Id: gamma10.php 278 2012-07-18 12:55:44Z sven $';
	$title = 'A second generation calculator: BULL GAMMA 55';
	
	require "../../lib/technikum29.php";
?>
    
	<h2>A second generation calculator: The BULL GAMMA 55 (GE-55)</h2>
	
	 <div class="box center clear-after">
		<img src="/shared/photos/rechnertechnik/bull-ge55.jpg" alt="BULL Gamma 55 Computer-Anlage" width="750" height="389" />
		<div class="bildtext">
		<p>On the left the printer I41 is visible, in the background the CPU (2m
wide!) and on the right the paper tape puncher can be seen. On top of
the desk is a punch card reader with an alphanumeric keyboard in front
of it.</p>
		</div>
		</div>
	<p>
        We are now the proud owners of a new BULL computer system: A BULL Gamma
55 (also known as GE-55 after the merge with General-Electric). The
system now in the collection was stored in Switzerland with all
accompanying documentation, punched cards etc. for 26 years.<br>

It was developed in 1966 by BULL in France and hit the market in 1967.
It was aimed at small and middle sized companies that were too small
as customers for other, larger computer systems.<br>

This computer demonstrates the tremendous advances of computer
technology in the 1960s. While all instructions on the (larger) Gamma
10 are implemented with a lot of active circuitry stepping through
many cycles, this is done in the Gamma 55 by means of a rather large
read-only-memory. This is an implementation of a microprogram which
reduces the necessary hardware significantly, making the machine
cheaper and more reliable.<br>

The basic implementation of the machines makes heavy use of mechanical
parts but at least the card reader is an optical device.<br>	

<div class="box left">
<a class="popup" href="/shared/photos/rechnertechnik/ge-55-2.jpg">
		<img src="/shared/photos/rechnertechnik/ge-55-2.jpg" alt="Während der Restauration" width="565" height="323" /></a>
		
		<div class="bildtext">	
	<p>The system during the refurbishment of
the cabinets <a class="popup" href="/shared/photos/rechnertechnik/ge-55-2.jpg"> (enlarge picture) </a><br> </p>
		</div>
		</div>
		

<p>Our machine can be programmed in machine language or some kind of a
mini-COBOL (Common Business Oriented Language). The compiler is loaded
via punched cards. To start a program a Supervisor that is loaded by
punched cards is necessary.<br>

The system was advertised with 2.5 kB, 5 kB or 10 kB of main memory
(core memory). Our machine has 5 kB of memory and it is really
astonishing that a high level language like COBOL - even our
mini-COBOL - is feasible with such a tiny amount of memory at all.<br>

As an extension a memory drum was offered which also allowed the use of
a mini-FORTRAN (FORmula TRANslator).<br>

Although BULL was quite inventive concerning software their hardware
was quite outdated. The boards used in this machine are the same as
those in the earlier GAMMA 10 (based on Germanium transistors). At the
same time other companies like UNIVAC or IBM already employed
integrated circuits (DTL, Diode-Transistor-Logic) for their machines.<br>
    </p>
	
September 2013: <b id="ge-55">Success! The machine is up and running!</b><br>
After a substantial amount of time spent for debugging, the machine is now
fully operational again. More the 30 (!!) defective transistors and diodes had to
be traced down and replaced to achieve this. These parts failed silently
during the 33 years in storage. We can now proudly state that this is the
only surviving Gamma 55 on earth which is still running. If you are
interested in details concerning the architecture and programming of the
machine, have a look here (in German only): <a href="http://www.technikum29.de/download/Manuals-Bull%20GE55/"> BULL Gamma 55 manuals </a> </p>

<div class="box left">
		<a class="popup" href="/shared/photos/rechnertechnik/leser617.jpg">
		<img src="/shared/photos/rechnertechnik/leser617.jpg" alt="Card-Reader" width="402" height="249" /></a>
		<div class="bildtext">
		<p>Card-Reader <a class="popup" href="/shared/photos/rechnertechnik/leser617.jpg">(enlarge picture)</a><br> </p>
		</div></div>
The card reader of the GE55 can be seen on the left of the pictures (without
its cover. It is interesting to see that Bull solved every problem for which
as (practical) mechanical solution exists in a mechanical way (as compared to
our times where microcontrollers are abundant even in applications which
might be implemented more easily with a mechanical approach). The card is
coupled to a punched tape which generates the clock signal for reading the
card's columns. Although this part can wear out easily, it is nevertheless an
ingenious solution.<br> 
Also visible is the projection display: 10 digits and two
additional symbols are displayed by an array of incandescent lamps with
associated lenses. This is the main way of communicating with the machine
like today's video terminals.
The picture below shows the read-only-memory containing 1024 words. A very
heavy contraption but very maintainable. (Both pictures can be enlarged by
clicking on them.)
		
		
		<div class="box right">
		<a  class="popup" href="/shared/photos/rechnertechnik/ge55-rom.jpg">
		<img src="/shared/photos/rechnertechnik/ge55-rom.jpg" alt="Read-only-memory" width="399" height="259" /> </a>
		<div class="bildtext">
		<p>Right: Read-only-memory removed from the machine. 
 <a  class="popup" href="/shared/photos/rechnertechnik/ge55-rom.jpg">(enlarge picture)</a><br></p>
		</div>
		</div>

	<div class="cols">
<div class="leftcol">
<p class="small">Contemporary document: In the following you find some quotations from
the system description published in 1967/1968:<br>
<blockquote><p class="small">"After intensive market research, BULL GENERAL ELECTRIC developed a
versatile computer system: Its internal structure resembles that of
modern computers. Furthermore it is a data processing system that
allows direct input via keyboard. It is a real data processing system
because it can grow with your needs and its memory capacity (internal
as well as external) can be extended.<br>

Construction: The central processing unit (CPU) of the GE-55 supports
four channels; three of which are normal speed channels for slow
input/output devices and one high speed channel used by external
memory units or a fast line printer...<br>
....the cycle time is 7.9 us. Characters are represented by their
respective ISO-code. The core memory is used as data and program
memory. A since byte, comprised of 8 data bits and one parity bit,
stores a single alphabetical character or up to two numerical
digits...
</div>
<div class="rightcol"><blockquote><p class="small">

Instructions are analyzed and executed under control of a
read-only-memory with a capacity of 1024 word of 36 bits each... This
memory contains micro programs for control, supervision and execution
as well as arithmetic and character conversion tables.<br>

Software: The programming system is mainly comprised of the following
parts: Symbolic languages that facilitate the actual programming task
and an assembler for translating assembler programs to machine
language...
"</div>
</blockquote></p></div>
<div class="clear">&nbsp;</div><br>
