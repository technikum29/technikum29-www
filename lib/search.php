<?php

class t29Search {
	static $actions = array(
		'opensearch-desc' => 'print_opensearch_desc',
	);

	function page_handler() {
		if(!isset($_GET['action']))
			return;
		$action = $_GET['action'];
		if(array_key_exists($action, self::$actions)) {
			$method_name = self::$actions[$action];
			$this->$method_name();
		} else {
			print "<b>Page action $action unkown!\n";
		}
	}


	function print_opensearch_desc($lang=null) {
		$path = array('de' => '/de/suche.php', 'en' => '/en/search.php');
		// assure a valid given language
		if(!$lang && isset($_GET['lang'])) $lang = $_GET['lang'];
		if(!isset($path[$lang])) $lang = 'de';
		
		header('Content-Type: application/opensearchdescription+xml');
		print '<?xml version="1.0"?>'.PHP_EOL;
		?>
		<OpenSearchDescription xmlns="http://a9.com/-/spec/opensearch/1.1/" xmlns:moz="http://www.mozilla.org/2006/browser/search/">
			<ShortName>technikum29 (<?=$lang; ?>)</ShortName>
			<Description>technikum29 (<?=$lang; ?>)</Description>
			<Image height="16" width="16" type="image/x-icon">http://www.technikum29.de/favicon.ico</Image>
			<Url type="text/html" method="get" template="http://www.technikum29.de/<?=$path[$lang]; ?>?q={searchTerms}" />
			<Url type="application/x-suggestions+json" method="get" template="http://www.technikum29.de/<?=$path[$lang]; ?>?get=suggestions&amp;q={searchTerms}&amp;format=json" />
			<Url type="application/x-suggestions+xml" method="get" template="http://www.technikum29.de/<?=$path[$lang]; ?>?get=suggestions&amp;q={searchTerms}&amp;format=xml" />
			<moz:SearchForm>http://www.technikum29.de/<?=$path[$lang]; ?></moz:SearchForm>
		</OpenSearchDescription>
		<?php
		exit;
	}
}