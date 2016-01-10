<?php
	$seiten_id = 'univac9200';
	$version = '$Id$';
	$title = 'UNIVAC 9200, UNIVAC 9300';
	
	require "../../lib/technikum29.php";
?>
    <h2>UNIVAC 9200 - the first</h2>
	
	<p>The Univac 9200 (Univac 9300) is a punch card computing data center from 1966. It is
	   uncommon that such old devices are completely preserved, even all the
	   manuals are available. This system was stored for over four years in the museum
	   archives until we moved it with a freight company into the museum, next
	   to the <a href="univac9400.php">UNIVAC 9400</a>.</p>
	   
	<p>After moving the devices with a trucking company to the museum building,
	   the restoration started with cleaning all the devices, initially removing the typical
	   old, rotten noise-absorbing mats at the very first. They have been replaced by
	   brand new cellular rubber.</p>

    <p>We expect most of the problems to be with the mechanical parts in the cabinets.
       Already we have removed the transportation locks and replaced some bearings,
	   drive rollers and belts. The card puncher features 15 timing belts, for instance.
	   The card reader (500 cards/minute) works again and the puncher mechanics are
	   now executable, too. The processor link to these auxillary devices is another
	   issue and will be checked in the near future.</p>

		<div class="box center auto-bildbreite">
			<img src="/shared/photos/rechnertechnik/u9300-1.jpg" alt="UNIVAC 9200" width="850" height="440" />
			<p class="bildtext">
				<b>UNIVAC 9200</b> electronic data processing system, with its components (left
				to right): bar printer, cpu, "electronic cabinet" (power supply and plated wire
				memory), card reader, card puncher.
			</p>
		</div>
		
	<p>For aesthetic reasons, we also repainted the cabinets.</p>
	<p>We will address the bar printer at a later time. In contrast to the already
       mentioned devices, the printer cannot be controlled manually, so we will
	   have to start up the processor, too. This will be a buggy job.
	   But all the work is not for nothing, <!-- sic! gute uebersetzung -->
	   since the system is really unique, featuring punch card assembler programming.</p>

	<p>We will continously update this page about the progress of the reparation
	   until the device is fully functional again.</p>

	<div class="box center auto-bildbreite">
        <img src="/shared/photos/rechnertechnik/univac9200.jpg" alt="UNIVAC 9200" width="700" height="368" />
		<p class="bildtext"><b>UNIVAC 9200</b> electronic data processing system, uncovered while being restored</p>
	</div>
		
		
	<b id="cards">UNIVAC 9200/9300 Software</b><br>
<p>Often it is sheer luck that helps saving unique artifacts from scrap. In this
case a curious student at the Goethe University discovered strange objects in a
building and informed us. It turned out that these devices were a <a href="/en/computer/punchcard.php#u1710">UNIVAC 1710</a> 

card puncher and a cabinet full of punched cards containings programs for our 
UNIVAC 9200. The punch cards, about 65000 pieces, contain programs which were
developed between 1967 and 1975 at the institute of mathematics and applied
computer science. We will surely revive some of these old programs on our
UNIVAC system. <br>
 The rescue action was actively supported by the University of Frankfurt and
the "FITG" (Frankfurt) whon we would like to thank for their efforts.</p>
	<div class="box center auto-bildbreite">
<img src="/shared/photos/rechnertechnik/univac/lochkarten.jpg" alt="65.000 punch cards" width="700" height="174" />
		<p class="bildtext">24 boxes containing more than 65000 punch cards extend our software library</div>
		
<p>NB: One punch card can hold up to 80 characters - that makes about 80 bytes
per card. Thus 65000 cards correspond to about 5 MB which is roughly the same
amount of data that a modern digital camera produces for a single picture.
Stored on punch cards 5 MB weigh about 160 kg while the cabinet housing the
cards has a volume of about 0.5 cubic meters (about 500 liters of volume).</p><br><br>


<h2 id="u9200"><b>UNIVAC 9200</b> - the second</h2>

<div class="box center auto-bildbreite">
		<img src="/shared/photos/rechnertechnik/u9200-1.jpg" alt="UNIVAC 9200 mainframe" width="850" height="404" />
		<p class="bildtext">The new Univac 9200</p>
	</div>

<p>It is nearly unbelievable: Since September 2015 we have a second UNIVAC 9200
in the museum! It is sheer luck when such a precious old machine survives so
many years (1967 to 2015) without any major damage at all. This particular
machine was stored under near ideal conditions in the cellar of a
municipality before it found its way to our museum where it will be restored
to running condition again. Fortunately, the machine was professionally
decommissioned so all necessary cables are still there and intact - this is
true luck since often cables just get cut during decommissioning of large
computers.<br>

