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

// exactly define debugging behaviour
if(isset($_GET['debug'])) {
	$_GET['purge_cache'] = true;
	$_GET['rl_debug'] = true;
}

$cache_dir = "$webroot/shared/cache";
$languages = array(
// shorthand => array(full name in page, path from webroot)
	"de" => array("Deutsch",  "/de-v6"),
	"en" => array("English", "/en-v6"),
);

// make sure we have a page title
if(isset($title)) $titel = $title;
elseif(isset($titel)) $title = $titel;
else $titel = $title = false; // to be determined by navigation seiten_id.

// try to determine the language from the file path
$lang = substr($file, 1, 2);
if(!in_array($lang, array_keys($languages))) $lang = "de"; # check if language exists
$lang_path = $languages[$lang][1]; # shorthand, relative to webroot. use "$webroot$lang_path" for local.

require "$lib/cache.php";

$page_cache = new t29Cache(false, true); // debug, verbose
$page_cache->set_cache_file($webroot, $file);
$page_cache->test_files =  array(
	__FILE__,
	$_SERVER['SCRIPT_FILENAME'],
	"$lib/template.php",
	"$lib/menu.php",
	"$lib/messages.php",
	"$webroot$lang_path/navigation.xml",
	"$webroot$lang_path/news.php",
);

// dynamical content:
$static_page = !isset($dynamischer_inhalt);

if(!$static_page) {
	// Pages with dynamical content: only cache header and footer, seperately.
	// they depend on same test files, so there is only one is_valid check.
	$header_cache = $page_cache;
	$footer_cache = clone $page_cache;

	$header_cache->set_cache_file($webroot, $file.'-header');
	$footer_cache->set_cache_file($webroot, $file.'-footer');
}

if($page_cache->shall_use()) {
	if($static_page)
		$page_cache->print_cache_and_exit();
	else {
		$header_cache->print_cache(true);
		register_shutdown_function(function() use ($footer_cache) {
			$footer_cache->print_cache(true);
		});
		// now print your dynamical stuff in your page, the
		// footer content will be automatically added afterwards.
	}
} else {
	// cache missed, rebuild cache
	require "$lib/template.php";
	$tmpl = new t29Template($GLOBALS);
	if($static_page)
		// rebuild complete site cache
		$tmpl->create_cache($page_cache);
	else
		// rebuild each header and footer cache
		$tmpl->create_separate_caches($header_cache, $footer_cache);
}


// end of technikum29.php