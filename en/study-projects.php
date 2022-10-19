<?php
	$seiten_id = 'lernprojekte';
	$version = '$Id';
	$titel = 'Study projects';
	
	require '../lib/technikum29.php';
?>

<h2>Study projects</h2>

<h3 id="Q1"> technikum29 supports school projects</h3>

<p>Microcontrollers revolutionize
and influence next to everything. How can schools participate on these
developments and perform successful and interesting projects?<br>
Fife pupils of Q1 (12th year in school) of the Albert-Einstein secondary
school were looking for a suitable idea for their so called "project
week". This project should be connected to mathematics, physics and/or
computer science. This is where the technikum29 got involved. The idea
the pupils came up with was to connect technology from the 1950s with
modern equipment of 2012. Communication spanning time and technology.<br>
<div class="box left">
        <img src="/shared/photos/kommunikationstechnik/arduino1.jpg" width="303" height="189" />
       </div>
<p>Traditionally such projects required knowledge only accessible to
computer scientists, engineers and the like. Often they had to spend
weeks of reading data sheets, writing cryptic assembly code etc. How
things have changed! Since 2009 a cheap and versatile module named
"Arduino" is available - a controller based on the well known ATmega
328 chip featuring 32 kB of memory. Arduino boards are designed not
for the expert but for the layman and are the perfect base for
creative people, artists, designers etc.
 <br>
This project focuses on connecting computers to the "real world". The
small Arduino board can be programmed to be used as an interface for
nearly everything. The pupils decided to connect an early fax machine
(a Siemens KF108 made in 1956) to a modern PC.	 <br>
This fax machine is based on a rotating drum which holds the sheet of
paper to be transmitted to the receiving station. The picture is
scanned in a spiral movement by a photodetector that slowly moves in
parallel to the axis of the drum. Of course, this is incompatible with
more recent fax machines.

The Arduino was planned to act as the interface between this historic
device and a modern PC. Thus the pupils first had to learn how to
program such a micro controller which turned out to be quite difficult
for non-programmers. Nevertheless the software approach has its
advantages: It is more easily debugged compared with a traditional
hardware based interface. Thus it only took a single week to program
and interface the Arduino board to the Siemens fax.

<div class="box center">
        <img src="/shared/photos/kommunikationstechnik/kf108+laptop.jpg" width="700" height="438" />
	   
<p>The fax machine generates an auido signal with a frequency of 1.5 kHz
denoting black pixels to be transmitted. To convert this into a binary
signal with a 5V level an amplifier circuit is needed that is followed
by an RC-combination. In addition to that a synchronization signal is
necessary to signal the start of a new line being scanned. This is
generated utilizing a reed-contact that is triggered by a so called
"super magnet" that has been glued onto the axis of the scanner drum.
The reed-contact thus generates a signal for every revolution of the
drum which corresponds to a single line being scanned.<br>

The control program for the Arduino was developed by the pupils (and is
<a href="/de/lernprojekte/arduino-projekt-programme/" class="go">online avaliable
in our repository</a>). It allows the picture being scanned, a historic Mickey-Mouse drawing, to be transferred to the PC
where it is displayed slowly line by line with good resolution. 

The experiment was a full success and will inspire future projects.

<p class="small">*) Arduino: The name of this board derives from King "Arduino of
Ivrea" who lived in medieval times in northern Italy where the
controller was developed.</small> <br>

<h3>Siemens computer for demonstration</h3>

<div class="box center">
        <img src="/shared/photos/rechnertechnik/siemens-democomputer.jpg" alt="Siemens-Democomputer" width="700" height="587" class="nomargin-bottom" />
		<p class="center"><b>Siemens computer</b></p>
	</div>

<p>The demonstration model shown above was built in 1973 by Siemens (Germany). It
was used as an educational tool for technicians and engineers. The large
machine on the right was built in rather high numbers for computer science
courses and the like. Even today it can be used to show the basic principles of
instruction processing, internal cycles etc. Its short word length of only 4
bits is sufficient for this.<br>
The program can be setup on the left by use of plugs containing various binary 
values representing the instructions of the machine. The "computer" can be
operated in either one of two modes: cycle mode or instruction mode. In
addition to that its clock cycle time can be set arbitrarily or single step
mode can be selected. 126 incandescent lights show the data flow through the
registers, the operation of the control circuitry, the arithmetic/logic unit
and the memory locations.<br><br>

The demonstration model represents a bit-parallel program controller computer.
The currently implemented program adds to binary values. It demonstrates that
even short word lengths do not necessarily restrict the range of values that
can be processed by such a machine.<br>

 

 It is a truly wonderful machine that displays the elementary processes taking
place in every computer even today.</p>

	 