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
	finden Sie Hinweise auf der <a href="index.php">Startseite</a>.

	<p>Bitte bedenken Sie: Zu allen Terminen ist eine vorherige Anmeldung nötig! Kontaktieren Sie uns
	dafür bitte per E-Mail an <a href="mailto:post@technikum29.de">post@technikum29.de</a><br><br>
	
		<!-- Zurzeit sind keine Führungen geplant. Kleingruppen können sich gerne melden, wir können die Termine mit Einzelinteressenten auffüllen. -->
	

	<p>Die folgende Tabelle listet Gruppenanmeldungen auf.
	Falls dort noch Plätze frei sind, ist dies vermerkt und Sie können sich hierzu anmelden. 

	<div class="termine">
	<table class="termine">
	<tr class="title">
		<th>Datum
		<th>Titel
		<th>Typ
		<th>Teilnehmer 
	
		<tr>
		<td><b>23. November</b> (Mi)<br>10:00 Uhr
		<td>Computer-History <td>Spezial-Führung
		<td>Kulturamt Kelkheim <br>ausgebucht!
		
		<tr>
		<td><b>9. Dezember</b> (Fr)<br>14:00 Uhr
		<td>Computer-History <td>Führung
		<td>IBM-Techniker<br>ausgebucht!
		
		<tr>
		<td><b>14. Dezember</b> (Mi)<br>14:00 Uhr
		<td>Computer-History <td>Führung
		<td>IBM-Deutschland<br>
		
		<tr>
		<td><b>17. Dezember</b> (Sa)<br>15:00 Uhr
		<td>Computer-History <td>Geburtstags-Event
		<td>Hendrik wird 11 Jahre alt 
		
		<tr>
		<td><b>7. Februar 2017</b> (Di)<br>11:00 Uhr
		<td>Computer-History <td>Interaktive Führung<br> + Workshop
		<td>Klasse 10 der IGS Schönenberg 
		
		</table></div> 
	
	
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
	
