<?php
/**
 * t29v6 new Hostinfo and Hosthook system.
 *
 * Local host.php files in the webroot can hook into t29* php
 * and js classes without interfering the code. This can be usually
 * be used for extra svn information.
 * Hostinfos can also be appended in this file and therefore be
 * managed centrally.
 *
 * webroot/host.php muss have a t29LocalHost extends t29Host class.
 *
 **/

abstract class t29Host {
	const webroot_host_file = '/host.php'; # relative to webroot
	const webroot_local_host_classname = 't29LocalHost';
	const env_hidesuffix_name = "T29URLHIDESUFFIX";

	/// $hostname: An identifier like a FQDN. Is only used to identify the t29Host instance and not
	///            for constructing any URL.
	/// This value must be overwritten in child classes!
	public $hostname = "undefined";
	
	/// $document_root := realpath($_SERVER['DOCUMENT_ROOT']), performed by setup().
	///                   Can be used to identify the unix file path to the webserver docroot of the
	///                   webhost. Independent of the t29 system.
	public $document_root;
	
	/// $webroot: The unix file path to the t29 web installation, actually the parent directory
	///           of the lib/ directory. Is widely used by many files and also computed by themselves.
	public $webroot;
	/// $lib  := realpath(__FILE__), just for convenience. $lib = "$webroot/lib" always holds.
	public $lib;
	
	/// $web_prefix: The URL path to the webroot. Example:
	///              http://example.com/path/to/t29/de/page.php
	///                                ^^^^^^^^^^^^
	///                            This part is the web prefix, if /de/page.php is the script_filename.
	/// This value is computed by setup().
	public $web_prefix = "";
	
	/// $has_web_prefix := !empty($web_prefix). If this host is installed in root or not
	public $has_web_prefix = false;
	
	/// $script_filename: The t29-internal identifying url path, like "/de/page.php" or "/en".
	///                   While $_SERVER['SCRIPT_FILENAME'] still contains the $web_prefix, this
	///                   string is sanitized.
	/// This value is computed by setup().
	public $script_filename;

	/// $ressources: CSS and JavaScript file paths ("Assets"), as used by the RessourceLoader,
	///              the loader.php and technikum29.php entry points and the Template.
	private function ressources_array($webroot='') {
		// this is implemented as method, because of
		// 1. "$webbroot/..." like strings. This isn't a good idea anyway (e.g. in ressourceloader: $module_dir_rel2webroot
		// 2. Closures: function($conf){...} doesn't work as class attribute.
		// This is rather dirty, but anyway the supposed way to access these data is the public get_ressources().
		$ressources = array(
			'cache_file' => array('compressed.js', 'style.css'),
			'module_dir' => array("$webroot/shared/js-v6/modules", "$webroot/shared/css-v6/modules"),
			'page_dir' => array("$webroot/shared/js-v6/pagescripts", "$webroot/shared/css-v6/pagestyles"),
			'glob_pattern' => array('*.js', '*.css'),
			'content_types' => array('application/javascript', 'text/css'),
			'class' => array('t29JavaScriptRessourceLoader', 't29StyleSheetRessourceLoader'),
			'modules' => function($conf){ return glob($conf['module_dir'] . '/' . $conf['glob_pattern']); },
		);
		return $ressources;
	}

	/// $ressources_types: The Ressources array above consists of numeric arrays. This array
	///                    maps those positions (numeric keys) to $conf array positions.
	///                    Use get_ressources() to resolve this mapping.
	private $ressources_types = array('js', 'css');

	public function get_ressources($type, $webroot, $debug_flag=false) {
		$typepos = array_search($type, $this->ressources_types);
		if($typepos === FALSE) return null;
		$conf = array_map(function($val) use($typepos) 
			{ return is_array($val) ? $val[$typepos] : $val; },
			$this->ressources_array($webroot));
		$conf['type'] = $type;
		// callback functions need the $conf we built.
		$conf['modules'] = call_user_func($conf['modules'], $conf);
		$conf['debug'] = $debug_flag; // skip cache and just concat everything
		return $conf;
	}

