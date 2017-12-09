<?php
	$seiten_id = 'speichermedien';
	$version = '$Id$';
	$titel = 'Historische (interne) Speichermedien';
	
	require "../../lib/technikum29.php";
?>
<header class="teaser seitenstart">
	<img class="no-copyright" src="/shared/photos/rechnertechnik/speichermedien/header-memory+text.jpg" >
	</header>

<br>
<p>
	Wir beschreiben hier ein paar Speichertypen, die in den Rechnern des technikum29 verwendet werden. Es handelt sich um Arbeits- bzw. Festwertspeicher, die aufgrund ihrer Größe sehr anschaulich sind. Allgemein ist zu bemerken, dass das Problem des Speicherns von Daten und Programmen in der Frühzeit der Computer sehr viel größer war als der Bau leistungsfähiger diskreter Prozessoren. Hier war viel Phantasie gefragt; so kam es zu sehr originellen Lösungen.<br>
	Heute wie vor 60 Jahren waren (sind) folgende charakteristische Größen wichtig:
</p>

<ul>
	<li>Zykluszeit</li>
	<li>Packungsdichte</li>
	<li>Kosten/Bit (heute Kosten/MB)</li>
	<li>Verlustleistung</li>
</ul>

<p>Man unterscheidet geometrisch:</p>

<ul>
	<li>Eindimensionale Anordnung (z.B. Laufzeitleitung)</li>
	<li>Zweidimensionale Anordung (z.B. Trommel-/Plattenspeicher)</li>
	<li>Dreidimensionale Anordnung (z.B. Kernspeicher, Zahl der Ebenen entspricht der Wortlänge)</li>
</ul>

<p>Physikalisch hat man folgende Prinzipien verwendet: Elektrostatische Ladung (Speicherröhren), Ausbreitung von Schallwellen (Laufzeitleitungen), Ferromagnetismus (Kernspeicher, Magnetdrahtspeicher, Trommel-/ Plattenspeicher), Holographie (optische Speicher). Die größte Bedeutung und die weiteste Verbreitung hatten die ferromagnetischen Speicher.</p>

<h3 id="bull">Laufzeitspeicher des BULL GAMMA 3 Röhrenrechners</h3><br>

<p>Unfassbar groß, unfassbar wenig Speicherplatz und unfassbar schwer (8,3kg) ist dieser sehr historische Arbeitsspeicher aus unserem Röhrenrechner <a href="/de/rechnertechnik/gamma3.php">BULL GAMMA 3</a> (Bj. 1952-1959). Das ist schon eine Großaufnahme wert.</p>

<div class="box center">
	<img src="/shared/photos/rechnertechnik/speichermedien/bull-gamma3-laufzeitspeicher.jpg" alt="Bull Laufzeitspeicher" width="720" height="559" />
	<p class="bildtext"><i>Bild 1: Verzögerungs- bzw. Laufzeitspeicher</i></p></div>
	
	In Bild 2 ist die Rückseite des Speichers zu sehen. Die Weinflasche dient zum Größenvergleich. Die eigentlichen Laufzeitglieder bestehen aus 120 Stück LC-Kombinationen, die in Tiefpassschaltung eine geringe Verzögerung beim Durchlaufen bewirken. Es handelt sich hier um einen sogenannten "Rechenspeicher M1". 
	
	<div class="box left">
	<img src="/shared/photos/rechnertechnik/speichermedien/bull-gamma3-speicher.jpg" alt="Bull Laufzeitspeicher" width="478" height="380" />
	<p class="bildtext"><i>Bild 2 (links): Verzögerungsspeicher aufgeklappt</i></p></div>
		
	<div class="box center">	
