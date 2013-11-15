<?php
	$seiten_id = 'plated-wire-storage';
	$version = '$Id';
	$titel = 'Aufbau und Funktion des Magnetdrahtspeichers';
	
	require '../../lib/technikum29.php';
?>

<h2><?php print $title; ?></h2>

<div class="box right">
	<img src="/shared/photos/rechnertechnik/grafiken/magnetdrahtspeicher-uebersicht.de.gif" alt="Übersichtsgrafik Magnetdrahtspeicher, die Positionen von Wortleitungen und beschichteten Drähten zeigend" />
</div>

<p>Kernspeicher waren in der Herstellung relativ teuer. Die Tatsache, dass beim Auslesen der Information der gespeicherte Inhalt gelöscht wird und daher ein Neuschreiben notwendig ist, vergrößert die Zykluszeit (Auslesen und Neuschreiben). Halbleiterspeicher waren noch lange nicht serienreif und der Speicherinhalt verschwand mit dem Abschalten der Betriebsspannung.
<p>Da die ersten Anlagen der 9000er Serie von UNIVAC (auch unsere 9300) mit Magnetdrahtspeichern aufgebaut wurden, beschreiben wir hier kurz ihre Funktion. 
Physikalisch gesehen ist ein Magnetdrahtspeicher ein Dünnfilmspeicher. Er benutzt als Informationsträger einen zusammenhängenden Permalloy-Magnetfilm (81% Nickel, 19% Eisen) von etwa 1 Mikrometer, der sich auf einem Beryllium-Kupferdraht von ca. 0,13mm Durchmesser befindet.<br>
Mit dem hier abgebildetem Ausschnitt könnte man also 4 Wörter mit je 3 Bit speichern.</p>

<div class="box center" style="clear:right;">
	<img src="/shared/photos/rechnertechnik/grafiken/magnetdrahtspeicher-details.de.gif" alt="Detailgrafik Magnetdrahtspeicher, beschriftet" />
</div>

<p> Diese "Plated Wires" (beschichtete Drähte) wurden in Bahnen von "Word Straps" (Wort- bzw. Leseleitungen aus Kupfer) eingebettet. Jeder Kreuzungspunkt von Kupferband und Magnetdraht ist fähig, eine binäre Information (Bit) zu speichern. Der Magnetdraht ist die Bitlinie und als solcher Schreib- und Leselinie zugleich. Die Wortlinien bestehen aus dünnen Kupferfolien und adressieren eine Mehrzahl von Bits. In Drahtrichtung sind die Magnetdrähte nur schwer-, quer dazu jedoch leicht magnetisierbar<br/>
Zum Lesen der Information wird durch die Leseleitungen, die vertikal zum Magnetdraht liegen, ein Stromimpuls geschickt. Das durch ihn erzeugte Magnetfeld versucht den magnetischen Vektor an dieser Stelle des Drahtes in Drahtrichtung auszulenken. In Längsrichtung ist die Magnetschicht des Drahtes aber nur schwer zu magnetisieren. Der Magnetvektor wird etwas ausgelenkt und kippt sofort wieder in seine Ursprungslage zurück. Dieses "Wackeln" induziert im Draht eine sehr kleine Spannung. Hier wurde ein Bit ausgelesen ohne den Zustand zu zerstören. Die gespeicherte Information ist nach dem Lesevorgang noch vorhanden (im Gegensatz zum Kernspeicher). Das Vorzeichen der induzierten Spannung gibt Auskunft darüber, ob hier eine "1" oder eine "0" gespeichert ist.<br/>

<div class="box left">
	<img src="/shared/photos/rechnertechnik/grafiken/magnetdrahtspeicher-lesen.de.gif" alt="Kleine Grafik zum Lesevorgang (Impuls auf der Wortleitung)" />
</div>
<div class="box right">
	<img src="/shared/photos/rechnertechnik/grafiken/magnetdrahtspeicher-schreiben.de.gif" alt="Kleine Grafik zum Schreibvorgang (Impuls auf Wortleitung und den Drähten)" />
</div>

<p>Will man einen Zustand ändern (Schreiben), so wird zusätzlich zum Leseimpuls ein Stromimpuls durch den Draht geschickt. Wo beide Magnetfelder in zeitlicher Koninzidenz zusammentreffen wird die Richtung des Magnetfeldvektors geändert (oder auch nicht, wenn er vorher schon "richtig" stand). Eine neue Information (hier ein Bit) wurde abgespeichert.</p></p>

<p style="clear:both;">Im Prinzip war das eine geniale Idee, kein Fädeln der Ringkerne, kurze Zykluszeit, preiswert und maschinell herzustellen...
<br/>Doch man ahnt es schon: Der Aufbau war so empfindlich, dass schon bald viele Probleme auftraten; ein Horror für jede Firma, die diesen Speicher verwendete. Bei ganz alten Speichern konnte man die Drähte noch einzeln auswechseln, später wurde alles verklebt und eine Reparatur ist unmöglich. Anfang der 70er Jahre kamen glücklicherweise die ersten Halbleiterspeicher auf den Markt, so dass die meisten Rechner mit Magnetdrahtspeicher auf Halbleiterspeicher mit INTEL-Chip´s umgerüstet wurden, so auch unsere UNIVAC 9400.<br>
Dagegen läuft unsere UNIVAC 9200 noch mit dem originalen Drahtspeicher, vermutlich der letzte noch funktionsfähige Magnetdrahtspeicher der Welt!</p>
