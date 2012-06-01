<?php
/**
 * t29RessourceLoader classes.
 * This file behaves to loader.php like template.php behaves to technikum29.php.
 *
 * classes t29JavaScriptRessourceLoader and t29StyleSheetRessourceLoader are also defined in
 * this class.
 *
 * For minification the files JavaScriptMinifier.php and CSSMin.php are included on need.
 **/

class t29RessourceLoader {
	public $conf;
	
	/// @param $conf configuration array.
	function __construct($conf) {
		$this->conf = $conf;
		$this->conf['filenames'] = array_map('basename', $this->conf['modules']); // filenames like foo.js
	}
	
	function print_debug($string) {
		if($this->conf['debug'])
			echo $string;
	}
	
	function print_before_file($mod_filename, $dir_index) {
		$this->print_debug("\n\n/*** t29v6-RessourceLoader[$dir_index]: Start of $mod_filename ***/\n\n");
	}
	
	function print_after_file($mod_filename, $dir_index) {
		echo "\n\n"; // JS: for being sure no former "//" comment in last line wipes out code
		$this->print_debug("\n\n/*** t29v6-RessourceLoader[$dir_index]: End of $mod_filename ***/\n\n");
	}
	
	function print_header($title=null) {
		if(!$title) $title = __CLASS__;
		?>
/*!
 * t29v6 <?=$title; ?> - http://technikum29.de/
 * $Id$
 *
 * Copyright 2012, Sven Koeppel <sven@te...29.de>
 * Licensed under any of Apache, MIT, GPL, LGPL
 * 
 * Packed: <?php echo implode(' ', $this->conf['filenames']); ?> 
 * Arguments: ?debug=true - skip cache and just cat everything
 *            ?purge_cache=true - force rebuild of compressed cache file
 * Gen Date: <?php echo date('r'), PHP_EOL;
		if($title == __CLASS__) print " **/\n";
	}
	
	function run() {
		$this->print_header();
		$this->conf['header'] = ob_get_contents(); // for prepending it to minified code

		foreach($this->conf['modules'] as $i => $mod) {
			$modfile = $this->conf['filenames'][$i];
			$this->print_before_file($modfile, $i);
			readfile($mod);
			$this->print_after_file($modfile, $i);
		}
	} // run

	function compression_filter($output) {
		return $output;
	}
} // class t29RessourceLoader

class t29JavaScriptRessourceLoader extends t29RessourceLoader {
	function print_after_file($mod_filename, $dir_index) {
		global $lib;
		parent::print_after_file($mod_filename, $dir_index);
		if($mod_filename == "msg.js") {
			// special treatment of this file
			$this->print_debug("\n/*** Auto appended ***/\n");
			require "$lib/messages.php";
			echo "t29.msg.data=";
			echo t29Messages::create_json();
			echo ";\n";
		}
	}

	function print_header() {
		parent::print_header('JavaScript Code');
		echo " * Depends heavily on jQuery\n **/\n";
	}
	
	function compression_filter($code) {
		global $lib;
		// reduces code size about 1/2 - before: 23kB, after: 12kB
		require "$lib/JavaScriptMinifier.php";
		$minified = JavaScriptMinifier::minify($code);
		return $this->conf['header'] . $minified;
	}
} // class t29JavaScriptRessourceLoader

class t29StyleSheetRessourceLoader extends t29RessourceLoader {
	function print_header() {
		parent::print_header('StyleSheet Code');
		echo " **/\n";
	}

	function compression_filter($code) {
		global $lib;
		require "$lib/CSSMin.php";
		
		# compression: 40kb to 16kb
		$minified = CSSMin::minify($code);
		return $this->conf['header'] . $minified;
		
	}
} // t29StyleSheetRessourceLoader