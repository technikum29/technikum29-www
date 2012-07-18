<?php
	$seiten_id = 'fruehe-computer';
	$version = '$Id$';
	$titel = 'Wissenschaftliche Rechner und Minicomputer';
	
	require "../../lib/technikum29.php";
?>
    <h2 id="pdp8L">Wissenschaftliche Rechner und Minicomputer</h2>
	
	<h3 id="lpg21">Schoppe & Faeser:  LGP-21 </h3>

	<!-- Bild über ganze Breite (geht bei schmalen Monitoren ins Menü rein) -->
	<!-- Implementierung dafür steht im common.css, Zeile 300ff. -->
    <div class="box center" style="position:relative;">
       <div style="position:absolute; top:0px;"><img src="/shared/photos/rechnertechnik/lgp-21.jpg" width="967" height="443" alt="LGP 21 Computeranlage" />
</div>
        <div style="height: 443px;">&nbsp;</div>
		<p class="bildtext small">Von links nach rechts: Magnetbandlaufwerk, 1. LGP-21, Tally Leser und Stanzer, 2. Tally Leser, zwei zusätzliche Festplatten, 2. LGP-21, Flexowriter</p>
		
    </div>
	
    <p>Dieser Rechner ist aus vieler Hinsicht historisch hochinteressant: 1.  Der Hardware-Aufwand ist extrem gering. 2. Im Wesentlichen arbeitet der Rechner mit einem BUS-System. 3. Er hat eine Festplatte, die alle Register und Taktspuren enthält. Wie auf obigem Bild zu erkennen ist, haben wir zwei komplette Anlagen, was die Reparatur bei Defekten erheblich erleichtert.<br>
	Aus dem Original-Prospekt von 1964: <q>"Der <b>LGP-21</b> wird von der Firma Schoppe & Faeser GmbH im Lizenzbau für Europa hergestellt und von der <b>EUROCOMP</b> GmbH vertrieben."</q>
	<p>Entwickelt wurde der LGP-21 von Librascope Division -GPI- (USA), die damals zu den größten Rechenmaschinenherstellern der Welt gehörte. In den USA wurde der Rechner ab 1962 von "General Precision" verkauft.
	Es handelt sich um einen ausgesprochen kleinen Computer, der aber dennoch als <b>"Der erste vollständige programmgesteuerte Digitalrechner unter 60.000,- DM für die Grundausstattung"</b> angeboten wurde. Das war natürlich nur der Preis für die nackte CPU und einem "Flexowriter". Dieser Rechner war der Nachfolger des LGP-30 (1. Computergeneration, ab 1956), der ebenfalls von Schoppe & Faeser unter Lizenz hergestellt wurde. Der LGP21-Rechner ist sehr selten. Nur ca. 100 Stück wurden davon gebaut. Eine absolute Rarität ist das Magnetband-Laufwerk von dem etwa fünf Stück hergestellt wurden. Unser Gerät hat die Seriennummer 4.</p>
	
	<div class="box left clear-after">
		<img src="/shared/photos/rechnertechnik/tally-lochstreifenleser.jpg" width="603" height="241" alt="Tally Lochstreifenleser" />
		<p class="bildtext small">Externe Speicher des LGP-21 sind Lochstreifen, welche durch die Tally-Lochstreifenleser noch mechanisch abtastet werden. Das Bandlaufwerk und weitere externe Platten mit je ca. 8000 32-Bit-Worte Kapazität kamen erst Ende der 60er Jahre hinzu.</p>
	</div>
	

	<p>Als Speichermedium und zugleich Taktgeber (95 kHz!) wird eine rotierende Festplatte mit unbeweglichen Köpfen verwendet. Sie dreht sich mit 1475 U/min und kann 4096 Worte mit je 32 Bit speichern. Das entspricht ca. 12 KB und war zu dieser Zeit eine beachtliche Kapazität. Die Platte wird in 64 Spuren sowie 4 Taktspuren und 3 Umlaufspeicher (Akkumulator, Befehlsregister und Zählregister) aufgeteilt. Die mittlere Schreibdichte beträgt ca. 10 Bit je mm während sie heute ca. 200 mal größer ist. Hier können Sie das <br><a  class="popup" href="/shared/photos/rechnertechnik/lgp21-platte.jpg"><b>Festplatten-Laufwerk des LGP-21</b></a><br> betrachten. 
	Der LGP-21 verfügt über 23 verschiedene Befehle. Das reicht aus, um die üblichen wissenschaftlichen Aufgaben programmieren zu können.  <br>
	Die Reparatur des Rechners gestaltet sich als große Herausforderung. Da wir jedoch die Grundausstattung doppelt haben, ist die Chance für eine erfolgreiche Reparatur groß.<br>
	Weitere Informationen zu diesem interessanten Rechner folgen später.</p>

	
	<h3>Minicomputer</h3>
	
	   <p> Unter "Minicomputer" würden sich die Kids heute einen Computer im Handy- oder Armbanduhrformat vorstellen. In den 60er und frühen 70er Jahre war das anders. Ein Computer war prinzipiell riesig (siehe UNIVAC), so dass ein 300kg-Rechner zu den "Minis" gehörte, insbesondere war die CPU sehr klein. Frühe Computer sind wegen ihrer stattlichen Größe und der sehr schönen transparenten Peripheriegeräten vor allem in ihrer Funktion sehenswert.
        <br/>Es gibt eine sehr wichtige Computerfamilie, die letztendlich zu unseren heutigen (Home-)Computern geführt hat: Die Entwicklung der "Mini-"Computer der Firma <b>D</b>igital <b>E</b>quipment <b>C</b>orporation (kurz <b>DEC</b>) der 12-Bit-Serie PDP-8 bzw. PDP-12. Wir verfügen über alle in dieser Serie gebauten Geräte: Von der PDP-8 (auch Classic-8 genannt) aus dem Jahr 1965 bis zur PDP-8a (1975). Letztere ist museal weniger interessant und steht daher im Archiv. Der Abkürzung "<b>PDP</b>" steht für "<b>P</b>rogramable <b>D</b>igital Com<b>p</b>uter".
	</p>
		
	<div class="box left clear-after">
		<img src="/shared/photos/rechnertechnik/dec/flip-chip-module.jpg" width="400" height="173" alt="Flip-Chip-Module" />
		<p>	Diese Rechner wurden durch zahlreiche sehr detallierte Funktions- und Schaltungsbeschreibungen dokumentiert, wie kein anderer je gebauter Computer. Das ist aus heutiger Sicht ein Glücksfall. Nur durch das Vorhandensein dieser Dokumente ist eine Reparatur problemlos möglich. Dagegen hielten andere Hersteller oft ihre Schaltungen aus Angst vor unbefugter Weiterverwendung zurück (z.B. HP).<br>
	</div>

	Für besonders interessierte Leser ist hier eine zeitchronologische <a class="go" name="backlink-dec" href="/de-v6/geraete/dec-geschichte.php">Geschichte von Digital (DEC)</a> aufgelistet.

	<h3 id="pdp8">Classic PDP-8</h3>
			
	<div class="box left clear-after">
		<img src="/shared/photos/rechnertechnik/dec/pdp-8.jpg" width="400" height="474" alt="PDP 8 Classic" />
		<img style="clear:left" src="/shared/photos/rechnertechnik/dec/pdp-8,pannel.jpg" width="400" height="300" alt="PDP-8 Bedienungspannel" />
		<img style="clear:left" src="/shared/photos/rechnertechnik/dec/pdp8-fluegel.jpg" width="400" height="345" alt="PDP-8 Flügel" />   