<img src="/shared/photos/rechnertechnik/speichermedien/speicherausschnitt.jpg" alt="Details des Laufzeitspeicherfotos" width="225" height="233" />
<p class="bildtext"><i>Bild 3: Ausschnitt</i></p></div>
	 
		<p>Nach dem Durchlaufen von je 12 Tiefpässen ist sind die Signale stark geschwächt, so dass eine Regeneration notwendig ist. Dazu dienen 10 Röhrenverstärker. Am Ende der Laufzeitkette werden die  Informationen nochmals verstärkt und wieder am Beginn der Kette eingelesen. Sie laufen permanent durch die Verzögerungsleitung und sind damit gespeichert.</p>
		
		<div class="box left">
	<img src="/shared/photos/rechnertechnik/speichermedien/laufzeitkette.jpg" alt="LC-Kette" width="478" height="119" />
	<p class="bildtext"><i>Bild 4:<br>Laufzeitkette, hier nur drei der 120 LC-Pässe</i></p></div>
		
		<p>Das abgebildete Speichermodul kann gerade mal <b>eine</b> 12-stellige Dezimalzahl speichern. Binär entspricht dies einer Speicherkapazität von ca. 6 Byte!! Sie lesen richtig: 6 Byte, nicht KB oder gar MB! In dieser frühen Phase der "Elektronischen Rechengeräte" war Speicherplatz extrem teuer und sehr voluminös. Bei der Programmierung musste man darauf sehr viel Rücksicht nehmen.
		Dies ist ein wirklich seltener Speicher, der vor der Zeit von Kernspeichern zum Einsatz kam. Er wurde auch mit "Verzögerungsspeicher" oder "Verzögerungslinie" bezeichnet. In unserem BULL-Gamma-3 Rechner sind 7 Stück dieser Laufzeitspeicher eingebaut. Das entspricht 58 kg Elektronik für 42 Byte Arbeitsspeicher.</p>
		
	<!-- Ende der Laufzeitspeicher-Box, Speicherausschnitt-Detailfoto -->


<h3 id="magnetostriktion">Laufzeitspeicher: Magnetostriktion</h3>

<div class="box center manuelle-bildbreite" style="max-width: 860px">
	<img src="/shared/photos/rechnertechnik/speichermedien/laufzeitspeicher.jpg" alt="Fotografie eines Laufzeitspeichers" width="421" height="393" />
	<img src="/shared/photos/rechnertechnik/speichermedien/laufzeitspeicher-details.jpg" alt="Details des Laufzeitspeicherfotos" style="margin-left: 3px;" width="421" height="393" />
	<p class="bildtext"><i>1 KB Laufzeitspeicher</i></p></div>
	
		<p>Wenn sich (Ultra-)Schall ausbreitet, benötigt er Zeit zum Durchlaufen des Mediums. In dieser Zeit ist der Schall "gespeichert".
		
		<div class="desc-left no-copyright">
		<a class="popup" href="/shared/photos/rechnertechnik/magnetostriktion.jpg">
   <img src="/shared/photos/rechnertechnik/magnetostriktion.jpg" alt="Aufbau des Experimentes" width="428" height="303" /></a>
   
   <p class="small"><b>Magnetostriktion: Wissenschaftlich experimentieren</b><br>
		Im Rahmen unseres "<a href="/de/lehrerinfo.php#experimente">Experimental-Workshop für Schüler</a>" können Sie hier auch alle wichtigen Eigenschaften der Magnetostriktion testen und auswerten. So ergibt sich z.B. für die Ausbreitungsgeschwindigkeit des magnetostriktiv erzeugten Ultraschalls im Nickeldraht ein Wert von ca. 3000 m/s.<br>
		Vergrößern: Bild anklicken!</p></div>
		
		   <br/>Durch Magnetostriktion (kurzes Zusammenziehen eines Drahtes, wenn ihn ein starkes Magnetfeld umgibt) werden quasi Schallimpulse auf einen (zusammengerollten) Draht gegeben. Diese Information l&auml;uft mit der Schallgeschwindigkeit (des Materials) bis zum Ende und wird dort wieder in Stromimpulse umgewandelt. Jetzt w&auml;re die Information verloren, wenn man sie nicht aufbereiten und wieder am Anfang des Drahtes eingeben w&uuml;rde.</p>
		<p>Die Daten laufen damit permanent "im Kreis" und k&ouml;nnen, wenn sie den Draht verlassen, gelesen und ver&auml;ndert werden. Je l&auml;nger der Draht ist, desto gr&ouml;&szlig;er ist die Speicherkapazit&auml;t.</p>
		<p>Es handelt sich um einen fl&uuml;chtigen Speicher mit relativ langer Zugriffszeit. Wird der Rechner abgeschaltet, sind alle Daten weg.</p>
		<p>Im Prinzip ist ein solcher Speicher ein analoges "Schieberegister". So wurde von der deutschen Firma DIEHL (Rechnersysteme) der Ultraschallspeicher der Rechner "Combitron" bzw. "Combitronic" im Nachfolgemodell "Algotronic" durch eine Kette von Schieberegistern ersetzt. Die Umlaufzeit wird jetzt durch die Taktfrequenz und nicht durch die physikalische Laufzeit der Schallwellen im Draht bestimmt. Siehe <a class="go" href="/de/geraete/diehl-combitronic.php">"Diehl-Combitronic"</a></p> 
		
		

