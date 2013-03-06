<?php
/**
 * t29v6 Message subsystem.
 * now with instanciated message overwriting.
 *
 **/

// You can run this script to get all messages as JSON.
// See also /shared/js/modules/msg.js and js.php.
if(realpath($_SERVER['SCRIPT_FILENAME']) == __FILE__) {
	header('Content-Type: application/json');
	if(isset($_GET['pre'])) echo $_GET['pre'];
	echo t29Messages::create_json();
	if(isset($_GET['post'])) echo ";\n".$_GET['post'];
}

class t29Messages {
	/// when instanciated, stores the language to lookup for _()
	public $lang;
	
	/// The order of array elements in $msg. This array maps
	/// $lang shortstring to array index position.
	public static $order = array('de' => 0, 'en' => 1);
	
	function __construct($lang) {
		$this->lang = $lang;
	}

	/**
	 * Add new messages to the local overwrite array.
	 **/
	function set($str_id, $content) {
		$this->local_msg[$str_id] = $content;
	}

	/**
	 * The translate function, shorthand like the gettext shorthand.
	 * There's actually no long method name version :D
	 * @param str_id  Some key from the $msg array
	 * @param lang  The wanted target language (string like 'de' or 'en'). Leave empty for object default lang ($this->lang)
	 * @returns Found string in current locale ($lang)
	 **/
	function _($str_id, $lang=null) {
		// local overwrites come first
		if(isset($this->local_msg[$str_id]))
			return $this->local_msg[$str_id];
	
		$lang = ($lang && isset(self::$order[$lang])) ? $lang : $this->lang;
		if(!isset(self::$msg[$str_id])) {
			return "&lt;$str_id&gt;"; // error; mediawiki style
		} else {
			if(is_array(self::$msg[$str_id])) {
				return self::$msg[$str_id][ self::$order[$lang] ];
			} else
				return self::$msg[$str_id];
		}
	}
	
	/**
	 * Returns a function which prints the output of _. Usage:
	 *
	 * $msg = new t29Messages("foo");
	 * print $msg->_("foobar");              // ordinary long version
	 * $_ = $msg->get_shorthand_printer();
	 * $_("foobar");                         // same but shorter
	 **/
	function get_shorthand_printer() {
		$t = $this;
		return function($str,$lang=null)use($t) { print $t->_($str,$lang); };
	}

	/// same like get_shorthand_printer but return instead of print
	function get_shorthand_returner() {
		$t = $this;
		return function($str,$lang=null)use($t) { return $t->_($str,$lang); };
	}

	/**
	 * Returns the $msg array as well as the order array encoded as JSON.
	 * The output will look like '{order:{de:0,en:1},msg:{'foo':['bar,'baz']}}'.
	 * A given $filter_regexp will be run on the msg keys and hence give
	 * out only matching entries. Example: $filter_regexp = "/^js-/"
	 * would filter out all JavaScript related entries.
	 * This method doesn't consider the $local_msg's.
	 **/
	static function create_json($filter_regexp=false) {
		$msg = $filter_regexp ? array_intersect_key(self::$msg,
				array_flip(preg_grep($filter_regexp, array_keys(self::$msg)))
				) : self::$msg;
		return json_encode(array(
			'order' => self::$order,
			'msg'   => $msg
		));
	}

	/**
	 * Since the static messages are considered as `const`, any changes/overwrites
	 * will be applied to the instanciated object. Use the gettext for correct
	 * handling.
	 * This array simply maps message id to string without language handling since
	 * the instances don't know languages.
	 */
	public $local_msg = array();

