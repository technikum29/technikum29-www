<?php
/**
 * Die Termine-Seite wurde im Mai 2013 überlegt und von Sven vorgeschlagen.
 * Durch folgende Anweisung ist sie deaktiviert, ein Aufruf leitet zur
 * Startseite weiter (dort zum Anker "Termine"):
 **/
 
#	header("Location: /de/#Termine"); exit;

/**
 * Wenn obige "header(...)"-Zeile auskommentiert bzw entfernt wird, ist diese
 * Seite wieder aufrufbar.
 **/

	$seiten_id = 'termine';
	$version = '$Id: index.php 387 2013-05-08 09:58:11Z heribert $';
	$titel = 'Termine für Führungen';
	
	require "../lib/technikum29.php";
?>

	<!-- Bereiche "nur-auf-deutscher-seite" werden im Englischen nicht angezeigt -->
	<div class="nur-auf-deutscher-seite">
	<h2>Termine und Führungen</h2>
	
	<p>Für allgemeine Informationen über Führungen und Gruppenanmeldungen
	finden Sie Hinweise auf der <a href="index.php">Startseite</a>.<br>
	

	<p>Bitte bedenken Sie: Zu allen Terminen ist eine vorherige Anmeldung nötig! Kontaktieren Sie uns
	dafür bitte per E-Mail an <a href="mailto:post@technikum29.de">post@technikum29.de</a><br>
	Folgender Hinweis: Ab Februar 2017 sind folgende Zeiten bereits fest an Schulen vergeben:
	Montags ganztägig, dienstags und donnerstags je ab 12:00 Uhr. Diese Zeiten stehen nur in Ausnahmefällen für andere Schulen zur Verfügung.<br>
	
		<!-- Zurzeit sind keine Führungen geplant. Kleingruppen können sich gerne melden, wir können die Termine mit Einzelinteressenten auffüllen. -->
	

	Die folgende Tabelle listet Gruppenanmeldungen auf.
	Falls dort noch Plätze frei sind, ist dies vermerkt und Sie können sich hierzu anmelden. </p>
	<br>
	</div><!-- Ende nur-auf-deutscher-seite -->

	<div class="termine">
	<table class="termine">
	<tr class="title">
		<th style="width:9em">Datum
		<th style="width:13em;">Titel
		<th style="width:9em;">Typ
		<th>Teilnehmer   

		<tr>
		<td>Mo, <b>4. Apr.</b>  bis<br> Fr, <b>14. Apr.</b>
		<td>Robotik-Workshop
		<td>Roboter programmieren
		<td>Kids von 11-13 Jahren <br>
		
		<tr>
		<td>So, <b>23. Apr.</b><br>14:00 Uhr
		<td>Klänge, Bilder,<br> Kommunikation 
		<td>Führung
		<td>Einzelpersonen und Gruppen <br><a class="email" href="mailto:info@vhs-mtk.de">Anmeldung nur über die VHS-Main-Taunus</a>

		</table>
		</div> <br>
		
		<b><font color="#FF0000">Tage der Industriekultur Rhein-Main 2017: Wir sind dabei: (Anmeldung erforderlich, freier Eintritt)</font></b><br><br>
		
		<div class="termine">
	<table class="termine">
	<tr class="title">
		<th style="width:9em">Datum
		<th style="width:13em;">Titel
		<th style="width:9em;">Typ
		<th>Teilnehmer   
		
		<tr>
		<td>Sa, <b>5. Aug.</b><br>19:00 Uhr
		<td>Mathematik, Sprache der Natur *)
		<td>Event-Vortrag
		<td>Mathematisch-technisch-philosopisch interessierte Menschen <br>

		<tr>
		<td>Sa, <b>12. Aug.</b><br>14:00 Uhr
		<td>Computer der Stunde Null, wie alles begann **)
		<td>Interaktive Führung
		<td>Neugierige Menschen ab 11 J. <br>
		
		<tr>
		<td>So, <b>13. Aug.</b><br>14:00 Uhr
		<td>Klänge, Bilder,<br> Kommunikation ***)
		<td>Interaktive Führung
		<td>Neugierige Menschen ab ca. 11 Jahren

		</table>
		</div> <br>
		Tage der Industiekultur, weitere Informationen:<br><br>
		*) Mathematik - für die Einen eines der wohl unbeliebtesten Schulfächer, für andere der Schlüssel zum Verständnis der Welt.<br> 
		Der Vortrag beleuchtet sowohl aus mathematischer als auch aus philosophischer Sicht, was Mathematik leisten kann, und wo sie an ihre Grenzen stösst. Ein unterhaltsamer, spannender Event-Vortrag von Prof. Dr. Bernd Ulmann (Mathematiker/Informatiker) und Dr. Patrick Hedfeld (Philosoph). Ein "muss" für Alle, welche die Referenten bereits
		im technikum29 erlebt haben!<br> Maximale Teilnehmerzahl: 50
		<br><br>
		**) Von der Rechenmaschine zum Rechenzentrum: Nichts hat sich so rasant entwickelt wie die Computer- und EDV-Technik. Bei dieser interaktiven "Computer-History"-Führung erleben Sie als Besucher den Beginn dieser Ära anhand von tonnenschweren, noch funktionierenden Computer-Dinosauriern. Das ist einmalig in Deutschland und auch für Kids ab ca. 11 Jahren hochinteressant.<br> Maximale Teilnehmerzahl: 16
	<br><br>
	
	<h3>Weitere Angebote</h3>
	
	<div class="box termin clear-after">
		<h4>Robotik-Workshop in den Ferien für Kids von 11-13 Jahren</h4>
		
		<p>Hochinteressante Kurse, in welchen Roboter der neuesten Generation programmiert werden. Weitere Informationen unter <a href="/robotik" class="go">Robotik-Workshop</a></p>
		
	</div>
	
	<div class="box termin clear-after">
		<h4>Physical-Computing & Robotics für Jugendliche ab ca. 14 Jahre</h4>
		
		<p>Micro-Controller programmieren und intelligente Roboter bauen, siehe <a href="/physical-computing" class="go">Physical-Computing</a><br>
		Die digitale Welt von heute und morgen verstehen.....</p>
		
	</div>
	
	<div class="box termin clear-after">
		<h4>Geburtstags-Event für Kids ab ca. 10 Jahren.</h4>
		
		<p>Computer-Dinosaurier hautnah erleben und anschließend selbst tolle Experimente ausführen. 2 bis 3 spannende Stunden für ca. 8 bis 12 technikbegeisterte Kids.
		
		
		<p><b>Weitere Informationen</b> <a class="go" href="/robotik/#geburtstag">Die intelligente Geburtstagsalternative!</a>
		<br><b>Termine</b> nach Absprache</p>
	</div>
	
