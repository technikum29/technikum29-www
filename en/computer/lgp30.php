<?php
	$seiten_id = 'lgp30';
	$version = '$Id: elektro-mechanik.php 688 2014-11-15 09:18:06Z heribert $';
	$titel = 'Schoppe & Faeser: LGP 30';
	
	require "../../lib/technikum29.php";
?>

<h2 id="lgp30">LGP 30</h2>

The 1st-generation dataprocessing system LGP-30 was developed in the United
States by <b>L</b>ibrascope and <b>G</b>eneral-<b>P</b>recision in the mid-1950s. About 40 such 
machines were built under a license agreement by Schoppe & Faeser in Germany.
The LGP-30 was intended as a scientific computer system and was superseded 
by the <a class="go" href="/en/computer/early-computers.php"> <b>LGP-21</b></a> in 1962.<br>

Programs and data are stored on 1" paper tape which are fed to a high-speed
punch/reader. Manual input and output is performed by a so-called 
"Flexowriter" made by Friden. This device is basically an electric 
typewriter with a paper tape attachment.</p><br>

<div class="center">
		<img src="/shared/photos/rechnertechnik/lgp30-1.jpg" alt="LGP 30" width="850" height="380" />
		<p class="center">	
		<b>LGP-30 vacuum tube based computer - prior to restauration</b>
		</p></div>
	
<p>Unfortunately, our machine is missing the special interconnect cables
for the high-speed paper tape system and the Flexowriter. Therefore we
are looking desperately for the required <a class="go" href="/en/wanted.php#connector" target="_blank">special connectors </a>. <br>
Apart from this, the machine is in rather good shape. First
of all the side panels have to be repainted and all the mechanic parts
have to be brought back to working condition. After that the electronics
can be debugged - a true adventure, digging deep into vacuum tube based
digital electronics.</p>

		
	<div style="width: 350px;" class="desc-left borderless no-copyright">
    <a class="popup" href="/shared/photos/rechnertechnik/lgp30-2.jpg">
		<img src="/shared/photos/rechnertechnik/lgp30-2.jpg" alt="Front View" height="266" width="350"></a>	
		<div class="bildtext">	
			<p><b>Front View without casing</b></p> <a class="popup" href="/shared/photos/rechnertechnik/lgp30-2.jpg"> enlarge picture</a> 
		</div></div>	
				
		<div style="width: 350px;" class="desc-right borderless no-copyright">
    <a class="popup" href="/shared/photos/rechnertechnik/lgp30-3.jpg">
		<img src="/shared/photos/rechnertechnik/lgp30-3.jpg" alt="Backside" height="262" width="350"></a>	
		<div class="bildtext">	
			<p><b>Backside without casing</b></p> <a class="popup" href="/shared/photos/rechnertechnik/lgp30-3.jpg"> enlarge picture</a> 
		</div></div>	

<p class="clear">The technical data is rather interesting: The magnetic drum rotates at
3600 RPM, the distance between two adjacent tracks is 2mm, a single track
has a width of 1mm and the spacing between read/write heads and the 
drum surface is 25 um! The memory capacity is pretty large for its time
at 4,096 words of 32 bits each. The basic clock frequency is 120 kHz and
the access time is between 2 ms and 15 ms. A single addition takes 
0.23 ms while a multiplication requires 15 ms (without the necessary
access times to the drum).<br>
All in all, there are 113 long-life vacuum tubes and 1450 Germanium
diodes packaged in 34 modules (12 different module types). <br>
Peripherals:
The paper tape reads is capable of reading 200 characters/s, the high-speed
punch can punch at 50 characters/s while the Flexowriter is capable of
printing 10 characters/s. <br>

The processing unit (without peripherals) weights 350 kg.</p>


<p class="clear">Some historical data regarding our machine: Its whereabouts prior to 1962
are unknown. It was then used from 1962 until 1980 at a land surveying 
office for various purposes including the generation of control paper 
tapes for a ZUSE Graphomat Z64 plotter, recalculation of historic
triangulation nets, affine transformations, Helmert-transformations,
basic tasks for land surveying etc.<br>

Those tasks were quite demanding and even a rather simple fit through 
three points determined by triangulation took about 3 to 4 minutes of
computer time.<br><br>


<div class="desc-right borderless">
<a href="/shared/photos/rechnertechnik/lgp-trommelspeicher.jpg" target="_blank">
		<img src="/shared/photos/rechnertechnik/lgp-trommelspeicher.jpg" alt="Trommelspeicher" height="325" width="420"></a>	
		<div class="bildtext">	
			<p>LGP-30 Magnetic Drum. The magnetic layer has some defects. <br> The photo can be enlarge.</p>  
		</div>	</div>
		
<div id="trommel"></div>

<p>Now the restoration of this vaccum tube based computer started. The biggest
problem is the magnetic drum memory. Currently four options are under
consideration:<br>

1. Applying a new magnetic coating to the damaged drum. This approach would
be ideal but also the most complex solution.<br>

2. Simulating the complete drum assembly by a modern microcontroller.
Attaching this to the vacuum tube electronics would be feasible by means of
level shifters (0V and -20V are required for operation).<br>

3. A discrete approach emplying RAMs, EPROMs, operational amplifiers and lots
of glue logic. This does not have any advantages over approach 2.<br>

4. Replacing the rotating drum by a fixed assembly holding magnetic
read/write heads, one for each head of the drum. This approach has been
abandoned due to its complexity.<br><br>

Compared with the complexity of emulating the drum assembly, the missing
cables are only a minor problem. Fortunately four experts will support the
restoration effort. We would especially like to thank Mr. Klemens Krause
<a href="http://computermuseum.informatik.uni-stuttgart.de/"target="_blank">Computermuseum-Stuttgart</a>.


