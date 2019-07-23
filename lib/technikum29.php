<?php
/**
 * technikum29v6 - PHP Subsystem.
 * Haupteinstiegspunkt ("WebStart.php"), welches
 * ohne weiteren Funktionsaufruf alles macht.
 *
 **/

if(defined('T29')) return false; // no nesting
define('T29', true);

// is it an external call?
$external = isset($external);

// at least the $seiten_id must be defined
if(!isset($seiten_id)) {
	print "<html><pre>The t29v6 WebStart file\n";
	print 'technikum29.php is the main include, but requires at least global <tt>$seiten_id</tt> to be defined.';
	print "\n<a href='https://labs.technikum29.de/browser/technikum29%20Website/lib/technikum29.php'>Read my sourcecode</a>";
	return false;
}

$lib = dirname(__FILE__);
$webroot = realpath("$lib/../");  # file path to root of t29 web installation

// early import host specific settings for making low level corrections like Bugfix #32
require "$lib/host.php";
$host = $external ? t29Host::create('t29ExternalHost') : t29Host::detect();
$file = $host->slash_filename; # e.g.: "/de/page.php"

// exactly define debugging behaviour
if(isset($_GET['debug'])) {
	$_GET['purge_cache'] = true;
	$_GET['rl_debug'] = true;
}

// check for url rewriting neccessarity (skip at external calls)
if($host->check_url_rewrite()) exit;

$cache_dir = "$webroot/shared/cache";
$languages = array(
// shorthand => array(full name in page, path from webroot)
	"de" => array("Deutsch",  "/de"),
	"en" => array("English", "/en"),
);

// make sure we have a page title
if(isset($title)) $titel = $title;
elseif(isset($titel)) $title = $titel;
else $titel = $title = false; // to be determined by navigation seiten_id.

// try to determine the language from the file path
if(!isset($lang)) $lang = substr($file, 1, 2);
if(!in_array($lang, array_keys($languages))) {
	# if language does not exist, examine client preference.
	if(isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
		$de = strpos($_SERVER['HTTP_ACCEPT_LANGUAGE'], 'de');
		$en = strpos($_SERVER['HTTP_ACCEPT_LANGUAGE'], 'en');
	} else {
		# no client information available. Make our personal default.
		$de = true; $en = false;
	}

	$lang = ( ($en !== false && $de !== false && $de < $en) ||
	          ($en === false && $de !== false)              )
	        ? "de" : "en";
}
$lang_path = $languages[$lang][1]; # shorthand, relative to webroot. use "$webroot$lang_path" for local.

// "AJAX" calls are our meaning for pages without chrome
$ajax = isset($_GET['ajax']);
if(!$external && $ajax) {
	// print only a minimal chrome, no caching.
	require "$lib/ajax-template.php";
	$ajax_tmpl = new t29AJAXTemplate($GLOBALS);
	$ajax_tmpl->print_page();
	// important: do not execute code further down (Templating stuff)
	return true;
}

require "$lib/cache.php";

// "External" pages which are not part of the t29 website
if($external) {
	// skip caching stuff. External pages don't get in touch with
	// any navigation.xml or news.php etc.
	require "$lib/template.php";
	$header_cache = new t29Cache(/*debug*/false, /*verbose*/true, /*skip=memory only*/true);
	$footer_cache = new t29Cache(/*debug*/false, /*verbose*/true, /*skip=memory only*/true);
	$tmpl = new t29Template($GLOBALS);
	$tmpl->create_separate_caches($header_cache, $footer_cache);
	// important: do not execute caching stuff below
	return true;
}

$page_cache = new t29Cache(false, true); // debug, verbose
$page_cache->set_cache_file($webroot, $file);
// You can define "$test_files" for additionall files to check. See e.g. /lib/sitemap.php
$page_cache->test_files = isset($test_files) ? $test_files : array();
$page_cache->test_files += array(
	__FILE__,
	$_SERVER['SCRIPT_FILENAME'],
	"$lib/template.php",
	"$lib/menu.php",
	"$lib/messages.php",
	"$lib/host.php",
	"$webroot$lang_path/navigation.xml",
	"$webroot$lang_path/news.php",
	$webroot.$host->ressources_get_pagestyle($seiten_id),
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
			$footer_cache->print_cache(true, /* skip http headers */ true);
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
