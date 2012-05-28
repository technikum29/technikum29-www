<?php
/**
 * technikum29v6 Page Template
 *
 * Global vars:
 *  $lang = de | en
 *  $seiten_id = kurzkennung der aktuellen seite
 *  $root = Seiten-Root fuer URLs ($root/de, $root/shared, etc.)
 *  $titel = Seitentitel
 *  $header_cache_file, $footer_cache_file.
 **/
 
class t29Template {
	private static $legal_pagenames = array( // should be const
	# lang => file relative to $lang_path, with starting "/".
		"de" => "/impressum.php",
		"en" => "/contact.php",
	);

	public $conf, $menu, $msg;
	public $body_classes = array();
	public $javascript_config = array();

	function __construct($conf_array) {
		$this->conf = $conf_array;

		// fill up configuration
		$this->conf['legal_pagename'] = $this->conf['lang_path'] . self::$legal_pagenames[$this->conf['lang']];

		// create a menu:
		require_once $this->conf['lib'].'/menu.php';
		$this->menu = new t29Menu($this->conf);

		// create localisation class:
		require_once $this->conf['lib'].'/messages.php';
		$this->msg = new t29Messages($this->conf['lang']);

		// setup body classes:
		$this->body_classes[] = "lang-" . $this->conf['lang'];
		$this->body_classes[] = "page-" . $this->conf['seiten_id'];
		
		// setup javascript configuration
		$this->javascript_config['lang'] = $this->conf['lang'];
		$this->javascript_config['seiten_id'] = $this->conf['seiten_id'];
	}
	
	/**
	 * Main caching and output system.
	 * Parameters (global configuration):
	 *    skip_cache  -  if true, skips writing output to cache file
	 *    purge_cache -  if true, forces creation of new cache file
	 *                   (does not change behaviour of this file's code)
	 **/
	function create_cache() {
		ob_start();
		$this->print_header();
		register_shutdown_function(array($this, 'create_cache_shutdown'));
	}
	
	function create_cache_shutdown() {
		$this->print_footer();
		$whole_page = ob_get_flush();
		if($this->conf['skip_cache']) {
			echo "<!-- debug mode, skipped cache and cache saving. -->";
			return; // do not save anything
		}
		
		if(!file_exists($this->conf['cache_file'])) {
			t29Template::mkdir_recursive(dirname($this->conf['cache_file']));
		}

		file_put_contents($this->conf['cache_file'], $whole_page);
	}

	public static function mkdir_recursive($pathname) {
		is_dir(dirname($pathname)) || t29Template::mkdir_recursive(dirname($pathname));
		return is_dir($pathname) || @mkdir($pathname);
	}

