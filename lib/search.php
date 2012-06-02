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


	function print_opensearch_desc() {
		header('Content-Type: application/opensearchdescription+xml');
		print '<?xml version="1.0"?>'.PHP_EOL;
		?>
		<OpenSearchDescription xmlns="http://a9.com/-/spec/opensearch/1.1/" xmlns:moz="http://www.mozilla.org/2006/browser/search/">
			<ShortName>technikum29 (de)</ShortName>
			<Description>technikum29 (de)</Description>
			<Image height="16" width="16" type="image/x-icon">http://www.technikum29.de/favicon.ico</Image>
			<Url type="text/html" method="get" template="http://www.technikum29.de/de-v6/suche.php?q={searchTerms}" />
			<Url type="application/x-suggestions+json" method="get" template="http://www.technikum29.de/de-v6/suche.php?get=suggestions&amp;q={searchTerms}&amp;format=json" />
			<Url type="application/x-suggestions+xml" method="get" template="http://www.technikum29.de/de-v6/suche.php?get=suggestions&amp;q={searchTerms}&amp;format=xml" />
			<moz:SearchForm>http://www.technikum29.de/de-v6/suche.php</moz:SearchForm>
		</OpenSearchDescription>
		<?php
		exit;
	}
}