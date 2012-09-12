<?php
/**
 * Needs conf:
 *  webroot lang_path lang seiten_id languages
 *
 **/
class t29Menu {
	public $conf;
	public $xml;

	// jeweils relativ zum lang_path
	const navigation_file = 'navigation.xml';
	const news_file = 'news.php';

	// xpath queries to the navigation elements
	const horizontal_menu = '/html/nav[@class="horizontal"]';
	const sidebar_menu = '/html/nav[@class="side"]';

	function __construct($conf_array) {
		$this->conf = $conf_array;
		
		// libxml: don't raise errors while parsing.
		// will fetch them with libxml_get_errors later.
		//libxml_use_internal_errors(true);

		// load xml file
		$this->xml = simplexml_load_file($this->conf['webroot'].$this->conf['lang_path'] . '/' . self::navigation_file);
		if($this->xml_is_defective()) {
			trigger_error("Kann Navigationsdatei nicht verwenden, da das XML nicht sauber ist. Bitte reparieren!");
		}
	}

	function xml_is_defective() {
		// check if return value of simplexml_load_file was false,
		// which means parse error.
		return $this->xml === FALSE;
	}
	
	///////////////////// NEWS EXTRACTION
	function load_news_data() {
		$newsfile = $this->conf['webroot'].$this->conf['lang_path']."/".self::news_file;
		$newsdir = dirname(realpath($newsfile));
		// include path wird ignoriert wenn include relativ ist, was in der
		// eingebundenen Datei der Fall ist 
		// set_include_path( get_include_path(). PATH_SEPARATOR . dirname($newsfile));
		$pwd = getcwd(); chdir($newsdir);
		include(self::news_file);
		chdir($pwd);
		return $neues_menu;
	}

	function convert_news_data() {
		require $this->conf['lib'].'/spyc.php';
		$data = Spyc::YAMLLoad($this->load_news_data());
		$fields = array('titel', 'text', 'link', /*'bild'*/);

		$news_ul_content = '';
		foreach($data as $e) {
			if(!array_reduce(array_map(function($x) use ($fields,$e){ return isset($e[$x]); }, $fields),
					function($a,$b){ return $a && $b;}, true)) {
				$li = "<li>Fehler in Formatierung!";
			} else {
				$url = ($e['link']{0} == '#' ? $this->conf['lang_path'].'/'.self::news_file : '').$e['link'];
				$li = "<li><a href='$url'>$e[titel]<span class='hidden'>: </span><em>$e[text]</em></a></li>";
			}
			$news_ul_content .= "\t".$li."\n";
		}

		return $news_ul_content;
	}
	
	///////////////////// RETURN INFOS ABOUT SEITEN_ID LINK
	
	/**
	 * Find the corresponding XML node in the navigation tree for the link
	 * with given $seiten_id or the current given seiten_id in the configuration
	 * array.
	 * This method is used in get_link_navigation_class, etc. for resolving
	 * the XML element from the string. They can be used with the XML node, too,
	 * and this behaviour is passed throught by this method, so if you call
	 * this with an SimpleXMLElement as argument, it behaves like an identity
	 * function and just does nothing.
	 * (This is used in template.php for caching the found xml element and saving
	 * several xpath querys on get_* calls)
	 *
	 * @param $seiten_id Either a string, or nothing (defaults to conf) or SimpleXMLElement
	 * @returns SimpleXMLElement or null if link not found
	 **/
	function get_link($seiten_id=false) {
		if($this->xml_is_defective()) {
			return null;
		}
		if(!$seiten_id) $seiten_id = $this->conf['seiten_id'];
		// convenience: If you found your link already.
		if($seiten_id instanceof SimpleXMLElement) return $seiten_id;

		$matches = $this->xml->xpath("//a[@seiten_id='$seiten_id']");
		if($matches && count($matches)) {
			// strip the first one
			return $matches[0];
		}
		return null;
	}
	