<h3 id="kernspeicher">Kernspeicher</a></h3>

<div class="box left clear-after">
<a class="popup" href="/shared/photos/rechnertechnik/speichermedien/demo-kernspeicher.jpg">
	<img src="/shared/photos/rechnertechnik/speichermedien/demo-kernspeicher.jpg" width="428" height="322" /> </a>
	
	<p class="bildtext"><i>Kernspeicher-Demonstrationsmodell, Transfluxor</i><br>(Zum Vergrößern Bild anklicken!)</p>
	
<p>Dieser gigantisch große Kernspeicher stammt aus der Hochsschule und diente Ende der 50er bis Anfang der 60er Jahre als funktionsfähiges Modell des Ferritkernspeichers. Im Hintergrund ist eine edle Flasche Rotwein zum Größenvergleich abgebildet. <br>
Es handelt sich hierbei genau genommen um einen Transfluxor-Speicher. Die Ringkerne mit einem Durchmesser von 8,5mm stellen durch ihre geometrische Form mehrere ineinander verkoppelte Einzelkreise dar. Die Ansteuerung ist recht komplex und fand u.a. in der Fernsprechtechnik Verwendung. Im Gegensatz zu den einfachen Ringkernen lassen sich Transfluxor-Kerne auslesen ohne dass dabei der Inhalt zerstört wird.<br><br>
Die Werkstätten der Hochschule müssen in mühsamer Handarbeit wochenlang daran gearbeitet haben. Wenn man diesen <a class="popup" href="/shared/photos/rechnertechnik/speichermedien/demo-kernspeicher-ausschnitt.jpg"> Ausschnitt des Speichers</a> betrachtet erkennt man mehrere magnetische Kreise in jedem Kern und begreift den umfangreichen Herstellungsaufwand.
 </p>
</div>
<div class="box center manuelle-bildbreite" style="width: 694px;">
	<img src="/shared/photos/rechnertechnik/speichermedien/triumph-kernspeicher.jpg" alt="Kernspeicher von Triumph" width="694" height="520" />
	<p class="bildtext"><i>Triumph Kernspeicher</i></p>
		<p>Ein besonders anschaulicher Kernspeicher wurde von der Firma "Triumph" ca. 1961 hergestellt. Die gesamte Karte (ca. 16cm x 20 cm) speichert genau 144 Bit (= 144 Kerne). Das sind gerade 12 W&ouml;rter mit einer Länge von je 12 Bit. Also ca. 26 cm&sup2; Fl&auml;che f&uuml;r jedes Wort !!!<br>Unten ist ein Ausschnitt dieses Speichers abgebildet.</p>
	
	
	<img src="/shared/photos/rechnertechnik/speichermedien/kernspeicher-ausschnitt.jpg" alt="Ausschnitt des Kernspeichers" width="694" height="90" />
	<div class="bildtext">
		<p>Während der Triumph-Speicher noch von Hand gefädelt wurde, ist der untenstehende Speicher bereits maschinell gefädelt worden.</p>
	</div>
</div>

<div class="box center auto-bildbreite">
	<img src="/shared/photos/rechnertechnik/speichermedien/kernspeicher-univac.jpg" alt="Kernspeicher auf einem Modul der Univac-Anlage" width="550" height="420" />
	<p class="bildtext">
	   Dieser Kernspeicher (Bj. 1969), aufgenommen im Gegenlichtverfahren, speichert im Hochgeschwindigkeitsdrucker der UNIVAC Anlage genau eine Zeile Text (92 Zeichen). Die Kerne sind gerade noch zu erkennen.
	</p>
</div>

