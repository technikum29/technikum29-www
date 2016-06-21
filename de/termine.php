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
	dafür bitte per E-Mail an <a href="mailto:post@technikum29.de">post@technikum29.de</a> oder nutzen
	Sie das <a hreF="anmeldung.php" class="go">Anmeldeformular</a>.

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
		<td><b>24. Juni</b> (Fr)<br>15:00 Uhr
		<td>Computer-History <td>Führung
		<td>Exxeta AG, Frankfurt
	<tr>
		<td><b>10. Juli</b> (So)<br>15:00 Uhr
		<td>Computer-History-Workshop <td>Geburtstags-Event
		<td>für Tobia (dann 14J.) 
	<tr>
		<td><b>12. Juli</b> (Di)<br>10:00 Uhr
		<td>Computer-History <td>Workshop
		<td>Leibnitz-Schule Offenbach  
	<tr>
		<td><b>20. Juli</b> (Mi)<br>09:30 Uhr
		<td>Robotik-Camp <td>Workshop
		<td>Ferienspiele der Stadt Kelkheim  <br>
	<tr>
		<td><b>27. Juli</b> (Mi)<br>10:00 Uhr
		<td>Computer-Dinosaurier <td>Interaktive Führung
		<td>Ferienspiele der Stadt Kelkheim 
	<tr>
		<td><b>28. Juli</b> (Do)<br>09:30 Uhr
		<td>Computer-History <td>Workshop
		<td>Ferienspiele der Stadt Kelkheim 

	<tr>
		<td><b>18. Sept.</b> (So)<br>15:00 Uhr
		<td>Computer-History<br>Experimental-Workshop<td>Geburtstags-Event
		<td>für Constantin (dann 10J.) 
		
		</table></div>
		
		
	<h3>Tage der Industriekultur Rhein-Main 2016</h3>
	<img class="industriekultur" src="/shared/photos/start/rdik.png">
	
	<p>Im Rahmen der <a href="http://www.route-der-industriekultur-rhein-main.de/">Route der Industriekultur Rhein-Main</a> richtet die <a href="http://www.krfrm.de/">KulturRegion FrankfurtRheinMain</a> dieses Jahr zum vierzehnten mal die
	<a href="http://www.krfrm.de/projekte/route-der-industriekultur/tage-der-industriekultur-2016/">Tage der Industriekultur Rhein-Main</a>
	aus, zu denen das technikum29 zum vierten mal seine Türen öffnet.
	
	<p>Der Eintritt für diese drei Veranstaltungen ist kostenlos. Eine Anmeldung ist erforderlich.</p>
	
	
	<div class="box termin clear-after">
		<p class="date2 left">13 <em>Aug</em></p>
		<dl class="daten right">
			<dt>Termin</dt>
			<dd class="termin">Samstag, den 13. August um 14 Uhr</dd>
			<dd class="anmelden"><button>Anmelden</button></dd>
		</dl>
		<h4>Computer &ndash; Wie alles begann</h4>
		
		Computer sind heute aus unserem Leben nicht mehr wegzudenken. Die Geschichte dieser faszinierenden und zuweilen auch bedrohlichen Technik begann vor ca. 60 Jahren. Steigen Sie ein in die Zeitreise „Computer-History“:  Die ersten Rechner der Menschheit, tonnenschwer und noch funktionsfähig.  Einmalig in Deutschland zeigen wir Ihnen die revolutionäre Entwicklung dieser Technik mit ungewöhnlichen Vorführungen. Auch für Kids ab ca. 11 Jahre gut geeignet. Diese werden aktiv mit einbezogen.
	</div>
			
			
	<div class="box termin clear-after">
		<p class="date2 left">14 <em>Aug</em></p>
		<dl class="daten right">
			<dt>Termin</dt>
			<dd class="termin">Sonntag, den 14. August um 14 Uhr</dd>
			<dd class="anmelden"><button>Anmelden</button></dd>
		</dl>
		<h4>Klänge, Bilder Kommunikation: Faszinierende Entwicklung ab 1900</h4>
		
		Die Besucher dieser Zeitreise erleben mit vielen Vorführungen, wie sich die Technik für Ton- und Bild entwickelt hat: Innerhalb von zwei Menschenleben wurden die Möglichkeiten hierzu revolutioniert.
		Von den ersten Musikautomaten,  Bildübertragungen, Faxgeräte, Fernkopierer über kuriose Erfindungen bis zum selbst spielenden Klavier reicht die Palette der historischen, funktionsfähigen Technik. Auch für Kids ab ca. 12 Jahre bestens geeignet.
	</div>

	
	<div class="box termin clear-after">
		<p class="date2 left">21 <em>Aug</em></p>
		<dl class="daten right">
			<dt>Termin</dt>
			<dd class="termin">Sonntag, den 21. August um 19 Uhr</dd>
			<dd class="anmelden"><button>Anmelden</button></dd>
		</dl>
		<h4>...und sie dreht sich weiter! Von der Lust an  Weltuntergängen und warum sie nicht eintreten</h4> 
		
