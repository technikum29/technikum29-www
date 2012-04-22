<?php
/**
 * technikum29v6 - PHP Subsystem.
 * Haupteinstiegspunkt ("WebStart.php"), welches
 * ohne weiteren Funktionsaufruf alles macht.
 *
 **/
 
$lib = dirname(__FILE__);
$lang = "de";
$root = "/"; # webroot

require "$lib/template.php";

register_shutdown_function('print_footer');
print_header();

#include("$lib/menu.php");

function t29dom_add_class($simplexml_element, $value) {
	$dom = dom_import_simplexml($simplexml_element);
	$simplexml_element['class'] = 
		($dom->hasAttribute("class") ? ($simplexml_element['class'].' '):'').$value;
}

function print_menu($file) {
	global $lib,$seiten_id;
	$xml = simplexml_load_file("$lib/../de-v6/$file.xml");
	
	// aktuelle Seite anmarkern und Hierarchie hochgehen
	// (<ul><li>bla<ul><li>bla<ul><li>hierbin ich <- hochgehen.)
	$current_a = $xml->xpath("//a[@seiten_id='$seiten_id']");
	if(count($current_a)) {
		$current_li = $current_a[0]->xpath("parent::li");
		t29dom_add_class($current_li[0], "current");
		$ancestors = $current_li[0]->xpath("ancestor-or-self::li");
		array_walk($ancestors, function($i){
			t29dom_add_class($i, "active");
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
	
	print $xml->ul->asXML();
}
