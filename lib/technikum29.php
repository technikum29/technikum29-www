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
$webroot = realpath("$lib/../");  # file path to root of t29 web installation
$file = substr($_SERVER['SCRIPT_FILENAME'], strlen($_SERVER['DOCUMENT_ROOT'])); # e.g.: "/de/page.php"

$cache_dir = "$webroot/shared/cache";
$languages = array(
// shorthand => array(full name in page, path from webroot)
	"de" => array("Deutsch",  "/de-v6"),
	"en" => array("English", "/en-v6"),
);

// try to determine the language from the file path
$lang = substr($file, 1, 2);
if(!in_array($lang, array_keys($languages))) $lang = "de"; # check if language exists
$lang_path = $languages[$lang][1]; # shorthand, relative to webroot. use "$webroot$lang_path" for local.

# Calling parameters
$skip_cache = isset($_GET['skip_cache']);
$purge_cache = isset($_GET['purge_cache']);

# lightweight caching system
$test_programs = array(
	__FILE__,
	$_SERVER['SCRIPT_FILENAME'],
	"$lib/template.php",
	"$lib/menu.php",
	"$lib/messages.php",
	"$lib$lang_path/navigation.xml",
	"$lib$lang_path/news.php",
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