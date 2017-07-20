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
	
	
		<!-- Zurzeit sind keine Führungen geplant. Kleingruppen können sich gerne melden, wir können die Termine mit Einzelinteressenten auffüllen. -->
	
	Die folgende Tabelle listet Gruppenanmeldungen und Events auf.
 </p>
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
		<td>So, <b>23. Juli</b><br>14:00 Uhr
		<td>Computer-History 
		<td>Spezial-Führung
		<td>Gruppe Gräf <br>
		
		
	<!--	<font color="#FF0000">>>ausgebucht!</font>  -->
	
		
		</table>
		</div> <br>
		<div class="rightcol">
		
	  <div class="foto left mobile">
                <img src="/shared/photos/start/rdik.png" width="140" height="63" />
				</div>
		<b><font color="#a52a2a">Tage der Industriekultur Rhein-Main 2017. Wir sind dabei (Anmeldung erforderlich, freier Eintritt):</b><br><br>
	
		<div class="termine">
		<table class="termine">
		<tr class="title">
		<th style="width:9em">
		<th style="width:13em;">
		<th style="width:9em;">
		<th>
		
		<tr>
		<td>Sa, <b>5. August</b><br>19:00 Uhr
		<td>Mathematik, Sprache der Natur *) 
		<td>Event-Vortrag
		<td>Mathematisch-technisch-philosopisch interessierte Menschen <br>

		<tr>
		<td>Sa, <b>12. August</b><br>14:00 Uhr
		<td>Computer der Stunde Null, wie alles begann **)
		<td>Interaktive Führung
		<td>Neugierige Menschen<br>
		
		<tr>
		<td>So, <b>13. August</b><br>14:00 Uhr
		<td>Die Urahnen des Smartphones ***) s.u.
		<td>Interaktive Führung
		<td>Neugierige Menschen
		
		</font>
		</table>
		</div> <br>
		
		<font color="#000000">
		
		<div class="termine">
	<table class="termine">
	<tr class="title">
		<th style="width:9em">
		<th style="width:13em;">
		<th style="width:9em;">
		<th>
	<tr>
	
		<td>Do, <b>19. Okt.</b><br>10:00 Uhr
		<td>Computer-History<br>
		<td>Interaktive Führung<br>			
		<td>Kinder Akademie Fulda<br>
		
	<tr>
	
		<td>Fr, <b>15. Dez.</b><br>ab 15:00 Uhr
		<td>Computer-History<br>Workshop 
		<td>Geburtstags-Event<br>
			Finley wird 12 !
		<td>Finley´s Freunde<br>
		
		</table>
		</div> <br>
	
		<font color="#a52a2a"><b>Tage der Industiekultur, ergänzende Informationen:</b></font><br><br>
		*) Mathematik - für die Einen eines der wohl unbeliebtesten Schulfächer, für andere der Schlüssel zum Verständnis der Welt.<br> 
		Das Thema beleuchtet sowohl aus mathematischer als auch aus philosophischer Sicht, was Mathematik leisten kann, und wo sie an ihre Grenzen stößt. Ein unterhaltsamer, spannender Event-Vortrag von Prof. Dr. Bernd Ulmann (Mathematiker/Informatiker) und Dr. Patrick Hedfeld (Philosoph). Alle, welche die Referenten bereits
		mehrfach im technikum29 erlebt haben wissen es: Das darf man nicht versäumen!<br> 
		Maximale Teilnehmerzahl: 50
		<br><br>
		**) Von der Rechenmaschine zum Rechenzentrum: Nichts hat sich je so rasant entwickelt wie die Computer- und EDV-Technik. Bei dieser interaktiven "Computer-History"-Führung erleben Sie als Besucher den Beginn dieser Ära anhand von tonnenschweren, noch funktionierenden Computer-Dinosauriern. Das ist einmalig in Deutschland und auch für Kids ab ca. 11 Jahre hochinteressant.<br> 
		Maximale Teilnehmerzahl: 16
		<br><br>
		***) Was war lange vor der Zeit von Smartphones & Co.? Die Musik- und Bildwiedergabe begann mit sehr einfachen, teils verblüffenden technischen Geräten. Wie war das mit den ersten Rundfunkempfängern ab 1923, den ersten Fernsehgeräten von 1952, Video-Projektionsanlagen ab 1956, den ersten Faxgeräten, Telegraphie, Tonaufzeichnung, Fernschreibtechnik.......und viel mehr?<br>
		Eine spannende Zeitreise durch die Welt der frühen technischen Kommunikation mit vielen Vorführungen und ungewöhnlichen Experimenten. <br>
		Auch für Kids ab ca. 12 Jahre bestens geeignet.<br>
		Maximale Teilnehmerzahl: 14
		<br>
	
	
	<h3>Weitere Angebote</h3>
	
	<div class="box termin clear-after">
		<h4>Robotik-Workshop in den Ferien für Kids von 11-13 Jahren</h4>
		
		<p>Hochinteressante Kurse, in welchen Roboter der neuesten Generation programmiert werden. Weitere Informationen unter <a href="/robotik" class="go">Robotik-Workshop</a></p>
		
	</div>
	
	<div class="box termin clear-after">
		<h4>Physical-Computing & Robotics für Jugendliche ab ca. 14 Jahre</h4>
		
		<p>Micro-Controller programmieren und intelligente Roboter bauen, siehe <a href="/physical-computing" class="go">Physical-Computing & Robotics</a><br>
		Die digitale Welt von heute und morgen verstehen.....</p>
		
	</div>
	
	<div class="box termin clear-after">
		<h4>Geburtstags-Event für Kids ab ca. 10 Jahren.</h4>
		
		<p>Computer-Dinosaurier hautnah erleben und anschließend selbst tolle Experimente ausführen. 2 bis 3 spannende Stunden für ca. 8 bis 12 technikbegeisterte Kids.
		
		
		<p><b>Weitere Informationen</b> <a class="go" href="/robotik/#geburtstag">Die intelligente Geburtstagsalternative!</a>
		<br><b>Termine</b> nach Absprache</p>
	</div>
	
