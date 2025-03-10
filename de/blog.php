<?php
	$seiten_id = 'blog';
	$version = '$Id$';
	$titel = 'technikum29-Blog';
	$test_files = array("team-list.xml", "../blog/");
	
	require "../lib/technikum29.php";
?>
	<header class="teaser seitenstart blog">
		<span id="blog-heading">
			<a class="title" href="/blog/">Neuigkeiten</a>
			<span class="subtext">Der Blog eines deutschen <a href="/">Computermuseums</a></span>
		</span>
		<img class="no-copyright" src="/shared/photos/blog/blog-teaser-background-tubes.jpg" width="940" height="243">
	</header>

	
<h2>Tubes: Ein Blog über die Zukunft des technikum29</h2>

<p>An dieser Stelle veröffentlichen wir seit Februar 2019 einen kleinen Blog
über aktuelle Themen im technikum29. Beiträge erscheinen ausschließlich in
einer Sprache (Englisch oder Deutsch). Beiträge werden vom
<a href="team.php">technikum29-Team</a> geschrieben, Gastbeiträge sind aber auch
willkommen.

<h3>Beiträge</h3>
<p>Die folgenden Beiträge gibt es bislang:

<ul><?php
	require "../blog/blog.php";
	$postings = slurp_blog_postings();
	foreach($postings as $url => $posting)
		echo "<li>$posting[date]: <a href='$url'>$posting[title]</a>"; //, by $posting[author]</a>";
?></ul>


<h3>Autoren</h3>
<p>Die folgenden Autoren waren bislang aktiv:

<?php
	$team = simplexml_load_file("team-list.xml");
	if(!$team) trigger_error("team-list.xml: XML-Datei ist nicht wohlgeformt.");
	
	foreach($team as $author) {
		if(!isset($author['is_active_blog_author'])) continue; // dafuq
		echo "<section class='blog author_info left clear-after' id='author-$author[identifier]'>";
		$thumb = $author->xpath("./img[@class='thumbnail']");
		$photo = $author->xpath("./img[@class='photo']");
		$thumb = $thumb ? $thumb[0]->asXML() : '';
		$photo = $photo ? $photo[0]['src'] : '';
		echo "<a href='$photo' class='popup'>$thumb</a>";
		echo $author->abstract->asXML();
		echo "<div class='more'><a class='go' href='team.php#$author[identifier]'>Biografie lesen</a></div>";
		echo "</section>";
	}
?>
