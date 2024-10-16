<?php
	$blog_title = "Neuzugang im Museum: CPT 8800 Textverarbeitungssystem";
	$blog_title_kurz = "Unser Aktueller Neuzugang: CPT 8800, ein professionelles Textverarbeitungssystem von 1981";
	$blog_author = "Roland";
	$blog_date = "2019-12-05";
	$blog_lang = "de";

	require "blog.php";
	
	print_blog_title();
?>

<p>
Die Firma CPT Corporation, bekannt für professionelle Textsysteme, stellte 1976 ihr Textsystem
CPT der 8000er Serie vor. Die Systeme basierten auf dem 1974 vorgestellten Mikroprozessor Intel
8080, dem ersten vollwertigen Mikroprozessor der Welt. Es hat die für seine Zeit sehr große
Speicherausstattung von 64 kByte und einen hochformatigen Bildschirm, der eine ganze A4-Seite
komplett mit schwarzen Zeichen auf weißem Grund flimmerfrei darstellen konnte. Preis seinerzeit
um die 15000 USD.

<p>
Durch die Vermittlung des <a href="https://www.cbm-museum-wuppertal.com">CBM Museums Wuppertal</a>
(unser besonderer Dank gilt Patrick Brough) wurde uns ein CPT8800 zusammen mit einem
maßgeschneiderten Arbeitstisch und dem zugehörigen Drucker aus einer Sammlungsauflösung
angeboten. Wir waren zunächst etwas reserviert, da das angebotene System von 1981 ist und
damit zeitlich am Rande unseres Sammlungsfokus liegt. Aber die Verwendung eines 8080 als
Prozessor, zusammen mit der Tatsache, ein komplettes Ensemble zu bekommen, weckte dann
doch unser Interesse. Leider war keinerlei Software dabei.

<p>
Eine Recherche im Netz ergab, dass <a href="http://www.funkenzupfer.de">Florian Stassen</a> vor kurzem eine
CPT8000 restaurierte und sie erfolgreich zum Laufen brachte. Er sagte uns zu, bei der Software
zu helfen.

<p>
Am 6.11.2019 fuhr ich mit meinem Polo nach Wuppertal, um die Teile abzuholen. Unter den
skeptischen Augen von Patrick („das passt niemals alles in den Polo“) wurden mit Florians Hilfe
die CPT und der Tisch komplett zerlegt, um alles in den Polo zu packen. Wenige Stunden später
stand das gute Stück in Teilen im technikum29.


<div class="box center">
   <a  href="/de/geraete/CPT8800/CPT8800_Bilder/CPT8800-Auseinandergebaut.jpg" class="popup">
      <img src="/de/geraete/CPT8800/CPT8800_Bilder/CPT8800-Auseinandergebaut.jpg" width="860">
   </a>
</div>

<p>
Alle Teile wurden gereinigt und auf oﬀensichtliche Fehler inspiziert. Das Netzteil wurde getrennt
vom Rechner in Betrieb genommen: kein Rauch, alle Spannungen da - soweit OK. Nach dem
Zusammenbau des Gerätes ein erstes Einschalten, und siehe da, mit Piepsen verlangt das
System nach einer Diskette! Die CPU und der Bildschirm laufen schon einmal!

<div class="box center">
   <a  href="/de/geraete/CPT8800/CPT8800_Bilder/CPT8800-Broken-Disk.jpg" class="popup">
      <img src="/de/geraete/CPT8800/CPT8800_Bilder/CPT8800-Broken-Disk.jpg" width="400">
   </a>
</div>

<p>
Nach ein paar Tagen kamen die Kopien der Programmdiskette auf 8“-Disketten von Florian an.
Leider wollten unsere Floppys diese noch nicht erkennen. Der Fehler war mit Florians Hilfe schnell
behoben. Nach Beseitigung einer unnötigerweise eingesteckten Terminierung auf der 2.
Floppyplatine der Durchbruch: nach wenigen Sekunden (12 s sagt das Handbuch) ist das
Textsystem geladen und eine stark an eine mechanische Schreibmaschine angelehnten
Bedieneroberfläche begrüßt den Nutzer:

<div class="box center">
   <a  href="/de/geraete/CPT8800/CPT8800_Bilder/CPT8800-laeuft.jpg" class="popup">
      <img src="/de/geraete/CPT8800/CPT8800_Bilder/CPT8800-laeuft.jpg" width="860">
   </a>
</div>

<p>
Das Textprogramm ist CPT-Videotyper 8800 Rev F4. Es besticht durch sehr umfangreiche
Textverarbeitungsfunktionen, kombiniert mit einer rudimentären Datenbank und der Möglichkeit,
innerhalb des Textes auch Berechnungen durchzuführen, was z.B. die Erstellung umfangreicher
Angebote an Kunden erleichtert.
Normalerweise wird die Maschine ausschließlich im Textverarbeitungsmodus genutzt, etwas
anderes „kann“ sie nicht. Wer möchte, kann aber auch mit Hilfe einer „Interface-“ Diskette und
einer CP/M Bootdiskette eine Version des CP/M Betriebssystems laden und z.B. Programme in
CBASIC schreiben
Bleibt, in nächster Zeit den Drucker mechanisch etwas zu überholen und in Betrieb zu nehmen.
Wir sind zuversichtlich, das Ensemble bald komplett vorführen zu können !





<?php print_author_info(); ?>
