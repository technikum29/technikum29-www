<?php
	$seiten_id = 'pianola-funktionserklaerung';
	$version = '$Id$';
	$titel = 'Pianola: Querschnitt durch die Pneumatik';
	
	require "../../../lib/technikum29.php";
?>

<!-- Inhalt war zwischen ca 2009 und 2013 in Wiki:
        http://dev.technikum29.de/wiki/Projekte/Pianola
	  Bei Bedarf noch mal anschauen -->

<h2>Pianola: Querschnitt durch die Pneumatik</h2>

<div class="desc-right auto-bildbreite borderless no-copyright" title="Zum Vergrößern klicken">
   <a class="popup" href="fotos/pianola-offen.jpg"><img src="fotos/thumb.pianola-offen.jpg" alt="Die Pianola geöffnet" width="300" height="225"></a>
   <p>Das Pianola (ohne Verkleidung) von außen</p>
</div>
   
<p>Das Pianola ist ein selbstspielendes Klavier welches ab ca. 1895 gebaut wurde. Das hier abgebildete Instrument stammt aus dem Jahre 1915. <br> Diese Klaviere beziehen ihre
ganze Energie aus dem Unterdruck, der durch den vermeintlichen "Spieler" durch das Treten von Blasebälgen erzeugt wird. Durch die Luftbewegungen wird zum Beispiel auch ein kleiner "4-Zylinder" Windmotor angetrieben, der die Aufnahmewalze antreibt, die das Papier aufnimmt.</p>

<p>Mechanische Systeme, die nur durch Luftdruckunterschiede funktionieren, nennt
man pneumatische Systeme</a>
Bei diesem Instrument wird der Unterdruck durch eine elektrische Saugluftturbine erzeugt damit man sich das Treten ersparen kann.</p>

<div class="desc-left auto-bildbreite borderless no-copyright" title="Zum Vergrößern klicken">
   <a class="popup" href="fotos/abfuehlkamm.jpg"><img src="fotos/thumb.abfuehlkamm.jpg" alt="Abfhühlkamm" width="268" height="109"></a>
   <p>Notengleitblock</p>
</div>

<div class="desc-left auto-bildbreite borderless no-copyright" title="Zum Vergrößern klicken" style="clear: left;">
   <a class="popup" href="fotos/notenrolle.jpg"><img src="fotos/thumb.notenrolle.jpg" alt="Notenrolle" width="268" height="175"></a>
   <p>Notenrolle</p>

</div>
<!--<div class="left-thumb" style="width: 260px;">
   <img src="zoomgrafiken/rolle.png" alt="Rolle schematisch">
   <p>Die ablaufende Rolle und die Abtastung rein schematisch</p>
</div>-->
<p>Die Notenrolle ist eine meterlange Papierrolle, auf der viele Löcher in Reihen angeordnet sind. Einzelne Löcher bzw. Lochketten stehen für einen Ton.<br>
Ein flacher Notengleitblock mit 88 Öffnungen in einer Reihe (für 88 mögliche Töne) tastet beim Vorbeilaufen der Notenrolle ab, ob der entsprechende Ton gespielt werden soll oder nicht (siehe Schema links). Zusätzlich befinden sich noch weitere Öffnungen in diesem Block, welche dem Pedal, dem Anschlag (weich oder hart) und schließlich dem mittigen Lauf der Rolle zugeordnet sind.
</p>
<div class="desc-right auto-bildbreite borderless no-copyright" title="Zum Vergrößern klicken">
   <a class="popup" href="fotos/pianola-innen.jpg"><img src="fotos/thumb.pianola-innen.jpg" alt="Pianola von innen, hinten" width="300" height="225"></a>
   <p>Ansicht von innen</p>
</div>
<p>Auf dem Foto auf der rechten Seite sieht man die hellen (gelb gefärbten) Bleirohre, die von den Notengleitblock wegführen. Sie führen jeweiles zu einem pneumatischen "Verstärker", der Relais genannt wird. Je nach dem, ob sich gerade in der Rolle ein Loch befindet oder nicht, wird ein Ton angeschlagen oder auch nicht (siehe großes Schema unten)</p>


<div class="box center" title="Zum Vergrößern klicken">
   <a href="zoomgrafiken/schema-uebersicht.png"><img style="border: none;" src="zoomgrafiken/thumb.schema-uebersicht.png" alt="Pneumatisches Verstärkersystem"></a>
   <p>Schema eines einzelnen Spielbalgs mit Vor- und Hauptventil, welches für den Anschlag einer Saite verantwortlich ist.
   (<a href="zoomgrafiken/schema-uebersicht.png">größeres Bild</a>)</p>
</div>

