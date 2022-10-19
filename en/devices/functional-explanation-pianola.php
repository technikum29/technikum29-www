<?php
	$seiten_id = 'pianola-funktionserklaerung';
	$version = '$Id';
	$titel = 'Functional explanation of the pianola';
	
	require '../../lib/technikum29.php';
?>
<h2>Functional explanation of the pianola</h2>

<div class="desc-right auto-bildbreite borderless no-copyright" title="Zum Vergrößern klicken">
   <a class="popup" href="/de/geraete/pianola-funktionserklaerung/fotos/pianola-offen.jpg"><img src="/de/geraete/pianola-funktionserklaerung/fotos/thumb.pianola-offen.jpg" alt="Inside view of the pianola" width="300" height="225"></a>
   <p>Inside view of the pianola</p>
</div>
   
<p>The "pianola" is an automatic piano - the instrument shown in the picture on 
the right was built in 1915. Instruments of this type are controlled by a 
vacuum system that is powered by bellows operated either manually or by means
of a motor. The pneumatic system of the instrument described in the following
is powered by a motor.</p>


<div class="desc-left auto-bildbreite borderless no-copyright" title="Zum Vergrößern klicken">
   <a class="popup" href="/de/geraete/pianola-funktionserklaerung/fotos/abfuehlkamm.jpg"><img src="/de/geraete/pianola-funktionserklaerung/fotos/thumb.abfuehlkamm.jpg" alt="Pickup bar" width="268" height="109"></a>
   <p>Pickup bar</p>
</div>

<div class="desc-left auto-bildbreite borderless no-copyright" title="Zum Vergrößern klicken" style="clear: left;">
   <a class="popup" href="/de/geraete/pianola-funktionserklaerung/fotos/notenrolle.jpg"><img src="/de/geraete/pianola-funktionserklaerung/fotos/thumb.notenrolle.jpg" alt="Piano roll" width="268" height="175"></a>
   <p>Piano roll</p>

</div>
<!--<div class="left-thumb" style="width: 260px;">
   <img src="/de/geraete/pianola-funktionserklaerung/zoomgrafiken/rolle.png" alt="Rolle schematisch">
   <p>Die ablaufende Rolle und die Abtastung rein schematisch</p>
</div>-->
The piano roll is a strip of paper, many meters long, with holes punched in
rows. Single holes or sequences of holes represent notes. This paper strip
moves over a pickup bar with 88 openings (one for each key of the piano). In
addition to these, this pickup contains additional openings which are used to
control the pedals, the attack and the like.


</p>
<div class="desc-right auto-bildbreite borderless no-copyright" title="Zum Vergrößern klicken">
   <a class="popup" href="/de/geraete/pianola-funktionserklaerung/fotos/pianola-innen.jpg"><img src="/de/geraete/pianola-funktionserklaerung/fotos/thumb.pianola-innen.jpg" alt="Back view of the pianola" width="300" height="225"></a>
   <p>Back view of the pianola</p>
</div>
<p>Clearly visible in the picture of the right are the yellow colored lead tubes
that connect the pickup bar with the pneumatic amplifiers. These amplifiers are
called "relays" and amplify the tiny differential pressures delivered by the
pickup mechanism sufficiently to actuate the keys and pedals of the piano.</p>


<div class="box center" title="Zum Vergrößern klicken">
   <a href="/de/geraete/pianola-funktionserklaerung/zoomgrafiken/schema-uebersicht.png"><img style="border: none;" src="/de/geraete/pianola-funktionserklaerung/zoomgrafiken/thumb.schema-uebersicht.png" alt="Schematic diagram of a single amplifier/actuator
(relay) element"></a>
   <p class="center"> Schematic diagram of a single amplifier/actuator
(relay) element
   (<a href="/de/geraete/pianola-funktionserklaerung/zoomgrafiken/schema-uebersicht.png">enlarge image</a>)</p>
</div>


<!--
    Befehle zum Generieren der Thumbnails:

    $ for bild in *.png; do convert -verbose $bild -resize 200x150\> -size 200x150 xc:white +swap -gravity center -composite thumb.$bild; done;
-->

<h3 class="clear"><a href="/de/geraete/pianola-funktionserklaerung/einzelbilder/Bild1.png">Picture 1</a>: Quiescent state</h3>
<div class="box left">
    <a class="thumb" href="/de/geraete/pianola-funktionserklaerung/einzelbilder/Bild1.png"><img src="/de/geraete/pianola-funktionserklaerung/einzelbilder/thumb.Bild1.png" alt="Amplifier/actuator in quiescent state"></a>
</div>

<p>The schematic diagram shows one relay element. 88 of these are necessary to
control all of the piano's keys. Due to their size, these 88 relays are mounted
in three rows. Yellow color denotes part of the vacuum system while blue marked
areas are at atmospheric pressure. </p>

