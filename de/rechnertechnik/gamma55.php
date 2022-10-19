<?php
	$seiten_id = 'gamma55';
	$version = '$Id: gamma10.php 278 2012-07-18 12:55:44Z sven $';
	$titel = 'EDV-Anlage der 2. Generation: BULL GAMMA 55';
	
	require "../../lib/technikum29.php";
?>

<h2>EDV-Anlage der 2. Generation: <b>BULL GAMMA 55</b> (GE-55)</h2>
	
	 <div class="box center clear-after">
		<img src="/shared/photos/rechnertechnik/bull-ge55.jpg" alt="BULL Gamma 55 Computer-Anlage" width="750" height="389" />
		<div class="bildtext">
		<p><b>Bull Gamma 55</b> (GE-55) Anlage. Links der Drucker I41, hinten die CPU (2 Meter lang!), rechts der Lochkartenstanzer PS40, auf dem Tisch der Lochkartenleser L617 und davor die alphanumerische Tastatur</p>
		</div>
		</div>
<p>	Eine "neue" Computer-Anlage von BULL beglückt seit 2012 unser Museum: BULL Gamma 55, nach dem Zusammenschluss von Bull mit General-Electric auch mit "GE-55" bezeichnet. Diese 	Anlage war 26 Jahre lang in der Schweiz komplett mit allen notwendigen Unterlagen (Manuals, Lochkarten...) eingelagert und erblickt jetzt wieder das Licht der Welt. <br>
	Sie wurde 1966 von BULL (Frankreich) entwickelt und kam 1967 auf den Markt. Gedacht war die GE-55 für kleine und mittlere Betriebe, die bisher auf "elektronische Rechenanlagen" aus Kostengründen weitgehend verzichten mussten.<br>
	Dieser Computer zeigt, welche ungeheuerlichen Schritte Mitte der 60er Jahre vollzogen wurden. Während im GAMMA 10 alle Befehle und Rechenschritte mittels unzähliger aufwändiger "Zyklen" durch logisch aktive (und damit störanfälliger) Schaltungen generiert wurden, geschieht dies im GE-55 in einem riesigen Festwertspeicher in Form eines gefädelten ROMs. Hier sind sogar ganze Mikroprogramme abgelegt. Das vereinfachte den Aufwand an Logik-Bauelementen sehr stark.
Der Rechner wurde in der Grundversion als reine Lochkartenanlage mit viel Mechanik konzipiert. Immerhin werden die Lochkarten optisch und nicht mehr durch Metallbürsten gelesen. <br>

<div class="desc-left auto-bildbreite borderless no-copyright">
<a class="popup" href="/shared/photos/rechnertechnik/ge55-offen-1.jpg">
		<img src="/shared/photos/rechnertechnik/ge55-offen-1.jpg" alt="Während der Restauration" width="319" height="217" /></a>
		
		<div class="bildtext">	
	<p>Die Anlage während der Phase der Restauration von hinten gesehen <a class="popup" href="/shared/photos/rechnertechnik/ge55-offen-1.jpg"> Bild vergrößern</a><br> </p>
		</div>
		</div>
		
		<div class="desc-left auto-bildbreite borderless no-copyright" style="clear:left">
<a class="popup" href="/shared/photos/rechnertechnik/ge55-offen-2.jpg">
		<img src="/shared/photos/rechnertechnik/ge55-offen-2.jpg" alt="Während der Restauration" width="319" height="213" /></a>
		
		<div class="bildtext">	
	<p>Prozessor aufgeklappt <a class="popup" href="/shared/photos/rechnertechnik/ge55-offen-2.jpg"> Bild vergrößern</a> </p>
		</div>
		</div>
		
<p>Unser Rechner begnügt sich, wie damals üblich, mit einer Maschinensprache und einem "Mini-Cobol" als Programmiersprache. Der notwendige Compiler wird mittels Lochkarten geladen. Der ganze Programmablauf wird schließlich durch einen mit Lochkarten zu ladenden "Supervisor" vorgenommen.<br>
Die Anlage wurde mit einem Arbeitsspeicher (Kernspeicher) von 2,5 KB, 5 KB oder 10 KB angeboten. Wir haben die 5K-Version. Es ist erstaunlich, dass man mit so wenig Speicherplatz bereits eine programmier-"Hochsprache" (Cobol), wenn auch in abgespeckter Form, verwenden kann. Es war jedoch auch ein Trommelspeicher anschließbar, so dass damit sogar "Mini-Fortran" installiert werden konnte.
</p>
<p>Bei allen Fortschritten im Software-Sektor war die Hardware von BULL rückständig. Die Boards der Rechnerlogik haben den gleichen Aufbau (mit Germaniumtransistoren) wie die des Gamma 10, sie sehen auch identisch aus. Zur gleichen Zeit baute UNIVAC seine Logik bereits mittels monolithischen Schaltkreisen in DTL-Logik. Gleiches gilt für IBM, auch hier wurden bereits 1965  in der IBM 1130 sowie IBM 650 einfache "ICs" in SMD-Technik verwendet.	<br><br>

