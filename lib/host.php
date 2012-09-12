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

# Lightweight caching system
class t29Host {
	const webroot_host_file = '/host.php'; # relative to webroot
	const webroot_local_host_classname = 't29LocalHost';

	/// Some identifier like a FQDN. Must be overwritten!
	public $hostname = "unknown";

	/**
	 * Factory for creating a t29Host instance automatically
	 * from the current host. This method will decide which 
	 * subclass has to be taken.
	 **/
	static function detect($template_conf) {

		// check if local host file exists
		$hostfile = $template_conf['webroot'].self::webroot_host_file;
		if(file_exists($hostfile)) {
			include $hostfile;
			if(class_exists(self::webroot_local_host_classname)) {
				$x = self::webroot_local_host_classname;
				return new $x(); // this is php.
			}
		}
		
		
		
		// finally just load the default host
		return new t29PublicHost();
	}
}

class t29PublicHost extends t29Host {
	/**
	 * This is actually the default public host which should be loaded
	 * at www.technikum29.de.
	 **/
	 public $hostname = "public";
}

/**
 * Host auf heriberts Rechner; dort wird ein weiterer Metatag mit id eingefuehrt,
 * mit dem seine Firefox Editthispage-Extension die Seite bearbeiten kann.
 **/
class t29HeribertHost extends t29Host {
	public $hostname = "heribert";

	function __construct() {
		include_editor_header();
	}

	function include_editor_header() {
		$this->tmplconf['header_prepend'][] = 
			'<meta name="t29.localfile" content="'.$_SERVER['SCRIPT_FILENAME'].'" id="localFileSource">';
	}
}