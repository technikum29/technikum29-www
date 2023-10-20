<?php
	$seiten_id = 'wissenschaftliche-rechner';
	$version = '$Id$';
	$titel = 'Wissenschaftliche Rechner und Minicomputer';
	
	require "../../lib/technikum29.php";
?>
   
	<header class="teaser seitenstart">
		<h2>Wissenschaftliche Rechner und Minicomputer</b></h2>
		<img src="/shared/photos/rechnertechnik/pdp-941x270.jpg" width="941"  height="270" >
	</header>
	
	   <p> Unter "Minicomputer" würden sich die Kids heute einen Computer im Handy- oder Armbanduhrformat vorstellen. In den 60er und frühen 70er Jahre war das anders. Ein Computer war prinzipiell riesig (siehe <a href="univac9400.php" class="go">UNIVAC</a>), so dass ein 300kg-Rechner zu den "Minis" gehörte. Frühe Computer sind wegen ihrer stattlichen Größe und der sehr schönen transparenten Peripheriegeräten vor allem in ihrer Funktion sehenswert.
        <br/>Es gibt eine sehr wichtige Computerfamilie, die letztendlich zu unseren heutigen (Home-)Computern geführt hat: Die Entwicklung der "Mini-"Computer der Firma <b>D</b>igital <b>E</b>quipment <b>C</b>orporation (kurz <b>DEC</b>) der 12-Bit-Serie PDP-8 bzw. PDP-12. Wir verfügen über alle in dieser Serie gebauten Geräte: Von der PDP-8 (auch Classic-8 genannt) aus dem Jahr 1965 bis zur PDP-8a (1975). Letztere ist museal weniger interessant und steht daher im Archiv. Der Abkürzung "<b>PDP</b>" steht für "<b>P</b>rogramable <b>D</b>igital Com<b>p</b>uter".
	</p>
		
	<div class="box left clear-after">
		<img src="/shared/photos/rechnertechnik/dec/flip-chip-module.jpg" width="400" height="173" alt="Flip-Chip-Module" />
		<p>	Diese Rechner wurden durch zahlreiche sehr detaillierte Funktions- und Schaltungsbeschreibungen dokumentiert, wie kein anderer je gebauter Computer. Das ist aus heutiger Sicht ein Glücksfall. Nur durch das Vorhandensein dieser Dokumente ist eine Reparatur problemlos möglich. Dagegen hielten andere Hersteller oft ihre Schaltungen aus Angst vor unbefugter Weiterverwendung zurück (z.B. HP).<br>
	</div>

	Für besonders interessierte Leser ist hier eine zeitchronologische <a class="go" name="backlink-dec" href="/de/geraete/dec-geschichte.php">Geschichte von Digital (DEC)</a> aufgelistet.

	<h3 id="pdp8">Classic <b>PDP-8</b></h3>
			
	<div class="box left clear-after">
		<img src="/shared/photos/rechnertechnik/dec/pdp-8.jpg" width="400" height="560" alt="PDP-8" />
		<img style="clear:left" src="/shared/photos/rechnertechnik/dec/pdp-8,pannel.jpg" width="400" height="300" alt="PDP-8 Bedienungspannel" />
		<img style="clear:left" src="/shared/photos/rechnertechnik/dec/pdp8-fluegel.jpg" width="400" height="345" alt="PDP-8 Flügel" />   

