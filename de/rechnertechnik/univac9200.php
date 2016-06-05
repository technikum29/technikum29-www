<?php
	$seiten_id = 'univac9200';
	$version = '$Id$';
	$titel = 'Univac 9200, Univac 9300';
	
	require "../../lib/technikum29.php";
?>
    <h2><b>UNIVAC 9200</b> - die Erste</h2>
	
	
	<p>Die UNIVAC 9200 bzw. 9300 ist eine lochkartenorientierte EDV-Anlage die 1966/67 auf den damals explodierenden EDV-Markt kam. Selten sind solche Anlagen vollständig erhalten geblieben, die dazu noch umfassend dokumentiert sind. Die beiden Typen unterscheiden sich dadurch, dass die "9200" eine reine Lochkartenanlage ist, während die "9300" zusätzlich mit Magnetbandgeräten und Plattenlaufwerken betrieben werden kann.<br>
	
	Die Anlage wurde zunächst per Spedition aus dem Archiv ins Museum transportiert. Wie bei allen Restaurationen begann die Arbeit mit dem gründlichen Säubern der Geräte. Bereits hier zeigten sich die Probleme: Die Schaumgummi-Verkleidungen der Gehäuseinnenseiten sind im Laufe der Zeit entweder zu Staub zerfallen (relatives Glück) oder sie haben sich zu einer klebrigen, teerartigen Masse verändert (ausgesprochenes Pech). Wir mussten mit beidem kämpfen.<br>
	Volumenmäßig besteht diese Anlage vorwiegend aus Mechanik, insofern hatten wir hier viele Überraschungen erwartet.	Daher bestand die nächste Aufgabe darin, die teils festsitzende Mechanik für den Transport der Lochkarten wieder gangbar zu machen und einige Kugellager sowie Antriebsrollen und -riemen zu erneuern. Alleine der Lochkartenstanzer weist 15 Zahnriemen auf!</p>
	
	<div class="box center auto-bildbreite">
		<img src="/shared/photos/rechnertechnik/u9300-1.jpg" alt="UNIVAC 9200 Anlage" width="850" height="440" />
		<p class="bildtext"><b>UNIVAC 9200 Anlage</b> mit den Komponenten (von links nach rechts): 
		Stabdrucker, Prozessor, Electronic-Cabinett (Netzteil u. Magnetdrahtspeicher), Lochkartenleser,
		Lochkartenstanzer</p></div>
	
	<p>
	
	Danach war der Stabdrucker an der Reihe. Er lässt sich jedoch nur über den Prozessor steuern, so dass wir dann auch schon die erste spannende Inbetriebnahme vornehmen mussten.<br>
	Die Mühe der aufwändigen Restauration hat sich gelohnt, da diese Anlage als reine Lochkartenmaschine mit Assembler-Programmierung einen historischen Seltenheitswert hat.<br>
	Für besonders interessierte Leser berichten wir unten in einem "Reparatur-Blog" über die laufenden Fort- und Rückschritte bei der umfangreichen Reparatur der Univac 9200. Damit gewinnen Sie einen Einblick in den Aufwand, den eine solche Restauration erfordert. Engagement und Geduld sind Eigenschaften, die hier besonders gefragt sind. 
	</p>
	<div class="box center auto-bildbreite">
		<img src="/shared/photos/rechnertechnik/univac9200.jpg" alt="UNIVAC 9300 Anlage" width="700" height="368" />
		<p class="bildtext">UNIVAC 9200 Anlage mit abgenommener Verkleidung während der Restauration</p>
	</div>
		
	<h5 id="lochkarten">UNIVAC 9200/9300 Software</h5>
		<p>Manchmal sind es die Zufälle im Leben, die zu unglaublichen Funden führen. So hat ein (neugieriger) Student der Goethe-Universität in Frankfurt eben dort in einem Gebäudeteil merkwürdige Teile entdeckt und uns informiert. Das im Umbau befindliche alte Gebäude beherbergte in einem fensterlosen Abstellraum einen <a href="/de/rechnertechnik/lochkarten-edv.php#1710">UNIVAC 1710</a> Lochkartenstanzer, sowie einen Schrank voll mit Programmen für unsere Anlage: Nicht weniger als etwa 65.000 Lochkarten. Diese stammen aus der Zeit von 1967 bis 1975 und wurden am damaligen Institut für Mathematik und angewandte Informatik verwendet. Einige Programme werden wir sicher zum Laufen bringen.<br>
		Die Uni-Frankfurt sowie der <a href="http://www.fitg.de">"FITG" (Frankfurt)</a>  unterstützten uns bei der Bergung der historischen Funde.
		<div class="box center auto-bildbreite">
		<img src="/shared/photos/rechnertechnik/univac/lochkarten.jpg" alt="65.000 Lochkarten" width="700" height="174" />
		<p class="bildtext">24 Boxen mit insgesamt mehr als 65.000 Lochkarten erweitern unser UNIVAC-Softwarearchiv</p></div>
		<p>Ganz nebenbei: In jeder Lochkarte lassen sich bis zu 80 Zeichen abspeichern. Das wären ca. 80 Byte pro Karte. 65.000 Lochkarten könnten damit in etwa die Datenmenge von 5 MB speichern. Das entspricht dem Umfang eines durchschnittlichen Bildes einer Digitalkamera. Diese Daten hätten ein Netto-Gewicht von 160 kg wobei der Lochkartenschrank zur Aufbewahrung mehr als 0,5m³ also über 500 Liter Volumen umfasst!</p><br>
		
		
