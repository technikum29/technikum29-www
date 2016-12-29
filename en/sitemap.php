<?php
	$seiten_id = 'sitemap';
	$version = '$Id: sitemap.php 565 2014-06-05 12:48:12Z sven $';
	$titel = 'Sitemap';

	require("../lib/sitemap.php");
?>
    <h2>Sitemap</h2>
    <p>
	This is a complete hierarchical display of all pages of the technikum29
	website. If you are looking for a device or want to get a quick overview,
	this might be the right place. You can also use <a href="/en/search.php">our search
	page</a>. Note as this is a Germany based institute, our primary website language
        is German. Thus the <a href="/de/sitemap.php">sitemap for German pages</a> is slightly
        more comprehensive (larger) as we don't have all pages translated to English.
    </p>
    
    <?php
	print_sitemap();
    ?>