<div class="box center auto-bildbreite">
   <img src="/shared/photos/rechnertechnik/speichermedien/kernspeicher.big.jpg" alt="Abbildung eines Kernspeichers im Vergleich zu einem Streichholz" width="629" height="443" class="weisser-rahmen" />
   <p class="bildtext"><i>Speicherebene mit 16.000 Bit Kapazität</i></p></div>
   <!--class="bildtext-bildbreite" style="width: 629px">-->
	  <p>Die Kapazit&auml;t der Kernspeicher wurde immer gr&ouml;&szlig;er bei drastisch abnehmenden Volumen. Das Bild zeigt eine Ebene eines Speichers (Bj. ca. 1975-1978). Die Fl&auml;che entspricht der des 144-Bit-Speichers. Die Kerne sind mit blo&szlig;em Auge nicht mehr zu erkennen. In dieser Ebene befinden sich &uuml;ber 16000 Kerne. Nur in einer Vergr&ouml;&szlig;erung sind sie sichtbar. Der Speicherblock beinhaltet 16 Ebenen (= Wortlänge) mit insgesamt ca. 256000 Kernen, er kann also 32 kB speichern. Dazu wurde ein Volumen von ca. 2,5 dm&sup3; ben&ouml;tigt, das entspricht 2,5 Milcht&uuml;ten! Damit sind die Grenzen und auch das Ende dieser Speicher&auml;ra aufgezeigt.
	  <br/>Die Zugriffszeit sinkt mit der Verkleinerung des Ringkernes. Hier betr&auml;gt sie ca. 0,2 &micro;s. Wird die Information eines Kerns (links- oder rechtsdrehender Magnetismus steht f&uuml;r "0" bzw. "1") ausgelesen, so wird er dadurch entmagnetisiert. Damit der Inhalt dieses Bits nicht verloren geht muss er sofort wieder magnetisiert werden. Diese gesamte Zykluszeit liegt bei ca. 0,5 &micro;s. (Zum Vergleich: Bei einem 2 kB Laufzeitspeicher betr&auml;gt sie ca. 1 ms, also 2000-mal mehr! Bei einem Halbleiterspeicher von 1975 lag sie jedoch bereits unter 100 ns, war also 5-mal kleiner).</p>
	  <p>Kernspeicher haben einen entscheidenden Vorteil: Sie behalten ihr Ged&auml;chtnis. Man kann einen z.B. 1975 abgeschalteten Rechner heute wieder mit den Programmen starten, die zuletzt dort "abgelegt" wurden. Ein Booten ist nicht notwendig.
	  <br/>Noch lange nach der Zeit des Kernspeichers bezeichnete man den Arbeitsspeicher eines Rechners mit "Core" (Kern), obwohl l&auml;ngst Halbleiterchips verwendet wurden.</p>
   
  <h3 id="threaded-rom">Gefädeltes ROM, Festwertspeicher</h3>
  
<div class="box center auto-bildbreite">
	<a name="backlink-gefaedeltes-rom" href="/de/geraete/gefaedeltes-rom.php"><img src="/shared/photos/rechnertechnik/speichermedien/nixdorf-rom-gesamt.jpg" alt="Gefädeltes ROM von Nixdorf" width="694" height="470" /></a>
	<p class="bildtext"><i>Nixdorf gefädeltes ROM</i></p></div>
		<p>Wenn man Mitte der 60er Jahre Programme, z.B. ein Betriebssystem, hardwaremäßig speichern wollte, stand man schon vor großen Problemen. Ausgehend von der Funktion des Kernspeichers ersann man sich ein ROM, in welchem das unveränderbare Programm abgelegt wurde. Dieses gefädelte ROM (Festwertspeicher) ist aus einer NIXDORF-WANDERER Logatronic Anlage (Bj. ca. 1966, der Vorgänger der Nixdorf 820 Anlage mit Stäbchenspeicher, s.u.). Es kann 2048 Wörter mit je 18 Bit generieren. <br>
		Wie man sieht, waren die Ingenieure und Techniker der Firma WANDERER perfektionistische Ästheten: Alle Transistoren in Reih´ und Glied, sowie Symmetrie zeichnen den Aufbau aus. Einen Detailausschnitt und genauere Erklärungen erhalten Sie durch Anklicken des Bildes.<br/>
		Bleibt noch anzumerken, dass solche "Fädelspeicher" auch in den Bordrechnern der
		Apollo-Raumkapseln eingesetzt wurden (entwickelt am MIT). </br> 
		</p>
	

<h3 id="staebchenspeicher">Stäbchenspeicher (Induktionsspeicher)</h3>

