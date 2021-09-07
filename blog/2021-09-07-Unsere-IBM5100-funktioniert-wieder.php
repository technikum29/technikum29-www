<?php
	$blog_title = "Unsere IBM5100 funktioniert wieder !";
	$blog_title_kurz = "Unsere IBM5100 funktioniert wieder !";
	$blog_author = "Roland";
	$blog_date = "2021-09-08";
	$blog_lang = "de";

	require "blog.php";
	
	print_blog_title();
?>

<p>
In unserem Depot fand sich ein Tischcomputer IBM5100 mit Drucker 5103, leider ohne Funktion. Nach einer Reinigung machten die Geräte schon einmal einen sehr gut erhaltenen Eindruck und wir setzten alles daran, die Geräte wieder zum Leben zu erwecken:

<div class="box center">
   <a  href="/shared/photos/blog/IBM5100/5100vorne.jpg" class="popup">
      <img src="/shared/photos/blog/IBM5100/5100vorne.jpg" width="400">
   </a>
   <a  href="/shared/photos/blog/IBM5100/5103.JPG" class="popup">
      <img src="/shared/photos/blog/IBM5100/5103.JPG" width="400">
   </a>
</div>



<p>
Die IBM5100 ist ein technisch hoch interessantes Gerät. 1975 von IBM als "erster tragbarer Computer" vorgestellt ist dieses Gerät der Vor-Vorläufer des IBM PC (IBM 5150) von 1981. Wobei "tragbar" relativ ist: mit einem Gewicht von 28 kg ist das Tragen nicht jedermanns Sache und auch der Preis von seinerzeit bis zu 20.000 USD war nur für wenige erschwinglich. 

<p>
Der 5100 basiert auf einer diskret aufgebauten CPU (PALM). PALM ist eine 16-Bit CPU mit 1,9 MHz Taktfrequenz. Sie emuliert per Mikrocode (im ROM, bei IBM ROS genannt) eine IBM/360 (resp. eine IBM/3), um darauf ein /360 APL auszuführen (resp. ein /3 BASIC). Das Betriebssystem wird per Schalter eingestellt, der Arbeitsspeicher beträgt bei unserer Maschine 48 kB (max 64 kB möglich), ein 5"-sw-Monitor, eine Tastatur und ein Bandlaufwerk runden die Ausstattung ab.



<p>
Unsere Maschine hatte eine Reihe von Fehlern: das Schaltnetzteil war defekt und hatte noch einige Platinen mit in den Tod gerissen. Bei der Reparatur half uns das IBM-Museum Böblingen, hier sei Horst Ruffner besonderer Dank gewidmet. Einige Fehler konnten repariert werden, einige Platinen wurden vom IBM-Museum getauscht, andere wurden von uns über eBay in USA aufgetrieben. 

<p>
Hier hängt unsere IBM 5100 in den Labors des IBM-Museums nach dem Auswechseln einiger Boards noch an einem Spendernetzteil. Sie zeigt immerhin schon einmal eine Fehlermeldung der eingebauten Selbsttestroutine (Defektes ROS-Controller Board).


<div class="box center">
   <a  href="/shared/photos/blog/IBM5100/ImLabor.JPG" class="popup">
      <img src="/shared/photos/blog/IBM5100/ImLabor.JPG" width="400">
   </a>
   <a  href="/shared/photos/blog/IBM5100/Fehlermeldung.JPG" class="popup">
      <img src="/shared/photos/blog/IBM5100/Fehlermeldung.JPG" width="400">
   </a>
</div>

<p>
Am Drucker 5103 ist ein Nadeldrucker (8-Nadeln) mit 80 cps. Es musste der Farbbandtransport repariert werden und das Farbband wurde ersetzt (es ist ein spezielles Endlos-Farbband). <strong>Nach über 1 ½ Jahren laufen der Rechner und Drucker nun wieder !</strong>


<p>
Hier ein Blick in das Innere des Gerätes:

<div class="box center">
   <a  href="/shared/photos/blog/IBM5100/OffenOben.jpg" class="popup">
      <img src="/shared/photos/blog/IBM5100/OffenOben.jpg" width="300">
   </a>
   <a  href="/shared/photos/blog/IBM5100/offenBreit.jpg" class="popup">
      <img src="/shared/photos/blog/IBM5100/offenBreit.jpg" width="500">
   </a>
</div>

<p>
Der Computer ist sehr solide und sehr wartungsfreundlich in Modulen aufgebaut.


<p>
<div class="box center">
    <a  href="/shared/photos/blog/IBM5100/Module.jpg" class="popup">
      <img src="/shared/photos/blog/IBM5100/Module.jpg" width="400">
   </a><a  href="/shared/photos/blog/IBM5100/RAM.jpg" class="popup">
      <img src="/shared/photos/blog/IBM5100/RAM.jpg" width="400">
   </a>
</div>

<p>
Oben rechts ein Blick auf eines der 16kB RAM-Boards (Halbleiterspeicher).



<p>
Der Bildschirm zeigt ein kleines BASIC-Programm. Dank eines Ausgangs für einen externen Monitor kann der interne Bildschirm zB für Vorführungen auf einem zweiten Monitor gespiegelt werden (bei uns nicht ganz stilecht ein alter Apple sw-Monitor):

<div class="box center">
   <a  href="/shared/photos/blog/IBM5100/BASIC.jpg" class="popup">
      <img src="/shared/photos/blog/IBM5100/BASIC.jpg" width="400">
   </a>
   <a  href="/shared/photos/blog/IBM5100/extMonitor.jpg" class="popup">
      <img src="/shared/photos/blog/IBM5100/extMonitor.jpg" width="400">
   </a>
</div>




<p>
Die IBM 5100 hat eine hilfreiche Einrichtung zum Debuggen: per Schalter können die ersten 512 Bytes des Speichers hexadezimal ausgegeben werden. In diesem Bereich liegen u.a. die Prozessorregister der div. Interruptebenen. Man kann so dem Computer bei der Arbeit zuschauen !

<p> 
Daneben ein Screenshot eines kleinen Spieleprogramms "StarWars", das wir auf den vielen Bändern, die wir zu dem Computer bekamen, fanden:

<div class="box center">
   <a  href="/shared/photos/blog/IBM5100/Debugging.jpg" class="popup">
      <img src="/shared/photos/blog/IBM5100/Debugging.jpg" width="400">
   </a>
   <a  href="/shared/photos/blog/IBM5100/Starwars.jpg" class="popup">
      <img src="/shared/photos/blog/IBM5100/Starwars.jpg" width="400">
   </a>
</div>

<p>
	Mit der IBM5100 haben wir neben der IBM5320 und der IBM1130 jetzt 3 vorführbereite IBM-Computer der 60er/70er Jahre im technikum29 !



  
<?php print_author_info(); ?>



