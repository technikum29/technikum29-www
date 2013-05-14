<?php
	$seiten_id = 'terminanmeldung';
	$version = '$Id: index.php 387 2013-05-08 09:58:11Z heribert $';
	$titel = 'Anmeldung zu Terminen für Führungen';
	
	require "../lib/technikum29.php";
?>

	<h2>Termine und Führungen - Anmeldung</h2>
	
	<p>Siehe <a href="/de/#termine">Termine auf Startseite</a> für verfügbare Termine.</p>
	
	<?php
		$veranstaltung = isset($_GET['veranstaltung']) ? $_GET['veranstaltung'] : '';
	?>
	
	<div class="anmelde-maske">
	    <form id="anmeldung" action="http://dev.technikum29.de/cgi-bin/mail.php" method="post">
			<input type="hidden" name="to" value="sven">
			<input type="hidden" name="subject" value="Webanmeldung für Führung">
			<input type="hidden" name="pre" value="Folgender Besucher hat sich für eine Führung angemeldet:">
			<input type="hidden" name="out_heading" value="Ihre Anmeldung wurde entgegengenommen.">
			<input type="hidden" name="out_text" value="Vielen Dank für ihre Anmeldung zur Veranstaltung. <a href=http://www.technikum29.de/de/termine>Zurück zur Termine-Website</a>">

			<dl>
				<dt>Veranstaltung</dt>
				<dd><?php if($veranstaltung) {
					echo $veranstaltung;
					echo '<input type="hidden" name="text_veranstaltung" name="'.$veranstaltung.'">';
				} else { ?>
					<input type="text" name="text_veranstaltung">
				
				<?php } /* if */ ?>
				</dd>
				
				<dt>Termin</dt>
				<!--<dd><%=termin%>
				<input type="hidden" name="text_termin" value="<%=termin%>">-->
				<dd class="termin"><input type="text" name="text_termin">
				</dd>

				<dt>Name</dt>
				<dd><input type="text" name="text_anmelder_name"></dd>

				<dt>Anzahl der Personen</dt>
				<dd><input type="text" name="text_personenanzahl"></dd>
				
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
