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

if(!isset($_GET['type'])) {
	die("Read manual.");
}

$types = array('js', 'css'); // mapping position (numeric key) => $conf array position
$conf = array(
	'cache_file' => array('compressed.js', 'style.css'),
	'module_dir' => array("$webroot/shared/js-v6/modules", "$webroot/shared/css-v6/modules"),
	'glob_pattern' => array('*.js', '*.css'),
	'content_types' => array('application/javascript', 'text/css'),
	'class' => array('t29JavaScriptRessourceLoader', 't29StyleSheetRessourceLoader'),
);

$type = $_GET['type'];
$typepos = array_search($type, $types);
if($typepos === FALSE) {
	die("Illegal type. Valid types are: ". implode($types));
}

array_walk($conf, function(&$val, $key) use($typepos) { $val = $val[$typepos]; });
$conf['modules'] = glob($conf['module_dir'] . '/' . $conf['glob_pattern']);
$conf['debug'] = isset($_GET['debug']); // skip cache and just concat everything
extract($conf); // for saving long human reading times :D
// alternative approach for direct extract in global namespace
// (no more applicable because configuration is given as array to constructor):
// foreach($conf as $var => $val) { $GLOBALS[$var] = $val[$typepos]; }

require "$lib/cache.php";
$js_cache = new t29Cache();
$js_cache->test_files = $modules;
$js_cache->set_cache_file($webroot, $cache_file);

header("Content-Type: $content_types");
if(!$debug) $js_cache->try_cache_and_exit();

# so we are still in the game
require "$lib/ressourceloader.php";
$loader = new $class($conf);
$js_cache->start_cache(array($loader, 'compression_filter'), true);
$loader->run();
