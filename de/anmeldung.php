<?php
	$seiten_id = 'anmeldung';
	$version = '$Id: index.php 387 2013-05-08 09:58:11Z heribert $';
	$titel = 'Anmeldung zu Terminen für Führungen';
	$dynamischer_inhalt = true;

	require "../lib/technikum29.php";
	require "../lib/mail/mailer.php";

	// Captcha-Sicherung gegen Spam hier an- oder ausschalten
	$spamschutz_aktiv = true;
	
	// Bestätigungsmail hier ein- oder ausschalten
	$bestaetigungsmail_senden = true;
	
	$pflicht = array('veranstaltung', 'termin', 'anmelder_name', 'email_adresse');
	$passable = array('veranstaltung', 'termin');

	
	$form_errnous = false;
	if(!empty($_POST)) { // checken ob alle Pflichtfelder vorhanden sind
		foreach($pflicht as $feld) {
			if(isset($_POST[$feld]) && !empty($_POST[$feld])) continue;
			$form_errnous = true; break;
		}
	}
	
	$captcha_failed = $spamschutz_aktiv && !empty($_POST) && 
	  (!isset($_POST['captcha']) || !isset($_POST['captcha_challenge'])
	   || sha1($_POST['captcha']) != $_POST['captcha_challenge']);
        $form_errnous |= $captcha_failed;

	
	if(empty($_POST) || $form_errnous) { // Wenn noch keine Formulardaten vorhanden sind, eigentliches Formular anzeigen
	?>

	<h2>Termine und Führungen - Anmeldung</h2>
	
	<?php
	if($form_errnous) {
		// Richtig hässliche Fehlerseite anzeigen
		?><div style='background-color: #d9534f; color:white; padding: 1em;'><h4>Bitte füllen Sie das Anmeldeformular vollständig aus</h4>
			<p>Die Angabe von Name, Termin, Veranstaltung und E-Mail-Adresse ist zwingend erforderlich.
			Auch das Captcha muss richtig ausgefüllt werden. Falls das Formular für Sie nicht ausfüllbar
			ist, verschwenden Sie keine Zeit, sondern senden Sie uns eine E-Mail an die im
			<a href="/de/impressum.php">Impressum</a> angegebenen Kontaktdaten.
		</div><?php
	} ?>
		
	<p>Siehe die <a href="/de/termine.php">Terminübersicht</a> für verfügbare Termine.</p>
	
	<?php
		$passable_element = array();
		foreach($passable as $k) {
			if(isset($_REQUEST[$k]) && !empty($_REQUEST[$k])) {
				$val = htmlentities($_REQUEST[$k], ENT_QUOTES);
				$r = $val . '<input type="hidden" name="'.$k.'" name="'.$val.'">';
			} else  $r = '<input type="text" name="'.$k.'" required>';
			$passable_element[$k] = $r;
		}
	?>
	
	<div class="anmelde-maske">
	    <form id="anmeldung" action="<?=$host->rewrite_link('/de/anmeldung.php'); ?>" method="POST">
			<dl>
				<dt>Veranstaltung</dt>
				<dd><?php print $passable_element['veranstaltung'] ; ?>
				</dd>
				
				<dt>Termin</dt>
				<dd class="termin"><?php print $passable_element['termin'] ; ?>
				</dd>

				<dt>Name</dt>
				<dd><input type="text" name="anmelder_name" required></dd>

				<dt>Anzahl</dt>
				<dd><input type="number" min="1" value="1" name="personenanzahl"> Teilnehmer</dd>
				
				<dt>E-Mail-Adresse</dt>
				<dd><input type="email" name="email_adresse" required></dd>
				
				<!--
				<dt>Telefonnummer</dt>
				<dd><input type="tel" name="text_telefon_nummer"></dd>
				-->
				
				<dt>Ggf. Anmerkungen</dt>
				<dd><textarea name="weitere_anmerkungen"></textarea></dd>
				
				<?php if($spamschutz_aktiv) { ?>
				<dt>Captcha</dt>
				<dd><div class="captcha">
				Bitte demonstrieren Sie, dass Sie kein Roboter sind. Tippen Sie
				dazu bitte im folgenden Feld "Computer" ein:
				<input type="hidden" value="<?php print sha1('Computer'); ?>" name="captcha_challenge">
				<br><input type="text" name="captcha" required>
				
				
				<?php
				 /*
					if($ajax) {
						$pubkey = t29Mailer::recaptcha_get_publickey();
						echo "<span class='t29-recaptcha' data-publickey='$pubkey'></span>";
					} else
						echo t29Mailer::recaptcha_get_html();
					*/
				?>
				</div><!--/.captcha -->
				<?php } /* $spamschutz_aktiv */ ?>
				
				<dt>Unterweisung</dt>
				<dd>
				<!--
				<label for="sicherheitsunterweisung" class="checkbox">
				  <input type="checkbox" id="sicherheitsunterweisung" required>
				   <span>
				   Die
				   <a href="https://www.technikum29.de/download/Sicherheitsunterweisung.pdf">Sicherheitsunterweisung</a>
				   habe ich mir durchgelesen.  Mir ist bewusst, dass ich das Museum auf eigenes
				   Risiko besuche.
				   </span>
				</label>
				-->
				Aus Haftungsgründen findet zu Beginn des Besuches eine Sicherheitsunterweisung
				statt. Die
				<a target="_blank" href="https://www.technikum29.de/download/Sicherheitsunterweisung.pdf">Unterweisung
				können Sie sich vorher durchlesen</a> und damit Zeit sparen.
				<br>
				<select name="sicherheitsunterweisung">
					<option>Die Unterweisung lese ich mir erst bei Besuch durch</option>
					<option>Ich habe die Unterweisung durchgelesen</option>
					<option>Ich bringe einen unterschriebenen Ausdruck der Unterzeichnung mit</option>
				</select>
				
				<dd><input type="submit" value="Anmelden" class="submit">

				<!-- ist mit jquery-Funktion besehen -->
				<!-- <input type="reset" value="Abbrechen"> -->
				</dd>
			</dl>
	    </form>
	   </div>
<?php
	} // ende der Ausgaben, wenn keine Formulardaten vorhanden sind
	else {
		// Formular auswerten, d.h. Formmailer verwenden
		
		$mailer = new t29Mailer($_POST);
		
		// fill up form data
		$mailer->to = "kontakt";
		$mailer->subject = "Webanmeldung für Führung \"{veranstaltung}\"";
		$from = 'dev'; // Spamschutz (webSVN)
		$mailer->header = array(
			'From' =>"'technikum29 Computer Museum Anmeldesystem <$from@technikum29.de>",
		);
		
		$mailer_ack_text = $bestaetigungsmail_senden ? 'Die Person hat eine Bestätigungsmail ihrer Daten erhalten.'
			: 'Die Person hat auf deinen Wunsch noch *keine* Bestätigungsmail erhalten.';
		$mailer->body = <<<MAIL_BODY
Hallo,

auf der Anmeldungsseite der Homepage www.technikum29.de ging eine neue Anmeldung ein:

Veranstaltung: {veranstaltung}
Termin: {termin}
Vgl. angekündigte Termine: https://www.technikum29.de/de/termine

Name: {anmelder_name}
Anzahl der Personen: {personenanzahl}
E-Mail-Adresse: {email_adresse}
Unterweisung: {sicherheitsunterweisung}

Ggf. weitere Anmerkungen, die angegeben wurden:
{weitere_anmerkungen}

$mailer_ack_text

Viele Grüße,
die technikum29-Website

PS: Wenn im Rahmen dieser Mail auch Spam ankommt, wird das System missbraucht. Dann bitte
bescheid sagen.

MAIL_BODY;

		// Captcha-Check aktivieren
		$mailer->enable_captcha_check = $spamschutz_aktiv;

		// Bestätigungsmail aufsetzen
		$mailer->ack = $bestaetigungsmail_senden;
		$mailer->ack_to = '{email_adresse}';
		$mailer->ack_subject = "Bestätigung ihrer Webanmeldung zur technikum29-Führung \"{veranstaltung}\"";
		$mailer->ack_body = <<<ACK_MAIL_BODY
Hallo {anmelder_name},

vielen Dank für Ihre Web-Anmeldung zu einer Führung im technikum29-Computermuseum (https://www.technikum29.de/).

Sie haben sich mit {personenanzahl} Personen zu der Führung "{veranstaltung}" am {termin} angemeldet.

Diese Mail bestätigt nur den Eingang ihrer Anmeldung. Bitte setzen Sie sich bei weiteren Fragen mit der Museumsführung in Kontakt, schreiben Sie dazu eien Mail an kontakt@technikum29.de, siehe auch Kontaktdaten auf https://www.technikum29.de/de/impressum .

Mit freundlichen Grüßen,
das technikum29-Computermuseum
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
			Kontaktdaten im <a href="/de/impressum">Impressum</a>.
			
			<!--
			Innerhalb von zwei Tagen erhalten Sie eine persönliche Bestätigungsmail. Sollte die Antwort ausbleiben,-->
			Wenn Sie weitere Fragen haben,
			können Sie den Kontakt jederzeit über die Kontaktdaten aus dem <a href="/de/impressum">Impressum</a>
			herstellen.
			</p>
			
			<p>Falls die Führung, an der Sie teilnehmen wollen, mit Eintrittsgeldern verbunden ist, können Sie diese auch vorab
			per Überweisung oder Paypal leisten, siehe dazu
			<a href="/de/unterstuetzen.php#Finanziell_helfen:_Spende">Übersicht für Spenden</a>. Ansonsten bitten wir
			um wenn möglich passende Barzahlung beim Besuch.
			
			<p>Wir freuen uns auf Ihren Besuch!
			
			<p><a class="go" href="/de/">Zur Startseite des Museums</a></p>
			
			<?php
		};

		
		// mailer starten
		if(!$mailer->run()) {
			?><div style="opacity:0.5"><hr>
			<p><small>Es wurde ein Fehler beim Anmelden festgestellt. Bitte schicken Sie uns eine
			reguläre E-Mail, Kontaktdaten finden Sie in unserem <a href="/de/impressum.php">Impressum</a></small></p><?php
		}
	}
