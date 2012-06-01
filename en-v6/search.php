<?php
	$seiten_id = 'suche';
	$version = '$Id$';
	$titel = 'Search';
	
	require "../lib/technikum29.php";
?>
	<h2>Search</h2>
	<p>Search options and help
	<p>Search field
	<?php if(isset($_GET['q'])) { ?>
		<h3>Search results for <?=$_GET['q']; ?></h3>
		<p>...
	<?php } ?>