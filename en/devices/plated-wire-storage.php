<?php
	$seiten_id = 'plated-wire-storage';
	$version = '$Id';
	$titel = 'Storage media: The plated wire storage';
	
	require '../../lib/technikum29.php';
?>

<h2><?php print $title; ?></h2>

<div class="box right">
	<img src="/shared/photos/rechnertechnik/grafiken/magnetdrahtspeicher-uebersicht.en.gif" alt="plated wire storage overview picture, shows the relationship between word straps and plated wires" />
</div>

<p>In the early 1970s, magnetical core memory was quite expensive and slow. That is, the cycle time (time needed to read and rewrite the information) was quite long, because all information had to be rewritten after they had been read. Semiconductor memory was not ready for series production for a long time yet, furthermore nobody even thought about non-volatile semiconductor memory at that time. So there was a need for a new consistent storage medium.
  <br/>As a solution, the plated wire was invented, just before the first semiconductor memories were ready for beeing mass-produced, supposed to be a replacement for the magnetical core memories. The plated wire consists of magnetic wire which replaces the cores (see picture at the right).</p>
<p>The installations from the UNIVAC 9000 series (like our <a href="/en/devices/univac9400/univac_9300.shtm">UNIVAC 9300</a>) were equipped with plated wire storages. We could offer pictures of our storage units, but the assembly of this type of memory is quite opaque. Therefore we publish self-drawn diagrams to illustrate the plated wire characteristics.
</p>

<p>From the physical point of view the plated wire storage is a thin-film storage medium. The information carrier is a 1 micrometer thick permalloy solenoid film (constisting of 81% nickel, 19% iron) that  sheats a beryllium copper wire with 0.13mm in diameter.<br/>Therefore you could save exactly 4 words of three bits each on the pictured detail.</p>

<!-- bzw. That plated wire constists of copper with a thin film which consists of an iron-nickel alloy. -->

<div class="box center" style="clear:right;">
	<img src="/shared/photos/rechnertechnik/grafiken/magnetdrahtspeicher-details.en.gif" alt="Detailed diagram: Plated Wire Characteristics, labeled" />
</div>

<p>These plated wires are embedded into word straps which are perpendicular to two sides of the plated wire. In the easy direction of magnetization (see diagram above), the magnet layer is quite stable, whereas it is unstable in the hard direction of magnetization. Each crossing-point from plated wire and word strap could save one bit.
<br/>To read the information, the word current is raised. The current will establish a magnetic field which tries to align the magnetization vector at the area in the plated wire covered by the word strap.
Lengthwise, the magnetic film is very hard to magnetize, therefore the vector only librates (insteads of rotating) <!--and falls back to the former position after the word current was lowered.-->
and falls back to the former position. This libration induces a small voltage. The sign of this voltage depends on the direction of the magnetization vector. Therefore it is possible to read a bit without destroying its value. This saves valuable access time, compared to the core memory.</p>

<div class="box left">
	<img src="/shared/photos/rechnertechnik/grafiken/magnetdrahtspeicher-lesen.en.gif" alt="Small diagram explaining the read process (pulse on word strap)" />
</div>
<div class="box right">
	<img src="/shared/photos/rechnertechnik/grafiken/magnetdrahtspeicher-schreiben.en.gif" alt="Small diagram explaining the write process (pulse on both word strap and plated wire)" />
</div>

<p>To change a bit, its the same procedure, but in addition to the raised word current, there is also a current in the plated wire (bit current). The affecting magnetic field can change the direction of a domain (binary storage cell). Therewith a new information was saved.</p>

<p style="clear:both;">
  In principle it was a brilliant idea, no threading of the ring cores, short cycle times, inexpensive and machine-made. But there were problems 
	in practice: the structure was quite sensitive, corrosion of the magnetic layers was one of the causes of failures. A repair in the field 
	was difficult and time-consuming, there were repair procedures to identify and replace individual faulty wires, which became more and more 
	difficult with increasing miniaturization.</p>

<p>Fortunately, the first semiconductor memories came onto the market at the beginning of the 1970s, so that most computers with magnet wire 
	memories were converted to semiconductor memories with INTEL chips, including our UNIVAC 9400.</p>

<p>On the other hand, our two UNIVAC 9200 are still running with the original wire storage, probably the last functional magnetic wire 
	storage on <b>earth</b>! </p>
<p>In <b>space</b>, on the outer boarder of our solar system, magnetic wire storage has been doing its job since 1977: in the command 
	and attitude control computers (CCS + AACS) of the two Voyager probes 1 and 2, they have been working error-free to this day 
	(2022) and play another advantage Semiconductor memory, they are more resistant to cosmic rays.</p>