	/**
	 * A special helper class, used by t29Template and technikum29.php entry point.
	 * The general (clean) way would be querying get_ressources().
	 * There is also t29RessourceLoader::get_page_specific_urls() which basically does
	 * the same, just using the global conf array.
	 **/ 
	public function ressources_get_pagestyle($seiten_id) {
		$ressources =  $this->ressources_array();
		// We address the css property directly with the [1] index. Bad!
		return $ressources['page_dir'][1] . '/' . $seiten_id . '.css';
	}

	/// Singleton fun for detect()
	private static $instance;
	private static function new_singleton($classname) {
		if(!isset(self::$instance))
			self::$instance = new $classname;
		return self::$instance;
	}

	/**
	 * Factory for creating a t29Host instance automatically
	 * from the current host. This method will decide which 
	 * subclass has to be taken.
	 * This function als implements the Singleton pattern, so
	 * you can call it frequently.
	 **/
	static function detect() {
		$instance = null;

		// check if local host file exists
		$hostfile = dirname(__FILE__) . '/../' . self::webroot_host_file;
		if(file_exists($hostfile)) {
			include $hostfile;
			if(class_exists(self::webroot_local_host_classname)) {
				$x = self::webroot_local_host_classname;
				$host = self::new_singleton($x);
				$host->setup();
				return $host;
			} else {
				print "Warning: Hostfile $hostfile does not contain class ".self::webroot_local_host_classname."\n";
			}
		}
		
		// Quick and Dirty: Load hostname specific instances
		switch($_SERVER['SERVER_NAME']) {
			case 'heribert':
			case 'localhost':
				$localhost = self::new_singleton('t29HeribertHost');
				$localhost->setup();
				return $localhost;
		}
		
		$publichost = self::new_singleton('t29PublicHost');
		$publichost->setup();
		return $publichost;
	}
	
	/**
	 * A constructing method which is always called by the t29Host::detect() factory.
	 * It does some general stuff.
	 * Of course you can always write your own setup() class - it's just your __constructor.
	 * The constructor will of course be called before the setup() method.
	 *
	 * This method detects two things:
	 *   1. if this host does Clean URLs (Suffix rewriting)
	 *   2. if this host is *not* installed in its own virtualhost (i.e. on docroot). 
	 **/
	private function setup() {
		$this->is_rewriting_host = isset($_SERVER[self::env_hidesuffix_name]);
		
		$this->lib = dirname(__FILE__);
		$this->webroot = realpath($this->lib . '/../');  # file path to root of t29 web installation
		
		/*
		   calculate the web_prefix. This is kind of a detection.
		   
		   Examples for an installation in Document root:
		      $lib = /var/www/technikum29.de/lib
		      $webroot = /var/www/technikum29.de
		      $_SERVER["DOCUMENT_ROOT"] = /var/www/technikum29.de
		      $this->document_root = /var/www/technikum29.de
		      $_SERVER["SCRIPT_FILENAME"] = /var/www/technikum29-www/de/index.php
		      $this->script_filename = /de/index.php
		      $_SERVER["REQUEST_URI"] = /de
		      $_SERVER["SCRIPT_NAME"] = /de/index.php
		      $web_prefix = ""
		      
		   Example for an installation in an arbitrary directory below Document Root:
		     $lib = /var/www/arbitrary/lib
		     $webroot = /var/www/arbitrary
		     $_SERVER['DOCUMENT_ROOT'] = /var/www
		     $this->document_root = /var/www/arbitrary
		     $_SERVER['SCRIPT_FILENAME'] = /var/www/arbitrary/de/index.php
		     $this->script_filename = /arbitrary/de/index.php
		     $_SERVER['REQUEST_URI'] = /arbitrary/de
		     $_SERVER['SCRIPT_NAME'] = /arbitrary/de/index.php
		     $web_prefix = "/arbitrary"
		     
		   Example for an installation in mod_userdirs homedir out of Docroot:
		     $lib = /home/sven/public_html/foo/lib
		     $webroot = /home/sven/public_html/foo
		     $_SERVER['DOCUMENT_ROOT'] = /var/www   (mind that!)
		     $this->document_root = /home/sven/public_html/foo
		     $_SERVER['SCRIPT_FILENAME'] = /~sven/foo/en/index.php
		     $this->script_filename = /~sven/foo/en/index.php
		     $_SERVER['REQUEST_URI'] = /~sven/foo/en/
		     $_SERVER['SCRIPT_NAME'] = /~sven/foo/en/index.php
		     $web_prefix = "/~sven/foo"
		*/

		// this algorithm is good for detecting paths below the document root.
		// it is not suitable for paths out of the document root
		$this->document_root = realpath($_SERVER['DOCUMENT_ROOT']);
		if($this->webroot == $this->document_root) {
			// we are installed in document root
			$this->web_prefix = "";
		} else {
			// we are installed in some arbitary directory
			$this->web_prefix = substr($this->webroot, strlen($this->document_root));
		}
		
		// TODO: Somehow autodetect paths out of the document root
		
		$this->has_web_prefix = !empty($this->web_prefix);
		
		//print "Web prefix:<pre>";
		//var_dump($this); exit;
		   
		$this->script_filename = substr(realpath($_SERVER['SCRIPT_FILENAME']), strlen($this->document_root)); # e.g.: "/de/page.php"
		
		// Windows realpath() converts Unix Paths ($_SERVER) to Windows Paths (like \en\index.php).
		// We want to use unix paths ($_SERVER like) internally, so do this dummy conversion back, if neccessary
		$this->script_filename = str_replace('\\', '/', $this->script_filename);
		
		//phpinfo(); exit;
	}
	
