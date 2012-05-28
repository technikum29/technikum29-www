<?php
header("Content-Type: application/javascript");

$lib = dirname(__FILE__);
$webroot = realpath("$lib/../");  # file path to root of t29 web installation
$cache_file = "$webroot/shared/cache/compressed.js";
$module_dir = "$webroot/shared/js-v6/modules";
$modules = glob("$module_dir/*.js");

$debug = isset($_GET['debug']); // skip cache and just concat everything
$purge_cache = isset($_GET['purge_cache']); // rebuild cache file (compressed)

if(!$debug && !$purge_cache) {
	// check cache and all input files
	$filem_cache = @filemtime($cache_file);
	$filem_moddir = @filemtime($module_dir); // if new modules were added
	$filem_modules = array_reduce(array_map(function($x){return @filemtime($x);}, $modules), 'max');
	$cache_valid = $filem_cache && $filem_modules < $filem_cache && $filem_moddir < $filem_cache;

	if($cache_valid) {
		header("Last-Modified: ".gmdate("D, d M Y H:i:s", $filem_cache)." GMT");
		if(@strtotime($_SERVER['HTTP_IF_MODIFIED_SINCE']) == $filem_cache)
			// client already has page cached locally
			header("HTTP/1.1 304 Not Modified");
		else
			readfile($cache_file);
		exit;
	}
}

if(!$debug) ob_start();
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

if($debug) exit; // just here without compressing etc.

$code = ob_get_flush();

// reduces code size about 1/2 - before: 23kB, after: 12kB
require "$lib/JavaScriptMinifier.php";
$code = JavaScriptMinifier::minify($code);

// write out file.
file_put_contents($cache_file, $code);

print $code;