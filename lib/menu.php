<?php
/**
 * Needs conf:
 *  webroot lang_path lang seiten_id languages
 *
 **/

require_once dirname(__FILE__).'/messages.php';
require_once dirname(__FILE__).'/logging.php';
 
class t29Menu {
	public $conf;
	public $xml;
	public $log; // just for convenience

	// Bevor es eine ordentliche Dev-Moeglichkeit gibt: Der magische
	// Schalter zum Ausblenden der Geraeteseiten im Menue
	public $hide_geraete_seiten = true;

	// jeweils relativ zum lang_path
	const navigation_file = 'navigation.xml';
	const news_file = 'news.php';

	// xpath queries to the navigation elements
	const horizontal_menu = '/html/nav[@class="horizontal"]';
	const sidebar_menu = '/html/nav[@class="side"]';

	function __construct($conf_array) {
		$this->conf = $conf_array;
		$this->log = t29Log::get(); // just for convenience
		
		// create a message object if not given
		if(!isset($this->conf['msg']))
			$this->conf['msg'] = new t29Messages($this->conf['lang']);
		
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
		if(!isset($neues_menu) || empty($neues_menu))
			// in self::news_file konnte das neue Menue nicht extrahiert werden oder war leer
			$neues_menu = "";
		return $neues_menu;
	}

