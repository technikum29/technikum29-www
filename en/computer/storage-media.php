<?php
	$seiten_id = 'speichermedien';
	$version = '$Id$';
	$title = 'Historic internal storage media';
	
	require "../../lib/technikum29.php";
?>	
<header class="teaser seitenstart">
	<img src="/shared/photos/rechnertechnik/speichermedien/header-memory.jpg" width="941"  height="270">
	<h2>Historic internal storage media</h2>
</header>

    <p>
      In the following some types of memory are described which are found in the computers on display at the technikum29. These devices may be classified as either RAM (random access memory) or ROM (read only memory). Due to their respective size these are very demonstrative examples.
      <br/>The problem of storing information is of central importance for digital computers and was a difficult area during the early days of computing. In these times building a fast processor was considerably more easy than building an equally fast and large memory system for this processor. This led to some rather arcane solutions which are completely extinct today.
    </p>
    <p>
      Nowadays as well as 50 years ago, these characteristical attributes are important:
    </p>

    <ul>
           <li>cycle time</li>
           <li>packing density</li>
           <li>costs / bit</li>
           <li>(thermal) power loss</li>
    </ul>
    <p>Storages are classified geometrically:</p>
    <ul>
           <li>one-dimensional alignment (e.g. the delay line memory)</li>
           <li>two-dimensional alignment (e.g. drom storage, disk storage)</li>
           <li>three-dimensional alignment (e.g. core memory, the number of layers is the word length)</li>
    </ul>
    <p>These physical principles has been used: electrostatic charge (storage tube),
       propagation of acoustic waves (delay line memories), ferromagnetism (core memory,
       plated wire memory, drum/disk memory), holography (optical memories). The most important
       and most spread memories are the ferromagnetic memories.</p>

    <h3 id="delay-line-memory">Delay line memory from the BULL GAMMA 3 tube calculator</h3>
	<p>
      Incredibly big, next to no capacity from today's point of view and at 8.3 kg
extremely heavy - that is the historic memory from our vacuum tube based <a href="/en/computer/gamma3.php"> BULL
GAMMA 3</a> computer (vintage 1952-1959). See this marvelous device here:

	<div class="box center">
	<img src="/shared/photos/rechnertechnik/speichermedien/bull-gamma3-laufzeitspeicher.jpg" alt="Delay-Line" width="720" height="559" />
	<p class="bildtext"><i>Figure 1: Delay-Line</i></p></div>
	
The next picture shows the back of this memory (M1). The bottle of wine
serves as a comparison. The delay lines consist of 120 LC combinations which
serve as low-pass filters yielding, each yielding a short delay.

<div class="box left">
	<img src="/shared/photos/rechnertechnik/speichermedien/bull-gamma3-speicher.jpg" alt="Delay line memory opened" width="478" height="380" />
	<p class="bildtext"><i>Figure 2 (on the left): Delay line memory opened</i></p></div>

	<div class="box center">	
<img src="/shared/photos/rechnertechnik/speichermedien/speicherausschnitt.jpg" alt="Details" width="225" height="233" />
<p class="bildtext"><i>Figure 3: Cutout. The LC elements can be clearly seen</i></p></div>
		

After having passed through 12 such delaying low-pass filters, the signals
are extremely attenuated and must be regenerated. This is done by 10 tube
based amplifiers. At the end of such a chain of low-pass filters and
amplifiers, the signals are amplified again and fed to the input of the delay
chain. This causes a bit pattern to circulate in the memory, thus effectively
creating a memory.

<div class="box left">
	<img src="/shared/photos/rechnertechnik/speichermedien/laufzeitkette.jpg" width="478" height="119" />
	<p class="bildtext"><i>Figure 4: Part of a delay line - three of 120 LC combinations are visible</i></p></div>


