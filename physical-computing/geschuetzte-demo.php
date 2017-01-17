<?php
	$seiten_id = 'physical-computing';
	$titel = 'Physical-Computing Passwort-Demo';

	$dynamischer_inhalt = true;
	require "../lib/simplepassword.php";
	$barriere = new t29PasswordBarrier();
	$barriere->password = "huhn";

	require "../lib/technikum29.php";
?>

<header class="teaser physical-computing">
	<h2>
	Physical-Computing &amp; Robotics
	</h2>
	<img class="no-copyright" src="robotics.jpg">
</header>

<h2>Schüleraufgaben</h2>

<p>Auf dieser Seite erfährst du über den aktuellen Stand und so vieles
mehr. Damit das nicht jeder lesen kann, wird ein einfaches Passwort
benötigt.

<?php
	if(! $barriere->isAuthenticated()) {
		$barriere->printAuthForm();
		return;
	} else {
		$barriere->printSuccessForm();
	}
?>

Der aktuelle Stand unserer Arbeiten: Jonas hatte Kopfschmerzen und
Julia wurde strafversetzt.

<h3>Neue Übungsblätter</h3>

<p>blablabla
