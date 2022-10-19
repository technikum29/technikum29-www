<?php
/**
 * t29 ressource loading system.
 *
 * Entry point for loading javascript and css style sheet files in a bundled and
 * compressed manner, including caching. This file only checks up the caches and
 * contains the main configuration. See ressourceloader.php for all constructing
 * code.
 *
 **/

$lib = dirname(__FILE__);
$webroot = realpath("$lib/../");  # file path to root of t29 web installation

require_once "$lib/host.php";
$host = t29Host::detect();

if(!isset($_GET['type'])) {
	print "<html><pre>The t29v6 Ressource loader.\n";
	print "Provide ?type=js or ?type=css.\n";
	print '<a href="https://labs.technikum29.de/browser/technikum29%20Website/lib/loader.php">Read my sourcecode</a>';
	exit;
}

$type = $_GET['type'];
$conf = $host->get_ressources($type, $webroot, isset($_GET['debug']));  //$conf_for_type($type, isset($_GET['debug']));
if($conf == null)
	die("Illegal type. Valid types are: ". implode($types));
extract($conf); // for saving long human reading times :D

require "$lib/cache.php";
$js_cache = new t29Cache();
$js_cache->test_files = $modules;
$js_cache->set_cache_file($webroot, $cache_file);

header("Content-Type: $content_types");
if(!$debug) $js_cache->try_cache_and_exit();

# so we are still in the game
require "$lib/ressourceloader.php";
$loader = new $class($conf);
// TODO: there is a known bug with the filter function issue: Since t29Host variable web prefixes the
//       filter function for CSS also does path rewriting which doesn't work when it is in debug mode.
//       Anyway a page in debug mode also imports all untouched CSS files, anyway
if(!$debug)
	$js_cache->start_cache(array(
		'shutdown_func' => null, // nothing to do afterwards for the cache
		'filter_func'   => array($loader, 'compression_filter'), // compress if not debugging
		'write_cache'   => true, // write the cache if not debugging
	));
$loader->run();