<h2 id="u9200"><b>UNIVAC 9200</b> - die Zweite</h2>

<div class="box center auto-bildbreite">
		<img src="/shared/photos/rechnertechnik/u9200-1.jpg" alt="UNIVAC 9200 Anlage" width="850" height="404" />
		<p class="bildtext">Die neue Univac 9200</p>
	</div>

<p>Es ist schon eine kleine Sensation: Seit September 2015 sind wir im Besitz einer zweiten UNIVAC 9200. Es ist ein purer Zufall, wenn ein solches Fossil die Zeit von 1967 bis 2015 völlig unbeschadet überlebt. Die Anlage stand unter besten klimatischen Bedingungen im Keller einer Stadtverwaltung und ist nun dort gelandet, wo sie wieder zum Leben erweckt werden konnte. Zum Glück wurde sie vor vielen Jahren fachgerecht deinstalliert, so dass die sehr umfangreichen Kabelverbindungen zwischen den Einheiten noch vorhanden sind. Nicht selten werden beim Abbau die Verbindungen einfach durchgeschnitten. <br>
Im Unterschied zu unserer ersten UNIVAC 9200 ist der Stab-Drucker langsamer, wir erwarten damit ein noch besseres Druckbild, der Speicher ist auf 16 kB gegenüber 8 kB ausgebaut und die Punch (Lochkartenstanzer) ist eine sogenannte "Read-Punch". Bereits gelochte Karten können hier zusätzlich gelesen, im Prozessor verarbeitet und das Ergebnis noch in die gleiche Karte gestanzt werden.<br>
Mit der Erfahrung durch die Reparatur der ersten UNIVAC 9200 dauerte die Reparatur der Zweiten nur wenige Wochen: Seit Januar 2016 ist die Anlage voll funktionsfähig.</p>

<p class="small">Wir bedanken uns bei der Stadtverwaltung Rheine (Herrn M. Lange), die uns die Anlage freundlicherweise überlassen hat.</small>
		
	<h3 id="blog">Reparatur-Blog (zur ersten UNIVAC 9200)</h3>

	
