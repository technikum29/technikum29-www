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
 
if(!defined('T29_GRAB_LOADER_DEFS')) {
	$lib = dirname(__FILE__);
	$webroot = realpath("$lib/../");  # file path to root of t29 web installation

	if(!isset($_GET['type'])) {
		print "<html><pre>The t29v6 Ressource loader.\n";
		print "Provide ?type=js or ?type=css.\n";
		print '<a href="https://labs.technikum29.de/browser/technikum29%20Website/lib/loader.php">Read my sourcecode</a>';
		exit;
	}
}

$types = array('js', 'css'); // mapping position (numeric key) => $conf array position
$conf = array(
	'cache_file' => array('compressed.js', 'style.css'),
	'module_dir' => array("$webroot/shared/js-v6/modules", "$webroot/shared/css-v6/modules"),
	'page_dir' => array("$webroot/shared/js-v6/pagescripts", "$webroot/shared/css-v6/pagestyles"),
	'glob_pattern' => array('*.js', '*.css'),
	'content_types' => array('application/javascript', 'text/css'),
	'class' => array('t29JavaScriptRessourceLoader', 't29StyleSheetRessourceLoader'),
	'modules' => function($conf){ return glob($conf['module_dir'] . '/' . $conf['glob_pattern']); },
);
$conf_for_type = function($type, $debug_flag=false) use ($conf, $types) {
	$typepos = array_search($type, $types);
	if($typepos === FALSE) return null;
	array_walk($conf, function(&$val, $key) use($typepos) { if(is_array($val)) $val = $val[$typepos]; });
	$conf['type'] = $type;
	$conf['modules'] = call_user_func($conf['modules'], $conf);
	$conf['debug'] = $debug_flag; // skip cache and just concat everything
	return $conf;
};

if(defined('T29_GRAB_LOADER_DEFS')) {
	return; // just grab the vars in the local scope
}

$type = $_GET['type'];
$conf = $conf_for_type($type, isset($_GET['debug']));
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
if(!$debug) $js_cache->start_cache(array($loader, 'compression_filter'), true);
$loader->run();
