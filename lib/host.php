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


	/// Some identifier like a FQDN. Must be overwritten!
	public $hostname = "undefined";

	/**
	 * Factory for creating a t29Host instance automatically
	 * from the current host. This method will decide which 
	 * subclass has to be taken.
	 **/
	static function detect() {
		$instance = null;

		// check if local host file exists
		$hostfile = dirname(__FILE__) . '/../' . self::webroot_host_file;
		if(file_exists($hostfile)) {
			include $hostfile;
			if(class_exists(self::webroot_local_host_classname)) {
				$x = self::webroot_local_host_classname;
				$host = new $x;
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
				$localhost = new t29HeribertHost;
				$localhost->setup();
				return $localhost;
		}
		
		$publichost = new t29PublicHost;
		$publichost->setup();
		return $publichost;
	}
	
	/**
	 * A constructing method which is always called by the t29Host::detect() factory.
	 * It does some general stuff.
	 * Of course you can always write your own setup() class - it's just your __constructor.
	 * The constructor will of course be called before the setup() method.
	 **/
	function setup() {
		$this->is_rewriting_host = isset($_SERVER[self::env_hidesuffix_name]);
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
	
	function rewrite_link($link_target) {
		// rewrite link if neccessary. This function will be called hundreds of times
		// while rendering a page, rewriting all links found.
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