The machine is different in some respects to our other machine of the same
type: The bar-printer is slower (we expect a higher quality of print outs due
to that fact), the memory is expanded to 16 kB as compared to 8 kB of
the other machine, and the punch unit is a rare "Read-Punch". This device is
capable of reading pre-punched cards and punching results onto the very same
cards.
<br>
By the experience repairing the first U9200, the repair of the second UNIVAC 9200 took only a few weeks:  It is fully operational since January 2016."
</p>
<p class="small">We would like to thank the municipality of Rheine and in particular Mr. M.
Lange, who donated the machine to the museum.</small>


	<h3 id="blog">Restoration Blog (the first UNIVAC 9200)</h3>	
	<p class="small"><b>17.01.2010:</b> There were some mice in the power supply and printer; they
	   bit thorugh some small cables.
	<br><br><b>16.02.2010:</b> After locating two defective resistors the power supply is
	   running again. Now we can use punch card devices from the CPU. Actually
	   we cannot read nor punch data.
	<br>Now there is another malfunctioning device: The <a href="storage-media.php#plated-wire-storage">
	   plated wire storage</a> does not work. We are trying to get it working at least partially,
	   replacing it with a new self-made solid state memory. As you can read on our
	   <a href="/en/devices/plated-wire-storage.php">detailed description of the
	   plated wire storage</a>, this type of memory has always been very error-prone.
   	<div class="desc-right">
		<img src="/shared/photos/rechnertechnik/u9200pannel.jpg" alt="UNIVAC 9200 Front palen" width="500" height="382" />
		<p class="bildtext" style="width:500px;"><b>UNIVAC 9200 front panel:</b> 160
                states of processor and periphery can be indicated with light bulbs and
		selected via switches.</p>
	</div>
	<p class="small"><b>15.04.2010:</b> The boot process of the device is still crashing. There is
	    an error message from the printer without any reason. We are trying to
		locate this error.
	<br><br><b>02.05.2010:</b> A broken thyristor (hammer driver) raised the
	    "printer error" message. Data integrity was the most important consideration at the
		time. If only one of the 140 printer columns is not working correctly, the whole
		printer goes offline to avoid any wrong output.
	<br>><br><b>10.05.2010:</b> We managed to get the plated wire storage online. We
	    can even start some small test programs via the input switches, but there are
		bugs while running. This is perhaps the only device that still uses the old
		plated wire storage. Anyway, we are planing a replacement.
	<br><br><b>12.06.2010:</b> After calibrating the optical card reader, we could read in
	   and execute small programs in the data memory. We will report about the high
	   security level of the card reading process later. Surprisingly the plated wire
	   storage still works.
	<br><br><b>16.06.2010:</b> The card puncher doesn't work any more. 30 years of inactivity
	   are a long time for computers, too.
	   <br>On the other side, we could execute a printer loop program. The huge printer
	   starts up, but doesn't print yet. After two minutes, a thermal fuse triggers.
	   
	<br><br><b>25.06.2010:</b> The fuse is triggerd by a broken centrifugal switch from the
	   printer engine start-up windings. Therefore the winding was always on and
	   constantly dissipated current. Now the engine is running, but print commands
	   are not yet executed.
	   <br>We also found a bug in the memory. Now all 8kB seem to run completely
	   error-free.
	<br><br><b>30.06.2010:</b> We located another bug in the printer logic (faulty
	   transistor). For the first time in 30 years, the bar printer works and is capable of
	   printing files from various punch cards. The type face looks good.
	   <br>Now we turn to the damaged printer.
	   <div class="desc-right">
		<img src="/shared/photos/rechnertechnik/univac/messen-am-memory.jpg"  width="400" height="313" />
		<p class="bildtext" style="width: 400px;"><b>Backside of the UNIVAC 9300:</b> With a storage oscilloscope and a logic analyzer logic states are measured</p></div>
	   
	<p class="small"><b>05.08.2010:</b> After replacing a broken transistor and injecting some oil,
	   the puncher is up and running! Now we are able to dublicate punch cards.
	   Unfortunately we had to disable the error checking functions since the device
	   detected a non-existing error when punching. Locating this error is the next
	   problem.
	   
	<br><br><b>26.08.2010:</b> Locating the bug in the device's internal error checking
	   of punched data was hard work. The computer compares the data which should be
	   punched with the position of the hammers in the punch station in a very
	   complex way. One of the 24 inductive sensing elements was broken,
	   furthermore a transistor which amplifies the particular induced voltage was
	   out of order and there was a cold solder joint. Finally the complete sensing
	   station had to be recalibrated to deliver all information simultaneously to
	   the comparing element. The adjustment has only a margin of 5 microseconds.
	   After this repair, all duplicated punch cards are checked too. If there
	   is a wrong punch hole, the computer stops immediately (an event that occurs
	   extremely rarely now).
	   
	<br><br><b>19.10.2010:</b> After all test programs were run successfully, we can now declare
the machine as being fully operational. The next step will be constructing a
new memory system which is necessary since the original plated wire memory is
fragile and it is doubtful that it would survive the years to come without
errors.

<br><br><b>Feb. 2012:</b> Redesigning the memory using modern semiconductor circuits is more complicated
than expected initially. Despite a lot of effort concerning the timing of 
all signals involved in the RAM's logic the new RAM card is still not working.
Further tests and modifications will be necessary. Fortunately the original
wire memory is still working perfectly.

	<br><br><i>This blog will be irregulary continued.</i>
	<hr>
	
<p class="small">We would like to thank Dr. Frank Berger and Dr. Juergen Steen (both from the
"Historischen Museum Frankfurt) for their suuport and many spare parts they
donated for this machine. Repairing such complex circuitry would be next to
impossible without known good boards for swapping etc.</small>

