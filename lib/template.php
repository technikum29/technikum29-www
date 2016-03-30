<?php
/**
 * technikum29v6 Page Template.
 * Initially written 08.01.2012, Sven Koeppel
 *
 * This file contains the t29v6 HTML5 template (header, footer, structure, ...).
 *
 * Global vars:
 *  $lang = de | en
 *  $seiten_id = kurzkennung der aktuellen seite
 *  $root = Seiten-Root fuer URLs ($root/de, $root/shared, etc.)
 *  $titel = Seitentitel
 *  $header_cache_file, $footer_cache_file.
 **/

class t29Template {
	public $conf, $menu, $msg;
	public $body_classes = array();
	public $javascript_config = array();
	public $page_relations, $interlang_links;
	public $log; // lightweight logging system

	/**
	 * The t29Template constructor.
	 *
	 * The template class is embedded into the t29v6 class framework. It
	 * uses t29Log for logging, t29Messages for any localisation strings,
	 * t29RessourceLoader for resolving URLs for CSS and JavaScript ressources.
	 * t29Menu is a helper class considered for parsing and extracting
	 * any relations between pages and the menu from navigation.xml.
	 *
	 * From the t29v6 entrypoint, technikum29.php, this class is instanced
	 * at the end, if no caching has worked. That call looks like
	 *
	 *   $template = new t29Template($GLOBALS);
	 *
	 * which means that our configuration $this->conf will be set up from the
	 * former global namespace. For correct working, at least some global vars
	 * like
	 *   $lib
	 *   $lang
	 *   $host
	 *   ...
	 * are considered as present (see above for a list).
	 *
	 **/
	function __construct($conf_array) {
		$this->conf = $conf_array;
		
		// fetch the lightweight logging object:
		require_once $this->conf['lib'].'/logging.php';
		$this->log = t29Log::get();
		
		// create a menu, if not given:
		require_once $this->conf['lib'].'/menu.php';
		$this->menu = isset($this->conf['menu']) ? $this->conf['menu'] : new t29Menu($this->conf);

		// create localisation class:
		require_once $this->conf['lib'].'/messages.php';
		$this->msg = new t29Messages($this->conf['lang']);
		
		// create the ressourceloaders:
		require_once $this->conf['lib'].'/ressourceloader.php';
		$this->rl = array();
		foreach(array('js','css') as $type)
			$this->rl[$type] = t29RessourceLoader::create_from_type($type, $this->conf);

		// fill up configuration
		
		// optional html headers which can be filled by hooks or parts
		if(!isset($this->conf['header_prepend']))
			$this->conf['header_prepend'] = array(); // list
		elseif(is_string($this->conf['header_prepend']))
			$this->conf['header_prepend'] = array($this->conf['header_prepend']); // string to list

		// optional body css classes which can be filled by hooks or parts
		if(!isset($this->conf['body_classes_append']))
			$this->conf['body_classes_append'] = array();

		// ask t29Host for configuration fillup
		$this->conf['host']->fillup_template_conf($this->conf);
		$this->body_classes += $this->conf['body_classes_append'];
		
		// Path names in messages
		foreach(array('footer-legal-file', 'topnav-search-page') as $msg_id)
			$this->msg->set($msg_id, $this->conf['lang_path'].$this->msg->_($msg_id));

		// store informations about the current page
		$this->conf['seiten_link'] = $this->menu->get_link();
		$this->conf['seite_in_nav'] = $this->menu->get_link_navigation_class($this->conf['seiten_link']);
		$this->conf['seite_in_ul'] = $this->menu->get_link_ul_classes($this->conf['seiten_link']);

		// setup body classes:
		$body_classprefixes = array(
			// css prefix => configuration array value
			'lang-' => 'lang',
			'page-' => 'seiten_id',
			'in-nav-' => 'seite_in_nav',
			'in-' => 'seite_in_ul',
		);
		foreach($body_classprefixes as $prefix => $key) {
			if(is_array($this->conf[$key]))
				// append each element of array conf values
				foreach($this->conf[$key] as $x)
					$this->body_classes[] = $prefix . $x;
			elseif($this->conf[$key]) // skip null/false/empty conf values
				$this->body_classes[] = $prefix . $this->conf[$key];
		}
		
		// setup javascript configuration
		$javascript_transfer = array('lang', 'seiten_id', 'seite_in_nav', 'seite_in_ul');
		foreach($javascript_transfer as $key)
			$this->javascript_config[$key] = $this->conf[$key];
		// also collect data from other classes, e.g. t29Host:
		$this->javascript_config['web_prefix'] = $this->conf['host']->web_prefix;
		
		// get all kind of relations. Pages can afterwards be overwritten with t29Template
		// methods (see below).
		$this->page_relations = $this->menu->get_page_relations();
		$this->interlang_links = $this->menu->get_interlanguage_link();
		$this->current_link_classes = $this->menu->get_link_classes();
		
		// check and load additional css.
		// #51: This is now checked by the site caching in technikum29.php.
		$this->conf['pagecss'] = $this->conf['host']->ressources_get_pagestyle($this->conf['seiten_id']);
		$this->conf['has_pagecss'] = file_exists($this->conf['webroot'].$this->conf['pagecss']);
		
		// setup html title
		$this->conf['html_title'] = '';
		if(isset($this->conf['titel']) && !empty($this->conf['titel']))
			$this->conf['html_title'] = $this->conf['titel'] . ' - ';
		// Startseite macht ihren Titel jetzt selbst (SEO):
		//elseif($this->conf['seiten_id'] == $this->msg->_('homepage-pagename'))
		//	{} // nop: Startseitentitel soll nur sein "technikum29"
		elseif($this->conf['seiten_link'])
			// Titel vom Menu nehmen
			$this->conf['html_title'] = $this->conf['seiten_link'] . ' - ';
		$this->conf['html_title'] .= $this->msg->_('html-title');
		
		// Unfortunately mostly a t29Template instance won't be visible to a page
		// handled by technikum29.php. Therefore there is this small "future" trick:
		if(isset($this->conf['template_callback']))
			$this->conf['template_callback']($this);
		// Now you can use code like
		// $template_callback = function($template) {
		//    $template->set_page_relation("next", "/de/example", "foo");
		//    $template->menu->... read and modify anything ... etc
		// }
		// so the callback function is called at the end of the template constructor.
		// This can be considered whenever giving a static configuration variables
		// is not enough.
	}
	
