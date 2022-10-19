<?php
	$seiten_id = 'tabelliermaschine';
	$version = '$Id$';
	$title = 'BULL Tabulating machine';
	
	require "../../lib/technikum29.php";
?>
    <h2>BULL Tabulating machine</h2>

    <p>Tabulating machines were widely used when electronic data processing
       began in the 1950s. These big machines were called "technical marvels":
       At a glance at the inner life you can see what special art of
       engeneering was performed at that time. This kind of technology appears
       odd for today's folks.</p>

    <p>The tabulating machine BULL BS-PR was constructed in October 1956, thus it
       is the oldest piece of EDP in the museum. At these days you could buy it
       for about 260,000 German marks (about 62,000 US$).
       Nevertheless even medium-sized businesses (especially banks) had to buy
	   these punch card machines to work economically.</p>
<div class="box center auto-bildbreite">
        <img src="/shared/photos/rechnertechnik/bull-bs-pr/tabelliermaschine.jpg"
             width="679" height="658" alt="Bull PS BR Tabulating Machine" />
		<p class="bildtext"><i>Tabulating Machine Bull BS-PR</i></p>
    </div> 
    <p>On high quality tabulating machines the patch panel could be replaced to
       perform very different tasks. By plugging the cables on the programming field 
       cleverly, even some scientifical caluclations could be solved.
    <br/>For every new program the software engineer had to plug a new
       programming field. The only data input medium are punch cards. Therefore
       we own other machines that are also operational to perform card driven EDP,
       that is, devices for creation, sorting, mixing, etc. the cards.</p>
	   
<div class="box left clear-after">
      <img src="/shared/photos/rechnertechnik/bull-bs-pr/relais1.jpg"
           alt="Partial view of the relays" width="312" height="416"/>
      <p class="bildtext"></p>
	  
    <p>We have digged out programs in order to enable our tabulating machine to calculate
       bank statements as well as multiplying and dividing. However, advanced
       arithmetic operations are not implemented in the computer. Anyway it is possible
       to implement a good deal of operations with lengthy algorithms borrowed from
       computer science.
         
    <p>And so it came to pass that some BULL engineer asked himself why there was not yet a
       way to compute square roots on the tabulating machine back then in 1959.
       Since he was bored, he started to bet against his friends whether he is able to
       implement the <em>Toepler algorithm</em> on this machine. It turned out it was
       possible and he won the bet. We came across that program and restored it back
       to operation. We happily relieved the historical moment having the <font color="#FF0000"><b>world's only tabulating
       machine that can calculate square roots</b></font>. The algorithm works without any memory.
       There is a <a class="go" href="/shared/pdf/wurzelprogramm.pdf">program guide (PDF)</a>
       in German and French.
    </p>

    <p><small>We would like to thank the <a href="http://www.feb-d.de">F.E.B.
       (Federation des Equipes Bull) Deutschland e.V.</a> for their assistance
       of the restoration of the tabulating machine</small></p>

  
        The control and memory of the machine is comprised of about 1500 relays. 
        <br/>10 ALUs work in parallel and are driven and synchronized by the large main motor.
        Every revolution engages about 300 sliding contacts. In the upper part of the picture
        you can see three ALUs. Only one of the ALUs is broken (that can be easily bypassed by
        customizing the programs), that is quite astonishing in view of the old age.
      
   <div class="box left">
        <img src="/shared/photos/rechnertechnik/bull-bs-pr/rechenwerk-1.jpg" alt="Rechenwerk" width="450" height="405" />
		<p class="bildtext"><i>Arithmetic-logic unit</i></p> 
		</div>
		
		<div class="box right">
		<img src="/shared/photos/rechnertechnik/bull-bs-pr/rechenwerk.jpg" width="398" height="366" />        
		</div>
	<br>
	    With closed walls it looks like a strange chunk made of metal, but it
		comprises impressive electromechanical technology. In the front there
		are two demountable program boards that are mounted at the left side
		of the device (not visible in the picture). The board on the left contains
		a program for compiling and printing bank statements, the board on the
		right contains a simple program for multiplying. Multiplying and dividing
		mechanically needs lots of time. To shorten this amount of time, the
		<a href="gamma3.php">"electronical calculator" BULL GAMMA&nbsp;3</a>
		could be attached. That auxiliary tube calculator was only used for this
		purpose.</p><br><br>
   
	
	<p>     We exposed one of the 10 ALUs for an one-of-a-kind photo. The principle of sprocket wheel
            machines is visible to the naked eye. All calculation work is performed only by mechanical
            components and read in electronically by touch-sensitive contacts. You can even read out
            the current arithmetic register contents: They hold both <i>144</i>. Carries are also
            performed purley mechanically. It's hardly imaginable that these machines worked more than
            12 hours every day without any serious problems.
    </p>
   
    <div class="box left">
        <img src="/shared/photos/rechnertechnik/bull-bs-pr/offen1.jpg"
             alt="Front view of the BULL BS PR Tabulating Machine" width="555" height="325"/>
	    <p class="bildtext">
		    <i><b>Printing unit</b> of the tabulating machine</i>
		</p>
	</div>
	
	<p>
        This picture partly shows the complicated printing unit &ndash; in
        every step a complete line is printed (like later line printers did).
        In the foreground you can see the punchcard feeder. Every punchcard is
        read in two times. At the first scan the machine detects wheter the card is
        a controller card or a data card whereas at the second scan the machine reads
        the content from the card.
		Additionally, the machine is capable of comparing the content of two
        consecutive cards.
    </p>