<p>Die Funktionsweise eines solchen Systems wird im Folgendenden anschaulich
erklärt. Ferner stehen ein halbes Dutzend hochauflösende Schemata bereit, die die jeweiligen Stadien erläutern.</p>


<!--
    Befehle zum Generieren der Thumbnails:

    $ for bild in *.png; do convert -verbose $bild -resize 200x150\> -size 200x150 xc:white +swap -gravity center -composite thumb.$bild; done;
-->

<h3><a href="einzelbilder/Bild1.png">Bild 1</a>: Ruhezustand</h3>
<div class="box left">
    <a class="thumb" href="einzelbilder/Bild1.png"><img src="einzelbilder/thumb.Bild1.png" alt="Schema des pneumatischen Systems im Ruhezustand"></a>
</div>

<p>Die Grafik zeigt den Querschnitt durch das pneumatische "Relais", welches für
den Anschlag eines einzelnen Tones verantwortlich ist. Da das Klavier 88 Töne
hat, gibt es 88 von diesen kleinen Spielbälge, die in drei Reihen untereinander
liegen. Sie sind einfach zu groß, um sie alle nebeneinander anbringen zu können. 
</p> Durch alle Systeme hindurch ziehen sich zwei Kammern, die andauernd
Luft raussaugen und so in jedem System einen Unterdruck erzeugen (Unterdruck wird
gelb dargestellt, atmosphärischer Druck blau). Durch die Position der
Ventile werden die unterschiedlichen Luftleitungen mit den Unterdruckkammern
verbunden, so dass auch in ihnen ein Unterdruck entsteht.</p>

<h3><a href="einzelbilder/Bild2.png">Bild 2</a>: Loch in der Rolle, Luft strömt ein</h3>
<div class="box left">
    <a href="einzelbilder/Bild2.png"><img src="einzelbilder/thumb.Bild2.png" alt="Schema des pneumatischen Systems während Luft einströmt"></a>
</div><div class="box right">
    <a href="einzelbilder/Bild2.png"><img src="einzelbilder/big.Bild2.png" alt="Ausschnitt aus dem Schema des pneumatischen Systems, während Luft einströmt"></a>
</div>

    <p>Dort wo die Rolle quasi "abgetastet" wird, wird andauernd versucht, Luft anzusaugen. Sobald eine Öffnung (durch das Loch) entsteht, kann Luft (= atmosphärischer Druck) in das System gelangen. Diese Luft gelangt nun in eine kleine Taschenmembrane, die kissenförmig aussieht. Infolge des atmosphärischen Druckes, der in der Membrane und dem Unterdruck, der um die Membrane herum (in der Kammer) herrscht, wird die Membrane wie ein kleiner Luftballon aufgeblasen. (Typisches Schulexperiment: Wie kann man einen schwach aufgeblasenen Luftballon "vergrößern" ohne Luft "einzufüllen"&nbsp;?)<br>
Dadurch, dass die Membrane sich kissenförmig wölbt, wird ein auf ihr stehendes Vorventil angehoben.</p>


<h3><a href="einzelbilder/Bild3.png">Bild 3</a>: Verstärkung des Effekts</h3>
<div class="box left">
    <a href="einzelbilder/Bild3.png"><img src="einzelbilder/thumb.Bild3.png" alt="Schema des pneumatischen Systems, erster Kolben bewegt sich"></a>
</div><div class="box right">
    <a href="einzelbilder/Bild3.png"><img src="einzelbilder/big.Bild3.png" alt="Vergrößerung des Verstärkungseffekts durch den Kolben"></a>
</div>

<p>Das hochgehobene Ventil schottet die rechte Unterdruckkammer von dem übrigen linken System ab und gibt oben gleichzeitig eine weitere Öffnung frei durch die Luft einströmen kann. Diese gelangt nun in eine weitere Taschenmembrane, welche sich in der zweiten Unterdruckkammer befindet. Auf der steht das Hauptventil. Auch hier wird die Membrane aufgebläht, das Ventil hebt sich. 
</p> Wir benötigen einen sehr großen "Verstärkungsfaktor" um aus dem winzigen Luftsog am Notengleitblock schließlich einen Ton des Klaviers kräftig anzuschlagen. Dies bewirken die zwei hintereinandergeschalteten pneumatischen Ventile, deren "Verstärkungsfaktoren" sich quasi multiplizieren. Das Vorventil muss sehr leicht (und damit klein) sein um von dem relativ geringem Luftpolster in der Taschenmembrane bewegt werden zu können. Das Hauptventil ist grösser, damit schnell viel Luft aus dem Spielbalg gezogen werden kann.</p>


