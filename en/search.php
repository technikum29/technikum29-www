<?php
	$seiten_id = 'suche';
	$version = '$Id$';
	$titel = 'Search';
	$dynamischer_inhalt = true;

	require "../lib/search.php";
	$search = new t29Search();
	$search->page_handler();

	require "../lib/technikum29.php";
?>
	<h2>Search</h2>
	<?php
		$search->google_search_snippet();
	?>
	<!--
	<p>Search field
	<?php if(isset($_GET['q'])) { ?>
		<h3>Search results for <?=$_GET['q']; ?></h3>
		<p>...
	<?php } ?>
	-->