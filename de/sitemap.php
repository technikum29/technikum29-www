<?php
	$seiten_id = 'sitemap';
	$version = '$Id: sitemap.php 565 2014-06-05 12:48:12Z sven $';
	$titel = 'Sitemap';

	if(!require("../lib/technikum29.php")) return; // keine verschachtelten Aufrufe
	require("../lib/sitemap.php");
?>
    <h2>Sitemap</h2>
    <p>Im Folgenden ist eine vollständige hierarchisch strukturierte Darstellung aller Einzelseiten
    des Internetauftritts von technikum29 dargestellt. Wenn Sie etwas nicht finden, ist dies eine
    Möglichkeit, zu suchen oder sich einen Überblick zu verschaffen. Wir weisen auch auf
    <a href="/de/suche.php">unsere Seitensuche</a> hin.
    </p>
    
    <?php
	print_sitemap();
    ?>