	/**
	 * Overwrite the page relations given by the t29Menu.
	 * By setting $relation to "prev" or "next", you can overwrite the
	 * relations which has been set up by construction by $this->menu->get_page_relations().
	 * Thus any page can state any relations. For sure they are only one-directional,
	 * the other pages don't know anything about such relations because no vice-versa
	 * introspection can be done.
	 **/
	function set_page_relation($relation, $href, $label) {
		// good values for $relation are: "prev", "next".
		// Link is composed as <a href="$href">$label</a>.
		$this->page_relations[$relation] = t29Menu::dom_new_link($href, $label);
		//print_r($this->page_relations);
	}

	/**
	 * Overwrite the interlanguage link list given by the t29Menu.
	 * This does the same as set_page_relation() only for interlanguage links.
	 **/
	function set_interlang_link($lang, $href, $label) {
		// good values for $lang are: "de", "en".
		// Link is composed as <a href="$href">$label</a>.
		$this->interlang_links[$lang] = t29Menu::dom_new_link($href, $label);
	}
	
	/**
	 * Main caching and output system.
	 * Parameters (global configuration):
	 *    skip_cache  -  if true, skips writing output to cache file
	 *    purge_cache -  if true, forces creation of new cache file
	 *                   (does not change behaviour of this file's code)
	 **/
	function create_cache($cache_object) {
		$cache_object->start_cache(array(
			'shutdown_func' => array($this, 'print_footer'), // print the footer with it
			'filter_func'   => $this->conf['host']->has_web_prefix ? 
				array($this, 'rewrite_page_prefix_links') : null, // Entrypoint for URL and content rewriting!
		));
		// directly start header printing
		$this->print_header();
	}
	