<p>PDP-Rechner wurden vorwiegend von Wissenschaftlern eingesetzt, z.B. bei fast allen Max-Planck-Forschungsinstituten. Mit Hilfe selbstgebauter Interface-Karten bestand die Möglichkeit, bereits vorhandene Geräte und experimentelle Anordnungen einzubinden. Selbst dazu lieferte DEC vorgefertigte Boards, die einen Selbstbau von Anpassungen sehr erleichterten. Die Abbildung oben zeigt links ein typisches Modul der 2. Generation (1965) ohne ICs aus der Classic PDP-8. In der Mitte befindet sich ein kleines Modul der 3. Generation (ab 1967) mit ICs, welches in den Geräten PDP-8/I, PDP-8/L und PDP-12 verwendet wurde. Rechts schließlich ist ein leeres Modul; es kann vom Anwender für spezifische Erweiterungen der Peripherie bestückt werden. </p>

	<p>Eines der musealen Highlights ist die PDP-8 Komplettanlage, bestehend aus Prozessor, Bandlaufwerk TU 580 (gehörte ursprünglich zur PDP-5, Bj. 1963), Lochstreifenleser/stanzer PC 01, Festplatte DF 32 mit unbeweglichen Köpfen und dem Teletype Fernschreiber Modell 33ASR als Ein- Ausgabegerät. Dieser Classic-8 ist der erste in Serie gebauter "Minicomputer" der Welt (Bj. 1965, Serien Nr. 100). <br/>
	</p> 


		<p>Aufgebaut ist der Computer mit einer Vielzahl verschiedener Logik- und Register-Module. Die logischen Entscheidungen werden im Prinzip durch eine intelligente Kombination von NANDs und NORs realisiert. Register, also schnelle Zwischenspeicher, werden mit Hilfe von Flip-Flop-Schaltungen realisiert. Die umfangreiche Verdrahtung der Module erfolgt durch die sogenannte "Wire-Wrap"-Technik (Wickelverbindung), deren Funktion in <a class="go" href="http://de.wikipedia.org/wiki/Wickelverbindung" target="_blank">Wikipedia</a> nachzulesen ist. <br/>
		Diese Wire-Wrap-Verbindungen wurden bis in die 80er Jahre bei allen größeren Rechnern angewendet. Es ist eine einfache Möglichkeit, räumlich beliebig liegende Modulanschlüsse miteinander zu verbinden. Anfangs erfolgte das "Wrappen" noch per Hand und wurde später von Automaten ausgeführt. Auch heute gibt es vereinzelnd bei Versuchsschaltungen noch solche Verbindungen.<br>
		Rechner der 2. Computer-Generation haben einen entscheidenden Vorteil: Fehler lassen sich einfacher auffinden, da jeder einzelne Transistor frei zugänglich ist.
		 </p>
		 
		<p class="small">Bild oben: Komplette PDP-8 Anlage,<br/> mitte: Konsole des Rechners,<br/> unten: geöffneter Computer, wobei der rechte Flügel ausgeklappt ist. Hier erkennt man die Wire-Wrap-Verbindungen.<br><br>
		Der Prozessor und der Lochstreifenleser sind Leihgaben des <a href="http://www.fitg.de">"FITG",  Frankfurt </a></small></p>

	</div><!-- bildbox -->

         
	<h3 id="pdp8i">PDP-8/I</h3>
    <div class="box left">
          <img src="/shared/photos/rechnertechnik/dec/pdp8i.jpg" alt="DEC PDP-8I" width="400" height="666" />		
	</div>
	<div class="box center">
		<div class="center auto-bildbreite inline-block">
			<img src="/shared/photos/rechnertechnik/dec/8i-pannel.jpg" width="400" height="292" alt="PDP 8i Bedienungspannel" /> 
			<p class="bildtext small">PDP-8/I Anlage mit DEC-Tapes TU55, Hochgeschwindigkeits-Lochstreifenleser/stanzer PC04, CALCOM 563 Plotter (oben) und einem Teletype Drucker (nicht im Bild), rechts: Konsole des Rechners PDP-8/I.</p>
		</div>
	</div>

            <p>Im Jahre 1967 waren die ersten TTL-ICs (Transistor-Transistor-Logik) der Serie 74xx lieferbar. DEC war mit dem Rechner 8i damit ganz vorne in der Entwicklung [die Bezeichnung "8/I" begründet sich mit: "With <b><u>I</u></b>ntegrated Circuits"]. Man hatte mit dem Langzeitverhalten (spätere Defekte) solcher integrierten Schaltungen noch keine Erfahrung. UNIVAC hat daher selbst 1969 lieber noch auf die immerhin 2 Jahre bewährte DTL-Technik gesetzt. Zum Glück erwiesen sich die TTL-ICs als fast genauso stabil wie die DTL-Serie. Doch der Integrationsgrad war wesentlich höher, so dass der Platzbedarf schrumfte. <br>
			Dieser erste Rechner mit integrierten Schaltungen von DEC war nicht gerade billig. Alleine die CPU (im Bild links, Mitte) ohne Peripherie kostete damals 27000 $. Bei dem Umrechnungskurs der 60iger Jahre entspricht das ca. 55000 Euro. <br/>Der Arbeitsspeicher (Ringkerne) hatte eine Kapazität von 8 kB. Während der Bearbeitung eines "größeren" Problems müssen eventuell fortwährend Files (Programme, Daten) auf ein Tape (Magnetband) ausgelagert und später wieder eingelesen werden. Um mit sowenig Arbeitsspeicher dennoch erstaunlich effektiv arbeiten zu können, wurde schon in diesen frühen Jahren ein ausgesprochen intelligentes Betriebssystem (PS/8 bzw. OS/8) entwickelt!  Es ist sehr interessant, dem Rechner bei seiner Arbeit zuzuschauen.</p>
            <p>Für alle, die einen solchen Computer noch nie gesehen haben, sei angemerkt, dass dieser mit Plotter über 2m hoch ist und ein Gewicht von ca. 300 kg hat.</p>
           
        

   <h3 id="pdp8l">PDP-8/L</h3>
   	<div class="box desc-left borderless nomargin-bottom">
		<img src="/shared/photos/rechnertechnik/dec/pdp-8L.jpg" width="400" height="360" alt="DEC PDP-8L" />
		<p class="bildtext small">Das Bild zeigt den PDP-8/L (Bj.1968) mit einem Hochgeschwindigkeits-Lochstreifenleser</p>
	</div>
 	<div class="box clear-after nomargin-bottom">

		<p>Viele Anwender von DEC-Rechnern benötigten die hohe Kapazität an Speicher und einbaubaren Optionen nicht. Daher entwickelte DEC einen abgespeckten Rechner der nur wenige vorverdrahtete Einbauoptionen ermöglichte. Der Kernspeicher hatte nur 4kB Speicherkapazität, durch ein zusätzliches externes Kabinett war dieser auf 8kB erweiterbar. <br>
		Unser PDP-8/L war "hoch" ausgebaut: HSR (High-Speed-Reader) Lochstreifenleser und ein TC01 DEC-Tape-Control mit zwei TU55 Laufwerken sowie Zusatzspeicher. Damit konnte man schon eine Menge anfangen.<br>
		DEC entwickelte eine eigene Dialog-Sprache [<b>FOCAL</b>: <b>F</b>ormulating <b>O</b>nline <b>C</b>alculations in <b>A</b>lgebraic <b>L</b>anguage], die es dem Benutzer ermöglichte, in unmittelbarer Konversation mit dem Rechner zu stehen. Es wird ein direkter Compiler benutzt, jeder Befehl wird sofort in die Maschinensprache übersetzt. Diese Sprache ist ähnlich wie BASIC, jedoch etwas weniger komplex. FOCAL lief problemlos mit 4kB Kernspeicher und machte den Computer zu einem kleinen relativ leistungsfähigen Rechner der unteren Preisklasse (<b>L</b>ow-Cost, daher 8/<b>L</b>).</p>
	</div>
   
    
	<h3 id="pdp12">PDP-12, LAB-12</h3>
 <div class="box left">
      <img src="/shared/photos/rechnertechnik/dec/pdp-12.jpg" width="400" height="485" alt="DEC LAB-12" />
 </div>
 <div class="box center" style="min-width: 840px;">
	  <img src="/shared/photos/rechnertechnik/dec/pdp-12-konsole.jpg" width="400" height="256" alt="LAB-12 Bedienungspannel" />
 </div>
		<p>Im Jahre 1969 brachte DEC den PDP-12 Rechner auf den Markt. Er war der letzte Rechner, der auch im LINC-Modus arbeiten kann und ist von LINC-8 auf PDP-8 umschaltbar. Weltweit wurden 755 Anlagen verkauft. Es handelt sich hier um einen "Laborrechner" mit standardmäßig eingebauten AD- und DA-Wandlern. Solche Rechner wurden während ihrer aktiven Phase meistens dem jeweiligen Stand der Technik angepasst. So wurde in diesem Gerät der Speicher schrittweise von zunächst 8 kB bis auf zuletzt 32 kB ausgebaut.<br>
