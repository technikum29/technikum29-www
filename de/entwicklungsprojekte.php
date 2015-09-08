<?php
	$seiten_id = 'entwicklungsprojekte';
	$version = '$Id$';
	$titel = 'Entwicklungsprojekte';
	
	require "../lib/technikum29.php";
?>
  <h2>Entwicklungsprojekte</h2>

  <p>
Auf dieser Seite zeigen wir anhand ausgewählter eigener Entwicklungen, dass unser Museumsteam sich aktiv mit der Vernetzung historischer Computerkomponenten und deren Anbindung an PCs der Jetztzeit auseinandersetzt. Dazu sind teils sehr aufwändige Hard- und Software-Konstrukte notwendig.<br>
Diese Seite ist daher nicht für Laien gedacht, sondern richtet sich an Experten. Gerne nehmen wir diesbezüglich konstruktive Vorschläge entgegen. </p>


<h3 id="papertape">Kommunikation zwischen Lochstreifengeräten und PC</h3>

<p>      Möchte man Lochstreifendateien versenden oder abändern, so ist das Einlesen von Lochstreifen in den Speicher eines PC unabdingbar. Umgekehrt ist es notwendig, veränderte oder per E-Mail erhaltene Dateien auf Lochstreifen auszustanzen, so dass diese auf historischen Computern "laufen" können.<br>
Das Ziel des "<b>Paper Tape Projects</b>" ist es, Lochstreifen mit heutigen Computern einlesen, "bearbeiten" und ausstanzen zu können. Dazu wurden vergleichsweise neue Lochstreifengeräte verwendet, die bereits über eine parallele Schnittstelle (Centronics) angesprochen werden, auf der sie auf TTL-Niveau kommunizieren (hier: Lochstreifenleser Ghielmetti FER 201, Lochstreifenstanzer FACIT 4070). Leider sind diese Geräte aber noch nicht neu genug, um dem Centronics-Quasi-Standard der 1970er-Jahre zu entsprechen (erst 1994 als IEEE-1284 standardisiert). Deswegen kann man nicht einfach ein gewöhnliches paralleles Druckerkabel verwenden, um einen PC mit dem Lochstreifengerät zu verbinden.</p>
 <div class="desc-left">
        <img src="/shared/photos/rechnertechnik/fer201.jpg" width="239" height="148" alt="Foto des Lochstreifenlesers" />
        <p class="bildtext" style="width:239px;"><b>Ghielmetti FER 201</b> Lochstreifenleser mit Vorsatz zum Lesen von Zick-Zack-Lochstreifen</p>
    </div>
<p>
Die erste Hürde, die genommen werden musste, war demnach das Herstellen eines passend verdrahteten Kabels, so dass nun ein Lochstreifengerät mit dem Parallelport-Ausgang des Computers verbunden werden konnte ("LPT"-Anschluss, der vor wenigen Jahren noch an jedem Computer vorzufinden war). Freilich fing damit erst die eigentliche Arbeit an, die darin bestand, eine Kommunikation herzustellen, schließlich entspricht auch das zeitabhängige Pegelverhalten der Geräte nicht dem genannten Standard.<br>
Die Entwicklung dieser Treiber fand zunächst unter dem freien Betriebssystem GNU/Linux statt, welches sich wegen dem Open Source-Kernel hervorragend zur Treiberprogrammierung anbietet. Der Einfachheit halber wurde allerdings zu einem Userspace-Treiber, aufbauend auf dem ppdev-Framework des Linux 2.6-Kernels, gegriffen. Auf Basis des ppdev-Moduls kann in der Programmiersprache C mit wenig Aufwand der Parallelport des Computers von einem ganz normalen Anwenderprogramm vollständig gesteuert werden.<br><br>
Der Parallelport besteht aus drei 8-bit-Hardwareregistern: Ein bidirektionales Datenregister, ein Steuerregister und einem Signalregister. Da Lochstreifen aus 8-bit breiten Wörtern (Oktetts) bestehen, drängt sich regelrecht auf, diese acht Bit auf das Datenregister zu legen und im Computer direkt in einem Byte zu speichern. Die Steuer- und Signalleitungen ermöglichen eine Takt- d.h. Interrupt-gesteuerte Kommunikation mit den Lochstreifengeräten (Der Parallelport verfügt über ein Interrupt-fähiges Bit im Statusregister, die Strobe). Die verwendeten Geräte stanzen etwa 80 Zeichen/Sekunde und lesen 250 Zeichen/Sekunde, so dass selbst langsame Personalcomputer die Protokollemulation mühelos bewerkstelligen können.</p>