	function print_header() {
		$_ = $this->msg->get_shorthand_printer();
?>
<!doctype html>
<html class="no-js" lang="<?php echo $this->conf['lang']; ?>">
<head>
  <meta charset="utf-8">
  <title><?php isset($this->conf['titel']) ? $this->conf['titel'].' - ' : ''; $_('html-title'); ?></title>
  <meta name="description" content="Produziert am 08.01.2012">
  <meta name="author" content="Sven">
  <meta name="generator" content="t29v6 $Id$">
  <meta name="t29.cachedate" content="<?php print date('r'); ?>">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="/shared/css-v6/boiler.css">
  <link rel="stylesheet" href="/shared/css-v6/style.css">
  <link rel="stylesheet" href="/shared/css/common.css">

  <script src="/shared/js-v6/libs/modernizr-2.0.6.min.js"></script>
</head>

<body class="<?php echo implode(' ', $this->body_classes) ?>">
<div id="footer-background-container"><!-- helper -->
  <div id="container">
	<h1 role="banner"><a href="/" title="<?php $_('head-h1-title'); ?>"><?php $_('head-h1'); ?></a></h1>
	<div id="background-color-container"><!-- helper -->
	<section class="main content" role="main" id="content">
		<!--<header class="teaser">
			<h2 id="pdp8L">Wissenschaftliche Rechner und Minicomputer</h2>
			<img width=880 src="http://www.technikum29.de/shared/photos/rechnertechnik/univac/panorama-rechts.jpg">
		</header>-->
	<!-- start content -->
<?php 
} // function print_header().

function print_footer() {
	$p = $this->msg->get_shorthand_printer();
	$_ = $this->msg->get_shorthand_returner();
?>
	<!-- end content -->
	</section>
	<hr>
	<section class="sidebar">
			<h2 class="visuallyhidden"><?php $p("sidebar-h2-tour"); ?></h2>
			<nav class="side">
				<?php $this->menu->print_menu(t29Menu::sidebar_menu); ?>
			</nav>
			<!-- menu changing buttons are made with javascript -->
	</section>
	</div><!-- div id="background-color-container" helper end -->
	<hr>
	<header class="banner">
		<h2 class="visuallyhidden"><?php $p("sidebar-h2-mainnav"); ?></h2>
		<nav class="horizontal">
			<?php $this->menu->print_menu(t29Menu::horizontal_menu); ?>
		</nav>
		<nav class="top">
			<h3 class="visuallyhidden"><?php $p("sidebar-h2-lang"); ?></h3>
			<ul>
				<?php
					foreach($this->conf['languages'] as $l => $sets) {
						printf("\t\t\t\t<li%s><a href='%s' title='%s'>%s</a></li>\n",
							($l == $this->conf['lang'] ? ' class="active"' : ''),
							$sets[1].'#',
							"View in $sets[0]",
							$sets[0]
						);
					
					}
				?>
			</ul>
			<form method="get" action="#"><?php printf('
				<span class="no-js">%s:</span>
				<input type="text" value="" data-defaultvalue="%s" name="q" class="text">
				<input type="submit" value="%s" class="button">
				', $_('sidebar-search-label'), $_('sidebar-search-label'), $_('sidebar-search-label')); ?>
			</form>
		</nav>
    </header>
	<hr>
    <footer>
		<nav class="guide">
			<!-- hier wird nav.side die Liste per JS reinkopiert -->
		</nav>
		<nav class="rel clearfix">
		<ul>
			<?php $this->menu->print_relations(); ?>
			<!--
			<li class="prev"><a href="#">vorherige Seite <strong>Univac 9200</strong></a>
			<li class="next"><a href="#">nächste Seite <strong>Analog und Hybridrechner</strong></a>
			-->
		</ul>
		</nav>
		<div class="right">
			<img src="/shared/img-v6/logo.footer.png" title="technikum29 Logo" alt="Logo" class="logo">
			<?php $p('footer-copyright-tag'); ?>
			<br/><?php printf('<a href="%s">%s</a>', $this->conf['legal_pagename'], $_('footer-legal-link')); ?>
			<div class="icons">
				<a href="<?php echo $this->conf['legal_pagename']; ?>#image-copyright"><img src="/shared/img-v6/cc-icon.png"></a>
				<!--<a href="http://ufopixel.de" title="Designed by Ufopixel"><img src="http://svenk.homeip.net/dropbox/Ufopixel/Ufopixel-Design/logo_90x30/ufopixel_logo_90x30_version2.png"></a>-->
			</div>
			<!--CC<br>Viele Bilder können unter einer CreativeCommons-Lizenz
			verwendet werden. Erkundigen Sie sich.-->
		</div>
				
		<!--Copyright-Hinweis<br>
		technikum29-Logo, Link aufs Impressum, Kontakt<br>
		Creative-Commons-Tag<br>
		Designed by Ufopixel<br>-->
    </footer>
  </div> <!--! end of #container -->


  <!-- JavaScript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="/shared/js-v6/libs/jquery-1.6.2.min.js"><\/script>')</script>

  <script src="/lib/messages.php?pre=t29MSGDATA%3D&post=<?php echo urlencode('$(function(){t29.msg.setup();});'); ?>"></script>
  <script>$(function(){t29.config = <?php print json_encode($this->javascript_config); ?>; });</script>
  <script src="/shared/js-v6/plugins.js"></script>
  <script src="/shared/js-v6/script.js"></script>
</div><!-- end of div id="footer-background-container" helper -->
</body>
</html>
<?php
	} // function print_footer()
	
} // class t29Template