<?php
/**
 * Main caching and output system.
 * Modes:
 *  SKIP  = Skips any caching. By enabling this you just disable
 *          the caching system which can be great for testing.
 *          use_cache() will always return false and write_cache()
 *          will just skip any work.
 *
 *  PURGE = Enforce a rewrite of the cache. use_cache() will always
 *          return false and therefore the cache file will be rewritten
 *          as if it didn't exist.
 *
 *  DEBUG = Debug cache validation calculation and output calculation.
 *          This will print verbose data just whenever called. The 
 *          cache system can be run around that, but "NOT CHANGED" calls
 *          will just abort the scenery. Somewhat weird.
 *
 *  VERBOSE = Print verbose Messages as HTML Comments (print_info)
 *            or error messages in div spans. This is useful for any
 *            HTML output but should be disabled for JS/CSS caching.
 **/

# Lightweight caching system
class t29Cache {
	const webroot_cache_dir = '/shared/cache'; # relative to webroot

	public $skip = false;
	public $purge = false;
	public $debug = false;// debug calculation
	public $verbose = false; // print html comments and errors

	// these must be set after constructing!
	public $cache_file; // must be set!
	public $test_files = array(); // must be set!
	public $test_conditions = array(); // can be filled with booleans

	private $mtime_cache_file = null; // needed for cache header output
	private $is_valid = null; // cache output value

	function __construct($debug=false, $verbose=false, $skip=false) {
		// default values
		$this->skip = isset($_GET['skip_cache']) || $skip;
		$this->purge = isset($_GET['purge_cache']);
		$this->debug = isset($_GET['debug_cache']) || $debug;
		$this->verbose = isset($_GET['verbose_cache']) || $verbose || $this->debug;
	}
	
	/**
	 * expecting:
	 * @param $webroot /var/www/foo/bar  (no trailing slash!)
	 * @param $filename /de/bar/baz.htm  (starting with slash!)
	 * @returns absolute filename /var/www/foo/bar/cache/dir/de/bar/baz.htm
	 **/
	function set_cache_file($webroot, $filename) {
		$this->cache_file = $webroot . self::webroot_cache_dir . '/' . $filename;
	}
	
	# helper function
	public static function mkdir_recursive($pathname) {
		is_dir(dirname($pathname)) || self::mkdir_recursive(dirname($pathname));
		return is_dir($pathname) || @mkdir($pathname);
	}

	/**
	 * Calculates and compares the mtimes of the cache file and testing files.
	 * Doesn't obey any debug/skip/purge rules, just gives out if the cache file
	 * is valid or not.
	 * The result is cached in $is_valid, so you can call this (heavy to calc)
	 * method frequently.
	 **/
	function is_valid() {
		// no double calculation
		if($this->is_valid !== null) return $this->is_valid;

		if($this->debug) {
			print '<pre>';
			print 't29Cache: Validity Checking.'.PHP_EOL;
			print 'Cache file: '; var_dump($this->cache_file);
			print 'Test files: '; var_dump($this->test_files);
			print 'Test conditions: '; var_dump($this->test_conditions);
		}

		$this->mtime_cache_file = @filemtime($this->cache_file);
		$mtime_test_files = array_map(
			function($x){return @filemtime($x);},
			$this->test_files);
		$mtime_test_max = array_reduce($mtime_test_files, 'max');
		// new feature: Testing boolean conditions. If $this->test_conditions is
		// an empty array, the calculation gives true.
		$test_conditions = array_reduce($this->test_conditions, function($a,$b){ return $a && $b; }, true);
		$this->is_valid = $this->mtime_cache_file
			&& $mtime_test_max < $this->mtime_cache_file && $test_conditions;
			
		if($this->debug) {
			print 'Cache mtime: '; var_dump($this->mtime_cache_file);
			print 'Test files mtimes: '; var_dump($mtime_test_files);
			print 'CACHE IS VALID: '; var_dump($this->is_valid);
		}

		return $this->is_valid;
	}

	/**
	 * The "front end" to is_valid: Takes skipping and purging rules into
	 * account to decide whether you shall use the cache or not.
	 * @returns boolean value if cache is supposed to be valid or not.
	 **/
	function shall_use() {
		$test = $this->is_valid() && !$this->skip && !$this->purge;
		if($this->debug) {
			print 'Shall use Cache: '; var_dump($test);
		}
		return $test;
	}
	
	/**
	 * Prints out cache file with according HTTP headers and HTTP caching
	 * (HTTP_IF_MODIFIED_SINCE). You must not print out anything after such a http
	 * header! Therefore consider using the convenience method print_cache_and_exit()
	 * instead of this one or exit on yourself.
	 *
	 * @param $ignore_http_caching Don't check the clients HTTP cache
	 * @param $skip_http_headers Don't send HTTP headers. Used for instance in Footer cache.
	 **/
	function print_cache($ignore_http_caching=false, $skip_http_headers=false) {
		// make sure we already have called is_valid
		if($this->mtime_cache_file === null)
			$this->is_valid(); // calculate mtime

		if(!$skip_http_headers) {
			if(!$this->debug) {
				header("Last-Modified: ".gmdate("D, d M Y H:i:s", $this->mtime_cache_file)." GMT");
				//header("Etag: $etag");
			}

			if(!$ignore_http_caching && @strtotime($_SERVER['HTTP_IF_MODIFIED_SINCE']) == $this->mtime_cache_file) {
				// client already has page cached locally
				if($this->debug) {
					print 'Would send Client a NOT MODIFIED answer.' . PHP_EOL;
				} else {
					header("HTTP/1.1 304 Not Modified");
					// important - no more output!
				}
				return;
			}
		} else {
			if($this->debug)
				print 'Skipping HTTP Headers as requested' . PHP_EOL;
		}
		
		if($this->debug) {
			print 'Would send Client output of ' . $this->cache_file . PHP_EOL;
		} else {
			readfile($this->cache_file);
		}
	}
	