<p class="small"><b>17.1.2010:</b> Im Netzteil und im Drucker haben sich ein paar Mäuse zu schaffen gemacht und dabei 5 dünne Kabel durchgefressen. Glücklicherweise wurden die restlichen dicken Kabel verschont. Dennoch befinden sich in diesem sehr aufwändigen Netzteil weitere Fehler.
<br><br><b>16.2.2010:</b> Nach dem Aufspüren von zwei defekten Widerständen (Unterbrechnung) ist das Netzteil funktionsfähig. Damit ist es jetzt auch möglich, die Lochkartengeräte vom Prozessor aus aufzurufen. Das funktioniert schon, wobei zur Zeit weder Daten gelesen noch gelocht werden können.
Nun öffnet sich ein Feld mit weiteren Fehlern. Der Magnetdrahtspeicher arbeitet nicht. Wir versuchen, ihn wenigstens partiell zur Funktion zu bringen und werden später einen neuen Halbleiterspeicher anpassen. Wie unter der Rubrik "Speichermedien" beschreiben, ist der Magnetdrahtspeicher ein ganz spezielles Sorgenkind. Man erkennt, der Weg bis zur vollen Funktion ist noch weit!
<div class="desc-right">
	<img src="/shared/photos/rechnertechnik/u9200pannel.jpg" alt="UNIVAC 9200 Bedienungspannel" width="500" height="382" />
	<p class="bildtext" style="width: 500px;"><b>Bedienungspannel der UNIVAC 9200:</b> Insgesamt können 160 (Fehler-)Zustände aus dem Prozessor und der Peripherie mit Lämpchen per Schalter ausgeleuchtet werden.</p></div>
	
<p class="small"><b>15.4.2010:</b> Noch immer läuft der Startzyklus der Maschine falsch. Eine Fehlermeldung des Druckers wird ohne offensichtlichen Grund angezeigt. Wir kreisen diesen Fehler sukzessive ein.

<br><br><b>2.5.2010:</b> Ein defekter Thyristor in der Ansteuerung des Hämmerchens, welches das Zeichen in einer bestimmten Spalte auslöst, hat die Anzeige "Druckerstörung" verursacht. Auf Sicherheit wurde sehr stark geachtet: Fällt nur eine der 144 Druckspalten aus, so muss sich der Drucker sofort abschalten, damit keine Fehldrucke entstehen können. Nun geht es auf die Suche der nächsten Fehler.

<br><br><b>10.5.2010:</b> Wir konnten den Drahtspeicher aktivieren. Es lassen sich sogar schon kleine Testprogramme per Switchregister eingeben. Bei der Ausführung der Testprogramme ergeben sich noch Fehler, denen wir nun nachgehen.<br> Vermutlich ist unsere Anlage die einzige der Welt, bei welcher der empfindliche Drahtspeicher noch (teil-)funktionsfähig ist. Dennoch ist der Ersatzspeicher bereits in der Planung.

<br><br><b>12.6.2010:</b> Wir machen Fortschritte: Nach einer eingehenden Justage der optischen Lesestation des Readers können wir auch über Lochkarten kleine Programme in den Drahtspeicher einlesen und ausführen lassen. Erstaunlich ist, dass der problematische Drahtspeicher noch so zuverlässig arbeitet.

<br><br><b>16.6.2010:</b> Bei der Erst-Reparatur von Computern, die seit mindestens 30 Jahren nicht mehr eingeschaltet wurden, muss man auch vorübergehende Rückschritte hinehmen. Viele elektronische und mechanische Teile zeigen erst nach und nach, dass diese lange Zeit nicht spurlos an ihnen vorüber ging. Die vor Wochen noch funktionsfähige Punch (Lochkartenstanzer) zeigt immer mehr Fehler; es lassen sich jetzt überhaupt keine Karten mehr bewegen.
Dafür konnten wir bereits ein Programm: "Printer Loop" per Lochkarten eingeben. Der gewaltige Drucker läuft sogar an, druckt aber noch nicht. Nach jeweils ca. 2 min. löst eine Thermo-Sicherung aus und beendet den Druckversuch.

<br><br><b>25.6.2010:</b> Die Thermosicherung wurde ausgelöst, da der Fliehkraftschalter der Anlaufwicklung des Druckermotors defekt war. Diese Wicklung war damit dauernd aktiv, was zu einer erhöhten Stromaufnahme führte. Der Motor läuft nun aber Druckbefehle werden immer noch nicht ausgeführt.
Zusätzlich haben wir einen Kontaktfehler im Memory ausfindig gemacht. Nach der Beseitigung desselben läuft der Drahtspeicher offensichtlich über den kompletten Bereich von 8KB störungsfrei.