<div class="box center auto-bildbreite">
	<a name="backlink-staebchenspeicher" href="/de/geraete/staebchenspeicher.php"><img src="/shared/photos/rechnertechnik/speichermedien/gefaedeltes-rom.jpg" alt="Stäbchenspeicher von Nixdorf" width="750" height="525" /></a>
	<p class="bildtext"><i>Nixdorf Stäbchenspeicher</i></p></div>
		<p>NIXDORF wollte besonders flexibel sein und gestaltete ein ROM, welches man auch problemlos selbst fädeln konnte (und natürlich noch immer kann).
			 <br/>In diesen ROM´s wurde das ganze Betriebssystem des NIXDORF 820 - Rechners gespeichert (man brauchte 3 Stück dieser Module, Typ 177). Der Kunde konnte sich auch Programme selbst in leeren Programmträgern herstellen. Pro Modul (siehe Bild, hier geöffnet) waren das bis zu 4096 Wörter mit einer Länge von je 18 Bit. Das Gewicht des Moduls beträgt stolze 2,4 kg! Ein ordentliches Programm hatte auch ein ordentliches Gewicht!<br/>
			 Weil dies das am einfachsten zu verstehende ROM ist, welches man selbst herstellen konnte, gibt es genauere Erklärungen und weitere Bilder.
		</p>
		<p><a class="go" href="/de/geraete/staebchenspeicher.php">Funktionserklärung des Stäbchenspeichers</a></p>
	

<h3 id="magnetdrahtspeicher">Magnetdrahtspeicher</h3>

<div class="box left clear-after">
	<a href="/de/geraete/magnetdrahtspeicher.php"><img src="/shared/photos/rechnertechnik/speichermedien/magnetdrahtspeicher.jpg" alt="Beschriftetes Photo: Aufbau des Magnetdrahtspeichers" width="340" height="303" /></a>
	<p class="bildtext"><i>Univac Magnetdrahtspeicher</i></p>
	
		<p>Dieser Speicher sollte den Kernspeicher ablösen. Mit Ankündigung der UNIVAC Serie 9000 (ca. 1965/66) stellte UNIVAC "eine technische Neuerung ersten Ranges" vor: Den Magnetdrahtspeicher, so der Text in der UNIVAC-Zeitschrift "Die Lochkarte" von 1967.</p><p>
		Im Rahmen eines Forschungs- und Entwicklungsauftrages des Goddard Space Flight Centers der Raumfahrtbehörde NASA erhielt UNIVAC 1964 den Auftrag ein Speichersystem zu entwickeln, das weniger als 1 Watt Leistung benötigt (ein Kernspeicher benötigt dafür 10-15 Watt), nicht zerstörendem Lesen (d.h. kein Wiedereinschreiben der gelesenen Information), hoher Speicherkapazität, kleiner Zykluszeit, sowie Funktionsfähigkeit bei Temperaturen von -20 bis +100 Grad Celsius.<br>
		Schon ein Jahr später (1965) konnte ein solches Speichersystem mit genialen Ideen entwickelt, gebaut und für Satelliten und Raumschiffe eingesetzt werden. Doch schon nach relativ kurzer Zeit kam die Ernüchterung: Der Speicher war sehr störanfällig.</br></p>
		<p>Interessante Einzelheiten sind hier zu lesen: <a class="go" href="/de/geraete/magnetdrahtspeicher.php">Aufbau und Funktion des Magnetdrahtspeichers</a></p></div>


<h3 id="lochband">Lochband</h3>

<div class="box left clear-after">
   <img src="/shared/photos/rechnertechnik/speichermedien/lochband-combitron.jpg" alt="Lochband der Combitron" width="424" height="322" />
   <p class="bildtext"><i>Metall-Lochband</i></p>
	   <p>Wie in der Rubrik <a href="/de/rechnertechnik/programmierbare.php">programmierbare Tischrechner der 2. Generation</a> beschrieben, benutzte die DIEHL Combitron einen Laufzeitspeicher. Der ist jedoch flüchtig. Das "Betriebssystem" war auf einem 2 spaltigen Lochband abgespeichert, wobei die linke Lochreihe nur die Taktspur ist. Nach dem Einschalten wurde das Lochband  mit der Geschwindigkeit per Fotozelle abgefühlt, welche die Information seriell optimal dicht in den ersten Teil des Laufzeitspeichers schrieb. Wie man erkennt, ist die Informationsdichte auf dem Lochband extrem gering. Aber das war ja auch die Steinzeit der programmierbaren Rechner.
   </p></div>
