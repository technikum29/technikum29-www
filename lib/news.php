<?php
/**
 * Main include for news pages, comparable to
 * /lib/search.php, used only by /{de,en}/news.php
 *
 * 
 * 2022: This is known not to work any more, because a YAML based menu
 *       is no longer part of the news since a long time.
 *       Instead, see blog RSS feed.
 *
 **/
 
if(defined('T29')) return false; // no nesting (e.g. if called by menu.php)

// Diese Datei macht eigentlich nur eines: Den RSS-Newsfeed erzeugen,
// wenn gewüscht.

$lib = dirname(__FILE__);

if(isset($_GET["format"])) {

$news_file = "/de/news.php";
$pubdate = filemtime("$lib/../".$news_file);

require $lib.'/spyc.php';
$data = Spyc::YAMLLoad($neues_menu);
$required_fields = array('titel', 'text', 'link', /*'bild'*/);

# Hack, um die Sprache zu bekommen, von technikum29.php kopiert.
require "$lib/host.php";
$host = t29Host::detect();
$file = $host->slash_filename; # e.g.: "/de/page.php"
if(!isset($lang)) $lang = substr($file, 1, 2);
if(!in_array($lang, array('de','en'))) $lang = "de"; # check if language exists

require $lib.'/messages.php';
$msg = new t29Messages($lang);
$p = $msg->get_shorthand_printer();

# und hostname davor.
# $this->conf['lang_path'].'/'.self::news_file
$news_url = "http://www.technikum29.de/$lang/news";
# if($host)	$url = $host->rewrite_link($url);

header("Content-Type: application/rss+xml");
header("Last-Modified: " . gmdate("D, d M Y H:i:s", $pubdate) . " GMT");
echo '<?xml version="1.0" encoding="utf-8"?>';
?>

<rss 
   xmlns:atom="http://www.w3.org/2005/Atom"
   xml:lang="<?php print $lang; ?>"
   version="2.0">
    <channel>
	<title><?php $p('rss-title'); ?></title>
	<link>http://www.technikum29.de</link>
	<description><?php $p('rss-description'); ?></description>
	<language><?php print $lang; ?></language>
	<copyright>&#x2117; &amp; &#xA9; 2003-<?=date('Y'); ?> <?php $p('rss-copyright'); ?></copyright>
	<pubDate><?=date('r', $pubdate); ?></pubDate>
	<image>
		<url>http://www.technikum29.de/shared/img-v6/banner.<?php print $lang; ?>.png</url>
		<title>technikum29 Computermuseum</title>
		<link>http://www.technikum29.de/</link>
	</image>
	<!-- Time To Live: Cache validity time for channel until update in minutes -->
	<!--<ttl><?=60*12; ?></ttl>--><!-- half a day -->
	
	<atom:link href="http://www.technikum29.de/<?php print $lang; ?>/news.php?format=rss" rel="self" type="application/rss+xml" />	
	
	<?php
	foreach($data as $e) {
		// Kompatibilitaet im August 2014, Uebergangsphase
		if(!isset($e['text']) && isset($e['untertitel'])) $e['text'] = $e['untertitel'];
		if(!isset($e['link']) && isset($e['datum'])) $e['link'] = $news_url.'#'.str_replace(' ', '_', $e['datum']);

		if(!array_reduce(array_map(function($x) use ($required_fields,$e){ return isset($e[$x]); }, $required_fields),
				function($a,$b){ return $a && $b;}, true)) {
			?>
			<item>
				<title>Fehlformatierung</title>
				<description><![CDATA[<html><body>
					<b>Leider ist dieser Eintrag nicht richtig formatiert</b>. Schauen Sie sich die News-Seite direkt an.
					<p><i>Details:</i></p>
					Eines der Fehler Felder <?php print implode(", ", $required_fields); ?> fehlt.
					Details: <pre><?php print var_dump($e); ?></pre>
				</body></html>]]>
				</description>
				<link>http://www.technikum29.de/de/news</link>
			</item>
			<?php
		} else {
			?>
			<item>
				<title><?=$e['titel']; ?></title>
				<description><?php
					// if text contains tags like <em>, mark it as HTML
					if(strpos($e['text'], '<') !== false) { print '<![CDATA[<html><body>'; }
					print $e['text'];
					if(strpos($e['text'], '<') !== false) { print '</body></html>]]>'; } ?>
				</description>
				<author>Heribert Müller</author>
				<?php
					if($e['link'][0] == '#') $link = $news_url . $e['link'];
					else if($e['link'][0] == '/') $link = 'http://www.technikum29.de' . $e['link'];
					else $link = $e['link'];
				?>
				<link><?=$link; ?></link>
				<guid idPermaLink="true"><?=$link; ?></guid>
				<pubDate><?=date('r', $pubdate); ?></pubDate>
			</item>
			<?php
		}
	}
	?>

  </channel>
</rss>
<?php

// rss ausgegeben, jetzt: exit um nicht noch Seite auszugeben.
exit();
} else {
	// bin eingebunden von news-Seite
	require("$lib/technikum29.php");
	// wichtig:
	return true;
}