<h3 class="clear"><a href="/de/geraete/pianola-funktionserklaerung/einzelbilder/Bild2.png">Picture 2</a>: Hole in the piano roll, air enters the pickup bar</h3>
<div class="box left">
    <a href="/de/geraete/pianola-funktionserklaerung/einzelbilder/Bild2.png"><img src="/de/geraete/pianola-funktionserklaerung/einzelbilder/thumb.Bild2.png" alt="Schema des pneumatischen Systems während Luft einströmt"></a>
</div><div class="box right">
    <a href="/de/geraete/pianola-funktionserklaerung/einzelbilder/Bild2.png"><img src="/de/geraete/pianola-funktionserklaerung/einzelbilder/big.Bild2.png" alt="Ausschnitt aus dem Schema des pneumatischen Systems, während Luft einströmt"></a>
</div>

    <p>A hole in the piano roll allows air to enter the corresponding hole in the
pickup bar. A small "pillow" located under the right valve of the relay is
inflated by this stream of air which in turn opens the valve.
</p>


<h3 class="clear"><a href="/de/geraete/pianola-funktionserklaerung/einzelbilder/Bild3.png">Picture 3</a>: Amplification:</h3>
<div class="box left">
    <a href="/de/geraete/pianola-funktionserklaerung/einzelbilder/Bild3.png"><img src="/de/geraete/pianola-funktionserklaerung/einzelbilder/thumb.Bild3.png" alt="Schema des pneumatischen Systems, erster Kolben bewegt sich"></a>
</div><div class="box right">
    <a href="/de/geraete/pianola-funktionserklaerung/einzelbilder/Bild3.png"><img src="/de/geraete/pianola-funktionserklaerung/einzelbilder/big.Bild3.png" alt="Vergrößerung des Verstärkungseffekts durch den Kolben"></a>
</div>

<p>This right valve allows air to enter the left part of the relay which is built
in a similar way. Another "pillow" actuates the left valve which is much bigger
than the left valve and thus allows more air to flow. These two valves in fact
act like an amplifier: The small pressure difference sensed by the pickup bar
controls the first (right) valve which acts as a first amplifier stage. This
controls the second (left) valve which acts as a power amplifier operating the
the bellow shown below the relay unit.</p>

<h3 class="clear"><a href="/de/geraete/pianola-funktionserklaerung/einzelbilder/Bild4.png">Picture 4</a>: Contracting the bellow</h3>
<div class="box left">
    <a href="/de/geraete/pianola-funktionserklaerung/einzelbilder/Bild4.png"><img src="/de/geraete/pianola-funktionserklaerung/einzelbilder/thumb.Bild4.png" alt="Schema des pneumatischen Systems: Der zweite Kolben sorgt für eine weitere Verstärkung des Effektes"></a>
</div><div class="box right">
    <a href="/de/geraete/pianola-funktionserklaerung/einzelbilder/Bild4.png"><img src="/de/geraete/pianola-funktionserklaerung/einzelbilder/big.Bild4.png" alt="Ausschnitt aus dem Schema in der jetzigen Position"></a>
</div>

<p>The left valve of the relay connects the bellow located under the relay block
with the evacuated part of the pneumatic system. When activated, this valve
will cause the bellow to contract which in turn moves the corresponding key of
the piano.</p>


<h3 class="clear"><a href="/de/geraete/pianola-funktionserklaerung/einzelbilder/Bild5.png">Picture 5</a>: Preview of a tone</h3>
<div class="box left">
    <a href="/de/geraete/pianola-funktionserklaerung/einzelbilder/Bild5.png"><img src="/de/geraete/pianola-funktionserklaerung/einzelbilder/thumb.Bild5.png" alt="Schema des pneumatischen Systems: die Luft strömt aus dem Blasebalg, er zieht sich zusammen"></a>
</div><div class="box right">
    <a href="/de/geraete/pianola-funktionserklaerung/einzelbilder/Bild5.png"><img src="/de/geraete/pianola-funktionserklaerung/einzelbilder/big.Bild5.png" alt="Vergrößerung der Bewegung des Blasebalges"></a>
</div>
<p>Without additional hardware, the bellow would stay in the contracted state
after being actuated once. Thus, some means are necessary to release the bellow
after a note and ready the system to play the next note. If there is no hole in
the piano roll following the hole which actuated the bellow, the bellow must be
returned to its inflated state as quickly as possible. </p>


<p>The picture on the right shows a small connection between the tube coming from
the pickup strip and the vacuum system on the far right. This connection has a
very small diameter so that it does not negatively affect the inrushing air
current from the pickup bar when a hole is detected. If there is no hole, this
connection withdraws the remaining air at atmospheric pressure from the right
valve system thus closing this valve which, in turn, will close the second
valve, which will eventually cause the bellow to inflate again. Now the 
pianola is ready to play the next note. </p>

<div class="right">
	<img src="/de/geraete/pianola-funktionserklaerung/entlueftung.png" alt="Die Entlüftungskammer">
</div>

<p>The pianola is able to play pieces which were impossible to play for a human
player. Accordingly, there are pieces composed for the pianolo exclusively
(like the "Studies for Player Piano" by Conlon Nancarrow).

It is impressive to see what can be done by more or less simple mechanical
systems. 



