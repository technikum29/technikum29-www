<?php
	$blog_title = "Wiederinbetriebnahme IBM5320";
	$blog_title_kurz = "Wiederinbetriebnahme IBM5320";
	$blog_author = "Roland";
	$blog_date = "2021-05-15";
	$blog_lang = "de";

	require "blog.php";
	
	print_blog_title();
?>

<p>
Anfang des Jahres erhielt das technikum29 eine komplette <a href="/blog/2021-05-01-Neuzugaenge.php">IBM5320 System/32 
	als Geschenk</a>. Der Vorbesitzer hatte sie vor vielen Jahren von einem IBM-Mitarbeiter geschenkt bekommen. 
	Er hatte sie hie und da angeschaltet, bis dann vor kurzem die Gerätesicherung durchbrannte, in dem Zustand 
	übergab er sie uns.

<div class="box center">
   <a  href="/de/geraete/IBM5320/IBM5320_Bilder/Im-Museum-angekommen.jpg" class="popup">
      <img src="/de/geraete/IBM5320/IBM5320_Bilder/Im-Museum-angekommen.jpg" width="400">
   </a>
   <a  href="/de/geraete/IBM5320/IBM5320_Bilder/Detail.jpg" class="popup">
      <img src="/de/geraete/IBM5320/IBM5320_Bilder/Detail.jpg" width="400">
   </a>
</div>

<p>
Bei der IBM5320 handelt es sich um einen für die damalige Zeit kleinen Einzelplatzrechner für den Einsatz in 
	kleineren Betrieben. Vorgestellt wurde die IBM5320 1975 und wurde bis 1984 vertrieben, zumeist vermietet. 
	Vorrangig wurden solche Maschinen in der Buchhaltung u.ä. eingesetzt. Die 5320 hat eine 16Bit-CPU, unser 
	Modell ist mit 24 kByte Speicher in Halbleitertechnik, einer 8Zoll Floppy-Disk-Station (singe sided, 
	single density), einem Matrixdrucker mit 120 cps und einer 9 MByte großen Festplatte ausgestattet. 

<div class="box center">
   <a  href="/de/geraete/IBM5320/IBM5320_Bilder/Festplatte.jpg" class="popup">
      <img src="/de/geraete/IBM5320/IBM5320_Bilder/Festplatte.jpg" width="400">
   </a>
   <a  href="/de/geraete/IBM5320/IBM5320_Bilder/Inneres.jpg" class="popup">
      <img src="/de/geraete/IBM5320/IBM5320_Bilder/Inneres.jpg" width="400">
   </a>
</div>

<p>
<strong>Abb: </strong>Die Festplatte ist senkrecht in den Gehäuserahmen eingebaut


<p>
Als Anzeige dient ein Bildschirm mit 6 Zeilen zu 40 Zeichen, der über eine Spiegeloptik in einer Art Guckkasten 
	(links vom Drucker) betrachtet wird





<p> 
Im Museum wurde die Maschine erstmal sorgfältig inspiziert und von dem Staub der Jahre befreit. Der Zustand war erstaunlich 
	gut, es waren keine offenkundigen Fehler zu erkennen. In der Tat war eine kleinere von 2 Sicherungen durchgebrannt. 
	Sie wurde erstmal sorgfältig ersetzt und die Maschine eingeschaltet. Es passierte - nichts. Aber die Sicherung blieb 
	immerhin intakt.

<p>
Dank der umfangreichen Dokumentation mit allen technischen Unterlagen und Schaltplänen konnte der Fehler schnell eingekreist 
	werden: eines der vier (!) Netzteile der Maschine war defekt. Seine Aufgabe besteht einzig darin, eine Logikplatine 
	zu versorgen, die  die Spannungen der drei anderen Netzteile zu überwachen und diese in geordneter Reihenfolge ein- 
	und auszuschalten hatte.


<div class="box center">
   <a  href="/de/geraete/IBM5320/IBM5320_Bilder/Netzteile-vorne.jpg" class="popup">
      <img src="/de/geraete/IBM5320/IBM5320_Bilder/Netzteile-vorne.jpg" width="400">
   </a>
   <a  href="/de/geraete/IBM5320/IBM5320_Bilder/Netzteile-offen.jpg" class="popup">
      <img src="/de/geraete/IBM5320/IBM5320_Bilder/Netzteile-offen.jpg" width="400">
   </a>
</div>

<p>
<strong>Abb: </strong>Blick auf die Netzteile von vorne und hinten (ohne Abdeckungen)

