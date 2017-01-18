<?php
	$seiten_id = 'physical-computing';
	$titel = 'Physical-Computing Passwort-Demo';

	$dynamischer_inhalt = true;
	require "../lib/simplepassword.php";
	$zaun1 = new t29FencedContent('SchuleABC-Geheimnisse');
	$zaun2 = new t29FencedContent('SchuleDEF-Geheimnisse');
	$zaun1->password = "hahn";
	$zaun2->password = "hundi";

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

<?php $zaun1->printAnchor(); ?>
<div class="panel panel-default">
<div class="panel-heading">
	<strong>Kurs an der ABC-Schule</strong>
	<?php $zaun1->printMiniForm(); ?>
</div>
<?php $zaun1->start(); ?>
<div class="panel-body">
<p>Der aktuelle Stand unserer Arbeiten: Jonas hatte Kopfschmerzen und
Julia wurde strafversetzt.</p>

<h3>Neue Übungsblätter</h3>

<p>blablabla

</div><!--/panel-body -->
<?php $zaun1->end(); ?>
</div><!--/panel -->

<!-- zweiter Zaun: -->

<?php $zaun2->printAnchor(); ?>
<div class="panel panel-default">
<div class="panel-heading">
	<strong>Kurs an der DEF-Schule</strong>
	<?php $zaun2->printMiniForm(); ?>
</div>
<?php $zaun2->start(); ?>
<div class="panel-body">
<p>Hier stehen ganz andere Geheimnisse drin.
<p>Hier stehen ganz andere Geheimnisse drin.
<p>Hier stehen ganz andere Geheimnisse drin.
<p>Hier stehen ganz andere Geheimnisse drin.
</div><!--/panel-body -->
<?php $zaun2->end(); ?>
</div><!--/panel -->


Hinter diesen Boxen kann wieder ganz normaler Text stehen.