	/**
	 * Get navigation list membership (horizontal or side) of a link
	 * @see get_link for parameters
	 * @returns String of <nav> class where this link is affiliated to
	 **/
	function get_link_navigation_class($seiten_id=false) {
		$link = $this->get_link($seiten_id);
		if(!$link) return null;
		
		// navigation list membership
		$nav = $link->xpath("ancestor::nav");
		return strval($nav[0]['class']); // cast SimpleXMLElement
	}

	/**
	 * Get list of parental ul classes (u2, u3, geraete, ...)
	 * @see get_link for parameters
	 * @returns array with individual class names as strings
	 **/
	function get_link_ul_classes($seiten_id=false) {
		$link = $this->get_link($seiten_id);
		if(!$link) return array();
		
		// direct parental ul classes
		$ul = $link->xpath("ancestor::ul");
		$parent_ul = array_pop($ul);
		return explode(' ',$parent_ul['class']);
	}


	///////////////////// INTER LANGUAGE DETECTION
	/**
	 * @param seiten_id Get interlanguage link for that seiten_id or default.
	 **/
	function get_interlanguage_link($seiten_id=false) {
		if(!$seiten_id) $seiten_id = $this->conf['seiten_id'];
		
		$interlinks = array(); // using a loop instead of mappings since php is stupid
		foreach($this->conf['languages'] as $lang => $lconf) {
			$foreign_menu = new t29Menu(array(
				'webroot' => $this->conf['webroot'],
				'seiten_id' => $this->conf['seiten_id'],
				'languages' => $this->conf['languages'],
				'lang' => $lang,
				'lang_path' => $lconf[1],
			));

			$link = $foreign_menu->get_link($seiten_id);
			$interlinks[$lang] = $link;
		}
		
		return $interlinks;
	}

	// helper methods
	
	/** Check if a simplexml element has an attribute. Lightweight operation
	 *  over the DOM.
	 * @returns boolean
	 **/
	public static function dom_has_attribute($simplexml_element, $attribute_name) {
		$dom = dom_import_simplexml($simplexml_element); // is a fast operation
		return $dom->hasAttribute($attribute_name);
	}
	
	public static function dom_prepend_attribute($simplexml_element, $attribute_name, $content, $seperator='') {
		if(!is_array($simplexml_element)) $simplexml_element = array($simplexml_element);
		foreach($simplexml_element as $e)
			$e[$attribute_name] = $content . (self::dom_has_attribute($e, $attribute_name) ? ($seperator.$e[$attribute_name]) : '');
	}
	
	public static function dom_append_attribute($simplexml_element, $attribute_name, $content, $seperator='') {
		if(!is_array($simplexml_element)) $simplexml_element = array($simplexml_element);
		foreach($simplexml_element as $e)
			$e[$attribute_name] = (self::dom_has_attribute($e, $attribute_name) ? ($e[$attribute_name].$seperator) : '') . $content;
	}
	
	/**
	 * Appends a (CSS) class to a simplexml element, seperated by whitespace. Just an alias.
	 **/
	public static function dom_add_class($simplexml_element, $value) {
		self::dom_append_attribute($simplexml_element, 'class', $value, ' ');
	}
	
	public static function dom_new_link($href, $label) {
		return new SimpleXMLElement(sprintf('<a href="%s">%s</a>', $href, $label));
	}


