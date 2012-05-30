<?php
header("Content-Type: application/javascript");

$lib = dirname(__FILE__);
$webroot = realpath("$lib/../");  # file path to root of t29 web installation
$cache_file = 'compressed.js';
$module_dir = "$webroot/shared/js-v6/modules";
$modules = glob("$module_dir/*.js");

$debug = isset($_GET['debug']); // skip cache and just concat everything

if(!$debug) {
	require "$lib/cache.php";
	$js_cache = new t29Cache();
	$js_cache->test_files = $modules;
	$js_cache->set_cache_file($webroot, $cache_file);
	$js_cache->try_cache_and_exit();
	$js_cache->start_cache('minify_javascript', true);
}

$filenames = array_map('basename', $modules); // filenames like foo.js
?>
/*!
 * t29v6 JavaScript Code
 * http://technikum29.de/
 * $Id$
 *
 * Copyright 2012, Sven Koeppel <sven@te...29.de>
 * Licensed under any of Apache, MIT, GPL, LGPL
 * 
 * Depends heavily on jQuery
 * Packed: <?php echo implode(' ', $filenames); ?> 
 * Arguments: ?debug=true - skip cache and just cat everything
 *            ?purge_cache=true - force rebuild of compressed cache file
 * Date: <?php echo date('r'); ?>
 */
<?php

$header = ob_get_contents(); // for prepending it to minified code

foreach($modules as $i => $mod) {
	$modfile = $filenames[$i];
	if($debug) echo "\n\n/*** t29v6-RessourceLoader: Start of $modfile ***/\n\n";
	readfile($mod);
	echo "\n\n"; // for being sure no former "//" comment in last line wipes out code
	
	if($modfile == "msg.js") {
		// special treatment of this file
		if($debug) echo "\n/*** Auto appended ***/\n";
		require "$lib/messages.php";
		echo "t29.msg.data=";
		echo t29Messages::create_json();
		echo ";\n";
	}

	if($debug) echo "\n\n/*** t29-v6-RessourceLoader: End of $modfile ***/\n\n";
}


function minify_javascript($code) {
	global $lib, $header;
	// reduces code size about 1/2 - before: 23kB, after: 12kB
	require "$lib/JavaScriptMinifier.php";
	$minified = JavaScriptMinifier::minify($code);
	return $header . $minified;
}