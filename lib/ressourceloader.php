<?php
/**
 * t29RessourceLoader classes.
 *
 * The t29 ressource loading system features full caching, directory file input,
 * OOP style file type specific functions, pre/post per file injection hooks
 * (AOP style) and post output content filtering where compression tools for
 * JavaScript and CSS are used.
 *
 * The architecture and compression technique is highly inspired by the
 * RessourceLoader framework of MediaWiki 1.20.
 *
 * These classes make usage of class inheritance, heavy PHP output buffering, the
 * t29v6 caching subsystem and the general t29v6 variable convencience.
 *
 * This file defines classes t29{,JavaScript,StyleSheet}RessourceLoader.
 * Libs JavaScriptMinifier.php and CSSMin.php are included on per-method
 * level for minification.
 *
 * 2012 Sven Koeppel
 *
 **/
 
/*
// test it:
$lib = dirname(__FILE__);
$webroot = realpath("$lib/../");
$js = t29RessourceLoader::create_from_type('css');
$js->run();
*/

class t29RessourceLoader {
	/**
	 * expects: type, cache_file, module_dir, page_dir, glob_pattern, content_types, class, modules, debug, host
	 **/
	public $conf;
	
	const default_include_url = '/lib/loader.php'; // rel to webroot
	
	/**
	 * Construct with configuration array. See loader.php for contents of
	 * that array. See above for minimum elements which must be present.
	 * @param $conf Configuration array
	 **/
	function __construct($conf) {
		$this->conf = $conf;
		$this->conf['filenames'] = array_map('basename', $this->conf['modules']); // filenames like foo.js
	}
	
	static function create_from_type($type, $baseconf=null) {
		global $lib, $webroot, $host;
		$conf = $host->get_ressources($type, $webroot, isset($baseconf['debug']) && $baseconf['debug']);
		if($conf === null) return null;
	
		return new $conf['class']($conf);		
	}
	
	function get_page_specific_urls($seiten_id) {
		global $webroot;
		$file = sprintf("%s/%s.%s", $this->conf['page_dir'], $seiten_id, $this->conf['type']);
		// TODO: This is hacky. Same in get_urls.
		$file_rel2webroot = str_replace($webroot, '', $file);
		return file_exists($file) ? array($file_rel2webroot) : array();
	}
	
	/**
	 * Return a list of URLs appropriate for being included in a website. In general this
	 * should be a list with one element, like array("/lib/loader.php?type=js"), which can
	 * be directly expanded to a <script src="$1"></script> tag. Same applies for CSS.
	 * In debug mode, the list will contain all base files.
	 *
	 * The URLs are relative to the t29 web document root, that is, no host specific web prefix
	 * handling here.
	 *
	 * There is especially an issue with web prefixes and debug mode: Since clean untouched CSS/JS
	 * files are passed there, there cannot be any rewriting in progress.
	 *
	 * @returns array
	 **/
	function get_urls($debug=null) {
		global $webroot;
		if(($debug !== null && $debug) || !$this->conf['debug']) {
			return array(self::default_include_url . '?type=' . $this->conf['type']);
		} else {
			$module_dir_rel2webroot = str_replace($webroot, '', $this->conf['module_dir']);
			return array_map(function($i)use($module_dir_rel2webroot){ return $module_dir_rel2webroot.$i; }, $this->conf['filenames']);
		}
	}
	
	/**
	 * Print out debug messages, only if debug switch is given.
	 **/
	protected function print_debug($string) {
		if($this->conf['debug'])
			echo $string;
	}

	/**
	 * Module hooking: By overwriting this method and looking at $mod_filename,
	 * you can inject any output before that given file.
	 *
	 * Example:
	 *  class YourRessourceLoader extends t29RessourceLoader {[
	 *     function print_before_file($file, $i) {
	 *         parent::print_before_file($file, $i);
	 *         print "Make a boo boo loading the ${i}. file named ${file}!";
	 *     }
	 *  }
	 * This will prepend that string before the output of the file.
	 * 
	 * Always call the parent function when overwriting so that output is printed,
	 * too! (See example)
	 *
	 * @param $mod_filename Filename of module, like "foo.js".
	 * @param $dir_index Iteration index while traversing the directory (see run()). Not so important.
	 * @returns String that 
	 **/
	function print_before_file($mod_filename, $dir_index) {
		$this->print_debug("\n\n/*** t29v6-RessourceLoader[$dir_index]: Start of $mod_filename ***/\n\n");
	}

	/**
	 * Same as print_before_file but will append your content to the file.
	 * Obey calling parent::print_after_file at first so that corrections in
	 * the super class can be done!
	 *
	 * The implementation in t29RessourceLoader prints some newlines to make sure
	 * JavaScript oneliner comments at the end of a file won't comment out another
	 * file's first line.
	 *
	 **/
	function print_after_file($mod_filename, $dir_index) {
		echo "\n\n"; // JS: for being sure no former "//" comment in last line wipes out code
		$this->print_debug("\n\n/*** t29v6-RessourceLoader[$dir_index]: End of $mod_filename ***/\n\n");
	}

	/**
	 * A generic print_header function which will be called at first. Give out some
	 * stuff you want to prepend to your overall output. This method provides you a
	 * generic JS/CSS compilant message where you can give your own $title string
	 * or use no title (it will use your class name instead). If called with $title != null,
	 * the C++ style multi line comment won't be closed so you can append your own
	 * stuff.
	 **/
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
	
	/**
	 * The main run() function will print out the header and concatenate all
	 * modules contents. Expects OutputBuffering running!
	 **/
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

	/**
	 * Overwrite compression_filter for filtering the whole output made by this
	 * class. It is used as a shutdown filter in t29Cache, see usage in loader.php.
	 * @param $output The output string fetched by OutputBuffering
	 * @returns The filtered String. The default implementation just returns $output.
	 **/
	function compression_filter($output) {
		return $output;
	}
} // class t29RessourceLoader


class t29JavaScriptRessourceLoader extends t29RessourceLoader {
	function print_after_file($mod_filename, $dir_index) {
		global $lib;
		parent::print_after_file($mod_filename, $dir_index);
		if($mod_filename == "msg.js") {
			// append system messages to the special msg.js file
			// to inject PHP code to JS userspace.
			$this->print_debug("\n/*** Auto appended ***/\n");
			require "$lib/messages.php";
			echo "t29.msg.data=";
			echo t29Messages::create_json('/^js-/');
			echo ";\n";
		}
	}
	
	function get_page_specific_urls($seiten_id) {
		$urls = parent::get_page_specific_urls($seiten_id);
		switch($seiten_id) {
			case 'impressum':
				$urls[] = 'http://maps.google.com/maps?file=api&amp;v=2&amp;sensor=false&amp;key=ABQIAAAAraTKZ5cINardZ8ITNVssKhRcOoEBtCgYLJRQznXYEV8m1M3fRRRT9wMSvFwhyo62fD3KyiwQxe5ruw';
				break;
		}
		return $urls;
	}

	function print_header($title=null) {
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
	function print_header($title=null) {
		parent::print_header('StyleSheet');
		echo " **/\n";
	}

	function compression_filter($code) {
		global $lib, $host;
		if($host->has_web_prefix)
			// rewrite CSS image includes
			$code = preg_replace('#(url\(["\']?)/#i', '\\1'.$host->web_prefix.'/', $code);
		
		
		require "$lib/CSSMin.php";
		# compression: 40kb to 16kb
		$minified = CSSMin::minify($code);
		return $this->conf['header'] . $minified;
		
	}
} // t29StyleSheetRessourceLoader