<br><br><b>30.6.2010:</b> Einen weiteren Fehler in der Drucker-Logik konnten wir ausfindig machen und beseitigen (defekter Transistor). Der Drucker arbeitet nun zum ersten Mal nach ca. 30 Jahren und kann bereits Files aus Lochkarten in verschiedenen Formaten ausdrucken (List-Programm). Das Schriftbild des Stabdruckers ist recht gut.
Nun wenden wir uns der Punch (Lochkartenstanzer) zu, die sich ja Stück für Stück von ihrer Funktion verabschiedet hat (siehe 16.6.).

<div class="desc-right">
	<img src="/shared/photos/rechnertechnik/univac/messen-am-memory.jpg"  width="400" height="313" />
	<p class="bildtext" style="width: 400px;"><b>Rückseite der UNIVAC 9200:</b> Mit Speicheroszilloskop und Logik-Analysator werden logische Zustände gemessen</p>
</div>

<p class="small">
<b>5.8.2010:</b> Der Lochkartenstanzer läuft wieder! Das Austauschen eines defekten Transistors und ein Tropfen Öl an der richtigen Stelle haben zur vollen Funtkion geführt. Nun können wir per Programm Lochkarten duplizieren. Wir mussten jedoch die Fehlerprüfung deaktivieren, da ein Stanzfehler erkannt wird, der überhaupt nicht vorhanden ist. Diesen Defekt zu finden ist die nächste Aufgabe.
<br><br>

<b>26.8.2010:</b> Die Fehler in der "Fehlerprüfung" der gestanzten Daten (Lochkartenstanzer) alle aufzufinden war eine harte Nuß. Der Computer vergleicht die Daten, die zu stanzen sind mit der Auslösung der Stanzhebel in der Stanzstation. Dazu greift er per Indunktion das Auslösen des jeweiligen Stanzhebels nach einem sehr aufwändigen Verfahren ab. Defekt waren schließlich ein (von 24) induktives Abfühlelement (siehe später), ein Transistor der die jeweiligen Induktionsspannungen verstärkt sowie eine "kalte" Lötstelle. Ferner musste die gesamte Abfühlstation (24 Stück) neu justiert werden damit die Informationen zeitgleich mit den zu stanzenden Daten am Vergleicher zur Verfügung stehen. Die mechanisch einzustellenden Elemente müssen auf 5 Mikrosekunden genau justiert werden. Nach dieser Reparatur werden alle duplizierten Lochkarten auch überprüft. Bei einer falschen Lochung stoppt der Rechner augenblicklich (was extrem selten vorkommen sollte).

<br><br><b>19.10.2010:</b> Nachdem alle verfügbaren Testprogramme (im Lochkartenformat) problemlos laufen und keine Fehlermeldungen erfolgen, stellen wir fest: <b>Der Rechner ist o.k.</b>

<br><br>Nun sind wir mit der Neukonstruktion des Speichers beschäftigt. Dies ist wichtig, da nicht davon auszugehen ist, dass der Drahtspeicher noch Jahrzehnte fehlerfrei arbeitet.

<br><br><b>2013:</b> Die Neukonstruktion des Memory als Halbleiterspeicher macht mehr Probleme als erwartet. Trotz der aufwändigen Aufnahme aller notwendigen Timings und deren Einbindung in die Logik des RAM läuft die neue Speicherkarte noch nicht. Weitere Tests und Änderungen sind notwendig. Zum Glück funktioniert der Drahtspeicher immer noch einwandfrei.

<hr><p class="small">Wir möchten uns herzlich bei den Herrn Dr. Frank Berger und Dr. Jürgen Steen vom <b>Historischen Museum Frankfurt</b> für die Überlassung von vielen Ersatzteilen für diesen Rechner bedanken. </small>