The memory module shown here can store a single (!) twelve digit decimal
number which corresponds to about 6 byte! Not 6 MB, not 6 kB, no, six single
bytes! Back in the days of this computer memory was en extremely scarce
resource. Programmers were hard pressed to use as few memory locations as
possible.<br>

This kind of memory is extremely rare and predates the widespread use of
core-memory. It was called a "delay-line memory". The BULL GAMMA 3 uses seven
of these delay-line memories, corresponding to 58 kg of electronics yielding
a total of 42 bytes of main memory.</p>

	

		
 
    <h3 id="run-time-memory">Magnetostrictive memory</h3>
	
	
    <div class="box center manuelle-bildbreite" style="max-width: 860px;">
        <img src="/shared/photos/rechnertechnik/speichermedien/laufzeitspeicher.jpg" alt="Photography of a magnetostrictive memory" width="421" height="393" />
        <img src="/shared/photos/rechnertechnik/speichermedien/laufzeitspeicher-details.jpg" alt="details" style="margin-left: 3px;" width="421" height="393" />
		<p class="bildtext"><i>1&nbsp;kB magnetostrictive delay line memory</i></p>
	</div>

    <p>Another kind of "delay line" memory is the so called magnetostrictive memory. This technique is based on the idea of the propagation of ultrasonic waves through a thin wire. The information to be stored is fed into a long wire by the effect of magnetostricion (the wire contracts when exposed to a strong magnetic field &ndash; this in turn yields an acoustic wave traveling across the wire). A bit pattern created by this effect travels along the wire to its end where the information is picked up by a piezo electric element. The output of this pickup will be amplified and fed back into the beginning of the wire loop.</p>
    <p>This basically yields a sequential storage circuit - an impulse pattern will run in an endless loop through the wire. To insert information into the loop some (simple) additional circuitry is necessary. To delete bits, the feedback loop will be opened while setting bits requires an OR gate at the input of the wire loop.</p>
    <p>This type of memory is volatile and has a rather long access time &ndash; on the other hand, its capacity depends mainly on the length of the wire and the basic clock of the surrounding circuitry so it may easily expanded. In addition to this it is relatively inexpensive and rugged making it suitable for applications like desktop calculators and the like.</p>

	<h3 id="core-memory">Core memory</h3>
	
	<div class="box left clear-after">
<a class="popup" href="/shared/photos/rechnertechnik/speichermedien/demo-kernspeicher.jpg">
	<img src="/shared/photos/rechnertechnik/speichermedien/demo-kernspeicher.jpg" width="428" height="322" /> </a>
	
	<p class="bildtext"><i>Core memory demonstration model, Transfluxor</i><br>(you can enlarge the picture!)</p>
	
<p>
This giant core memory has been used for teaching purposes in a university in
the late 1950s and early 1960s. It is a fully functional model of a special
type of core memory. Its size can be estimated by means of the wine bottle
visible in the background.<br>
In contrast to the more common "core memory" store used in most computers until
the advent of semiconductor memory, this device uses so-called Transfluxor
cores with a diameter of 8.5mm. These have a very peculiar shape - not the
simple donut structure of a traditional core. This results in a separation of
magnetic flux domains which allows a non-destructive read out - a definitive
advantage over traditional core-memories. Alas, this comes at a cost: The
control of such a memory system is more complicated compared with a traditional
core memory. Nevertheless it was used in telecommunications equipment like
telephone exchanges.<br><br>
The creation of this demonstration device must have required an awful amount of
time. Having a look at this <a class="popup" href="/shared/photos/rechnertechnik/speichermedien/demo-kernspeicher-ausschnitt.jpg"> detailed view of the memory</a> gives an impression of its complexity. Each Transfluxor has two holes through which thin wires are threaded.
 </p>
