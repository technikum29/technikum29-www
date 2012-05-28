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

		// load xml file
		$this->xml = simplexml_load_file($this->conf['webroot'].$this->conf['lang_path'] . '/' . self::navigation_file);
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
		$fields = array('titel', 'text', 'link', 'bild');

		$news_ul_content = '';
		foreach($data as $e) {
			if(!array_reduce(array_map(function($x) use ($fields,$e){ return isset($e[$x]); }, $fields),
					function($a,$b){ return $a && $b;}, true)) {
				$li = "<li>Fehler in Formatierung!";
			} else {
				$url = ($e['link']{0} == '#' ? '/'.$this->conf['lang'].'/'.self::news_file : '').$e['link'];
				$li = "<li><a href='$url'><img src='$e[bild]' /> $e[titel]<span class='hidden'>: </span><em>$e[text]</em></a></li>";
			}
			$news_ul_content .= "\t".$li."\n";
		}

		return $news_ul_content;
	}
	
	///////////////////// RETURN INFOS ABOUT SEITEN_ID LINK
	function get_link_infos($seiten_id=false) {
		if(!$seiten_id) $seiten_id = $this->conf['seiten_id'];

		$matches = $this->xml->xpath("//a[@seiten_id='$seiten_id']");
		if($matches && count($matches)) {
			// strip the first one
			return $matches[0];
		}
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

			$link = $foreign_menu->get_link_infos($seiten_id);
			$interlinks[$lang] = $link;
		}
		
		return $interlinks;
	}

	// helper method
	public static function dom_add_class($simplexml_element, $value) {
		$dom = dom_import_simplexml($simplexml_element); // is a fast operation
		$simplexml_element['class'] = 
			($dom->hasAttribute("class") ? ($simplexml_element['class'].' '):'').$value;
	}
	
	public static function dom_new_link($href, $label) {
		return new SimpleXMLElement(sprintf('<a href="%s">%s</a>', $href, $label));
	}

	///////////////////// MENU ACTIVE LINK DETECTION
	/**
	 * @arg $xpath_menu_selection  one of the horizontal_menu / sidebar_menu consts.
	 **/
	function print_menu($xpath_menu_selection) {
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
			$this->dom_add_class($current_li[0], "current");
			$ancestors = $current_li[0]->xpath("ancestor-or-self::li");
			array_walk($ancestors, create_function('$i', 't29Menu::dom_add_class($i, "active");'));
		}

		// Seiten-IDs (ungueltiges HTML) ummoddeln
		$all_ids = $xml->xpath("//a[@seiten_id]");
		foreach($all_ids as $a) {
			$a['id'] = "sidebar_link_".$a['seiten_id'];
			// umweg ueber DOM um Node zu loeschen
			$adom = dom_import_simplexml($a);
			$adom->removeAttribute('seiten_id');
		}
	
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
		if(!$seiten_id) $seiten_id = $this->conf['seiten_id'];
		
		$xml = $this->xml->xpath(self::sidebar_menu);
		if(!$xml) { print "<i>Sidebar not found</i>"; return; }
		$sidebar = $xml[0];
		
		$return = array();
		$current_a = $sidebar->xpath("//a[@seiten_id='$seiten_id']");
		if(count($current_a)) {
			foreach(array(
			  "prev" => "preceding::a[@seiten_id][1]",
			  "next" => "following::a[@seiten_id][1]") as $rel => $xpath) {
				$node = $current_a[0]->xpath($xpath);
				if(count($node))
					$return[$rel] = $node[0]; # $node[0] = <a href=../> tag
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