Neben den Bandlaufwerken wurde dann ein Floppy-Laufwerk mit 8-Zoll Disketten hinzugefügt. Schließlich wurde dieses wieder entfernt und dafür zwei Wechselplattenlaufwerke installiert. Zu allerletzt wurde der Rechner sogar mit einem 10BASE-T Ethernet und selbstgeschriebenem TCP/IP Protokoll an das hausinterne Netz angeschlossen. So hat dieser Rechner vom Lochstreifen über Disketten und Platten die Entwicklung bis zum Ethernet durchlebt.<br>
Hier können Sie die Konsole im Großformat sehen:
<a  class="popup" href="/shared/photos/rechnertechnik/dec/konsole,dunkel.jpg">PDP-12 Konsole (Dunkelaufnahme)</a><br>
oder als helle Aufnahme: <a  class="popup" href="/shared/photos/rechnertechnik/dec/konsole,hell.jpg">PDP-12 Konsole (Hellaufnahme)</a>


	<div class="desc-right borderless">
      <img src="/shared/photos/rechnertechnik/dec/pdp-12-innen.jpg" width="297" height="676" alt="DEC LAB-12-Flip-Chips" />
	  <p class="small">Ein Teil des Innenlebens des PDP-12 mit 462 hier sichtbaren Flip-Chip Modulen.</p>
	</div>

	<p> Unser Rechner war durch den Einbau folgender Optionen sehr komfortabel nutzbar (in den runden Klammern steht die Zahl der dazu notwendigen Module):</p>
	  
	<dl>
		<dt>AD12 [A-D-Control](12):
		<dd>16-Kanal AD-Wandler mit 10bit Auflösung im Bereich bis 60kHz mit 30dB Dämpfung.
		
		<dt>DM12 [Data Break Multiplexer for KF12-B](6):
		<dd>Erweitert den KF12-B (Interrupt-Controller) um den Anschluss von drei Speicherdirektzugriff-Geräten. Dadurch konnte Hochgeschwindigkeits-Peripherie in den CPU-Taktpausen direkt in den Kernspeicher lesen/schreiben und so bis zu 6,5Mbit/sec transportieren. DMA (Direct Memory Access) ist spätestens seit den 90ern Standard für schnelle Datenübertragung. Dennoch hatte USB im Jahr 2000 nur 1Mbit/sec transportiert!
		
		<dt>DP12A [TTY-Dataphone](4):
		<dd>Mit den DP12-Modulen konnte man weitere Teletypes und Modems anschließen, in der besten Ausbaustufe sogar asynchron bis 100kBaud (zum Vergleich: Modems in den 90ern haben nur mit 57kBaud gearbeitet). Die Geräte arbeiteten bereits per standardkonformem EIA-232 (RS232) und ASCII.<br>
		
		<dt>DR12 [Relays and Control](1):
		<dd>Stellt ein Register mit sechs Bits für sechs Relais zur Verfügung, die für beliebige externe Aufbauten genutzt werden können. Mit zwei zusätzlichen Microinstruktionen können die Relais per Programm aktiviert sowie deren Zustand, der durch Lämpchen auf dem Frontpanel angezeigt wird, ausgelesen werden.
	  
		<dt>KE12 [Extended Arithmetik Element](14):
		<dd>Erweitert die ALU um asynchrone Hochgeschwindigkeitsrechenwerke für 12-bit-Multiplikation und 5-bit Schrittzähler. Die zusätzlichen Bauteile werden über neue Mikroinstruktionen (Opcodes/Assembler-Befehle) angesprochen.

		<dt>KF12 [Multi Level](54):
		<dd>Stellt 15 verschieden priorisierte Interrupt-Leitungen zu Verfügung, die sich je bis zu 6 Geräte teilen konnten. Die Prioritäts-Level wurden durch einen Stack organisiert, die Interruptroutinen über Interruptvektoren gekoppelt. Spätestens den 80ern wurden solche Funktionen im PIC (Programmable Interrupt Controller) in jedem CPU implementiert.

		<dt>KT12 [Time-Sharing Option](2):
		<dd>Ausreichend Speicher und Peripherie (genügend TTYs und I/O-Geräte) vorausgesetzt, können mit diesem Modul bis zu 16 Benutzer ihre Programme (scheinbar) simultan ausführen (Multitasking). Das Scheduling wurde durch ein zentrales „Time Sharing Monitor“-Programm realisiert. Bereits in den 80ern waren 3 Ringe (Privilegierungsebenen) standard, die Mehrbenutzerfunktionen wurden softwaremäßig implementiert.

		<dt>KW12-A [Real Time Clock](19):
		<dd>Eine Echtzeituhr mit Auflösung bis zu 2,5us per internem Quarz. Die Timer konnten damit extrem genau auflösen, etwa zur exakten zeitgetriggerten Ansteuerung von Peripherie. Zusätzlich konnte auch eine externe Zeitquelle angeschlossen werden. Darüber wurde der Anschluss des Zeitsignalgebers DFC77 für die Atomzeit aus der Physikalisch-Technischen Bundestanstalt realisiert.
		</dl>
	
	  <p>Weitere Kabinetts sind in diesem Rechner eingebaut, die den Anschluss von zusätzlicher Peripherie ermöglicht hat:</p>
	  

	<div class="desc-right no-copyright borderless">
       <img src="/shared/photos/rechnertechnik/dec/pdp-12anwendung.jpg" width="400" height="366" alt="Typischer Einsatz einer PDP-12 in der Wissenschaft" />
	   <p class="bildtext small">Typischer Einsatz einer PDP-12 in der Wissenschaft ca. 1970. [Quelle:"digital products and applications, 1971"]</p>
	</div>
	
	<dl> 
		<dt>AA50P [12 Bit DAC Controller]: 
		<dd>Kabinett zur Bestückung mit zusätzlichen Digital-Analog-Wandlern. 3 von 6 möglichen sind eingebaut.

		<dt>BA12 [Peripharal Expander]:
		<dd>Ist ein Kabinett zur Erweiterung der Peripherie, z.B. Lochstreifenleser/Stanzer PC05, Lochkartenleser usw.
		
		<dt>DW08A [I/O Bus Converter]:
		<dd>Mit Hilfe dieser Kabinett-Option lassen sich auch Geräte mit "negativem Bussystem" anschließen. Negative Logik wurde zu Zeiten der Germanium-Technik (pnp-Transistoren) verwendet (z.B. Plattenlaufwerk mit feststehenden Köpfen "DF32").
		
		<dt>DW08E [I/O Bus Converter]: 
		<dd>Dieser Einschub im Gehäuse einer kleinen PDP8e konvertiert den Bus der Serie PDP-8,-8i,-12 in das OMNIBUS-System der PDP-8e. Damit lassen sich alle Interfaces der 8e anschließen, z.B. das RK8E-Interface zur Ansteuerung der "Digital RK05" - oder "Plessey PM DD/8" Plattenlaufwerke.
		
		<dt>BM812 [Memory Expansion Box]: 
		<dd>Ebenfalls ein Einschub im Gehäuse einer kleinen PDP8e. Ermöglicht für die LINC-8, PDP-8,-8i,-12 das Installieren von zusätzlichen Speichern der 8e-Serie bis 32kB.</small>
	</dl>
	
	<div class="desc-left auto-bildbreite borderless" style="margin-bottom: 0;">
      <img src="/shared/photos/rechnertechnik/dec/talk-to-me.jpg" width="163" height="209" alt="Demo-12 Demoprogramm" />
	  <p class="bildtext small">So meldet sich das  PDP-12-Demoprogramm </p>
	</div>
	
	<p>Zweifelsfrei steht fest: Der Rechner ist sehr umfangreich ausgebaut. Diese Methode war damals auch üblich. Man beantragte erst einmal einen Rechner in der Grundversion, die noch eben bezahlbar war. Später kamen sukzzesive die oben angeführten Optionen hinzu. So verteilten sich die hohen Anschaffungskosten auf mehrere Jahre und der Computer war immer "up to date".<br>
	Wir haben sehr gute Programme [Demo-12, läuft unter DIAL], die mit extremer Anschaulichkeit das Leistungsvermögen des Rechners zeigen. Dazu gehört u.a. eine auf dem Bildschirm darstellbare Analoguhr mit Echtzeitanzeige und das Spiel "SPACE-WAR". </p>
	
	<div class="cols" style="clear:left;">
	<div class="leftcol">
	<p class="small">
	Wie für den UNIVAC 9400 Anlage haben wir auch für den PDP-12 eine Preisliste aus dem Jahre 1973, eine Zeit in welcher der PDP-12 schon ein Auslaufmodell war. Unser voll ausgebauter Rechner wurde auch als PDP-12 LDP (Laboratory Data Processor), hier speziell als "clinical lab12", zum Preis von 206.700 DM verkauft in welchem schon die meisten der oben aufgeführten Optionen eingebaut waren. Dieser Rechner war jedoch nur mit 4kB Core Memory ausgestattet. Damit kam man nicht weit und war gezwungen, sogleich eine "Memory Extension Control" für 16.600 DM und ein 4kB Memory Module für 25.100 DM zusätzlich zu erwerben. Der unscheinbare Peripheral Expander BA12 kostete 5.400 DM (entsprach einem Mittelklassen-Auto) und der "High-Speed Paper Tape Reader/Punch" sagenhafte 16.200 DM.</small>
	</div>
	<div class="rightcol">
	<p class="small">
