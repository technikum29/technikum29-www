<?php

class t29Search {
	static $actions = array(
		'opensearch-desc' => 'print_opensearch_desc',
	);

	function page_handler() {
		if(!isset($_GET['action'])) {
			// This is an "ordinary" page call.
			// do some organisation stuff and return.
			$this->setup_interlang();
			return;
		}
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
	
	/**
	 * Since the search isn't denoted in the navigation.xml, the interlanguage
	 * system doesn't work. This method fixes that by talking with t29Template.
	 * This must be done after including technikum29.php.
	 **/
	function setup_interlang() {
		$GLOBALS['template_callback'] = function($template) {
			// Interlanguage Links: Defakto nicht cachebar da das Cachesystem fuer dynamische Seiten
			// den header/footer cacht und damit auch die Interlang-Eintraege. Links wie
			// "/de/suche.php"+$_SERVER['QUERY_STRING'] funktionieren daher nicht dynamisch,
			// da der Head ja gecacht wird. Ist ein nicht so wichtiges FIXME.
			$template->set_interlang_link("de", "/de/suche.php", "Suche");
			$template->set_interlang_link("en", "/en/search.php", "Search");
		};
	}
	
	function google_search_snippet() {
	?>
	<script>
		(function() {
		var cx = '010117769997860607363:ovbd9zjaaps';
		var gcse = document.createElement('script');
		gcse.type = 'text/javascript';
		gcse.async = true;
		gcse.src = (document.location.protocol == 'https' ? 'https:' : 'http:') +
			'//www.google.com/cse/cse.js?cx=' + cx;
		var s = document.getElementsByTagName('script')[0];
		s.parentNode.insertBefore(gcse, s);
		})();
	</script>
	<gcse:search></gcse:search>
	<?php
	}
}