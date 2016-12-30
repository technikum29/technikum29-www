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

	<h2>Termine und Führungen</h2>
	
	<p>Für allgemeine Informationen über Führungen und Gruppenanmeldungen
	finden Sie Hinweise auf der <a href="index.php">Startseite</a>.<br>
	

	<p>Bitte bedenken Sie: Zu allen Terminen ist eine vorherige Anmeldung nötig! Kontaktieren Sie uns
	dafür bitte per E-Mail an <a href="mailto:post@technikum29.de">post@technikum29.de</a><br>
	Folgender Hinweis: Ab Februar 2017 sind folgende Zeiten bereits fest an Schulen vergeben:
	Montags ganztägig, dienstags und donnerstags je ab 12:00 Uhr. Diese Zeiten stehen nur in Ausnahmefällen für Schulen zur Verfügung.<br>
	
		<!-- Zurzeit sind keine Führungen geplant. Kleingruppen können sich gerne melden, wir können die Termine mit Einzelinteressenten auffüllen. -->
	

	Die folgende Tabelle listet Gruppenanmeldungen auf.
	Falls dort noch Plätze frei sind, ist dies vermerkt und Sie können sich hierzu anmelden. </p>
	<br>
	
	<div class="termine">
	<table class="termine">
	<tr class="title">
		<th>Datum
		<th>Titel
		<th>Typ
		<th>Teilnehmer    
		
		<tr>
		<td>Donnerstag<br><b>5.Januar</b><br>
		<td>Computer-History <td>Filmaufnahmen
		<td>DOCUBYTE   
		
		<tr>
		<td>Samstag<br><b>14. Januar</b><br>15:30 Uhr
		<td>Bilder-Klänge-<br>Kommunikation <td>Geburtstags-Event
		<td>Lukas wird 13 Jahre alt 
		
		<tr>
		<td>Dienstag<br><b>24. Januar</b><br>10:00 Uhr
		<td>Computer-Entwicklung <td>Event
		<td>Hessischer Rundfunk 
		
		<tr>
		<td>Dienstag<br><b>7. Februar</b><br>11:00 Uhr
		<td>Computer-History <td>Interaktive Führung<br> + Workshop
		<td>Klasse 10 der IGS Schönenberg 
		
		<tr>
		<td>Samstag<br><b>26. Februar</b><br>14:00 Uhr
		<td>Computer-History 
		<td>Führung
		<td>Einzelpersonen und Gruppen <br><a class="email" href="mailto:info@vhs-mtk.de">Anmeldung nur über die VHS-Main-Taunus</a>
		
		<tr>
		<td>Freitag<br><b>24. März</b><br>19:00 Uhr
		<td>Das Internet der Dinge,<br>Industrie 4.0<br>(Siehe unten)
		<td>Event-Vortrag *)
		<td>Einzelpersonen und Gruppen <br><a class="email" href="mailto:info@vhs-mtk.de">Anmeldung nur über die VHS-Main-Taunus<br>
			Kursnummer: G0100112</a>
		
		<tr>
		<td>Sonntag<br><b>23. April</b><br>14:00 Uhr
		<td>Klänge, Bilder,<br> Kommunikation 
		<td>Führung
		<td>Einzelpersonen und Gruppen <br><a class="email" href="mailto:info@vhs-mtk.de">Anmeldung nur über die VHS-Main-Taunus</a>


		</table>
		</div> <br>
		
	<div class="termin">
		<h4>*) Das Internet der Dinge, Industrie 4.0, Blick in die Zukunft</h4>
		<p> Was haben Captain Kirk, Picard, Janeway und weitere Offiziere der Sternenflotte aus unserer Kindheit mit uns heute zu tun? Sie benutzten einen persönlichen Assistenten, der sie mit der Brücke oder dem Computer verband. Und heute nennen wir es Smartphone. Und das Ganze funktioniert, weil die Geräte über das Internet verbunden sind. In Deutschland spricht man von der „<b>Industrie 4.0</b>“ und im Rest der Welt vom „Internet der Dinge“. Im Computer-Museum in Kelkheim, umgeben von den Dinosauriern in der Computerevolution, erwartet Sie ein verständlicher Einblick in die Welt vom „Internet der Dinge“, dessen Akteure sowie Trends (siehe "Termine", 24.3.).<br>
		
	</div>
	
	
	<h3>Weitere Angebote</h3>
	
	<div class="box termin clear-after">
		<h4>Robotik-Workshop in den Ferien für Kids von 11-13 Jahren</h4>
		
		<p>Hochinteressante Kurse, in welchen Roboter der neuesten Generation programmiert werden. Weitere Informationen unter <a href="/robotik" class="go">Robotik-Workshop</a>
		
	</div>
	
	<div class="box termin clear-after">
		<h4>Geburtstags-Event für Kids ab ca. 10 Jahren.</h4>
		
		<p>Computer-Dinosaurier hautnah erleben und anschließend selbst tolle Experimente ausführen. 2 bis 3 spannende Stunden für ca. 8 bis 12 technikbegeisterte Kids.
		
		
		<p><b>Weitere Informationen</b> <a class="go" href="/robotik/#geburtstag">Die intelligente Geburtstagsalternative!</a>
		<br><b>Termine</b> nach Absprache
	</div>
	
