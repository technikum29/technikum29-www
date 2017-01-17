<?php
/**
 * Simpler Passwortschutz im Sinne einer "Barriere", die inmitten einer
 * t29-Seite stehen kann.
 * Prinzipiell ist dieser Passwortschut wirkungsvoll, sofern HTTPS
 * verwendet wird. Die primitive Übermittlung per GET (oder POST)
 * sorgt aber dafür, dass die Benutzererfahrung schwach ist (das
 * Passwort wird etwa plain-text in der URL angezeigt oder ein einfaches
 * Neuladen einer ansonsten statischen Seite führt stets zu den POST-
 * Warnungen).
 *
 * In der Praxis auf t29 ist dieser Passwortschutz allerdings schon alleine
 * deswegen völlig wirkungslos, weil die Files alle öffentlich per 
 * SVN einsehbar sind. Aber Heribert wollte es ja so. Ist nur ein
 * Demonstrator.
 *
 * Beispiel einer verwenden Seite gibt es weiter unten.
 *
 **/

class t29PasswordBarrier {
	public $password;
	public $paramkey = 't29-pwd-barrier';

	function __construct($password=Null) {
		$this->password = $password;
	}

	function isAuthenticated() {
		return (isset($_GET[$this->paramkey]) &&
			$_GET[$this->paramkey] == $this->password);
	}

	function failedToAuthenticate() {
		return (isset($_GET[$this->paramkey]) &&
			$_GET[$this->paramkey] != $this->password);
	}

	function printAuthForm() {
		$failed = $this->failedToAuthenticate();

		?>
		<div class="alert">
			<h4>Passwort benötigt</h4>
			<p>Der folgende Inhalt ist mit einem Passwort versehen.
			<form method="get">
				<input type="password" name="<?= $this->paramkey; ?>">
				<input type="submit" value="Anmelden">
			</form>
		</div>
		<?php
	}

	function printSuccessForm() {
		?>
		<div class="alert alert-success">
			<h4>Erfolgreich eingeloggt</h4>
			Sie sind berechtigt, den folgenden Text zu lesen.
			<form method="get" class="inline">
				<input type="submit" value="Abmelden">
			</form>
		</div>
		<?php
	}
}

/* Demo-Seite:

<?php
	$seiten_id = 'passwort-demo';
	$titel = 'Passwort-Demo';

	$dynamischer_inhalt = true;
	require "../lib/simplepassword.php";
	$barriere = new t29PasswordBarrier();
	$barriere->password = "huhn";
	// $barriere->startCheck();

	require "../lib/technikum29.php";
?>

<h2>Schüleraufgaben</h2>

<p>Den Text hier kann jeder lesen</p>

<?php
	if(! $barriere->isAuthenticated()) {
		$barriere->printAuthForm();
		return;
	} else {
		$barriere->printSuccessForm();
	}
?>

Den hier kann man nur lesen, wenn man an der Barriere vorbei ist.

*/
