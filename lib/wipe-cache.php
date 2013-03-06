<?php
/**
 * Wipe-Cache is a small cache wiping application for online usage.
 * For convenience it is displayed in the style of the website
 **/
	$seiten_id = 'wipe-cache';
	$version = '$Id$';
	$titel = 'Wipe Cache';
	$dynamischer_inhalt = true;

	require "technikum29.php";
?>
<h2>Cache leeren</h2>

<?php

if(isset($_GET['wipe'])) {
	$command = "rm -r $cache_dir/* 2>&1";
	print "<h3>Cache-Leerung</h3>";
	print shell_exec($command);
	print "Fertig";
	print "<h3>Erneut Cache leeren?</h3>";
}
?>

<p>Auf diesem Server (<?php echo $_SERVER['SERVER_NAME']; ?>) sind im Verzeichnis
<tt><?=$cache_dir ?></tt> derzeit <b><?php echo getFileCount($cache_dir); ?>&nbsp;Dateien</b>
gecacht.</p>

<form method="get">
<input type="submit" value="Cache leeren" name="wipe">
<input type="submit" value="Anzeige aktualisieren" name="just-aktualisieren">
</form>



<h3>Details</h3>

<p>Die technikum29-Website wird seit Version 6 mit PHP und einem mehrstufigen
Cache-System unterstützt, sodass Seiten nur bei Änderungen gecacht werden müssen.
Zur Verfikation, ob der Cache einer Seite invalide ist, werden dabei durch die
t29Cache-Klasse verschiedenste Dateien überprüft. Für diese Seite sind das etwa
folgende Dateien:

<table class="t29-details">
<tr><th>Datei<th>Letzte Änderung
<?php
foreach($page_cache->test_files as $file) {
	print "<tr><td class='left'><tt>$file</tt><td>".date ("F d Y H:i:s", filemtime($file));
}
?>
</table>

<?php
// lib:

// http://stackoverflow.com/questions/640931/recursively-counting-files-with-php
function getFileCount($path) {
    $size = 0;
    $ignore = array('.','..','.svn');
    $files = scandir($path);
    foreach($files as $t) {
        if(in_array($t, $ignore)) continue;
        if (is_dir(rtrim($path, '/') . '/' . $t)) {
            $size += getFileCount(rtrim($path, '/') . '/' . $t);
        } else {
            $size++;
        }   
    }
    return $size;
}