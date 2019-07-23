<?php
	$seiten_id = 'blog';
	$version = '$Id$';
	$titel = 'technikum29-Blog';
	$test_files = array("team.xml", "../blog/");
	
	require "../lib/technikum29.php";
?>
	<header class="teaser seitenstart blog">
		<span id="blog-heading">
			<a class="title" href="/blog/">Tubes</a>
			<span class="subtext">A <a href="/">computer museum</a> blog</span>
		</span>
		<img class="no-copyright" src="/shared/photos/blog/blog-teaser-background-tubes.jpg" width="940" height="243">
	</header>

<h2>Tubes: A blog about the future of technikum29</h2>

<p>Welcome to our new small blog where we write about current topics in
technikum29. This blog was started in February 2019 and will be mixed language
(German, English). It is authored by the technikum29 team but open for guest
contributions.

<h3>Entries</h3>
<p>The following entries have been written so far:

<ul><?php
	require "../blog/blog.php";
	$postings = slurp_blog_postings();
	foreach($postings as $url => $posting)
		echo "<li>$posting[date]: <a href='$url'>$posting[title]</a>"; //, by $posting[author]</a>";
?></ul>


<h3>Authors</h3>
<p>So far, we have the following authors:

<?php
	$team = simplexml_load_file("team.xml");
	if(!$team) trigger_error("team.xml: XML-Datei ist nicht wohlgeformt.");
	
	foreach($team as $author) {
		echo "<section class='blog author_info left clear-after' id='author-$author[identifier]'>";
		foreach($author->xpath("./img[@class='thumbnail']") as $pic)
			echo "<a href='$pic[src]' class='popup'>".$pic->asXML().'</a>';
		echo $author->abstract->asXML();
		echo "</section>";
	}
?>
