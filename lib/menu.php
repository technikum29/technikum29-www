<?php

class t29Menu {
	public $conf;

	public $horizontal_menu = 'hauptnavigation.xml';
	public $sidebar_menu = 'sidebar.xml';
	public $news_file = 'news.php';

	function __construct($conf_array) {
		$this->conf = $conf_array;
		$this->conf['lang_path'] = $this->conf['lib'].'/../'.$this->conf['lang'];
	}
	
	function load_news_data() {
		$newsfile = $this->conf['lang_path']."/".$this->news_file;
		$newsdir = dirname(realpath($newsfile));
		// include path wird ignoriert wenn include relativ ist, was in der
		// eingebundenen Datei der Fall ist 
		// set_include_path( get_include_path(). PATH_SEPARATOR . dirname($newsfile));
		$pwd = getcwd(); chdir($newsdir);
		include($this->news_file);
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
				$url = ($e['link']{0} == '#' ? '/'.$this->conf['lang'].'/'.$this->news_file : '').$e['link'];
				$li = "<li><a href='$url'><img src='$e[bild]' /> $e[titel]<span class='hidden'>: </span><em>$e[text]</em></a></li>";
			}
			$news_ul_content .= "\t".$li."\n";
		}

		return $news_ul_content;
	}

	// helper method
	public static function dom_add_class($simplexml_element, $value) {
		$dom = dom_import_simplexml($simplexml_element);
		$simplexml_element['class'] = 
			($dom->hasAttribute("class") ? ($simplexml_element['class'].' '):'').$value;
	}

	function print_menu($file) {
		$seiten_id = $this->conf['seiten_id'];
		$xml = simplexml_load_file($this->conf['lang_path'] . '/' . $file);
	
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
	
		if($file == $this->horizontal_menu) {
			# inject news
			$news_ul_content = $this->convert_news_data();
			$magic_comment = '<!--# INSERT_NEWS #-->';
			$menu = $xml->ul->asXML();
			print str_replace($magic_comment, $news_ul_content, $menu);
		} else {
			print $xml->ul->asXML();
		}
	}

	function print_relations() {
		$seiten_id = $this->conf['seiten_id'];
	
		$sidebar = simplexml_load_file($this->conf['lang_path'] . '/' . $this->sidebar_menu);
		$current_a = $sidebar->xpath("//a[@seiten_id='$seiten_id']");
		if(count($current_a)) {
			$prev = $current_a[0]->xpath("preceding::a[@seiten_id][1]");
			if(count($prev)) {
				$a = $prev[0];
				print "<li class='prev'><a href='$a[href]'>vorherige Seite <strong>$a</strong></a></li>";
			}
			$next = $current_a[0]->xpath("following::a[@seiten_id][1]");
			if(count($next)) {
				$a = $next[0];
				print "<li class='next'><a href='$a[href]'>nächste Seite <strong>$a</strong></a></li>";
			}
		} else {
			print '<li class="start"><a href="#">Starte Führung <strong>Blabla</strong></a>';
		}
	}

} // class