	/**
	 * Liest das YAML-formatierte News-Menue aus der news.php-File der entsprechenden
	 * Sprache aus und erzeugt daraus ein HTML-Menue, welches als String zurueckgegeben
	 * wird.
	 * @param $host Instance of t29Host which can be used for link rewriting if given.
	 **/
	function convert_news_data($host=null) {
		require_once $this->conf['lib'].'/spyc.php';
		$data = Spyc::YAMLLoad($this->load_news_data());
		$fields = array('datum', 'titel',/* 'untertitel', 'bild'*/);

		$news_ul_content = '';
		foreach($data as $e) {
			if(!array_reduce(array_map(function($x) use ($fields,$e){ return isset($e[$x]); }, $fields),
					function($a,$b){ return $a && $b;}, true)) {
				$li = "<li><a href='#'>Fehler in Formatierung!<em>Dieser Menüeintrag ist falsch formatiert</em></a></li>";
				$this->log->WARN("<h5>Neuigkeiten-Menü: Fehler in Formatierung</h5><p>Ein Eintrag im Neuigkeiten-Menü ist falsch formatiert. Ich erwarte zu jedem Menüeintrag die Felder ".implode(", ", $fields).". Eine der Angaben fehlt oder ist fehlerhaft formatiert: <pre>".var_export($e, true)."</pre>");
			} else {
				// Ehemals konnte die URL per "link: #August_2013" angegeben werden oder "link: /de/irgendwohin".
				// $url = ($e['link']{0} == '#' ? $this->conf['lang_path'].'/'.self::news_file : '').$e['link'];
				// Jetzt wird die URL automatisch aus dem Datum gebaut (slugify-artig)
				$url = $this->conf['lang_path'].'/'.self::news_file.'#'.str_replace(' ', '_', $e['datum']);
				if($host)
					$url = $host->rewrite_link($url);

				// optionales Feld: Untertitel
				if(!isset($e['untertitel'])) $e['untertitel'] = '';

				// weiteres optionales Feld: Bildeinbindung
				$img = !isset($e['bild']) ? '' : "<img src='$e[bild]' style='max-width:64px; max-height:64px;'>";
				$li = "<li><a href='$url'>$img$e[titel]<span class='hidden'>: </span><em>$e[untertitel]</em></a></li>";
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
		if(!$seiten_id)	$seiten_id = $this->conf['seiten_id'];
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
	
	/**
	 * Extracts a list of (CSS) classes the link has,
	 * e.g. <a class="foo bar"> gives array("foo","basr").
	 *
	 * Caveat: This must be called before this class is destructed
	 * by print_menu! Otherwise it will return an empty array. This is
	 * actually bad design, print_menu destroyes the internal structure
	 * for storage efficiencey.
	 * 
	 * @returns array or empty array in case of error
	 **/
	function get_link_classes($seiten_id=false) {
		$link = $this->get_link($seiten_id);
		//print "link:"; var_dump($this->xml);
		if(!$link) return array();
		//var_dump($link); exit;
		return isset($link['class']) ? explode(' ',$link['class']) : array();
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

	public static function dom_attribute_contains($simplexml_element, $attribute_name, $needle) {
		if(isset($simplexml_element[$attribute_name])) {
			return strpos((string)$simplexml_element[$attribute_name], $needle) !== false;
		} else
			return false;
	}
	
	/**
	 * Appends a (CSS) class to a simplexml element, seperated by whitespace. Just an alias.
	 **/
	public static function dom_add_class($simplexml_element, $value) {
		self::dom_append_attribute($simplexml_element, 'class', $value, ' ');
	}
	
	public static function dom_new_link($href, $label) {
		return new SimpleXMLElement(sprintf('<a href="%s">%s</a>', $href, htmlentities($label)));
	}


	///////////////////// MENU ACTIVE LINK DETECTION
	/**
	 * print_menu is the central method in this class. It converts the $this->xml
	 * XML tree to valid HTML with all enrichments for appropriate CSS styling.
	 * It also removes all 'seiten_id' attributes.
	 * This method does *not* clone the structure, so this instance won't produce
	 * the same results any more after print_menu invocation! This especially will
	 * affect get_link().
	 *
	 * @arg $xpath_menu_selection  one of the horizontal_menu / sidebar_menu consts.
	 * @arg $host Instance of t29Host which can be used for link rewriting if given.
	 * @returns nothing, since the output is printed out
	 **/
	function print_menu($xpath_menu_selection, $host=null) {
		if($this->xml_is_defective()) {
			print "The Menu file is broken.";
			return false;
		}
		$seiten_id = $this->conf['seiten_id'];
		$_ = $this->conf['msg']->get_shorthand_returner();
		
		// find wanted menu
		$xml = $this->xml->xpath($xpath_menu_selection);
		if(!$xml) {
			print "Menu <i>$xpath_menu_selection</i> not found!";
			return false;
		}
		$xml = $xml[0]; // just take the first result (should only one result be present)
		
		/*
		// work on a deep copy of the data. Thus this method won't make the overall
		// class useless.
		$dom = dom_import_simplexml($xml);
		$xml = simplexml_import_dom($dom->cloneNode(true));
		*/

		// aktuelle Seite anmarkern und Hierarchie hochgehen
		// (<ul><li>bla<ul><li>bla<ul><li>hierbin ich <- hochgehen.)
		$current_a = $xml->xpath("//a[@seiten_id='$seiten_id']");
		if(count($current_a)) {
			$current_li = $current_a[0]->xpath("parent::li");
			self::dom_add_class($current_li[0], 'current');
			self::dom_prepend_attribute($current_a, 'title', $_('nav-hierarchy-current'), ': ');

			$actives = $current_li[0]->xpath("ancestor-or-self::li");
			array_walk($actives, function($i) { t29Menu::dom_add_class($i, 'active'); });
			
			$ancestors = $current_li[0]->xpath("ancestor::li");
			foreach($ancestors as $i)
				t29Menu::dom_prepend_attribute($i->xpath("./a[1]"), 'title', $_('nav-hierarchy-ancestor'), ': ');
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
		if($this->hide_geraete_seiten) {
			$geraete_uls = $xml->xpath("//ul[contains(@class, 'geraete')]");
			foreach($geraete_uls as $ul) {
				$uld = dom_import_simplexml($ul);
				$uld->parentNode->removeChild($uld);
			}
		}
		
		// alle Links mittels t29Host umwandeln (idR .php-Endung entfernen),
		// falls erwuenscht
		if($host) {
			$links = $xml->xpath("//a[@href]");
			foreach($links as $a)
				$a['href'] = $host->rewrite_link($a['href']);
		}
	
		if($xpath_menu_selection == self::horizontal_menu) {
			# inject news
			$news_ul_content = $this->convert_news_data($host);
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
	 *
	 * Hinweis:
	 * Wenn Element (etwa prev) nicht existent, nicht null zurueckgeben,
	 * sondern Element gar nicht zurueckgeben (aus hash loeschen).
	 *
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
		
		// nur Sidebar-Links kriegen eine Relation aufgeloest
		$return = array();
		$current_a = $sidebar->xpath(".//a[@seiten_id='$seiten_id']");
		$seiten_id_in_sidebar = count($current_a);
		// ggf. nochmal global suchen:
		$current_a = $seiten_id_in_sidebar ? $current_a[0] : $this->get_link($seiten_id);
		if($current_a) {
			// wenn aktuelle seite eine geraeteseite ist
			if(in_array('geraete', $this->get_link_ul_classes($seiten_id))) {
				//  pfad:                        a ->li->ul.geraete->li->li/a
				$geraetelink = $current_a->xpath("../../../a");
				if(count($geraetelink))
					$return['prev'] = $geraetelink[0];
				$return['next'] = null; // kein Link nach vorne
			} else {
				$searches = array();
				if($seiten_id_in_sidebar || self::dom_attribute_contains($current_a, 'class', 'show-rel-prev'))
					$searches['prev'] = 'preceding::a[@seiten_id]';
				if($seiten_id_in_sidebar || self::dom_attribute_contains($current_a, 'class', 'show-rel-next'))
					$searches['next'] = 'following::a[@seiten_id]';

				foreach($searches as $rel => $xpath) {
					$nodes = $current_a->xpath($xpath);
					foreach($rel == "prev" ? array_reverse($nodes) : $nodes as $link) {
						$is_geraete = count($link->xpath("ancestor::ul[contains(@class, 'geraete')]"));
						if($is_geraete) continue; // skip geraete links
						$return[$rel] = $link;
						break; // just take the first matching element
					}
				} // end for prev next
			} // end if geraete
		}

		// Short circuit fuer Links ueberall:
		// Wenn der aktuelle Link ein "next" oder "prev"-Attribut besitzt, dann ueberschreibt
		// das alle bisherigen Ergebnisse.
		// Benutzung: <a seiten_id="a" href="a.html" next="b">foo</a>, <a seiten_id="b">bar</a>
		//
		// Funktioniert wahrscheinlich, aber nicht getestet/genutzt, da bislang nur "show-rel-{prev,next}"
		// genutzt wird (direkte Nachbarn)
		/*
		if(!$current_a)
			// falls $current_a nicht in der sidebar ist, nochmal global suchen
			$current_a = $this->get_link($seiten_id);
		$short_circuits = array('prev', 'next');
		foreach($short_circuits as $rel) {
			if($current_a[$rel]) {
				$target = $this->get_link((string) $current_a[$rel]);
				if($target)
					$return[$rel] = $target;
			}
		}
		*/
		
		// Linkliste aufarbeiten: Nullen rausschmeissen (nur deko) und
		// Links *klonen*, denn sie werden durch print_menu sonst veraendert
		// ("Übergeordnete Kategorie der aktuellen Seite" steht dann drin)
		// und wir wollen sie unveraendert haben.
		foreach($return as $key => $node) {
			if(!$node) {
				unset($return[$key]);
				continue;
			}
			$dn = dom_import_simplexml($node);
			$dnc = simplexml_import_dom($dn->cloneNode(true));
			$return[$key] = $dnc;
		}
		
		return $return;
	}

} // class