	/**
	 * Write header and footer in separate cache files.
	 **/
	function create_separate_caches($header_cache, $footer_cache) {
		$header_cache->start_cache(array(
			 // start with no shutdown, filter, nor writing
			'filter_func' => $this->conf['host']->has_web_prefix ? array($this, 'rewrite_page_prefix_links') : null,
			'write_cache' => false,
		));
		$this->print_header();
		$header_cache->write_cache(); // will also print out header immediately.
		
		$footer_cache->start_cache(array(
			 // start with no shutdown, filter, nor writing
			'filter_func' => $this->conf['host']->has_web_prefix ? array($this, 'rewrite_page_prefix_links') : null,
			'write_cache' => false,
		));
		$this->print_footer();
		$footer_content = $footer_cache->write_cache(null, true); // don't print footer immediately.
		
		// print footer on exit.
		register_shutdown_function(function() use ($footer_content) {
			print $footer_content;
		});
	}

	function print_header() {
		$p = $this->msg->get_shorthand_printer(); // t29Messages gettext printer
		$_ = $this->msg->get_shorthand_returner(); // t29Messages gettext
		$href = $this->conf['host']->get_shorthand_link_returner(); // t29Host link rewriter
?>
<!doctype html>
<html class="no-js" lang="<?php echo $this->conf['lang']; ?>">
<head>
  <meta charset="utf-8">
  <title><?php echo $this->conf['html_title']; ?></title>
  <meta name="author" content="technikum29-Team">
  <meta name="generator" content="<?php print $this->conf['host']; ?>">
  <meta name="t29.cachedate" content="<?php print date('r'); ?>">
  <?php
	foreach($this->conf['header_prepend'] as $h) print $h."\n  ";
	
	$indicators = array('ajax', 'external');
	foreach($indicators as $key)
		if($this->conf[$key]) print "\n  <meta name='t29.$key' content='true'>";
  
	if(isset($this->conf['version'])) printf('<meta name="t29.version" content="%s">', $this->conf['version']);
	if(isset($_GET['debug']))
		foreach(explode(' ','debug rl_debug skip_cache purge_cache verbose_cache') as $x)
			printf("\n  <meta name='t29.template.data-%s' content='%s'>", $x, isset($_GET[$x])?'true':'false');
  ?>
  
  <?php
	foreach(array_merge(
		array("first" => t29Menu::dom_new_link($this->conf['lang_path'], $_('head-rel-first'))),
		$this->page_relations
	) as $rel => $a) {
		if($rel == 'start') continue; // not in standard
		printf("\n  <link rel='%s' href='%s' title='%s' />",
			$rel, $href($a['href']), sprintf($_('head-rel-'.$rel), $this->relational_link_to_string($a))
		);
	}
  ?>
  
  <link rel="copyright" href="<?php print $href($_('footer-legal-file')); ?>" title="<?php $p('footer-legal-link'); ?>">
  <link rel="search" type="application/opensearchdescription+xml" href="<?php print $href($_('topnav-search-page')); print '?action=opensearch-desc&amp;lang='.$this->conf['lang']; ?>" title="<?php $p('opensearch-desc'); ?>">
  <link rel="alternate" type="application/rss+xml" href="/<?php print $this->conf['lang']; ?>/news.php?format=rss" title="<?php $p('rss-title'); ?>" />
  <?php
	// print interlanguage links for all languages except the active one
	foreach($this->interlang_links as $lang => $a) {
		if($lang != $this->conf['lang'] && !is_null($a)) {
			printf('<link rel="alternate" href="%s" hreflang="%s" title="%s">',
				$href($a['href']), $lang, $this->relational_link_to_string($a)
			);
		}
	}
  ?>
  
  <meta name="viewport" content="width=device-width,initial-scale=1">
  
  <!-- fancy neue Ersatzschrift fuer Futura, Maerz 2016 -->
  <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet' type='text/css'>
  <?php
	$this->print_ressourceloader_links('css', PHP_EOL . '  <link rel="stylesheet" href="%s">');
  ?>

  <script src="/shared/js-v6/libs/modernizr-2.0.6.min.js"></script>
</head>

<body class="<?php echo implode(' ', $this->body_classes) ?>">
  <div id="container">
	<h1 role="banner"><a href="/" title="<?php $p('head-h1-title'); ?>"><?php $p('head-h1'); ?></a></h1>
	<div id="background-color-container"><!-- helper -->
	<section class="main content" role="main" id="content">
		<ul class="messages panel <?php if($this->log->is_empty()) echo 'empty'; ?> nolist">
		<?php
			// This prints out error messages collected by the log only until this point
			$this->log->print_all();
			// All log entries generated until final processing will be flushed out at the
			// end; a userspace javascript helper will then move them here.
		?>
		</ul>	
		<!--<header class="teaser">
			<h2 id="pdp8L">Wissenschaftliche Rechner und Minicomputer</h2>
			<img width=880 src="http://www.technikum29.de/shared/photos/rechnertechnik/univac/panorama-rechts.jpg">
		</header>-->
	<!-- start content -->
<?php 
} // function print_header().