September 2013: <b id="ge55">Der Rechner läuft!</b> <br>
Nach langem Suchen aller versteckter Fehler ist die Anlage nun funktionsfähig. Auch größere Gebrauchs-Programme die dabei waren, laufen einwandfrei. Mehr als 30 (!!) defekte Transistoren und Dioden mussten aufgefunden werden. Diese Bauteile sind während des "Stillstandes" innerhalb der letzten 33 Jahre kaputt gegangen. Nach umfangreichen Recherchen stellen wir fest: Dies ist der einzige Gamma 55 unseres Planeten der noch funktioniert!<br>
Wer sich für den Aufbau und die Programmierung des Rechners interessiert, kann hier nachlesen (in deutscher Sprache):  <a href="http://www.technikum29.de/download/Manuals-Bull%20GE55/"> BULL Gamma 55 Manuals </a> </p>

<div class="box left">
		<a class="popup" href="/shared/photos/rechnertechnik/leser617.jpg">
		<img src="/shared/photos/rechnertechnik/leser617.jpg" alt="Lochkartenleser" width="402" height="249" /></a>
		<div class="bildtext">
		<p>Lochkartenleser <a class="popup" href="/shared/photos/rechnertechnik/leser617.jpg">Bild vergrößern</a><br> </p>
		</div></div>
Im Bild links ist der Lochkartenleser des GE55 zu sehen (ohne Abdeckung). Alles was mechanisch lösbar war, hat BULL auch so gelöst: Die Lochkarte zieht ein Lochband mit, welches den Lesetakt zur Lesung der Spalten erzeugt! Ein problematisches Verschleißteil aber eine originelle, simple Lösung für das spaltenrichtige Lesen der Karte. <br> 
Deutlich ist auch die Projektionsanzeige zu erkennen. 10 Ziffern und zwei Sonderzeichen werden durch Lämpchen und Linsen auf je eine Mattscheibe projiziert. Über diese Anzeige findet die Kommunikation mit dem Rechner statt. Sie steht sozusagen für das heutige Display.<br>
Im unteren Bild sieht man den ausgebauten Festwertspeicher für 1024 Worte. Groß und schwer, dafür jedoch immer reparierbar! Beide Bilder lassen sich auch vergrößert darstellen.
		
		
		<div class="box right">
		<a  class="popup" href="/shared/photos/rechnertechnik/ge55-rom.jpg">
		<img src="/shared/photos/rechnertechnik/ge55-rom.jpg" alt="Festwertspeicher" width="399" height="259" /> </a>
		<div class="bildtext">
		<p>Rechts: Ausgebauter Festwertspeicher <a  class="popup" href="/shared/photos/rechnertechnik/ge55-rom.jpg">Bild vergrößern</a><br></p>
		</div>
		</div>
		
		
		
<div class="cols">
<div class="leftcol">
<p class="small">Zeitdokument: Hier Auszüge des Textes aus der originalen System-Beschreibung von 1967/68<br>
<blockquote><p class="small">"Nach intensiven Marktanalysen wurde von BULL GENERAL ELECTRIC ein Computer entwickelt, der durch seine Universalität besticht:<br>
Er ist ein Datenverarbeitungssystem, dessen logische Konzeption ein klares Abbild moderner Computer ist;<br>
Er ist darüber hinaus aber auch ein Datenverarbeitungssystem, das direkte Dateneingaben über Tastaturen in den Verarbeitsungsprozess erlaubt;<br>
Er ist bei alledem ein echtes Datenverarbeitungssystem, weil er wachsen und größere interne und externe Speicherkapazität erhalten kann.<br>
Aufbau: Die Zentraleinheit (CPU) des GE-55 stellt über 4 Kanäle - 3 normale für langsame Randeinheiten und 1 Hochleistungskanal für externe Speichereinheiten und den schnellen Drucker her.....<br>
...die Zykluszeit beträgt 7,9 us. Interner Code ist der ISO-Code. Der Kernspeicher dient als Daten- und Programmspeicher. Ein Byte, 8 Datenbits und ein Prüfbit, speichert ein alphabetisches Zeichen oder ein bzw. zwei numerische Zeichen. Die Rechenoperationen erfolgen in gepackter Darstellung....
</div>
<div class="rightcol"><blockquote><p class="small">

Den Analysen der Befehle und ihrer Ausführung dient ein Festspeicher mit einer Kapazität von 1024 Worten zu je 36 Bits.......Dieser enthält Mikroprogramme für die Steuerung, Überwachung und Befehlsdurchführung sowie arithmetische Rechentafeln und Umschlüsselungstabellen für externe Codes.<br>
Software: Das Programmiersystem zur Vereinfachung der Programmierung enthält im Wesentlichen:<br>
Symbolsprachen zur eigentlichen Programmierung und<br>
Assembler zur Umwandlung der symbolisch geschriebenen Programme......"</div>
</blockquote></p></div>
<div class="clear">&nbsp;</div><br>
	