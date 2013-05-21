<?php
	$seiten_id = 'anmeldung';
	$version = '$Id: index.php 387 2013-05-08 09:58:11Z heribert $';
	$titel = 'Anmeldung zu Terminen für Führungen';
	$dynamischer_inhalt = true;

	require "../lib/technikum29.php";
	require "../lib/mail/mailer.php";
	
	if(empty($_POST)) { // Wenn noch keine Formulardaten vorhanden sind, eigentliches Formular anzeigen
	?>

	<h2>Termine und Führungen - Anmeldung</h2>
	
	<p>Siehe <a href="/de/#termine">Termine auf Startseite</a> für verfügbare Termine.</p>
	
	<?php
		$veranstaltung = isset($_GET['veranstaltung']) ? $_GET['veranstaltung'] : '';
	?>
	
	<div class="anmelde-maske">
	    <form id="anmeldung" action="<?=$host->rewrite_link('/de/anmeldung.php'); ?>" method="POST">
			<dl>
				<dt>Veranstaltung</dt>
				<dd><?php if($veranstaltung) {
					echo $veranstaltung;
					echo '<input type="hidden" name="veranstaltung" name="'.$veranstaltung.'">';
				} else { ?>
					<input type="text" name="veranstaltung" required>
				
				<?php } /* if */ ?>
				</dd>
				
				<dt>Termin</dt>
				<!--<dd><%=termin%>
				<input type="hidden" name="termin" value="<%=termin%>">-->
				<dd class="termin"><input type="text" name="termin" required>
				</dd>

				<dt>Name</dt>
				<dd><input type="text" name="anmelder_name" required></dd>

				<dt>Anzahl der Personen</dt>
				<dd><input type="number" min="0" name="personenanzahl"></dd>
				
				<dt>E-Mail-Adresse</dt>
				<dd><input type="email" name="email_adresse" required></dd>
				
				<!--
				<dt>Telefonnummer</dt>
				<dd><input type="tel" name="text_telefon_nummer"></dd>
				-->
				
				<dt>Ggf. Anmerkungen</dt>
				<dd><textarea name="weitere_anmerkungen"></textarea></dd>
				
				<dt>Captcha</dt>
				<dd>Bitte bestätigen Sie, dass Sie menschlich sind:
				<?php
					if($ajax)
						echo "<span class='t29-recaptcha' data-publickey='". t29Mailer::recaptcha_get_publickey() ."'></span>";
					else
						echo t29Mailer::recaptcha_get_html();
				?>
				<p>Vielen Dank für Ihre Mithilfe gegen Spam.
				</dd>
				
				<dd><input type="submit" value="Abschicken" class="submit"> <input type="reset" value="Abbrechen"> </dd>
			</dl>
	    </form>
	   </div>
<?php
	} // ende der Ausgaben, wenn keine Formulardaten vorhanden sind
	else {
		// Formular auswerten, d.h. Formmailer verwenden
		
		$mailer = new t29Mailer($_POST);
		
		// fill up form data
		$mailer->to = "sven";
		$mailer->subject = "Webanmeldung für Führung \"{veranstaltung}\"";
		$mailer->header = array(
			'From' => 'technikum29 Computer Museum Anmeldesystem <post@technikum29.de>',
		);
		$mailer->body = <<<MAIL_BODY
Hallo,

auf der Anmeldungsseite der Homepage www.technikum29.de ging eine neue Anmeldung ein:

Veranstaltung: {veranstaltung}
Termin: {termin}
(Vgl. Termine auf Startseite: http://www.technikum29.de/de/#termine

Name: {anmelder_name}
Anzahl der Personen: {personenanzahl}
E-Mail-Adresse: {email_adresse}

Ggf. weitere Anmerkungen, die angegeben wurden:
{weitere_anmerkungen}

Die Person hat eine Bestätigungsmail ihrer Daten erhalten.

Viele Grüße,
deine Website

PS: Wenn im Rahmen dieser Mail auch Spam ankommt, wird das System missbraucht. Dann bitte
bescheid sagen.

MAIL_BODY;

		// Bestätigungsmail aufsetzen
		$mailer->ack = true;
		$mailer->ack_to = '{email_adresse}';
		$mailer->ack_subject = "Bestätigung ihrer Webanmeldung zur technikum29-Führung \"{veranstaltung}\"";
		$mailer->ack_body = <<<ACK_MAIL_BODY
Hallo {anmelder_name},

vielen Dank für Ihre Web-Anmeldung zu einer Führung im technikum29 Computer Museum (http://www.technikum29.de/).

Sie haben sich mit {personenanzahl} zu der Führung "{veranstaltung}" am {termin} angemeldet.

Diese Mail bestätigt den Eingang ihrer Anmeldung. Bitte setzen Sie sich bei weiteren Fragen mit der Museumsführung in Kontakt, schreiben Sie dazu eien Mail an post@technikum29.de, siehe auch Kontaktdaten auf http://www.technikum29.de/de/impressum .

-- Diese E-Mail wurde automatisch generiert. Bitte antworten Sie nicht darauf --
ACK_MAIL_BODY;

		$mailer->output_error_page = function($mailer, $text) {
			?><h2>Bei der Anmeldung traten Fehler auf</h2>
			<p>Sie wurden dazu aufgefordert, ihre Menschlichkeit zu beweisen. Da wir keine Massenspam-Mails
			erwünschen, füllen Sie bitte dieses Captcha <i>richtig</i> aus:</p>
			
			<form method="POST">
				<?php $mailer->print_serialized_hidden_form(); ?>
				<?php echo $text; ?>
				<input type="submit" value="Anmeldung abschicken">
			</form>
			<?php
		};

		$mailer->output_success_page = function($mailer) {
			?><h2>Ihre Anmeldung wurde eingereicht</h2>
			
			<p>Vielen Dank für ihre Anmeldung zur Veranstaltung <strong><?=$mailer->veranstaltung; ?></strong> am
			<strong><?=$mailer->termin; ?></strong>. Sie erhielten eine Bestätigungsmail an ihre Mail-Adresse
			<em><?=$mailer->email_adresse; ?></em>. Bei Fragen wenden Sie sich bitte an die Museumsführung, siehe
			Kontaktdaten im <a href="/de/impressum">Impressum</a>.</p>
			
			<p><a class="go" href="/de/">Zurück zur Startseite</a></p>
			
			<?php
		};
		
		// checken ob alle Pflichtfelder vorhanden sind
		$pflicht = array('veranstaltung', 'termin', 'anmelder_name', 'email_adresse');
		foreach($pflicht as $feld) {
			if(isset($mailer->_values[$feld]) && !empty($mailer->_values[$feld])) continue;
			
			// Richtig hässliche Fehlerseite anzeigen
			?><h2>Bitte füllen Sie das Anmeldeformular vollständig aus</h2>
			<p>Die Angabe von Name, Termin, Veranstaltung und E-Mail-Adresse ist zwingend erforderlich.
			<a class="go" href="javascript:history.go();">Zurückgehen und korrigieren</a> oder 
			<a href="/de/anmeldung.php">Neu ausfüllen</a>.
			<?php
			return; // end of script
		}	
		
		// mailer starten
		if(!$mailer->run()) {
			?><div style="opacity:0.5"><hr>
			<p><small>Es wurde ein Fehler beim Anmelden festgestellt</small></p><?php
		}
	}