	/**
	 * The Messages array maps a message id (string) to the message text
	 * (string or numeric array). If the message value is an array, it will be
	 * interpreted as multi language string, whereas the mapping from language
	 * to index is supposed to be done via the $order array (see above).
	 **/
	public static $msg = array(
		'html-title'             => 'technikum29',
		'head-h1-title'          => array('Zur technikum29 Startseite', 'Go to technikum29 homepage'),
		'head-h1'                => 'technikum29',
		'homepage-pagename'      => 'startseite', # seiten_id der startseite

		'sidebar-h2-tour'        => array('Museumstour', 'Museum Tour'),
		'sidebar-h2-mainnav'     => array('Hauptnavigation', 'Main Navigation'),
		'sidebar-h2-lang'        => array('Sprachauswahl', 'Language'),

		'topnav-interlang-title' => array('Die Seite "%s" auf Deutsch lesen', 'Read the page "%s" in English'),
		'topnav-interlang-active' => array('Sie betrachten gerade die Seite "%s" auf Deutsch', 'You currently read the page "%s" in English'),
		'topnav-interlang-nonexistent' => array('Diese Seite steht auf Deutsch nicht zur Verfügung', 'This page is not available in English'),
		'topnav-search-label'    => array('Suchen', 'Search'),
		'topnav-search-page'     => array('/suche.php', '/search.php'),
		'opensearch-desc'        => array('technikum29 (de)', 'technikum29 (en)'),

		'js-menu-collapse-out'   => array('Mehr Details', 'Expand menu'),
		'js-menu-collapse-in'    => array('Weniger Details', 'Fold menu'),
		'js-menu-scroll-show'    => array('Menü einblenden', 'Show menu'),
		'js-menu-scroll-hide'    => array('Menü ausblenden', 'Hide menu'),

		'footer-copyright-tag'   => '&copy; 2003-2012 technikum29.',
		'footer-legal-link'      => array('Impressum und Kontakt', 'Legal notices'),
		'footer-legal-file'      => array('/impressum.php', '/contact.php'),
		'footer-legacy-text'     => array('&copy; 2003-2013 technikum29. Alle Bilder und Fotografien sind kopierrechtlich geschüzt, siehe <a href="/de/impressum.php" class="go">Impressum</a>',
		                                  '&copy; 2003-2013 technikum29. You must not use contents and photographies without the permission of the owner. <a href="/en/contact.php" class="go">Legal Information</a>.'),
		
		'nav-hierarchy-current'  => array('Aktuelle Seite', 'Current page'),
		'nav-hierarchy-ancestor' => array('Übergeordnete Kategorie der aktuellen Seite', 'Parental category of current page'),
		'nav-rel-prev'           => array('vorherige Seite', 'previous page'),
		'nav-rel-next'           => array('nächste Seite', 'next page'),
		'nav-rel-start'          => array('Starte Führrung', 'Start guided tour'),
		
		'head-rel-first'         => array('Deutscher Start', 'English start'),
		'head-rel-prev'          => array('Zur vorherigen Seite (%s)', 'Previous Page (%s)'),
		'head-rel-next'          => array('Zur folgenden Seite (%s)', 'Next Page (%s)'),
		 //'head-rel-interlang'     => array('Deutsche Version dieser Seite (%s)', 'English Version of this page (%s)'),
		
		// used in /shared/js/modules/heading_links.js
		'js-heading-links'       => array("Direktlink zu diesem Abschnitt", "Link to this section"),
		// used in /shared/js/modules/img_license.js
		'js-img-license'         => array(
										'&copy; technikum29. <a href="/de/impressum.php#image-copyright">Lizenzbestimmungen</a>',
										'&copy; technikum29. <a href="/en/contact.php#image-copyright">Licensing terms</a>',
									),
									
		// piwik logging settings
		'js-piwik-noscript-imgsrc' => '/logs/piwik/piwik.php?idsite=1',
		'js-piwik-url-prefix' => '/logs/piwik/',
		'js-piwik-siteid' => '1',
		
		// interlang.js
		'js-interlang-notify-heading' => array("This page is also avaliable in English", "Diese Website gibt es auch auf Deutsch"),
		'js-interlang-notify-text' => array("Do you want to switch to the English version <i>%s</i>?", "Möchtest du die deutschsprachige Seite <i>%s</i> lesen?"),
	);
}