	function check_url_rewrite() {
		if($this->is_rewriting_host) {
			$path = $_SERVER['REQUEST_URI'];
			$newpath = $this->rewrite_link($path);
			if($path != $newpath) {
				header('HTTP/1.1 301 Moved Permanently');
				header('Location: '.$newpath);
				return $newpath;
			}
		}
		return null;
	}

	public function __toString() {
		return 't29v6/'.$this->hostname;
	}
	
	/**
	 * Rewrite Links so they match for this host.
	 * This method acts like a pipeline:
	 *  $new_link = rewrite_link($old_link);
	 * It can perform two conversions:
	 *
	 *   1. Rewriting/Clean URL system: Will strip file suffixes, if appropriate.
	 *      This will be done whenever this is a rewriting host and this is the
	 *      main purpose for this function.
	 *
	 *   2. Prefixing the correct web prefix. This is *only* be done when
	 *      $also_rewrite_prefix = true. The reaseon is that prefix rewriting is
	 *      generally done by a global page rewrite after generation of the whole
	 *      page on a whole-page-level. This is less error prone.
	 *      Anyway you can use this function if you think you need. blubblubb
	 *
	 *
	 **/
	function rewrite_link($link_target, $also_rewrite_prefix=false) {
		// rewrite link if neccessary. This function will be called hundreds of times
		// while rendering a page, rewriting all links found.
		
		// pending: prefix setzen.
		if($this->has_web_prefix && $also_rewrite_prefix) {
			$link_target = $this->web_prefix . $link_target;
		}
		
		if($this->is_rewriting_host) {
			$new_target = preg_replace('/\.(?:php|shtml?)([#?].+)?$/i', '\\1', $link_target);
			return $new_target;
		} else {
			// just the identity function
			return $link_target;
		}
		
	}
	
	function get_shorthand_link_returner() {
		$t = $this;
		return function($link_target)use($t) { return $t->rewrite_link($link_target); };
	}

	abstract function fillup_template_conf(&$template_conf);
}

class t29PublicHost extends t29Host {
	/**
	 * This is actually the default public host which should be loaded
	 * at www.technikum29.de.
	 **/
	public $hostname = "public";
	function fillup_template_conf(&$template_conf) {}
}

/**
 * Host auf heriberts Rechner; dort wird ein weiterer Metatag mit id eingefuehrt,
 * mit dem seine Firefox Editthispage-Extension die Seite bearbeiten kann.
 **/
class t29HeribertHost extends t29Host {
	public $hostname = "heribert";

	function fillup_template_conf(&$template_conf) {
		$template_conf['header_prepend'][] = 
			'<meta name="t29.localfile" content="'.$_SERVER['SCRIPT_FILENAME'].'" id="localFileSource">';
	}
}