	///////////////////// MENU ACTIVE LINK DETECTION
	/**
	 * @arg $xpath_menu_selection  one of the horizontal_menu / sidebar_menu consts.
	 **/
	function print_menu($xpath_menu_selection) {
		if($this->xml_is_defective()) {
			print "The Menu file is broken.";
			return false;
		}
		$seiten_id = $this->conf['seiten_id'];

		// find wanted menu
		$xml = $this->xml->xpath($xpath_menu_selection);
		if(!$xml) {
			print "Menu <i>$xpath_menu_selection</i> not found!";
			return false;
		}
		$xml = $xml[0]; // just take the first result (should only one result be present)

		// aktuelle Seite anmarkern und Hierarchie hochgehen
		// (<ul><li>bla<ul><li>bla<ul><li>hierbin ich <- hochgehen.)
		$current_a = $xml->xpath("//a[@seiten_id='$seiten_id']");
		if(count($current_a)) {
			$current_li = $current_a[0]->xpath("parent::li");
			self::dom_add_class($current_li[0], 'current');
			self::dom_prepend_attribute($current_a, 'title', 'Aktuelle Seite', ': ');

			$actives = $current_li[0]->xpath("ancestor-or-self::li");
			array_walk($actives, function($i) { t29Menu::dom_add_class($i, 'active'); });
			
			$ancestors = $current_li[0]->xpath("ancestor::li");
			array_walk($ancestors, function($i) {
				t29Menu::dom_prepend_attribute($i->xpath("./a[1]"), 'title', 'Übergeordnete Kategorie der aktuellen Seite' , ': ');
			});
		}

		// Seiten-IDs (ungueltiges HTML) ummoddeln
		$all_ids = $xml->xpath("//a[@seiten_id]");
		foreach($all_ids as $a) {
			$a['id'] = "sidebar_link_".$a['seiten_id'];
			// umweg ueber DOM um Node zu loeschen
			$adom = dom_import_simplexml($a);
			$adom->removeAttribute('seiten_id');
		}

		// Geraete-Seiten entfernen
		/*
		$geraete_uls = $xml->xpath("//ul[contains(@class, 'geraete')]");
		foreach($geraete_uls as $ul) {
			$uld = dom_import_simplexml($ul);
			$uld->parentNode->removeChild($uld);
		}
		*/
	
		if($xpath_menu_selection == self::horizontal_menu) {
			# inject news
			$news_ul_content = $this->convert_news_data();
			$magic_comment = '<!--# INSERT_NEWS #-->';
			$menu = $xml->ul->asXML();
			print str_replace($magic_comment, $news_ul_content, $menu);
		} else {
			print $xml->ul->asXML();
		}
	}

	///////////////////// PAGE RELATIONS
	/**
	 * Usage:
	 * foreach(get_page_relations() as $a) {
	 *    echo "Link $a going to $a[href]";
	 * }
	 * @param $seiten_id A seiten_id string or nothing for taking the current active string
	 * @returns an array(prev=>..., next=>...) or empty array, elements are SimpleXML a links
	 **/
	function get_page_relations($seiten_id=false) {
		if($this->xml_is_defective())
			return array(); // cannot construct relations due to bad XML file
		if(!$seiten_id) $seiten_id = $this->conf['seiten_id'];
		
		$xml = $this->xml->xpath(self::sidebar_menu);
		if(!$xml) { print "<i>Sidebar not found</i>"; return; }
		$sidebar = $xml[0];
		
		
		$return = array();
		$current_a = $sidebar->xpath("//a[@seiten_id='$seiten_id']");
		if(count($current_a)) {
			foreach(array(
			  "prev" => "preceding::a[@seiten_id]",
			  "next" => "following::a[@seiten_id]") as $rel => $xpath) {
				$nodes = $current_a[0]->xpath($xpath);
				foreach($rel == "prev" ? array_reverse($nodes) : $nodes as $link) {
					$is_geraete = count($link->xpath("ancestor::ul[contains(@class, 'geraete')]"));
					if($is_geraete) continue; // skip geraete links
					$return[$rel] = $link;
					break; // just take the first matching element
				}
			}
		} else {
			// TODO PENDING: Der Fall tritt derzeit niemals ein, da das XML
			// sich dann doch irgendwie auf alles bezieht ($sidebar = alles) und
			// ueberall gesucht wird. Ist aber okay. oder?
			$return['start'] = t29Menu::dom_new_link('#', 'bla');
		}
		return $return;
	}

} // class