	function print_footer() {
		$p = $this->msg->get_shorthand_printer(); // t29Messages gettext printer
		$_ = $this->msg->get_shorthand_returner(); // t29Messages gettext
		$href = $this->conf['host']->get_shorthand_link_returner(); // t29Host link rewriter
		
	?>
	<!-- end content -->
	</section>
	<hr>
	<section class="sidebar top">
			<?php /* Platz fuer eigentlich per "Extension" eingepflegtem Inhalt */ ?>
			<!-- Box (nur DE), die irgendwie sonst keinen Platz findet: -->
			<!--
			<?php if(isset($this->conf['lang']) && $this->conf['lang'] == 'de') { ?>
			<a class="button alertbox termine" href="/de/#termine">
				<strong>Aktuelle Termine</strong>
				
			</a>
			<?php }/* end of lang==de */ ?>
			-->
			
			<h2 class="visuallyhidden" id="tour-navigation"><?php $p("sidebar-h2-tour"); ?></h2>
			<?php
				$sidebar_contains_menu  = !isset($this->conf['sidebar_content']);
			?>
			<nav class="side <?php print $sidebar_contains_menu ? 'contains-menu' : 'contains-custom'; ?>">
				<?php
					if(!$sidebar_contains_menu)
						// used in external page calls
						print $this->conf['sidebar_content'];
					else
						$this->menu->print_menu(t29Menu::sidebar_menu, $this->conf['host']);
				?>
			</nav>
			<!-- menu changing buttons are made with javascript, but  -->
	</section>
	<section class="sidebar bottom">
		<!-- inhalte die unten ueber dem header sind -->
	</section>
	</div><!-- div id="background-color-container" helper end -->
	<hr>
	<header class="banner">
		<h2 class="visuallyhidden"><?php $p("sidebar-h2-mainnav"); ?></h2>
		<nav class="horizontal">
			<?php
				if(isset($this->conf['mainnav_content']))
					// used in external page calls
					print $this->conf['mainnav_content'];
				else
					$this->menu->print_menu(t29Menu::horizontal_menu, $this->conf['host']);
			?>
		</nav>
		<nav class="top">
			<h3 class="visuallyhidden"><?php $p("sidebar-h2-lang"); ?></h3>
			<ul>
				<?php
					foreach($this->interlang_links as $lang => $a) {
						$is_current_lang = $lang == $this->conf['lang'];
						if(is_null($a)) {
							// when interlanguage link not present (null) = no translation exists
							$backtitle = isset($this->conf['titel']) ? $this->conf['titel'] : null;
							
							$a = t29Menu::dom_new_link(
								$_('topnav-interlang-nonexistent-page') . '?'
								   . htmlentities(http_build_query(array(
									'backurl' => $_SERVER['REQUEST_URI'],
									'backtitle' => $backtitle ? $backtitle : null,
								     ))),
								'not present'
							);
							$title = sprintf($_('topnav-interlang-nonexistent', $lang));
							$class = 'nonexistent';
						} elseif($is_current_lang) {
							$title = sprintf($_('topnav-interlang-active'), $a);
							$class = 'active';
						} else {
							// ordinary interlang link
							$title = sprintf($_('topnav-interlang-title', $lang), $a);
							$class = '';
						}
						printf("\t\t\t\t<li%s><a href='%s' title='%s'>%s</a></li>\n",
							(empty($class) ? '' : " class='$class'"),
							$href($a['href']), htmlspecialchars($title),
							$this->conf['languages'][$lang][0] // verbose language name
						);
					}
				?>
			</ul>
			<form method="get" action="<?php $href($p('topnav-search-page')); ?>">
				<span class="no-js"><?php $p('topnav-search-label'); ?>:</span>
				<input type="text" value="" data-defaultvalue="<?php $p('topnav-search-label'); ?>" name="q" class="text">
				<input type="submit" value="<?php $p('topnav-search-label'); ?>" class="button">
			</form>
		</nav>
    </header>
	<hr>
	<?php
		// only print menu when in sidebar where it applies.
		// it can also be forced with a global setting $force_footer_menu = 1
		$print_footer_menu = count($this->page_relations) || isset($this->conf['force_footer_menu']);
		// old test: ($this->conf['seite_in_nav'] == 'side') || isset($this->conf['force_footer_menu']);
		
		// print next or prev entry when the current page has a
		// "show-rel-next" or "show-rel-prev" class entry
		$show_rel_next = in_array('show-rel-next', $this->current_link_classes);
		$show_rel_prev = in_array('show-rel-prev', $this->current_link_classes);
		
	?>
    <footer class="in-sheet <?php if(!$print_footer_menu) print "empty-footer"; ?>">
		<nav class="guide">
			<!-- hier wird nav.side die Liste per JS reinkopiert -->
		</nav>
		<nav class="rel clearfix <?php if(!$print_footer_menu) print "empty"; ?>">
		<ul>
			<?php
			  //if($print_footer_menu)
				foreach($this->page_relations as $rel => $a) {
					// only show the links wanted to be shown. Only relevant if
					// the "show-rel-*"-magic is working.
					if( $print_footer_menu ||
					    (!$print_footer_menu && $rel == "prev" && $show_rel_prev) ||
					    (!$print_footer_menu && $rel == "next" && $show_rel_next)) {
					
						printf("\t<li class='%s'><a href='%s' title='%s'>%s <strong>%s</strong></a>\n",
							$rel, $href($a['href']), sprintf($_('head-rel-'.$rel), $this->relational_link_to_string($a)),
							$_('nav-rel-'.$rel), $this->relational_link_to_string($a)
						);
					} // endif
				} // endfor
			?>
		</ul>
		</nav>
		<?php
			// packe Bigfooter bei leerem Footer-Menue in footer.in-sheet
			if(!$print_footer_menu)
				$this->print_footer_text();
		?>
		<div class="right">
			<!-- text der rechts unten steht -->
		</div>
    </footer>
  </div> <!--! end of #container -->
  <footer class="attached">
    <!--<div class="legacy"><?php $p('footer-legacy-text'); ?></div>-->
	<?php
		// packe Bigfooter bei gefuelltem footer.in-sheet nach footer.attached.
		if($print_footer_menu)
			$this->print_footer_text();
	
		// pending log messages
		if(!$this->log->is_empty()) {
			echo '<ul class="messages footer nolist">';
			$this->log->print_all();
			echo '</ul>';
		}
	?>
  </footer>
<?php /*</div><!-- end of div id="footer-background-container" helper -->*/ // seems misplaced ?>

  <?php /* JavaScript at the bottom for fast page loading */ ?>
  <script src="/shared/js-v6/libs/jquery-1.7.2.min.js"></script>
  <script>window.t29={'conf': <?php print json_encode($this->javascript_config); ?>};</script>
  <?php
	$this->print_ressourceloader_links('js', '  <script src="%s"></script>'.PHP_EOL);
  ?>
  <?php /* Piwik Noscript, Script selbst wird asynchron im JS-Bereich aufgerufen */ ?>
  <noscript><img src="<?php $p("js-piwik-noscript-imgsrc"); ?>" alt="" /></noscript>
  <?php
	if(isset($this->conf['body_append']))
		print $this->conf['body_append'];
  ?>
</body>
</html>
<?php
	} // function print_footer()
	
