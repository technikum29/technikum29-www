<?php
/**
 * technikum29v6 Page Template
 *
 * Global vars:
 *  $lang = de | en
 *  $seiten_id = kurzkennung der aktuellen seite
 *  $root = Seiten-Root fuer URLs ($root/de, $root/shared, etc.)
 **/

function print_header() {
	global $lang, $seiten_id, $root, $lib;

?>
<!doctype html>
<html class="no-js" lang="de">
<head>
  <meta charset="utf-8">

  <title>Mockup t29v6</title>
  <meta name="description" content="Produziert am 08.01.2012">
  <meta name="author" content="Sven">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="/shared/css-v6/boiler.css">
  <link rel="stylesheet" href="/shared/css-v6/style.css">
  <link rel="stylesheet" href="/shared/css/common.css">

  <script src="/shared/js-v6/libs/modernizr-2.0.6.min.js"></script>
</head>

<body>
<div id="footer-background-container"><!-- helper -->
  <div id="container">
	<h1 role="banner"><a href="#/" title="Zur technikum29 Startseite">technikum29</a></h1>
	<div id="background-color-container"><!-- helper -->
	<section class="main content" role="main" id="content">
	<!--### START EXAMPLE CONTENT ###-->
		<!--<header class="teaser">
			<h2 id="pdp8L">Wissenschaftliche Rechner und Minicomputer</h2>
			<img width=880 src="http://www.technikum29.de/shared/photos/rechnertechnik/univac/panorama-rechts.jpg">
		</header>-->
<?php 
} // function print_header().

function print_footer() {
?>
	<!--### END EXAMPLE CONTENT ###-->
	</section>
	<hr>
	<section class="sidebar">
			<h2 class="visuallyhidden">Museumstour</h2>
			<nav class="side">
				<?php print_menu("sidebar") ?>
				<span class="button collapse-menu">Menü ausklappen</span>
			</nav>
			<!-- hier dann die Buttons, die dynamisch erzeugt werden, zum Aufklappen, etc. -->
			<!-- die werden dann mit Javascript gemacht -->
			<span class="button get-menu">Menü anzeigen</span>
	</section>
	</div><!-- div id="background-color-container" helper end -->
	<hr>
	<header class="banner">
		<h2 class="visuallyhidden">Hauptnavigation</h2>
		<nav class="horizontal">
			<?php print_menu("hauptnavigation"); ?>
		</nav>
		<nav class="top">
			<h3 class="visuallyhidden">Sprachauswahl</h3>
			<ul>
				<li class="active"><a href="#">Deutsch</a>
				<li><a href="#">Englisch</a>
			</ul>
			<form method="get" action="#">
				<span class="no-js">Suchen:</span>
				<input type="text" value="" data-defaultvalue="Suchen" name="q" class="text">
				<input type="submit" value="Suchen" class="button">
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
			<li class="prev"><a href="#">vorherige Seite <strong>Univac 9200</strong></a>
			<li class="next"><a href="#">nächste Seite <strong>Analog und Hybridrechner</strong></a>
		</ul>
		</nav>
		<div class="right">
			<img src="/shared/img-v6/logo.footer.png" title="technikum29 Logo" alt="Logo" style="width:30px; padding-right: 10px">
			&copy; 2003-2012 technikum29.
			<br/><a href="/de/impressum.php">Impressum und Kontakt</a>
			<div class="clear"></div>
			<div style="padding-top: 8px;">
				<img src="http://svenk.homeip.net/dropbox/Ufopixel/Ufopixel-Design/logo_90x30/ufopixel_logo_90x30.png">
				<img src="http://mirrors.creativecommons.org/presskit/cc.primary.srr.gif" style="padding-left: 5px;">
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


  <script defer src="/shared/js-v6/plugins.js"></script>
  <script defer src="/shared/js-v6/script.js"></script>
</div><!-- end of div id="footer-background-container" helper -->
</body>
</html>
<?php
} // function print_footer()
?>