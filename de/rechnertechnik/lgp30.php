<?php
	$seiten_id = 'lgp30';
	$version = '$Id: elektro-mechanik.php 688 2014-11-15 09:18:06Z heribert $';
	$titel = 'Schoppe & Faeser: LGP 30';
	
	require "../../lib/technikum29.php";
?>

<h2 id="lgp30">LGP 30 von Schoppe & Faeser</h2>

<p>Ein interessanter Neuzugang im Oktober 2015:<br><br>
Der "Elektronenrechner" LGP-30 der 1. Generation wurde in den USA Mitte der fünfziger Jahre von den Firmen <b>L</b>IBRASCOP und <b>G</b>erneral-<b>P</b>recision entwickelt. Etwa 40 Stück dieser Anlagen wurden ab 1958 in Minden von der Firma Schoppe & Faeser in Lizenz gebaut. Der LGP war als wissenschaftlicher Rechner konzipiert. Im Jahre 1962 wurde er schließlich vom <a class="go" href="/de/rechnertechnik/fruehe-computer.php#lgp21"> <b>LGP-21</b></a> abgelöst.<br>
Zum externen Speichern von Programmen und Daten werden 1"-Lochstreifen verwendet, die ein Schnell-Leser bzw. -Stanzer verarbeitet. Als Ein-/Ausgabegerät dient der "Flexowriter" von FRIDEN, im Prinzip eine elektrische Schreibmaschine mit Lochstreifenzusatz.</p><br>

<div class="center">
		<img src="/shared/photos/rechnertechnik/lgp30-1.jpg" alt="LGP 30 Anlage" width="850" height="380" />
		<p class="center">	
		<b>LGP 30 Röhrenrechner vor der Restauration</b>
		</p></div>
	
<p>Bei unserem Rechner fehlen die Verbindungskabel zu den Lochstreifengeräten und zum Flexowriter. Daher suchen wir spezielle Stecker, siehe
<a class="go" href="/de/wir-suchen.php#stecker" target="_blank">"gesuchte Steckverbindungen"</a>. Ansonsten ist der Zustand altersgemäß o.k.. Die Bleche müssen neu lackiert und die Mechanik wieder gangbar gemacht werden. Der Magnet-Trommelspeicher weist Schleifspuren in der ferromagnetischen Beschichtung auf und ist vermutlich nicht mehr zu retten. Hierfür müssen wir einen Micro-Controller anpassen, der diese Aufgabe übernimmt. Erst danach wird sich zeigen welche Fehler die Elektronik aufweist.....eine wirkliche Herausforderung.</p>

		
	<div style="width: 350px;" class="desc-left borderless no-copyright">
    <a href="/shared/photos/rechnertechnik/lgp30-2.jpg" target="_blank">
		<img src="/shared/photos/rechnertechnik/lgp30-2.jpg" alt="Frontansicht, offen" height="266" width="350"></a>	
		<div class="bildtext">	
			<p><b>Vorderansicht, ohne Verkleidung</b></p> 
		</div></div>	
				
		<div style="width: 350px;" class="desc-right borderless no-copyright">
    <a href="/shared/photos/rechnertechnik/lgp30-3.jpg"target="_blank" >
		<img src="/shared/photos/rechnertechnik/lgp30-3.jpg" alt="Rückansicht, offen" height="262" width="350"></a>	
		<div class="bildtext">	
			<p><b>Rückansicht, ohne Verkleidung</b></p> Die Bilder lassen sich vergrößern</p> 
		</div></div>	