	/**
	 * Convenience method which will exit the program after calling print_cache().
	 **/
	function print_cache_and_exit() {
		$this->print_cache();
		exit;
	}

	/**
	 * Convenience method for calling the typical workflow: Test if the cache file
	 * shall be used, and if yes, print it out and exit the program. If this method
	 * returns, you can be sure that you have to create a (new) cache file. So your
	 * typical code will look like:
	 *
	 *  $cache = new t29Cache();
	 *  // initialization stuff $cache->... = ...
	 *  $cache->try_cache_and_exit();
	 *  // so we are still alive - go making content!
	 *  $cache->start_cache(...);
	 *  echo "be happy";
	 *  $cache->write_cache(); // at least if you didn't use any registered shutdown function.
	 *
	 **/
	function try_cache_and_exit() {
		if($this->shall_use())
			$this->print_cache_and_exit();
	}

	/**
	 * Start Output Buffering and prepare a register shutdown func,
	 * if wanted. Most likely you will call this method with arguments,
	 * otherwise it just calls ob_start() and that's it.
	 *
	 * TODO FIXME Doku outdated for this method --
	 *
	 * $register_shutdown_func can be:
	 *   - Just 'true': Then it will tell t29Cache to register it's
	 *     own write_cache() method as a shutdown function for PHP so
	 *     the cache file is written on script exit.
	 *   - A callable (method or function callable). This will be
	 *     registered at PHP shutdown, *afterwards* our own write_cache
	 *     method will be called. Thus you can inject printing some
	 *     footer code.
	 *   - A filter function. When $shutdown_func_is_filter is set to
	 *     some true value, your given callable $register_shutdown_func
	 *     will be used as a filter, thus being called with the whole
	 *     output buffer and expected to return some modification of that
	 *     stuff. Example:
	 *        $cache->start_cache(function($text) {
	 *          return strtoupper($text); }, true);
	 *     This will convert all page content to uppercase before saving
	 *     the stuff to the cache file.
	 **/
	//function start_cache($register_shutdown_func=null, $shutdown_func_is_filter=false) {
	function start_cache(array $args) {
		$defaults = array(
			'shutdown_func' => null,
			'filter_func'   => null,
			'write_cache'   => true,
		);
		$args = array_merge($defaults, $args);
		
		if($this->debug)
			print "Will start caching with shutdown: " . $args['shutdown_func'] . PHP_EOL;
			
		// check if output file is writable; for logging and logging output
		// purpose.
		//if(!is_writable($this->cache_file))
		//	print "Cache file not writable: ".$this->cache_file;
		//	print "\n";
		//exit;

		ob_start();

		if($args['shutdown_func'] || $args['filter_func']) {
			// callback/filter given: Register a shutdown function
			// which will call user's callback at first, then
			// our own write function. and which handles filters
			$t = $this; // PHP stupidity
			register_shutdown_function(function()  use($args, $t) {
				if($args['filter_func']) {
					// also collect the shutdown func prints in the $content
					if($args['shutdown_func'])
						call_user_func($args['shutdown_func']);

					$content = ob_get_clean();
					if($t->debug)
						// can print output since OutputBuffering is finished
						print 't29Cache: Applying user filter to output' . PHP_EOL;
					$content = call_user_func($args['filter_func'], $content);
					print $content;
						
					if($args['write_cache'])
						$t->write_cache($content);
					return;
				} else if($args['shutdown_func'])
					call_user_func($args['shutdown_func']);
				if($args['write_cache'])
					$t->write_cache();
			});
		} elseif($args['write_cache']) {
			// Just register our own write function
			register_shutdown_function(array($this, 'write_cache'));
		} else {
			// nothing given: Dont call our write function,
			// it must therefore be called by hand.
		}
	}

	/**
	 * Write Cache file. If the $content string is given, it will
	 * be used as the cache content. Otherwise, a running output buffering
	 * will be assumed (as start_cache fires it) and content will be
	 * extracted with ob_get_flush.
	 * @param $content Content to be used as cache content or OB content
	 * @param $clear_ob_cache Use ob_get_clean instead of flushing it. If given, 
	 *                        will return $content instead of printing/keeping it.
	 **/
	function write_cache($content=null, $clear_ob_cache=false) {
		if(!$content)
			$content = ($clear_ob_cache ? ob_get_clean() : ob_get_flush());

		if($this->skip) {
			$this->print_info('skipped cache and cache saving.');
			//return; // do not save anything.
		} else {
			if(!file_exists($this->cache_file)) {
				if(!self::mkdir_recursive(dirname($this->cache_file)))
					$this->print_error('Could not create recursive caching directories');
			}
			
			if(@file_put_contents($this->cache_file, $content))
				$this->print_info('Wrote output cache successfully');
			else
				$this->print_error('Could not write page output cache to '.$this->cache_file);
		}

		if($clear_ob_cache)
			return $content;
	}
	
	
	private function print_info($string, $even_if_nonverbose=false) {
		if($this->verbose || $even_if_nonverbose)
			echo "<!-- t29Cache: $string -->\n";
	}
	
	private function print_error($string, $even_if_nonverbose=false) {
		require_once dirname(__FILE__).'/logging.php';
		$log = t29Log::get();
		
		if($this->verbose || $even_if_nonverbose)
			$log->WARN("t29Cache: ".$string, t29Log::IMMEDIATELY_PRINT);
	}
}