<div class="desc-right">
        <img src="/shared/photos/rechnertechnik/facit4070.jpg" width="192" height="313" alt="Foto des Lochstreifenstanzers" />
        <p class="bildtext" style="width:192px;">Der legendäre Lochstreifen-stanzer <b>FACIT 4070</b></p>
    </div>
	
        <p>Wie oben erwähnt, stellt sich bei Lochstreifen nicht die Frage der Modellierung, da Oktetts als Bytes auf PC-Architekturen gerade die kleinste adressierbare Speichereinheit darstellen und somit als nativer Datentyp verarbeitet werden. Eine 250 Byte lange Binärdatei stellt somit genau einen 250 Zeichen langen Lochstreifen dar. Dadurch ist die computerinterne Verarbeitung von Lochstreifen durch Unix-Kommandozeilenwerkzeuge oder grafische Werkzeuge wie Hex-Editoren sehr leicht möglich. Zur Vereinfachung des Arbeitsflusses wurden zunächst einfache Werkzeuge in der Scriptsprache Perl geschrieben, mit denen etwa auch Beschriftungen von Lochstreifen vorgenommen werden konnten. Später entstand ein grafischer
Editor, mit dem Binärdateien direkt als Lochstreifen visualisiert bearbeitet werden können. Dieser in der Programmiersprache C mit Gtk+ programmierter "Paper Tape Editor" wurde ausgebaut zu der "Paper Tape Suite", mit der nun auch unter Windows Lochstreifen eingelesen, bearbeitet, abgespeichert und ausgestanzt werden können. Auf diese Weise sind alle nur denkbaren Aufgaben mit Lochstreifen dank der Vielseitigkeit von Computern möglich.

<p>
Weitere Details zu diesem Projekt mit umfassenden Hintergrundinformationen gibt es auf der englischsprachigen Homepage, <a class="go" href="http://labs.technikum29.de/wiki/DevelopmentProjects/PaperTapeProject">The Paper Tape Project</a>. Alle Quelltexte wurden unter einer Open Source-Lizenz veröffentlicht und können im <a href="http://labs.technikum29.de/browser/projects/paper-tape-project/trunk">technikum29.de Subversion-Repositorium</a> eingesehen werden.

<p>Für technisch Interessierte haben wir die Publikation <a href="http://labs.technikum29.de/raw-attachment/wiki/DevelopmentProjects/PaperTapeProject/paper-tape-paper.pdf" class="go">Lochstreifenverarbeitung mit Linux</a> veröffentlicht (21 Seiten). Dabei handelt es sich um eine Einführung in die Manipulation von Datenströmen mit Unix-artigen Betriebssystemen und den Programmen, die wir dafür entwickelt haben.</p>


<h3 id="punchcard">Einlesen von Lochkarten auf den PC</h3>
<p>Neben Lochstreifen gibt es vor allem ein weiteres Speichermedium der Frühzeit, was herrausragende Bedeutung erlangt hat und als Träger von Programmen und Daten auch attraktiv für die Verarbeitung mit heutigen Computern erscheint: Lochkarten. Auf den Erfahrungen des <i>Paper Tape Projects</i> aufbauend haben wir das <i>Punch Card Project</i> formuliert, mit dem Ziel, Lochkarten einlesen, "bearbeiten" und später auch ausstanzen zu können.</p>

