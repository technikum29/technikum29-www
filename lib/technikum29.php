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

require "$lib/cache.php";

$page_cache = new t29Cache(false, true); // debug, verbose
$page_cache->set_cache_file($webroot, $file);
$page_cache->test_files = array(
	__FILE__,
	$_SERVER['SCRIPT_FILENAME'],
	"$lib/template.php",
	"$lib/menu.php",
	"$lib/messages.php",
	"$webroot$lang_path/navigation.xml",
	"$webroot$lang_path/news.php",
);

$page_cache->try_cache_and_exit();

// cache missed, rebuild cache
require "$lib/template.php";
$tmpl = new t29Template($GLOBALS);
$tmpl->create_cache($page_cache);

// end of technikum29.php