<h3><a href="einzelbilder/Bild4.png">Bild 4</a>: Zusammenziehen des Spielbalges</h3>
<div class="box left">
    <a href="einzelbilder/Bild4.png"><img src="einzelbilder/thumb.Bild4.png" alt="Schema des pneumatischen Systems: Der zweite Kolben sorgt für eine weitere Verstärkung des Effektes"></a>
</div><div class="box right">
    <a href="einzelbilder/Bild4.png"><img src="einzelbilder/big.Bild4.png" alt="Ausschnitt aus dem Schema in der jetzigen Position"></a>
</div>

<p>Das hochgedrückte Ventil schließt die Luftzufuhr für das System ganz links und verbindet es stattdessen mit der Unterdruckkammer, in der er sich befindet. Dieses zieht nun auch aus dem letzten System die Luft ab.</p>


<h3 class="clear"><a href="einzelbilder/Bild5.png">Bild 5</a>: Anspielen des Tones</h3>
<div class="box left">
    <a href="einzelbilder/Bild5.png"><img src="einzelbilder/thumb.Bild5.png" alt="Schema des pneumatischen Systems: die Luft strömt aus dem Blasebalg, er zieht sich zusammen"></a>
</div><div class="box right">
    <a href="einzelbilder/Bild5.png"><img src="einzelbilder/big.Bild5.png" alt="Vergrößerung der Bewegung des Blasebalges"></a>
</div>
<p>Durch den Druckabfall zieht sich der Spielbalg blitzschnell zusammen. An ihm ist letztlich eine Stange befestigt, die mit dem "alten" Klaviersystem zusammenhängt und dafür sorgt, dass sich das Hämmerchen in Bewegung setzt, welches die Saite anschlägt.</p>


<p>Zeitgleich mit dem letzten Schritt wird also der Ton angeschlagen. Doch wie
geht es weiter? Ohne eine zusätzliche Einrichtung würde das Gesamtsystem in
seinem Zustand verbleiben und könnte kein weiteres Mal einen Ton spielen. Noch ist die Luft in der Ansaugleitung am Notengleitkopf. Wenn weitere Löcher folgen und der Ton gehalten werden soll, wäre das o.k. Wenn der Hammer aber sofort wieder in die Ruhestellung zurückgehen soll (also in der Notenrolle an dieser Stelle kein Loch ist) muss die noch in der Leitung stehende Luft entfernt werden.</p>

<div class="right">
	<img src="entlueftung.png" alt="Die Entlüftungskammer">
</div>
<p>Deswegen gibt es noch eine dritte durchgehende Kammer, in der auch ständig
Unterdruck herrscht. Sie hat jedoch nur eine ganz kleine Öffnung. Dadurch ist sie mit dem System ganz rechts verbunden. Auf diese Weise ist ihre
Wirkung auf das System zwar nur minimal, jedoch stark genug, um nach dem Verschluss des Loches in der Notenrolle den Unterdruck in dem ersten System wieder schnell herzustellen. Dadurch sinkt auch wieder das Vorventil, im mittleren System entsteht wieder Unterdruck, daraufhin sinkt das Hauptventil nach unten und der Spielbalg zieht sich aufgrund seines eigenen Gewichtes und einer kleinen Feder wieder auseinander.
<p>Nun ist das Pianola bereit, den nächsten Ton zu spielen. Der ganze Vorgang muss natürlich mit einer sehr hohen Geschwindigkeit ablaufen, damit auch schnelle Läufe fehlerfrei gespielt werden.</p>
<p>Das Pianola kann Stücke spielen, die aufgrund des schnellen Handwechsels von keinem Spieler spielbar wäre. Daher wurden auch speziell Klavierstücke für Pianola geschrieben, die sehr virtuos sind, z.B. "Studies for Player Piano" von Conlon Nancarrow.</p>

Würde man intelligente Menschen aus der heutigen hochtechnisierten Zeit damit beauftragen, ein solches Instrument nur mit Hilfe von Holz, Metall, Leder, "Gummihaut" und Knochenleim zu erfinden, kann man davon ausgehen, dass die meisten keine Chance hätten das gesteckte Ziel zu erreichen. Die hier beschriebenen Vorgänge sind eine vereinfachte Version der sehr viel umfangreicheren komplexen Vorgänge in einer Pianola.</p>
Wenn man überlegt, wie rasend schnell diese Vorgänge ablaufen müssen, so gerät man in Ehrfurcht vor den mechanischen Fähigkeiten der Menschen aus dieser Zeit.

<h3>Präsentationsmaterialien zur Pianola</h3>

<p>Eine Powerpoint-Präsentation steht in den <a href="/de/lernprojekte/#Liste_anderer_Projekte">Lernprojekten</a> unter <a class="go" href="/de/lernprojekte/pianola">Pianola-Präsentation</a> zur Verfügung.</p>