<p class="clear">Bei so einem historischen Rechner sind die technischen Daten durchaus interessant:<br>
Der Trommelspeicher hat eine Rotationsgeschwindigkeit von 3600 U/Min., der Spurabstand der feststehenden Köpfe beträgt 2mm, die Spurbreite 1mm und der Kopfabstand zur Trommel 25 µm. Die Speicherkapazität ist mit 4.096 Worten (Wortlänge 32 Bit!) für damalige Zeiten recht groß.<br>
Mit einer Taktfrequenz von 137 kHz beträgt die Zugriffszeit mindestens 2ms, höchstens 15ms. Eine Addition dauert 0,23 ms, eine Multiplikation 15 ms (jeweils ohne Zugriffszeit).<br>
Die Elektronik besteht aus 113 Langlebensdauer-Röhren und 1350 Germaniumdioden in 34 Modulen (12 verschiedene Einschübe).<br>
Peripherie:<br>
Der Lochstreifenleser liest 200 Zeichen/Sek. der Lochstreifenstanzer kann 50 Zeichen/Sek. stanzen und der Flexowriter schafft 10 Zeichen/Sek.<br>
Das Gewicht des LGP30 beträgt stolze 365 kg (ohne Peripherie).	

<p class="clear">Hier ein paar Daten zu unserem LGP-30. Der Verbleib bis 1962 ist nicht geklärt. Von 1962 bis 1980 (!!) wurde er im Landesvermessungsamt wie folgt eingesetzt:
<ol>
<li> Kataster: Zur Koordinatenberechnung und Herstellung von Steuerlochstreifen für die automatische Kartierung (ZUSE Graphomat Z64), Umrechnung alter Polygonierungen durch Polygonzugberechnungen, Affin- oder Helmert-Transformationen.<br>
<li> Landesvermessung: Ausgleich trigonometrischer Netze, Auswertung von Aerotriangulationen.
</ol>

Es wurden durchaus anspruchsvolle Berechnungen mit dem kleinen Rechner ausgeführt, wobei z.B. eine trigonometrische Punktausgleichung mit 3 Punkten 3-4 Minuten Rechenzeit in Anspruch nahm.<br><br>

<div class="desc-right borderless">
<a href="/shared/photos/rechnertechnik/lgp-trommelspeicher.jpg" target="_blank">
		<img src="/shared/photos/rechnertechnik/lgp-trommelspeicher.jpg" alt="Trommelspeicher" height="325" width="420"></a>	
		<div class="bildtext">	
			<p>LGP-30 Trommelspeicher. Die Magnetschicht hat gravierende Defekte.<br>Das Bild lässt sich vergrößern.</p>  
		</div>	</div>
		
<div id="trommel"></div>
<b>Beginn der Restauration</b><br><br>
Nun endlich stürzen wir uns in das Abenteuer der Instandsetzung des Röhrenrechners (Juli 2017). Das größte Problem stellt der Trommelspeicher dar. Hierfür gibt es 4 Lösungsvarianten:<br>
1. Neubeschichtung der Trommel. Das wäre die beste Methode aber die Durchführung ist extrem schwierig.<br>
2. Simulation durch einen Micro-Controller. Die Anbindung an die Röhrenpotenziale (0V und -20V) wäre auch zu meistern.<br>
3. "Diskrete" Elektronik mit RAM, EPROM, OP´s und TTL´s: Aufwändige Schaltung mit den gleichen Potenzialproblemen.<br>
4. Induktive Ankopplung, jeder Kopf erhält einen Gegenkopf der an ein Umlaufregister angeschlossen ist. Extrem aufwändig. Diese Idee wurde zunächst wieder verworfen.<br><br>
Im Vergleich zur Trommel-Emulation ist die Herstellung aller fehlenden Verbindungskabel eine Kleinigkeit.<br>
Erfreulicherweise haben sich 4 Experten bereit erklärt, an dieser Herausforderung mitzuwirken. Insbesondere gilt unser Dank Herrn Klemens Krause vom <a href="http://computermuseum.informatik.uni-stuttgart.de/"target="_blank">Computermuseum-Stuttgart</a>.
<p>
<b>UPDATE 2022:</b></p>
<p>
Noch zu Lebzeiten von Heribert Müller entschieden wir uns, Option 2 zu verfolgen und  einen
FPGA als Ersatz für die Trommel zu programmieren. Das Hard- und Softwaredesigns übernahm
Jürgen Müller. Wie es in den letzten Jahren trotz Unterbrechungen durch die Corona -Beschränkungen 
weiterging berichten wir <a href="/de/geraete/LGP30/LGP30_Details.php">hier</a>.
</p>