	/**
	 * Den "Bigfooter"-Text ausgeben.
	 * Hilfsfunktion fuer print_footer().
	 * (Grund: Implementierung als langer String in print_footer() ist unbequem)
	 **/
	private function print_footer_text() {
		$p = $this->msg->get_shorthand_printer(); // t29Messages gettext printer
		$_ = $this->msg->get_shorthand_returner(); // t29Messages gettext
		$href = $this->conf['host']->get_shorthand_link_returner(); // t29Host link rewriter
		
		?><div class="bigfooter">
		    <ul class="clearfix">
			<li class="haus"><a class="block" href="<?php print $href($_('footer-haus-link')); ?>">
				<img src="/shared/img-v6/logo-haus.footer.png" alt="Museum Haus" title="The Museum building">
				<span class="p"><?php $p('footer-haus-text'); ?></span>
			</a></li>
			<li class="copy"><a class="block" href="<?php print $href($_('footer-legal-file')); ?>#image-copyright" class="clearfix">
				<i>CC</i>
				<span class="p"><?php $p('footer-image-copyright-text'); ?></span>
			</a></li>
			<li class="logo"><span class="block clearfix"><!-- FIXME: clearfix should be semantically performed -->
				<i title="technikum29 Logo">Logo</i>
				<span class="p"><?php $p('footer-copyright-tag'); ?>
				<br><a class="u" href="<?php print $href($_('footer-legal-file')); ?>"><?php $p('footer-legal-link'); ?></a>
				<br><a class="u" href="<?php print $href($_('footer-sitemap-link')); ?>"><?php $p('footer-sitemap-text'); ?></a>
				</span>
			</span></li>

		    </ul>
		</div><?php
	}
	
	// Hilfsfunktionen
	private function relational_link_to_string($a) {
		// wenn es bei einem relationalen Link einen Titel gibt, diesen ausgeben, ansonsten die
		// Linkbeschreibung. Die Links sind XML-Elemente in der Navigation.
		return isset($a['title']) ? $a['title'] : $a;
	}

	function print_ressourceloader_links($type, $template='<!-- RL: %s -->') {
		$rl = $this->rl[$type];
		$rl_links = $rl->get_urls( isset($_GET['rl_debug']) );
		$rl_pagespecific_links = $rl->get_page_specific_urls($this->conf['seiten_id']);

		foreach(array($rl_links, $rl_pagespecific_links) as $rls) {
			foreach($rls as $link) {
				// do the host link renaming conversion. This is more important if
				// there is a web_prefix than for the suffix rewriting.
				$link = $this->conf['host']->rewrite_link($link, true);
				printf($template, $link);
			}
		}
	}
	
	function rewrite_page_prefix_links($content) {
		// called by cache: rewrite the page contents
		return preg_replace('#(href|src|action)=("|\')/#i', '\\1=\\2'.$this->conf['host']->web_prefix.'/', $content);
	}


} // class t29Template
