<?php
/**
 * t29Log is a very lightweight logging system for t29v6.
 *
 * The logging class is accessible via the Singleton pattern, but should
 * be stored in a $GLOBAL["log"] and accessible like that everywhere.
 * The contents are printed in t29Template.
 *
 * Inspired by Klooger for PHP: https://github.com/katzgrau/KLogger/
 **/


class t29Log {
	const EMERG  = 'emerg';  // Emergency: system is unusable
	const ALERT  = 'alert';  // Alert: action must be taken immediately
	const CRIT   = 'crit';   // Critical: critical conditions
	const ERR    = 'err';    // Error: error conditions
	const WARN   = 'warn';   // Warning: warning conditions
	const NOTICE = 'notice'; // Notice: normal but significant condition
	const INFO   = 'info';   // Informational: informational messages
	const DEBUG  = 'debug';  // Debug: debug messages
	
    /**
     * We need a default argument value in order to add the ability to easily
     * print out objects etc. But we can't use NULL, 0, FALSE, etc, because those
     * are often the values the developers will test for. So we'll make one up.
     */
    const NO_ARGUMENTS = 't29Log::NO_ARGUMENTS';
	/*
		log array format:
			[
				[LEVEL,string],
				[LEVEL,string],
				[LEVEL,string],
				...
			]
	*/
	public $entries = array();
	
	// the one global t29Log instance
	private static $instance;
	
	// singleton access method
	static public function get() {
		if(!isset(self::$instance))
			self::$instance = new t29Log;
		return self::$instance;
	}
	
	private function __construct() {
		// we shall be the PHP error handler
		set_error_handler(array($this, 'log_phperror'));
		
		// and register a final shutdown function
		register_shutdown_function(array($this, 'php_shutdown'));
	}
	
	function log($line, $severity, $args = self::NO_ARGUMENTS) {
		if($args !== self::NO_ARGUMENTS)
			$line .= '; '. var_export($args, true);
		$this->entries[] = array($severity, $line);
	}
	
	function log_phperror($errno, $errstr, $errfile, $errline) {
		switch($errno) {
			case E_WARNING: $errno = self::WARN; break;
			case E_NOTICE: $errno = self::NOTICE; break;
			default: $errno = self::WARN; break;
		}
		
		$this->log("Error on line <tt class='line'>$errline</tt> in file <tt class='file'>$errfile</tt>:\n<pre>".htmlspecialchars($errstr)."</pre>",
			$errno);

		/* Don't execute PHP internal error handler */
		return true;
	}
	
	function php_shutdown() {
		if(!$this->is_empty()) {
			// we still have errors. print them!
			$this->print_all('final shutdown');
		}
	}
	
	function is_empty() {
		return empty($this->entries);
	}
	
	function print_all($ul_classes='') {
		// causal printing function. Flushes entries afterwards!
		print "<ul class='$ul_classes'>";
		foreach($this->entries as $entry) {
			printf('<li class="%s">%s</li>'.PHP_EOL, $entry[0], $entry[1]);
		}
		print "</ul>";
		$this->entries = array(); // flush entries!
	}
	
	// convenience functions
	public function FATAL($line, $args = self::NO_ARGUMENTS){
		$this->log($line, self::FATAL, $args);
	}

	public function INFO($line, $args = self::NO_ARGUMENTS){
		$this->log($line, self::INFO, $args);
	}

	public function DEBUG($line, $args = self::NO_ARGUMENTS){
		$this->log($line, self::INFO, $args);
	}
	
} // class