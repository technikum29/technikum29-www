<?php
	$seiten_id = 'ibm1130';
	$version = '$Id: ibm1130.php 271 2013-04-23 19:23:24Z heribert $';
	$titel = 'IBM 1130 Computing System';
	
	require "../../lib/technikum29.php";
?>
   
	<h2 id="ibm1130"><b>IBM 1130</b>  &nbsp;  Computing System</h2>

    <div class="box center clear-after">
		<img src="/shared/photos/rechnertechnik/ibm-1130.jpg" alt="IBM 1130 Elektronische Rechenanlage" width="700" height="603" />
		<div class="bildtext">
		<p><b>IBM 1130</b></p>
		</div>
		<br><br>
		<p>Since December 2013, we own a very nice and also quite interesting "Electronic Computing System" by IBM. This type was delivered for the first time in 1965 and intended for use by scientists, engineers, and mathematicians.<br>
		The "AMPEX TMZ" (digital tape memory system) is connected to the equipment, so we are urgently looking for Manuals (schematics).<br>
There is much to report about, but in first place the optical and electronical restoration of the Computer have to be realized.<br> This section will be continued within a short time.</p><br>

<h3 id="blog-ibm">Restauration-Blog</h3>
		<p class="small">
		As we did for the restoration of the UNIVAC 9200, we will again have a repair
blog for the IBM 1130. The main problem here is due to the rather special
technology employed by IBM, the so-called SLT (Solid Logic Technology). The
circuit elements are small ceramic tiles with discrete transistors, resistors
etc. which thus form an equivalent to an integrated circuit. The problem is
that these elements and boards are no longer available. So the very advanced
technology of IBM makes it hard to maintain these old machines today.<br> 
In the same time other companies like BULL still used discrete transistors mounted
on large circuit boards. Worlds colliding... Such a restoration process is
extremely time consuming and cumbersome and maybe we wouldn't start it at all
if we knew in advance how many bugs there are to resolve.</p><br>
		
		
		<div class="desc-left">
		<a class="popup" href="/shared/photos/rechnertechnik/ibm-1130-board.jpg">
	<img src="/shared/photos/rechnertechnik/ibm-1130-board.jpg" alt="Modul der IBM1130" width="195" height="247" /></a>
	<p class="small">Typical <b> SLT-module </b>. The IBM circuit diagram was printed on high-speed printers.<br>Disadvantage: heavy to read because all logic elements look identical. <br>Enlarge: click on picture!</p></div>
		
		<p class="small">
		
		<b>Dec.2013:</b>  Cleaning the machine and removing disintegrated foam rubber mats.<br><br>
		
		<b>30.12.2013:</b> Due to curiosity we already invested much time. After installing
16 kB memory the first power on was attempted: No magic smoke escaping - a
big success! Nevertheless, the console typewriter banged its type head
repeatedly at the left margin so we switched off quickly.<br><br>
		
		<b>2.1.2014:</b> Removal of the console typewriter for easier maintenance. After
three hours the bug was found: Four small bars, moved by springs, were
immovable due to old oil which had solidified. Correction was simple due to
some W40.<br><br>
		
		<b>4.1.2014:</b> Since the console typewriter is now working flawless, we
concentrated on writing data to the memory system. At first sight, the memory
is working a "bit".<br><br>
		
		<b>6.1.2014:</b> After we have learned how to deposit data to the memory and read it
back, it became clear that there are at least two problems: 1: Depositing
values in consecutive memory addresses fails, and 2: two out of 15 bits are
missing at all, causing parity errors.<br>
		<br><br>
		
		<b>8.1.2014:</b> The second error was found rather quickly: One "head connector" was
missing from the second memory module. We fail to understand how such an item
can get lost. The first error is harder to find.<br><br>
		
		<b>11.1.2014:</b> The first error turns out to be a show-stopper: The address
generation is working fine but the driver for the address lines 11, 12, 13,
and 14 is missing since there is no board 7342! Somehow this has been removed
from the machine! That is the worst case for every restoration project! A
closer inspection revealed, that a second board, 4628, is also missing from
the printer control. We are now looking desperately for replacement boards or
at least the schematics. If you can help, please let us know!  (Pictures
of the missing boards can be found in the "Wanted" area of this web site.)
		
		</small>
		<p>Continuation follows</p>
		
		