<p>Bei der direkten Anbindung an Lochkartengeräte über den antiken Parallelport ist aufgefallen, dass heutige PCs mit der Geschwindigkeit des Lochkartengeräts oft nicht mithalten können. Wie kann das sein? <br>Die Ursachen ist im Software-, aber auch Hardwaredesign heutiger PCs begründet. Zwar sind sie mittlerweile serienmäßig mit Gigaherzstarken Mehrkernprozessoren ausgerüstet, aber von der Architektur eher zur Verarbeitung großer Datenmengen, nicht geringer Latenzen ausgelegt. Desktop-Mikroprozessoren verhalten sich nicht mehr deterministisch. Hinzu kommt, dass moderne Betriebssysteme eine enorme Anzahl an Abstraktionsebenen aufweisen, die ein Echtzeitverhalten von Programmen quasi unmöglich machen.
<br/>Zwar gibt es sogenannte Echtzeitbetriebssysteme, mit denen sich diese "Mankos" in vielerlei Hinsicht umgehen lassen, dafür ist der Computer aber dann quasi für die Kommunikation mit dem Lochkartengerät dediziert. An dieser Stelle springen Mikrocontroller ein, vergleichsweise schwachbrüstige, aber dafür völlig deterministisch arbeitende Low-Cost-Prozessoren, die auf einem einzigen Chip eine Vielzahl an Peripherie vereinen.</p>
<div class="desc-left">
        <img src="/shared/photos/rechnertechnik/documation-m200.jpg" width="300" height="215" alt="Foto des Lochkartenlesers" />
        <p class="bildtext" style="width:300px;"><b>Documation M200</b> Lochkartenleser, hier von WANG eingesetzt</p></div>
		
<p>Wir haben uns für einen Microcontroller der  ATmega-Familie von AVR entschieden, der mit seinen etwa 40 Digitalen I/O-Pins direkt mit den elektrischen Ein/Ausgängen unseres Lochkartengerätes <i>Documation M200</i> (mit pneumatischem Karteneinzug) verbunden ist, auf der anderen Seite über RS232 ("serielle Schnittstelle") mit dem Computer kommuniziert. Der Microcontroller kann mit seinen 8&nbsp;Mhz mühelos die harten Echtzeitanforderungen (300 Karten/Minute) erfüllen und puffert auf seinen 4kB RAM genügend Lochkarten ab, um dem Computer ohne Eile den Inhalt der Lochkarten zu schicken. Mit RS232 wählten wir einen ziemlich alten, aber immer noch sehr verbreiteten Industriestandard. Das zeitgemäße USB schied wegen seiner Komplexität und den im Handel verfügbaren RS232-zu-USB-Übersetzern aus.</p>

<p>Wir haben dazu ein Treiberprogramm geschrieben, welches mit dem Lochkartengerät kommunizieren kann. Die Schnittstelle zum Computer haben wir auch schon elektrisch spezifiziert, können also binäre Daten an den Computer schicken. Wie genau soll nun die Kommunikation mit dem Computer aussehen, wie wollen wir überhaupt eine Lochkarte digital abspeichern?
<br/>Während die Frage der Modellierung beim 8-bit-Lochstreifen ziemlich trivial war, ist sie bei einer Lochkarte, 12 Zeilen mal 80 Spalten groß, unmittelbar relevant. Deshalb haben wir ein <a href="http://labs.technikum29.de/export/head/projects/punch-card-project/trunk/protocols/documation-m200/protocol.htm" class="go">Übertragungsprotokoll</a> geschrieben, mit dem sich Computer und Mikrocontroller autonom unterhalten sollen. Es legt etwa fest, dass zur Übertragung zwei Lochkartenspalten in drei Oktetts gepackt werden sollen, ein Format, welches der amerikanische Informatiker <a href="http://www.cs.uiowa.edu/~jones/">Douglas W. Jones</a>, vorgeschlagen hat.
<br/>Für den Computer haben wir den <i>Punch Card Editor</i> geschrieben, ein grafisches Programm, welches die Lochkarten vom Mikrocontroller entgegen nimmt und grafisch aufbereitet. Erst dieses Programm kann auch mit den einschlägigen Textkodierungen (IBMs H9-Code, Bull-Code) zwischen binären Lochkarten und ASCII-Text übersetzen. Auf diese Weise können eingelesene Kartenstapel bearbeitet und abgespeichert werden, um etwa ihren Empfänger per Mail auf der anderen Seite des Globus zu erreichen. Natürlich bietet das komfortable Programm auch die notwendige Infrastruktur, um Lochkarten später auszustanzen. An dieser Stelle können wir die Früchte des Einsatzes vom Mikrocontroller ernten &ndash; das Programm läuft auf allen verbreiteten Plattformen/Betriebssystemen (Microsoft Windows, GNU/Linux, Apple OS X, usw.).</p>

