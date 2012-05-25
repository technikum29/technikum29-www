<?php
/**
 * technikum29v6 - PHP Subsystem.
 * Haupteinstiegspunkt ("WebStart.php"), welches
 * ohne weiteren Funktionsaufruf alles macht.
 *
 **/

if(defined('T29')) return false; // no nesting
define('T29', true);

$lib = dirname(__FILE__);
$lang = "de-v6";
$root = "/"; # webroot
$file = substr($_SERVER['SCRIPT_FILENAME'], strlen($_SERVER['DOCUMENT_ROOT']));

$skip_cache = isset($_GET['skip_cache']);
$purge_cache = isset($_GET['purge_cache']);

$cache_dir = "$lib/../shared/cache";

# lightweight caching system
$test_programs = array(
	__FILE__,
	$_SERVER['SCRIPT_FILENAME'],
	"$lib/template.php",
	"$lib/menu.php",
	"$lib/../de-v6/hauptnavigation.xml",
	"$lib/../de-v6/sidebar.xml",
	"$lib/../de-v6/news.php",
);

$cache_file = $cache_dir . $file;
$last_cache = @filemtime($cache_dir.$file);
$last_program = array_reduce(array_map(function($x){return @filemtime($x);}, $test_programs), 'max');
$cache_valid = $last_cache && $last_program < $last_cache;

if(!$cache_valid || $skip_cache || $purge_cache) {
	// rebuild cache
	require "$lib/template.php";
	$tmpl = new t29Template($GLOBALS);
	$tmpl->create_cache();
} else {
	// use cache
	header("Last-Modified: ".gmdate("D, d M Y H:i:s", $last_cache)." GMT");
	//header("Etag: $etag");

	if(@strtotime($_SERVER['HTTP_IF_MODIFIED_SINCE']) == $last_cache) {
		// client already has page cached locally
		header("HTTP/1.1 304 Not Modified");
	} else {
		readfile($cache_file);
	}
	exit;
}

// end of technikum29.php