<p>PDP-Rechner wurden vorwiegend von Wissenschaftlern eingesetzt, z.B. bei fast allen Max-Planck-Forschungsinstituten. Mit Hilfe selbstgebauter Interface-Karten bestand die Möglichkeit, bereits vorhandene Geräte und experimentelle Anordnungen einzubinden. Selbst dazu lieferte DEC vorgefertigte Boards, die einen Selbstbau von Anpassungen sehr erleichterten. Die Abbildung oben zeigt links ein typisches Modul der 2. Generation (1965) ohne ICs aus der Classic PDP-8. In der Mitte befindet sich ein kleines Modul der 3. Generation (ab 1967) mit ICs, welches in den Geräten PDP-8/I, PDP-8/L und PDP-12 verwendet wurde. Rechts schließlich ist ein leeres Modul; es kann vom Anwender für spezifische Erweiterungen der Peripherie bestückt werden. </p>

	<p>Eines der musealen Highlights ist die PDP-8 Komplettanlage, bestehend aus Prozessor, Bandlaufwerk TU 580 (gehörte ursprünglich zur PDP-5, Bj. 1963), Lochstreifenleser/stanzer PC 01, Festplatte DF 32 mit unbeweglichen Köpfen und dem Teletype Fernschreiber als Drucker. Diese Classic-8 ist der erste in Serie gebauter "Minicomputer" der Welt (Bj. 1965, Serien Nr. 100). <br/>
	</p> 


		<p>Aufgebaut ist dieser Computer durch eine Vielzahl verschiedener Logik- und Register-Module. Die logischen Entscheidungen werden im Prinzip durch eine intelligente Kombination von NANDs und NORs realisiert. Register, also schnelle Zwischenspeicher, werden mit Hilfe von Flip-Flop-Schaltungen aufgebaut. Die umfangreiche Verdrahtung der Module erfolgt durch die sogenannte "Wire-Wrap"-Technik (Wickelverbindung), deren Funktion in <a href="http://de.wikipedia.org/wiki/Wickelverbindung">Wikipedia</a> nachzulesen ist. <br/>
		Diese Wire-Wrap-Verbindungen wurden bis in die 80er Jahre bei allen größeren Rechnern angewendet. Es ist eine einfache Möglichkeit, räumlich beliebig liegende Modulanschlüsse miteinander zu verbinden. Anfangs erfolgte das "Wrappen" noch per Hand und wurde später von Automaten ausgeführt. Auch heute gibt es bei Versuchsschaltungen noch solche Verbindungen.<br>
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

            <p>Im Jahre 1967 waren die ersten TTL-ICs (Transistor-Transistor-Logik) der Serie 74xx lieferbar. DEC war mit dem Rechner 8i damit ganz vorne in der Entwicklung [die Bezeichnung "8/I" begründet sich mit: "With <b><u>I</u></b>ntegrated Circuits"]. Man hatte mit dem Langzeitverhalten (spätere Defekte) solcher integrierten Schaltungen noch keine Erfahrung. UNIVAC hat daher selbst 1969 lieber noch auf die immerhin 2 Jahre bewährte DTL-Technik gesetzt. Zum Glück erwiesen sich die TTL-ICs als genauso stabil wie die DTL-Serie. Doch der Integrationsgrad war wesentlich höher, so dass der Platzbedarf schrumfte. <br>
			Dieser erste Rechner mit integrierten Schaltungen von DEC war nicht gerade billig. Alleine die CPU (im Bild links, Mitte) ohne Peripherie kostete damals 27000 $. Bei dem Umrechnungskurs der 60iger Jahre entspricht das ca. 55000 Euro. <br/>Der Arbeitsspeicher (Ringkerne) hatte eine Kapazität von 8 kB. Während der Bearbeitung eines "größeren" Problems müssen eventuell fortwährend Files (Programme, Daten) auf ein Tape (Magnetband) ausgelagert und später wieder eingelesen werden. Um mit sowenig Arbeitsspeicher dennoch erstaunlich effektiv arbeiten zu können, wurde schon in diesen frühen Jahren ein ausgesprochen intelligentes Betriebssystem (PS/8 bzw. OS/8) entwickelt!  Es ist sehr interessant, dem Rechner bei seiner Arbeit zuzuschauen.</p>
            <p>Für alle, die einen solchen Computer noch nie gesehen haben, sei angemerkt, dass dieser mit Plotter über 2m hoch ist und ein Gewicht von ca. 300 kg hat.</p>
           
        

   <h3 id="pdp8l">PDP-8/L</h3>
   	<div class="box desc-left borderless nomargin-bottom">
		<img src="/shared/photos/rechnertechnik/dec/pdp-8L.jpg" width="400" height="360" alt="DEC PDP-8L" />
		<p class="bildtext small">Das Bild zeigt den PDP-8/L (Bj.1968) mit einem Hochgeschwindigkeits-Lochstreifenleser</p>
	</div>
 	<div class="box clear-after nomargin-bottom">

		<p>Viele Anwender von DEC-Rechnern benötigten die hohe Kapazität an Speicher und einbaubaren Optionen nicht. Daher entwickelte DEC einen abgespeckten Rechner der nur wenige vorverdrahtete Einbauoptionen ermöglichte. Der Kernspeicher hatte nur 4kB Speicherkapazität, durch ein zusätzliches externes Kabinett war dieser auf 8kB erweiterbar. <br>
		Unsere PDP-8/L war "hoch" ausgebaut: HSR (High-Speed-Reader) Lochstreifenleser und ein TC01 DEC-Tape-Control mit zwei TU55 Laufwerken sowie Zusatzspeicher. Damit konnte man schon eine Menge anfangen.<br>
		DEC entwickelte eine eigene Dialog-Sprache [<b>FOCAL</b>: Formulating Online Calculations in Algebraic Language], die es dem Benutzer ermöglichte, in unmittelbarer Konversation mit dem Rechner zu stehen. Es wird ein direkter Compiler benutzt, jeder Befehl wird sofort in die Maschinensprache übersetzt. Diese Sprache ist ähnlich wie BASIC, jedoch etwas weniger komplex. FOCAL lief problemlos mit 4kB Kernspeicher und machte den Computer zu einem kleinen relativ leistungsfähigen Rechner der unteren Preisklasse (<b>L</b>ow-Cost, daher 8/<b>L</b>).</p>
	</div>
   
    
	<h3 id="pdp12">PDP-12, LAB-12</h3>
 <div class="box left">
      <img src="/shared/photos/rechnertechnik/dec/pdp-12.jpg" width="400" height="485" alt="DEC LAB-12" />
 </div>
 <div class="box center" style="min-width: 840px;">
	  <img src="/shared/photos/rechnertechnik/dec/pdp-12-konsole.jpg" width="400" height="256" alt="LAB-12 Bedienungspannel" />
 </div>
		<p>Im Jahre 1969 brachte DEC den PDP-12 Rechner auf den Markt. Er war der letzte Rechner, der auch im LINC-Modus arbeiten kann und ist von LINC-8 auf PDP-8 umschaltbar. Weltweit wurden 755 Anlagen verkauft. Es handelt sich hier um einen "Laborrechner" mit standardmäßig eingebauten AD- und DA-Wandlern. Solche Rechner wurden während ihrer aktiven Phase meistens dem jeweiligen Stand der Technik angepasst. So wurde in diesem Gerät der Speicher schrittweise von zunächst 8kB bis auf zuletzt 32 kB ausgebaut.<br>
