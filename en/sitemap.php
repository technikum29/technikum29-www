<?php
	$seiten_id = 'sitemap';
	$version = '$Id: sitemap.php 565 2014-06-05 12:48:12Z sven $';
	$titel = 'Sitemap';

	if(!require("../lib/technikum29.php")) return; // keine verschachtelten Aufrufe
	require("../lib/sitemap.php");
?>
    <h2>Sitemap</h2>
    <p>
	This is a complete hierarchical display of all pages of the technikum29
	website. If you are looking for a device or want to get a quick overview,
	this might be the right place. You can also use <a href="/en/search.php">our search
	page</a>.
    </p>
    
    <?php
	print_sitemap();
    ?>
