<?php
	$seiten_id = 'suche';
	$version = '$Id$';
	$titel = 'Suche';
	
	require "../lib/technikum29.php";
?>
	<h2>Suchen</h2>
	<p>Hilfe zur Suchfunktion
	<p>Suchfeld
	<?php if(isset($_GET['q'])) { ?>
		<h3>Suchergebnisse für <?=$_GET['q']; ?></h3>
		<p>...
	<?php } ?>