Ein Disk Cartridge Drive RK05 schlug mit 21.200 DM zu buche, wobei man hierzu den "Positive I/O Bus to Omnibus Converter" DW8E für 6.750 DM benötigte. Ebensoviel kostete der Converter DW08A sowie das Kabinett AA50 für zusätzliche D/A Controller. Alleine die 3 dort eingesteckten D/A Module wurden mit 1.680 DM/Stück berechnet.<br/>
Die Speichererweiterung auf 32 KB ist in der Liste nicht enthalten, müsste aber mit Controller ca. 50.000 DM gekostet haben.<br/>
Addiert man die Preise, so kommt die atemberaubende Zahl von 387.690 DM heraus, was heute inflationsbedingt deutlich über 500.000 € entsprechen würde!!
</small>
</div>
</div>
<div class="clear">
</div>

	  

  
	<h3 id="lab8e">lab8/e, pdp8/e</h3>
		
	<div class="box left">
		<img src="/shared/photos/rechnertechnik/dec/lab8e.jpg" width="400" height="461" alt="DEC LAB-8e" />
	</div>
	<div class="box center" style="min-width: 840px;">
		<img src="/shared/photos/rechnertechnik/dec/pdp-8e,pannel.jpg" width="400" height="300" alt="PDP-8e Bedienungspannel" />
	</div>
    <div class="bildtext">
        <p>DEC erkannte, dass ein Computer zur Steigerung der Verkaufszahlen billiger werden muss. Die Verwendung der kleinen Flip-Chip-Module führte zu mächtigem Volumen und aufwändigen Wire-Wrap Verbindungen der Module untereinander. Später einzubauende Optionen mussten vorbereitet sein, wie bei dem PDP-8i und PDP-12. Daher entwickelte DEC ein internes Bussystem, welches es erlaubte, die Module an einen im Prinzip beliebigen Platz im Kabinett zu placieren. Das war ein gewaltiger Fortschritt. Erweiterungen waren jederzeit möglich. Der Einbau von Optionen musste nicht vorbereitet sein und man benötigte keine Wire-Wrap-Verdrahtung mehr. Die kleinen überschaubaren Flip-Chip-Module mutierten zu Großmodulen mit der siebenfachen Fläche. Solche Module wurden mit bis zu 70 ICs bestückt. Die Herstellungskosten schrumpften deutlich, doch nachteilig war und ist das zeitaufwändige Aufsuchen von Hardware-Fehlern bei diesen großen Platinen. Bei kleinen Modulen läßt sich der Fehler besser eingrenzen.<br>
		Das Bedienungspannel wurde ebenfalls vereinfacht: Nur noch ein zweizeiliges Lämpchen-Display. Die untere Zeile ist immerhin zur Anzeige verschiedener Zustände umschaltbar. <br>
		So entstand 1970 der sehr erfolgreiche pdp8/e Computer, der insgesamt mehrere tausend mal verkauft wurde. Das interne Bussystem machte den "Klein"rechner quasi universell einsetzbar. Dieser Rechnertyp wurde mit diversen AD- und DA-Wandlern unter der Bezeichnung lab8/e als Laborrechner mit vielseitigen Anschlussmöglichkeiten für analoge Geräte angeboten (hier abgebildet) der wiederum den PDP-12 abgelöst hat. Auch für diesen Rechner gab es viele teils vorbereitete "Selbstbaumodule", so dass man praktisch jegliche Peripherie mit TTL-Level (+5Volt) ansprechen konnte.</p>
		
		Die Peripherie unseres Rechners besteht aus:
        <ul>
            <li>VR 12 (Oszilloskopbildschrim)</li>
            <li>PC 04 (High speed Lochstreifenleser/stanzer)</li>
            <li>3 x TU 56 (Doppel-Bandlaufwerk)</li>
            <li>AD- und DA- Wandler</li>
        </ul>
	</div>
	
	<div class="box left clear-after">
		<img src="/shared/photos/rechnertechnik/dec/8e-module.jpg" alt="8e-Module" width="400" height="175"/>
		<p class="small">Nebenstehendes Bild zeigt links ein Modul zum Selbstbau von peripheren Anpassungen, hier sind Bus-Verstärker usw. bereits eingebaut. Darüber konnte man beliebige ICs einsetzen und mit Wire-Wrap oder gelöteten Drähten verbinden. Rechts ein typisches Modul mit vielen TTL-ICs. Von beiden Modulen ist jeweils nur ein Teil sichtbar.</small>
	</div>
   
   
   
   <h3 id="Pr1me">Pr1me 300</h3>
   
  <div class="box left"> 
		 <a  href="/de/geraete/Pr1me300/Pr1me300_Bilder/Pr1me300_Keller_gr.jpeg" class="popup">
		<img src="/de/geraete/Pr1me300/Pr1me300_Bilder/Pr1me300_Keller_kl.jpeg" width="150"  />
	</a>
		
	</div>
	<p>Die Firma Pr1me (Natick, MA, USA), bewußt Pr<b>1</b>me und nicht Pr<b>i</b>me geschrieben, war ein Hersteller sehr
	  leistungsfähiger Minicomputer. Sie stellte 1972 ihr erstes Modell Pr1me 200 vor, eine Kopie des DDP516 von Honeywell. Pr1me machte 
	  sich einen Namen für leistungsfähige tech.-wiss. Rechner speziell für CAD (computer aided design) Anwendungen.<br><br>
	  1974 kam die <b>Pr1me 300</b> auf den Markt. Der 16 Bit-Prozessor ist diskret in TTL-Technik aufgebaut. Die Maschine hat eine Speicher-Verwaltungs-Hardware 
	  (MMU) und erlaubt damit Mehrbenutzerbetrieb mit Speicherschutz. Sie ist auf max. 512 KB Halbleiterspeicher 
	  aufrüstbar, als Massenspeicher dient eine 6 MB Pertec Festplatte.<br><br>
	  Unsere Maschine wurde ca 1977 gefertigt und 1978 von der Berufsschule (Bensheim) für Ausbildungszwecke angeschafft. Der Prozessor 
	  hat 750 µs Zykluszeit, der Halbleiterspeicher wurde auf 384 KB aufgerüstet. Das Betriebssystem ist PRIMOS3. Im Mehrplatzbetrieb 
	  können max 16 Terminals/Benutzer gleichzeitig aktiv sein.<br><br>
	  Unsere Pr1me 300 kam im Oktober 2023 ins technikum29. Zur Zeit wird sie geprüft und wird in Kürze wieder in Betrieb genommen. Details 
	  zur Wiederinbetriebnahme werden wir <a class="go" href="/de/geraete/Pr1me300/Pr1me300-details.php">hier</a> berichten.<br>
    </p>


 
