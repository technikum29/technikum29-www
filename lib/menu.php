<?php

require "$lib/spyc.php";

class t29Menu {
	public $menu_file = "$lib/../$lang/menu.txt";
	public $horizontal_keyword = 'Horizontal';
	public $sidebar_keyword = 'Sidebar';
	
	function __construct() {
		$rawmenu = Spyc::YAMLLoad($this->menu_file);
		
		
	}
	
	private function resort_menu($a, $tab)  {
	}
} // class

print "<pre>";

$horizontal = $rawmenu["Horizontal-Menü"];
$sidebar = $rawmenu["Sidebar"];

function print_menuitem($a, $tab) {
	if(!is_array($a)) print "$tab error: $a";
	reset($a); list($k, $v) = each($a);
	if(!$v) $v='';
	print "$tab * $k => $v\n";
	array_shift($a); // delete that first entry
	
	if(count($a) >= 1) {
		foreach($a as $v)
			print_menuitem($v, $tab."\t");
	}
}

foreach($horizontal as $v)
	print_menuitem($v, "");

print "<hr><pre>";
print_r($rawmenu);