</div>
	
    <div class="box center auto-bildbreite">
        <img src="/shared/photos/rechnertechnik/speichermedien/triumph-kernspeicher.jpg" alt="Core memory made by Triumph" width="694" height="520" />
        <div class="bildtext">
		    <p><i>Triumph core memory</i></p>
		
            <p>The company "Triumph" created a very demonstrative core memory
			   about 1961). The circuit card, measuring 16 cm by 20 cm, can
			   store 144 bit which equals 12 machine words of 12 bits
			   each (which was a common word length in this time). Thus a single
			   bit occupies an area of about 2.2 square centimeters.</p>
        </div>
		<img src="/shared/photos/rechnertechnik/speichermedien/kernspeicher-ausschnitt.jpg" alt="Detailed view on the Triumph Core Memory" width="694" height="90" />
		<div class="bildtext">
		    <i>The Triump core memory was still threaded manually, in contrast
			   to the memory shown below.</i>
		</div>
    </div>

    <div class="box center auto-bildbreite">
        <img src="/shared/photos/rechnertechnik/speichermedien/kernspeicher-univac.jpg" alt="A core memory built onto a modul from the UNIVAC 9400 mainframe" width="550" height="420" />
        <p class="bildtext">
            Another core memory made in 1969 is shown here. It is used
			in the <a href="/en/devices/univac9400/highspeed-printer.php">high
			speed printer</a> of the <a href="univac9400.php">UNIVAC mainframe</a>
			and stores a single line of text to be printed (132 characters). The
			individual cores can still be seen by the naked eye.
         </p>
    </div>

    <div class="box center auto-bildbreite">
       <img src="/shared/photos/rechnertechnik/kernspeicher.big.jpg" alt="Photography illustrating the size of a core memory in contrast to a match" width="629" height="443" />
       <p class="bildtext"><i>Storage layer with a capacity of 16.000 bit</i></p>
	</div>
	
    <p>During the years the capacity of core memory devices was increased more and more while the dimensions were shrinked accordingly. This picture shows a core memory plane made in the time frame 1975 - 1978. The area shown equals
       that of the 144 bit memory by Triumph shown earlier. Now there are more than 16000 cores on the same area. The individual cores can only be seen with the aid of a magnifying glass. The whole core memory block contains 16 planes like this containing more than 256000 single cores (this is equivalent to 32 kB of data) occupying a volume of about 2.5 cubic decimeters. This device marks the end of the era of core memory.</p>

    <p>The smaller the individual cores the faster the access time &ndash; this device features an access time of only 200 ns. One drawback of core memory is that reading the information stored in a row of cores destroys the information. So every read access has to be followed by a write access to retain the information (reading from a core memory takes more time than writing to the memory which is a rather unique "feature" of this technology).</p>

    <p>A major advantage of core memory is its non-volatility. The information stored in a core memory will be retained even when power is lost. It is possible to turn on a machine switched off in 1975 and continue operation at the very same step where it ended in 1975. Even today main memory is sometimes called "core" which is a reminiscence of the early days of computing when memory was in fact core memory. A memory dump as a result of a program crash is still called "core dump" in the UNIX operating systems family, for example.</p>


   <h3 id="threaded-rom">Threaded ROM</h3>
   <div class="box center auto-bildbreite">
        <a name="backlink-gefaedeltes-rom" href="/en/devices/threaded-rom.php"><img src="/shared/photos/rechnertechnik/speichermedien/nixdorf-rom-gesamt.jpg" alt="Photography of a threaded ROM made by Nixdorf" width="694" height="470" /></a>
		<p class="bildtext"><i>Nixdorf threaded ROM</i></p>
   </div>
   
    <p>All of the memory devices shown before were capable of read and write operations. Sometimes a read only memory (ROM for short) is needed. The picture shows such a ROM made in the mid 1960s which is closely related to a core memory.
       <br/>The device shown is from a NIXDORF-WANDERER Logatronic system (made in 1966 approximately) which is a predecessor of the well known NIXDORF 820 system (see below). This ROM can store 2048 words of 18 bits each. The implementation is a true masterpiece of its time.</p>
            
    <p>You can get further explanations and a <a class="go" href="/en/devices/threaded-rom.php">more detailed version</a> by clicking on the picture.</p>
  

   <h3 id="magnetic-stick-memory">Magnetic stick memory</h3>
   <div class="box center auto-bildbreite">
       <a href="/en/devices/magnetic-stick-memory.php"><img src="/shared/photos/rechnertechnik/speichermedien/gefaedeltes-rom.jpg" alt="A 'magnetic stick memory' made by nixdorf" width="750" height="525" /></a>
       <p class="bildtext"><i>Nixdorf magnetic stick memory</i></p>
   </div>
   
   <p>NIXDORF decided to implement a read only memory which could be easily modified by customers and did not require a service technician to modify its contents.The whole operating system of the NIXDORF 820 was stored in ROMs like this (all in all 3 modules &ndash; type 177 &ndash; were necessary for this). Even empty ROMs were manufactured which were sold to customers who liked to modify their 820 system. Each of these modules could hold 4096 word of 18 bits each. One of these ROMs weighs 2.4 kg.</p>
   <p>Clicking on the picture will yield a <a class="go" href="/en/devices/magnetic-stick-memory.php">more detailed version</a> of it.</p>
   

   <h3 id="plated-wire-storage">Plated wire storage</h3>
   <div class="box left clear-after">
       <!--<a href="/en/devices/plated-wire-storage.php"><img src="/shared/photos/rechnertechnik/grafiken/magnetdrahtspeicher-uebersicht.en.gif" alt="Simplified diagram showing the plated wire storage" width="400" height="254" /></a>-->
       <a href="/en/devices/plated-wire-storage.php"><img src="/shared/photos/rechnertechnik/speichermedien/magnetdrahtspeicher.jpg" alt="Photography from a plated wire storage, zoomed greatly" width="340" height="303" /></a>

	   <div class="bildtext">
       <!-- new text and image since 17.08.08 -->
       <p>The plated wire storage was intended for replacing the core memory.  Our
          <a href="/en/devices/univac9400/univac_9300.php">UNIVAC 9300</a> is equipped
          with this type of memory that was initially announced by UNIVAC for the new
          UNIVAC 9000 series as a "technical revolution" in their magazine "The punch card"
          in 1967.</p>
       <p>While research and development in the Goddard Space Flight Center of the US space
          program, NASA, the american government closed a deal with UNIVAC to develop a
          storage medium with a total input power less than 1 Watt, non-destructive readout
          (that is, no more neccessarity to write the informations after reading them),
          high capacity, low cycle time and functionality in a temperature range from
          -20° C to +50°C (-4°F to 122°F).
          <br/>In this way the plated wire storage was developed, based on a couple of
          ingenious ideas. Unfortunately, nowadays it is very error-prone.</p>
       <p>Clicking on the photography will yield further informations about the
          <a class="go" href="/en/devices/plated-wire-storage.php">design of the plated
          wire storage</a>.</p>
       </div><!--bildtext-->
   </div><!--box plated wire storage -->

   <h3 id="lochband">Two channel punched tape</h3>
   <div class="box left clear-after">
       <img src="/shared/photos/rechnertechnik/speichermedien/lochband-combitron.jpg" alt="A two channel punched tape from the DIEHL combitron calculator" width="424" height="322" />
       <p class="bildtext">
           As already described before (section <a class="go" href="programmable.php">programmable 2nd generation desktop calculators</a>), the DIEHL Combitron calculator used a time delay memory (like the magnetostrictive memory described elsewhere). Since this type of memory is volatile, DIEHL needed a non-volatile memory for the overall control of the machine. This had been implemented using a two channel punched tape. The first channel serves as a clock channel while the second channel contains the actual control data.
           <br/>During the startup of the calculator, the contents of this punched tape were copied to the time delay memory which then took over control of the machine.
        </p>
   </div>