<p>Mit weiteren Details zu diesem Projekt befasst sich die englischsprachige Homepage, <a class="go" href="http://labs.technikum29.de/wiki/DevelopmentProjects/PunchCardProject">The Punch Card Project</a>. Alle Quelltexte wurden unter einer Open Source-Lizenz veröffentlicht und können im <a href="http://labs.technikum29.de/browser/projects/punch-card-project/trunk">technikum29.de Subversion-Repositorium</a> eingesehen werden.
<br/>Für technisch Interessierte haben wir die Publikation <a href="http://labs.technikum29.de/raw-attachment/wiki/DevelopmentProjects/Papers/Lochkartenverarbeitung%20per%20Computer.pdf" class="go">Lochkartenverarbeitung per Computer</a> veröffentlicht (26 Seiten), die interessante Details der Implementierung, Modellierung von Lochkarten auf Mikrocontroller und Computer, Umsetzung des Protokolls, uvm. erläutert.</p>



  
<h3>Kommunikation zwischen Anelex Drucker und PC</h3>

<p>Der Anelex-Drucker ist sehr einfach aufgebaut – die 120 Sechs-Bit-Zeichen einer Zeile werden parallel interruptgesteuert in den Drucker geladen, anschließend wird die Zeile gedruckt. Zeilenvorschübe werden, im Gegensatz zum G10-Computer, in den Zeichenstrom kodiert. Zu Beginn einer jeden Zeile steht, wieviel Zeilenvorschübe auszuführen sind. Dadurch konnte man mehrere Zeilenvorschübe auf einen Schlag machen, wodurch man sich einen Zugewinn an Geschwindigkeit versprach. Zusätzlich sind die Ziffern auf der Druckwalze doppelt enthalten, so dass Zahlen in der doppelten Geschwindigkeit gedruckt werden können. <br>
Die Schwierigkeit entsteht auch beim Anelex-Projekt erst dadurch, dass die Unterlagen nur unvollständig in niederländischer Sprache existieren. <br>
<div class="desc-left">
    <img src="/shared/photos/rechnertechnik/drucktrommel.jpg" width="366" height="275" alt="Druckertrommel mit Kodierscheibe" />
     <p class="bildtext" style="width:366px;">Bild 2: Ausgebaute Trommel mit Kodierscheibe. Die optische Abtastung ist hier nicht zu sehen. Gewicht der Trommel: Ca. 50 Kg</p>
</div>
Die Arbeitsweise des ersten Mikrocontrollers ist ziemlich einfach und folgt einer strikten Zustandsabfolge: Zunächst wird eine Zeile per RS232 in einen Ringpuffer eingelesen. Diese wird dann Zeichen für Zeichen parallel an den Drucker übergeben. Nach diesem Vorgang wird der Druckbefehl gestartet und der Drucker benötigt die nächsten 30ms zum Drucken. In dieser Zeit wird die RS232-Flusskontrolle wieder freigeschaltet und in bester Zeitausnutzung empfängt der nun unbeschäftigte Mikrocontroller Daten vom Computer. Diese klassische Interfacetechnik wird in der Umsetzung insofern interessant, als dass sämtliche Timings empirisch erprobt werden mussten. <br>
Theoretisch ist es mit unserem 20Mhz-Mikrocontroller und geeignet schneller Baud-Rate problemlos möglich, den Drucker in seiner damals weltbesten Geschwindigkeit auszureizen. Verbesserungspotential besteht etwa auch darin, mehrere Zeilen per Lookahead in eine Zeilenvorschubsanweisung zusammenzufassen, denn heutige Standardzeichensätze kodieren stets nur einen Zeilenvorschub in ein Zeichen. Tiefer führende Funktionen wie die damals weit verbreiteten „Formularbänder“ für vordefinierte absolute Zeilensprünge werden wir jedoch nicht implementieren.
Es sei zum Abschluss angemerkt, dass wir dank der „Zwischenübersetzung“ zu heute geläufigem ASCII sowie standardkonformem RS-232 jede beliebige Hardware an den Drucker anschließen können. Einen Anfang macht der gute alte PC, der mit Terminal, Figlet- und ASCII-Art-Generator in unglaublicher Geschwindigkeit in Echtzeit generierte Textmassen auf Papier bringen kann.</p>


