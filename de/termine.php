<?php
	$seiten_id = 'termine';
	$version = '$Id: index.php 387 2013-05-08 09:58:11Z heribert $';
	$titel = 'Termine für Führungen';
	
	require "../lib/technikum29.php";
?>

	<h2>Termine und Führungen</h2>
	
	<p>Zur Zeit sind nur Gruppenanmeldungen (ab 8 Personen) möglich. Termine an beliebigen Tagen und Zeiten nach Absprache.
	<br/>Einzelpersonen können ihr Interesse jedoch mitteilen. Sie werden per Mail informiert, wenn in einer Gruppe noch Plätze frei sind.
	<br/>Der Eintritt beträgt eine Fl. Rotwein der unteren Preisklasse pro Person ("Rabatt" für Gruppen über 10 Pers.). Für Schüler und Studenten ist der Eintritt frei.</p>
	
	<h3>Kulturelle Veranstaltungen</h3>
	
	<div class="box termin clear-after">
		<p class="date left">25 <em>Mai</em></p>
		<dl class="daten right">
			<dt>Termin</dt>
			<dd class="termin">Freitag, den 10. Mai um 20:30 Uhr</dd>
			<dt>Ort</dt>
			<dd><a href="http://www.achtbruecken.de/programm/110853/">Kunst-Station Sankt Peter, Köln</a>
		</dl>
		<h4>Punchcard music</h4>
		
		Unser <a href="/de/rechnertechnik/lochkarten-edv#026">IBM 026-Card-Punch</a> ist in einem
		Konzert in Köln zu "hören!" Siehe <a class="go" href="http://www.punchcardmusic.de/"><b>punchcard music</b></a>
		<br>
		ein Auftragswerk von <a href="http://www.achtbruecken.de/">ACHT BRÜCKEN | Musik für Köln</a>
	</div>


	<h3>Tage der Industriekultur Rhein-Main</h3>
	
	<p>Im Rahmen der <a href="http://www.route-der-industriekultur-rhein-main.de/" class="go">Tage der Industriekultur Rhein-Main</a> bieten wir folgende Veranstaltungen an (jeweils ca. 90 Miunten, freier Eintritt, Voranmeldung ist erforderlich, siehe <a href="/de/impressum">Kontakt</a>):<br><br>
	

	<div class="box termin clear-after">
		<p class="date left">14 <em>Aug</em></p>
		<dl class="daten right">
			<dt>Termin</dt>
			<dd class="termin">Mittwoch, den 14. August 2013 um 19 Uhr</dd>
			<dd class="anmelden"><button>Anmelden</button></dd>
		</dl>
		<h4>1. Die Geschichte der Kommunikation</h4>
		
		Eine lebendige Führung mit vielen Live-Demonstrationen und Experimenten. Auch für Kids ab ca. 10 Jahre bestens geeignet.
	</div>
			
			
	<div class="box termin clear-after">
		<p class="date left">17 <em>Aug</em></p>
		<dl class="daten right">
			<dt>Termin</dt>
			<dd class="termin">Samstag, den 17. August um 19 Uhr</dd>
			<dd class="anmelden"><button>Anmelden</button></dd>
		</dl>
		<h4>2. Beeinflusst Sprache unser Denken?</h4>
		
Kann man über Probleme nachdenken, sie
gar lösen, ohne dies in Form einer Sprache formulieren zu können? Kann es
sein, dass unterschiedliche Sprachen einem unterschiedliche Einblicke in ein
Problem gewähren? Diese und weitere Fragen werden in einem Vortrag aus der Sicht eines
Mathematikers/Informatikers (<a href="http://www.vaxman.de/about_me/about.html">Prof. Dr. B. Ulmann</a>),  sowie eines Philosophen (P. Hedfeld) behandelt, wobei der Bogen von abstrakten Dingen bis hin zu Donald Duck Comics gespannt wird. Geeignet ab ca. 16 Jahre.<br>
	</div>

	<div class="box termin clear-after">
		<p class="date left">18 <em>Aug</em></p>
		<dl class="daten right">
			<dt>Termin</dt>
			<dd class="termin">Sonntag, den 18. August um 14 Uhr</dd>
			<dd class="anmelden"><button>Anmelden</button></dd>
		</dl>
		<h4>3. Computer History</h4>
		Unsere klassische Führung als Zeitreise durch die Computerwelten sowie die Entstehung von EDV und IT mit vielen einmaligen funktionsfähigen Urzeit-Rechnern. Auch für interessierte Kids ab ca. 9 Jahre bestens geeignet.<br>
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