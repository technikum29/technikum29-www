<?php

// An RSS Feed for the quirky t29 PHP blog

$lang = "de";

function get_absolute_path($path) {
    $path = str_replace(array('/', '\\'), DIRECTORY_SEPARATOR, $path);
    $parts = array_filter(explode(DIRECTORY_SEPARATOR, $path), 'strlen');
    $absolutes = array();
    foreach ($parts as $part) {
        if ('.' == $part) continue;
        if ('..' == $part) {
            array_pop($absolutes);
        } else {
            $absolutes[] = $part;
        }
    }
    return implode(DIRECTORY_SEPARATOR, $absolutes);
}

// because the URLs are only relative, this is a URL prefix
function map_url($url) {
    // url is something like "../blog/foo.php"
    // convert it to something like "https://technikum29.de/blog/foo"
    $url = get_absolute_path("/blog/$url");
    $url = "https://technikum29.de/$url"; // prepend host
    $url = preg_replace('/\\.[^.\\s]{3,4}$/', '', $url); // remove .php
    return $url;
}

define('T29', true); // avoid t29 header to be loaded/printed
require "../blog/blog.php";
$postings = slurp_blog_postings();

header("Content-Type: application/rss+xml");
#header("Last-Modified: " . gmdate("D, d M Y H:i:s", $pubdate) . " GMT"); # seriously we don't have this
echo '<?xml version="1.0" encoding="utf-8"?>';

    
?>

<rss 
   xmlns:atom="http://www.w3.org/2005/Atom"
   xml:lang="<?php print $lang; ?>"
   version="2.0">
    <channel>
	<title>technikum29 Blog</title>
	<link>http://www.technikum29.de</link>
	<description>A blog about news from the technikum29 computer museum</description>
	<language><?php print $lang; ?></language>
	<copyright>&#x2117; &amp; &#xA9; 2003-<?=date('Y'); ?> Sven K&ouml;ppel and the technikum29 team</copyright>
	<pubDate><?=date('r'); ?></pubDate>
	<image>
		<url>https://www.technikum29.de/shared/img-v6/banner.<?php print $lang; ?>.png</url>
		<title>technikum29 Computermuseum</title>
		<link>https://www.technikum29.de/</link>
	</image>
	<!-- Time To Live: Cache validity time for channel until update in minutes -->
	<!--<ttl><?=60*12; ?></ttl>--><!-- half a day -->
	
	<atom:link href="https://www.technikum29.de/blog/rss" rel="self" type="application/rss+xml" />	
	
	<?php

	foreach($postings as $url => $posting) {
			?>
			<item>
				<title><?=$posting['title']; ?></title>
				<author><?=$posting['author']; ?></author>
				<link><?=map_url($url); ?></link>
				<guid idPermaLink="true"><?=map_url($url); ?></guid>
				<pubDate><?=$posting['date']; ?></pubDate>
			</item>
			<?php
	}
	?>

  </channel>
</rss> 
