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
	print "<h3>Cache-Leerung</h3>";
	rrmdir_sub($cache_dir);
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



<h3>Zum Cache-System</h3>

<p>Die technikum29-Website wird seit Version 6 mit PHP und einem mehrstufigen
Cache-System unterstützt, sodass Seiten nur bei Änderungen gecacht werden müssen.
Zur Verfikation, ob der Cache einer Seite invalide ist, werden dabei durch die
t29Cache-Klasse verschiedenste Dateien überprüft. Für diese Seite sind das etwa
folgende Dateien:

<table class="t29-details">
<tr><th>Datei<th>Letzte Änderung
<?php
foreach($page_cache->test_files as $file) {
	print "<tr><td class='left'><tt>$file</tt><td>".(file_exists($file) ?
		date ("F d Y H:i:s", filemtime($file))
	:	"<i>does not exist</i>");
}
?>
</table>

<h3>Im Cache befindliche Dateien</h3>
<?php
$all_cache_files = getDirContents($cache_dir);
?>

<p>Im <a href="/shared/cache">t29-Cache</a> auf diesem Host (<tt><?php print $host; ?></tt>)
befinden sich derzeit folgende
<strong><?php print count($all_cache_files); ?> Dateien und Ordner</strong>:</p>

<table class="t29-details">
<tr><th>Datei<th>Letzte Änderung
<?php
foreach($all_cache_files as $file) {
	print "<tr><td class='left'><tt>$file</tt><td>".(file_exists($file) ?
		date ("F d Y H:i:s", filemtime($file))
	:	"<i>does not exist</i>");
}
?>
</table>
<?php>

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

// Delete from $path, including $path, using an recursive iterator
function rrmdir($path) {
	if(is_file($path)) {
		unlink($path);
		return;
	}

	$i = new DirectoryIterator($path);
	foreach($i as $f) {
		if($f->isFile()) {
			unlink($f->getRealPath());
		} else if(!$f->isDot() && $f->isDir()) {
			rrmdir($f->getRealPath());
		}
	}
	rmdir($path);
}

// delete everything *below* path, but keep $path
function rrmdir_sub($path) {
	array_map('rrmdir', glob("$path/*"));
#	print "Would delete:<pre> ";
#	var_dump(glob("$path/*"));
}

// get a list of all files below $dir, recursively.
function getDirContents($dir, &$results = array()){
    $files = scandir($dir);

    foreach($files as $key => $value){
        $path = realpath($dir.DIRECTORY_SEPARATOR.$value);
        if(!is_dir($path)) {
            $results[] = $path;
        } else if($value != "." && $value != "..") {
            getDirContents($path, $results);
            $results[] = $path;
        }
    }

    return $results;
}