Woher rührt die Lust an drohenden, aber glücklicherweise dann doch nicht eintretenden Weltuntergängen? Und warum eigentlich geht die Welt nicht unter?
Diesen Fragen widmen sich der Philosoph Dr. <a href="http://patrick-hedfeld.de/">Patrick Hedfeld</a> und der Mathematiker Prof. Dr. <a href="http://www.analogmuseum.org/deutsch/">Bernd Ulmann</a> in diesem spannenden und zugleich unterhaltsamen Vortrag, in dem wenig heilig ist.
	</div>
	
	
	<h3>Weitere Angebote</h3>
	
	<div class="box termin clear-after">
		<h4>Robotik-Workshop in den Ferien für Kids von 11-13 Jahren</h4>
		
		<p>Hochinteressante Kurse, in welchen Roboter der neuesten Generation gebaut und programmiert werden. Weitere Informationen unter <a href="/robotik" class="go">Robotik-Workshop</a>
		
		<p><b>Termine</b> in den Sommerferien 2016
	</div>
	
	<div class="box termin clear-after">
		<h4>Geburtstags-Event für Kids ab 11 Jahren.</h4>
		
		<p>Computer-Dinosaurier hautnah erleben und anschließend selbst tolle Experimente ausführen. 2 bis 2,5 spannende Stunden für ca. 8 bis 12 technikbegeisterte Kids.
		
		
		<p><b>Weitere Informationen</b> <a class="go" href="/robotik/#geburtstag">Die intelligente Geburtstagsalternative!</a>
		<br><b>Termine</b> nach Absprache
	</div>
	
	<!-- "Rohmaske" einer Anmelde-Box als Vorlage fürs Script -->
	<script type="text/html" id="anmeldung_tmpl">
		<div class="anmelden">
			<h4>Anmelden für <em><%=veranstaltung%></em></h4>
			<p>An dieser Stelle können Sie sich für obige Veranstaltung anmelden.</p>
			<form action="http://dev.technikum29.de/cgi-bin/mail.php" method="post">
				<input type="hidden" name="to" value="sven">
				<input type="hidden" name="subject" value="Webanmeldung für Führung <%=veranstaltung%>">
				<input type="hidden" name="pre" value="Folgender Besucher hat sich für Führung <%=veranstaltung%> angemeldet:">
				<input type="hidden" name="out_heading" value="Ihre Anmeldung wurde entgegengenommen.">
				<input type="hidden" name="out_text" value="Vielen Dank für ihre Anmeldung zur Veranstaltung <i><%=veranstaltung%></i>. <a href=http://www.technikum29.de/de/termine>Zurück zur Termine-Website</a>">

				<dl>
					<dt>Veranstaltung</dt>
					<dd><%=veranstaltung%>
					<input type="hidden" name="text_veranstaltung" name="<%=veranstaltung%>"
					</dd>
					
					<dt>Termin</dt>
					<dd><%=termin%>
					<input type="hidden" name="text_termin" value="<%=termin%>">
					</dd>
				
					<dt>Name</dt>
					<dd><input type="text" name="text_anmelder_name"></dd>
					
					<dt>E-Mail-Adresse</dt>
					<dd><input type="email" name="text_email_adresse"></dd>
					
					<dt>Telefonnummer</dt>
					<dd><input type="tel" name="text_telefon_nummer"></dd>
					
					<dt>Ggf. Anmerkungen</dt>
					<dd><textarea name="text"></textarea></dd>
					
					<dd><input type="submit" value="Abschicken" class="submit"> <input type="reset" value="Abbrechen"> </dd>
				</dl>
			</form>
		</div>
	</script>
