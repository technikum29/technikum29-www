<?php
	$seiten_id = 'suche';
	$version = '$Id$';
	$titel = 'Suche';
	$dynamischer_inhalt = true;

	require "../lib/search.php";
	$search = new t29Search();
	$search->page_handler();

	require "../lib/technikum29.php";
	// Todo: add interlang link from page. needs some kind of
	//       callback
?>
	<h2>Suche</h2>
	<?php
	$search->google_search_snippet();
	?>
	<!--
	<p>Suchfeld
	<?php if(isset($_GET['q'])) { ?>
		<h3>Suchergebnisse für <?=$_GET['q']; ?></h3>
		<p>...
	<?php } ?>
	-->
