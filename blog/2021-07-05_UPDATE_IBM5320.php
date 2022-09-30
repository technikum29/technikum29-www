<?php
	$blog_title = "UPDATE IBM5320: neue Software";
	$blog_title_kurz = "UPDATE IBM5320: neue Software";
	$blog_author = "Roland";
	$blog_date = "2021-07-05";
	$blog_lang = "de";

	require "blog.php";
	
	print_blog_title();
?>

<p>
Über die Instandsetzung der neuen IBM5320 hatten wir <a href="https://technikum29.de/blog/2021-05-15-Wiederinbetriebnahme-5320.php">hier </a>bereits berichtet. 
  Jetzt fehlte nur noch Software, damit wir die 5320 auch vorführen können. Bei <a href="http://bitsavers.org/bits/IBM/System_32/SCP_V09/">bitsavers.org </a>wurden 
  wir fündig. Dort ist das Diskettenimage einer "GAME"-Diskette hinterlegt. Doch wie kann der Software-Schatz aus dem Internet in die IBM5320 geladen werden ?

<p>
Ein alter IBM-kompatibler PC, ein Shugart SA800 8"-Floppylaufwerk, etwas Bastelarbeit für Anschlußkabel und Stromversorgung sowie ein 
  <a href="http://dunfield.classiccmp.org/img/index.htm">spezielles Kopierprogramm </a> brachten die Lösung. Das Image konnte erfolgreich auf eine 8" Floppy 
  geschrieben werden und wurde von der IBM5320 problemlos gelesen:

<p>
<div class="box center">
   <a  href="/de/geraete/IBM5320/IBM5320_Bilder/IBM5320%20liesst%20Floppy.jpg" class="popup">
      <img src="/de/geraete/IBM5320/IBM5320_Bilder/IBM5320%20liesst%20Floppy.jpg" width="400">
   </a>
</div>

<p>
Die Diskette enthält ein Würfelspiel, ein simples Ratespiel sowie die Möglichkeit, Jahreskalender mit diversen Motiven zu erstellen, hier druckt unsere IBM5320 
  gerade einen für 2021 mit Snoopy:

<p>
<div class="box center">
   <a  href="/de/geraete/IBM5320/IBM5320_Bilder/IBM5320%20druckt%20Snoopy.jpg" class="popup">
      <img src="/de/geraete/IBM5320/IBM5320_Bilder/IBM5320%20druckt%20Snoopy.jpg" width="400">
   </a>
</div>

<p>
An der Druckqualität arbeiten wir noch, zur Zeit haben wir nur ein nachgefärbtes Originalband im Drucker, das hie und da "hängt".

<?php print_author_info(); ?>
