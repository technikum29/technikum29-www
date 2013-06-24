<?php
/**
 * Main include for news pages, comparable to
 * /lib/search.php, used only by /{de,en}/news.php
 *
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

# und hostname davor.
# $this->conf['lang_path'].'/'.self::news_file
$news_url = "http://www.technikum29.de/de/news";
# if($host)	$url = $host->rewrite_link($url);

header("Content-Type: application/rss+xml");
header("Last-Modified: " . gmdate("D, d M Y H:i:s", $pubdate) . " GMT");
echo '<?xml version="1.0" encoding="utf-8"?>';
?>

<rss 
   xmlns:atom="http://www.w3.org/2005/Atom"
   xml:lang="de-DE"
   version="2.0">
    <channel>
	<title>technikum29 Computer Museum - Was gibt es Neues?</title>
	<link>http://www.technikum29.de</link>
	<description>Neuste Geräte und Erweiterungen im technikum29-Computermuseum</description>
	<language>de-DE</language>
	<copyright>&#x2117; &amp; &#xA9; 2033-<?=date('Y'); ?> Heribert Müller und das technikum29-Team</copyright>
	<pubDate><?=date('r', $pubdate); ?></pubDate>
	<image>
		<url>http://www.technikum29.de/shared/img-v6/banner.de.png</url>
		<title>technikum29 Computermuseum</title>
		<link>http://www.technikum29.de/</link>
	</image>
	<!-- Time To Live: Cache validity time for channel until update in minutes -->
	<!--<ttl><?=60*12; ?></ttl>--><!-- half a day -->
	
	<atom:link href="http://www.technikum29.de/de/news.php?format=rss" rel="self" type="application/rss+xml" />	
	
	<?php
	foreach($data as $e) {
		if(!array_reduce(array_map(function($x) use ($required_fields,$e){ return isset($e[$x]); }, $required_fields),
				function($a,$b){ return $a && $b;}, true)) {
			?>
			<item>
				<title>Fehlformatierung</title>
				<description>Leider ist dieser Eintrag nicht richtig formatiert. Schauen Sie sich die News-Seite direkt an.</description>
				<link>http://www.technikum29.de/de/news</link>
			</item>
			<?php
		} else {
			?>
			<item>
				<title><?=$e['titel']; ?></title>
				<description><?=$e['text']; ?></description>
				<author>Heribert Müller</author>
				<?php
					$link =  ($e['link']{0} == '#' ? $news_url : '').$e['link'];
				?>
				<link>http://www.technikum29.de/<?=$link; ?></link>
				<guid idPermaLink="true">http://www.example.com/<?=$link; ?></guid>
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
	require("$lib/technikum29.php");
	return true;
}