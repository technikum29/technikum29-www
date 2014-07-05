<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Informationen für die Robotic-AG der Max-von-Gagern-Schule Kelkheim</title>
  <?php /* zwecks Homepagebarbeitungsprogramm, vgl. /lib/host.php: */ ?>
  <meta name="t29.localfile" content="<?php print $_SERVER['SCRIPT_FILENAME']; ?>" id="localFileSource">
  <meta name="t29.version" content="$Id$">
  <link rel="stylesheet" type="text/css" href="http://www.technikum29.de/src/css/graydesign.css">
  <link rel="stylesheet" type="text/css" href="styles.css">
  <!-- MathJax = LaText im Browser -->
  <script type="text/javascript"
  src="http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML">
</script>
</head>
<body>

<h1>Informationen für die Robotic-AG der Max-von-Gagern-Schule Kelkheim  </h1><br><br>

          

<span style="color:red"><b>Aktualisiert: 1.7.2014</b></span>
<br> <br><br>

<br>
<h3><big><big><b>Spielend Informatik lernen!</b></big></big></h3>

<br><p>Roboter bauen und programmieren macht Spaß da man sofort sein Ergebnis sieht. In dieser AG lernst du mit grafischer Methode wie man Programme erstellt.<br>
Du erfährst, wie der Roboter exakt deine Anweisungen ausführt. Du programmierst <b>Schleifen, Programmverzweigungen (Schalter), Unterprogramme (Blöcke)</b> und vieles mehr. Wenn alle Sensoren im Einsatz sind, kann sich der Roboter in einem fremden Umfeld bewegen ohne "hängen" zu bleiben. Er findet sich sogar in einem Labyrinth zurecht!<br>
Rufe ihn und er kommt, wenn du ihm ein Lichtsignal sendest. Er wird dich finden, begrüßen und strahlen!</p>


<center><img src="robo.jpg" width="847" height="674" alt="Roboter" /></center>

<p><b>Tipps zum 2.7.2014:</b><br>
Unser Roboter soll nun Hindernisse umfahren und sich so einen freien Weg suchen.<br>
Weil unsere Zeit sehr knapp wird, hier ausnahmsweise der Lösungsvorschlag:<br>
Wir starten mit einem Bewegungsblock (geradeaus fahren). Danach setzen wir einen "Warten Block Distanz" (Ultraschallsensor), der mit Port 4 verbunden wird. Den stellen wir so ein, dass so lange gewartet wird (und damit der Roboter weiter geradeaus fährt), bis der Abstand zu einem Hindernis <b>kleiner</b> als z.B. 30cm wird. Dann hat das Warten ein Ende und das Programm läuft weiter.<br>
Danach kommt wieder ein Bewegungsblock. Diesmal eine rückwärts-Kurvenfahrt um dem Hindernis auszuweichen. Doch wie weit soll er rückwärts fahren?<br>
Dazu setzen wir anschließend wieder einen "Warten Block Distanz" ein. Der bewirkt ein Warten, bis der Abstand vom Hindernis z.B. <b>größer</b> als 30cm ist. So lange fährt der Roboter also rückwärts. <br>
Danach könnte unser Roboter wieder geradeaus fahren. Wir setzen die 4 Blöcke also in eine Endlos-Schleife.</p>

<hr>
<p><b>Tipps zum 25.6.2014:</b><br>
Heute geht es um Präzision. Euer Roboter soll ganz genau ein vorgegebenes Rechteck umfahren.<br>
Dazu sollte man erst die beiden Strecken mit dem Bewegungsblock testen und genau einstellen und dann die Kurvenfahrt. Dazu wird nur ein Motor aktiviert. Hier ist Geduld und eine schnelle Reaktion gefragt.<br>
Die Gruppe, welche die Aufgabe am Besten löst erhält einen Preis (Tafel Schokolade!).</p>

<hr>

Hier kannst du das Blatt vom <b>11.6.</b> öffnen: <a href="Robotic-Sensoren kennenlernen.pdf"> Sensoren besser kennenlernen</a>


<br><br><br>












<!--
blockformel latex mit doppeldollar:
$$  d = \frac{a \cdot \lambda}{ \sqrt{g^2 - \lambda^2 } } $$
inline-formel:  \( E^2 = \sqrt{ p^2 + m^2 } \)
-->

</li><br>

</ul><br>



   
   
<!-- DEMO - diese icons gibt es alle:
<ul class="dir">
   <li class="dir"> Ordner
   <li class="text"> text4
   <li class="img"> bild
   <li class="box"> box
   <li class="script"> script
   <li class="html"> html
   <li class="tar"> tar
   <li class="zip"> zip
</ul>

-->


<!-- <div style="background-color: #efefef; border: 1px solid black; padding: 2em; margin:1em 0;">
  <iframe src="habs-gesehen.php" style="width:100%; height: 30em; border: none"></iframe>
</div>


<div style="background-color: #efe; border: 1px solid green; padding: 2em; margin: 1em 0;">
<img src="dokuwiki/lib/exe/fetch.php?media=wiki:dokuwiki-128.png" style="float: left; margin: -10px 1em 1em 0; width: 60px;">
Siehe derzeit auch noch die <a href="dokuwiki/"><b>Wiki (Upload, Texte)</b></a>.
</div>
-->
<!--
<div style="background-color: #efefef; border: 1px solid black; padding: 2em; margin: 1em 0;">
 Zum <b><a href="http://www.technikum29.de/schule/Physik-LK/upload">Datei-Upload</a></b>. Hier gehts zum
 <b><a href="http://www.technikum29.de/schule/Physik-LK/upload/dateien">Download der hochgeladenen Dateien</a></b>.
</div>   
-->