Neben den Bandlaufwerken wurde dann ein Floppy-Laufwerk mit 8-Zoll Disketten hinzugefügt. Schließlich wurde dieses wieder entfernt und dafür zwei Wechselplattenlaufwerke installiert. Zu allerletzt wurde das Gerät sogar mit einem 10BASE-T Ethernet und selbstgeschriebenem TCP/IP Protokoll an das hausinterne Netz angeschlossen. So hat dieser Rechner vom Lochstreifen über Disketten und Platten die Entwicklung bis zum Ethernet durchlebt.<br>
Hier können Sie die Konsole im Großformat sehen:
<a  class="popup" href="/shared/photos/rechnertechnik/dec/konsole,dunkel.jpg">PDP-12 Konsole (Dunkelaufnahme)</a><br>
oder als helle Aufnahme: <a  class="popup" href="/shared/photos/rechnertechnik/dec/konsole,hell.jpg">PDP-12 Konsole (Hellaufnahme)</a>


	<div class="desc-right borderless">
      <img src="/shared/photos/rechnertechnik/dec/pdp-12-innen.jpg" width="297" height="676" alt="DEC LAB-12-Flip-Chips" />
	  <p class="small">Ein Teil des Innenlebens der PDP-12 mit 462 hier sichtbaren Flip-Chip Modulen.</p>
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
	Wie für die UNIVAC 9400 Anlage haben wir auch für den PDP-12 eine Preisliste aus dem Jahre 1973, eine Zeit in welcher der PDP-12 schon ein Auslaufmodell war. Unser voll ausgebauter Rechner wurde auch als PDP-12 LDP (Laboratory Data Processor), hier speziell als "clinical lab12", zum Preis von 206.700 DM verkauft in welchem schon die meisten der oben aufgeführten Optionen eingebaut waren. Dieser Rechner war jedoch nur mit 4kB Core Memory ausgestattet. Damit kam man nicht weit und war gezwungen, sogleich eine "Memory Extension Control" für 16.600 DM und ein 4kB Memory Module für 25.100 DM zusätzlich zu erwerben. Der unscheinbare Peripheral Expander BA12 kostete 5.400 DM (entsprach einem Mittelklassen-Auto) und der "High-Speed Paper Tape Reader/Punch" sagenhafte 16.200 DM.</small>
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
   
   
   <h3 id="nova">Data General: NOVA 2</h3>
   
   <div class="box left">
      <img src="/shared/photos/rechnertechnik/nova2.jpg" width="400" height="561" alt="Data General: NOVA 2 Anlage" />
	  <p>Edson de Castro war Produktmanager von DEC und hatte die Vision, einen 16-Bit Rechner zu entwickeln, dessen Prozessor auf eine einzige Print-Platine passt. Der Firmengründer von DEC, Ken Olson, konnte sich jedoch dafür nicht erwärmen. So verließ de Castro 1968 mit 3 anderen Hardware-Ingenieuren DEC und gründete in einem leerstehenden Friseurgeschäft eine eigene Firma: <b>Data General Corporation</b> (Massachusetts, USA).<br> 
	  Bereits 1969 kam der erste 16-Bit Rechner der Serie <b>"NOVA"</b> auf den Markt. Durch die einfachere Fertigung (keine Wire-Wrap-Verdrahtung, nur zwei Platinen + Speicherplatinen ect.) war der Rechner in der Basisversion mit knapp 4000 $ zudem recht preiswert. Mit dem Grundmodell konnte man allerdings nicht viel anfangen. Nach dem Ausbau des Rechners ergab sich dann ein deutlich höherer Gesamtpreis. Der Nova-Computer wurde als "der preiswerteste und schnellste Mini-Computer der Welt" angeboten. DEC baute damals noch die Typen PDP-8I sowie PDP-12 die mit vielen kleinen Flip-Chip-Modulen realisiert wurden.<br>
	  Im Nachfolgemodell (1973), der <b>NOVA 2</b>, wurden weitere Vereinfachungen und eine nochmals höhere Integrationsdichte vorgenommen, so dass der gesamte Prozessor inklusive der Ansteuerung von langsamen Peripheriegeräten (Teletype, Lochstreifenleser/stanzer) auf einer Platine untergebracht waren. Unsere Nova ist eine NOVA 2/10, die Slots für 10 Boards hat und damit den Einbau vieler Interfaces für weitere Peripheriegeräte und Speichererweiterungen ermöglicht.<br>
	  Aus heutiger Sicht haben die riesigen Boards (38x38cm, damals "IC-Gräber in Backblechgröße" genannt) auch Nachteile: Eine Reparatur ist sehr aufwändig, da eine Eingrenzung des Fehlers durch das Auswechseln kleiner Platinen nicht möglich ist.<br>
	  Die abgebildete NOVA stammt aus einer Hochschule und ist mit zwei Plattenlaufwerken, einem Doppel-Diskettenlaufwerk (8" Disketten!), einer Teletype, einem Hochgeschwindigkeits-Lochstreifenleser und einem Lochkartenleser (hier nicht abgebildet) ausgerüstet. Später wurde schließlich ein Terminal hinzugefügt welches den Rechner zu einer komfortabel nutzbaren Anlage erweiterte.</p>
	  
	  Hier können Sie Details im Großformat anschauen:
<a  class="popup" href="/shared/photos/rechnertechnik/nova-detail.jpg">NOVA 2 mit Terminal</a><br>
	  
	  <p class="bildtext small">
	  Bestückung der Anlage von oben nach unten:<br>
	  <dl>
	  <dd>Lochstreifenleser (vorwiegend zum Einlesen von Testprogrammen, die bei jedem Rechner 		  mitgeliefert wurden)
	  <dd>Doppeldiskettenlaufwerk für flexible 8-Zoll Disketten, Mod. 6032
	  <dd>Prozessor mit Kernspeicher, hier 32 KB. Zykluszeit 0,8 us.
	  <dd>Zwei Stück Wechselplatten-Laufwerke, Series 30. Speicherkapazität 1.200.000 Wörter mit je 16 Bit, also 2,4 MB
	  <dd>Disc Cartidge System 4047, notwendig zum Anschluss der zweiten Disc
	  <dd>Rechts befindet sich das Terminal "<b>DASHER 1</b>", Mod. 6052 von Data General.
	  </dl>
	  </small>
	  
	  
 </div>

 
	<h3 id="wang2200"><b>WANG 2200</b> mit umfangreicher Peripherie</h3>
    <p>Weiterhin ist das erste System angeschlossen, was schon so ähnlich wie heutige Computer aussieht: <a class="go" name="backlink-wang2200" href="/de-v6/geraete/wang2200.php">WANG 2200</a>, Bj. 1973. Vermutlich einmalig in Deutschland ist dieser Computer mit so vielen peripheren Ger&auml;ten. So z.B. Lochstreifenleser, Stapelkartenleser, 8-Zoll dreifach Diskettenlaufwerk, Plattensystem mit 38cm gro&szlig;en Scheiben (alleine 100kg schwer und 24.000,-DM teuer speichert es gerade 5 MB), spezial BASIC-Tastatur usw.</p>
    <p>WANG erkannte schon sehr früh, dass die Zukunft der Computer nur mit Bildschirm denkbar ist. Bis 1975 baute dagegen der Konkurrent HP seine Rechner nur mit einer einzeiligen LED-Anzeige.</p>

    <div class="box center">
       <a href="/de-v6/geraete/wang2200.php"><img src="/shared/photos/rechnertechnik/wang2200.jpg" alt="Wang 2200" width="592" height="402" /></a>
    </div>

     <p>Auch der erste Personalcomputer wurde von WANG gebaut: PCS II (1975). Der erste f&uuml;r den Durchschnittsb&uuml;rger bezahlbare PC kam 1977 auf den Markt: PET 2001 von Commodore. Er war so billig wie ein heutiger PC, speicherte aber ganze 8 KB und hatte bescheidene Anwendungsvarianten. Weitere Homecomputer folgten, der Markt uferte aus, und damit endet die Sammlung der Computer.
     <br/><a class="go" href="/de/details2.php" name="backlink-details2" title="Details 2">Siehe tabellarische Darstellung wissenschaftliche- und Mini- Computer aus dem Museumsbestand</a></p>