<p>
<p>
Eine Reparatur dieses Netzteils ist nahezu ausgeschlossen, es werden zu viele IBM-spezifische Bauteile verwendet. Wir schlossen 
	probeweise eine Reihe von Labornetzteilen an, um zu sehen, ob noch weitere Fehler vorliegen: Mit Hilfe dieser 
	"Notstromversorgung" konnte der Rechner gestartet werden und auf dem Bildschirm erschien eine Fehlermeldung: 
	Anzeige, Tastatur und CPU waren also schon einmal in Ordnung !

<div class="box center">
   <a  href="/de/geraete/IBM5320/IBM5320_Bilder/Notstromversorgung.jpg" class="popup">
      <img src="/de/geraete/IBM5320/IBM5320_Bilder/Notstromversorgung.jpg" width="400">
   </a>
   <a  href="/de/geraete/IBM5320/IBM5320_Bilder/Ersatznetzteil.jpg" class="popup">
      <img src="/de/geraete/IBM5320/IBM5320_Bilder/Ersatznetzteil.jpg" width="400">
   </a>
</div>

<p>
<strong>Abb: </strong>Versuchsaufbau zur Notversorgung und Ersatznetzteile fertig zum Einbau


<p>
<p>
Aus div. modernen Schaltnetzteilen wurde ein Ersatz geschaffen, um die fünf verschiedenen Hilfsspannungen zu erzeugen und das Provisorium wurde in der Maschine untergebracht. Jetzt ließ sich die Anlage wie vorgesehen ein- und ausschalten. Nach Beseitigung eines Fehlers in der Freigabelogik zur Festplatte konnte dann zum ersten Mal das System von der Platte hochgefahren werden - IBM nannte das IMPL (initial micro program loading). Der Bildschirm zeigte, dass dies das erste ordentliche Booten seit dem 26.9.1989 war - ein voller Erfolg !!

<div class="box center">
   <a  href="/de/geraete/IBM5320/IBM5320_Bilder/erstes-IMPL.jpg" class="popup">
      <img src="/de/geraete/IBM5320/IBM5320_Bilder/erstes-IMPL.jpg" width="600">
   </a>
</div>
<p>
<strong>Abb: </strong>Erfolgreiches Booten (IMPL) von Platte !
<p>
<p>
Jetzt blieb nur noch die Inbetriebnahme des Matrixdruckers übrig: nach gründlicher Reinigung und sorgfältigem Ölen und Fetten war er wieder soweit betriebsbereit. Eine Schwachstelle blieb noch zu beseitigen: die Transportrollen der Farbbandführung hatten sich in eine klebrige Masse zersetzt. Ersatz brachten 6 Gummidichtungen aus einem Reparatursatz für Wasserhähne. Das alte Farbband, ein endlos-Band, wurde mit Stempelfarbe aufgefrischt, jetzt ist auch eine Druckausgabe wieder möglich.

<div class="box center">
   <a  href="/de/geraete/IBM5320/IBM5320_Bilder/Farbbandcassette.jpg" class="popup">
      <img src="/de/geraete/IBM5320/IBM5320_Bilder/Farbbandcassette.jpg" width="400">
   </a>
   <a  href="/de/geraete/IBM5320/IBM5320_Bilder/kaputte-Farbband-Transportrollen.jpg" class="popup">
      <img src="/de/geraete/IBM5320/IBM5320_Bilder/kaputte-Farbband-Transportrollen.jpg" width="400">
   </a>
</div>
<p>
<strong>Abb: </strong>Blick in die Farbbandcassette, links Detail der defekten Transportrollen
<p>
<div class="box center">
   <a  href="/de/geraete/IBM5320/IBM5320_Bilder/Ersatzrolle.jpg" class="popup">
      <img src="/de/geraete/IBM5320/IBM5320_Bilder/Ersatzrolle.jpg" width="400">
   </a>
   <a  href="/de/geraete/IBM5320/IBM5320_Bilder/Ersatzrolle-2.jpg" class="popup">
      <img src="/de/geraete/IBM5320/IBM5320_Bilder/Ersatzrolle-2.jpg" width="400">
   </a>
</div>
<p>
<strong>Abb: </strong>Details der Reparatur, rechts die überholten Transportrollen
<p>

<p>
Unsere Maschine ist mit einem Plattenbetriebssystem ausgestattet sowie einer Reihe von Hilfsprogrammen (heute würde man Editor und File-Utilities dazu sagen). Als Programmiersprache wird RPGII eingesetzt. Einige Hilfs- und Diagnoseprogramme auf Diskette liegen auch vor.

<p><strong>
Als Aufgabe bleibt, ein typisches Anwendungsprogramm für die Maschine in RPG für Vorführungen zu schreiben - wer Kenntnisse und Lust darauf hat möge sich bitte melden !
</strong>

<?php print_author_info(); ?>
