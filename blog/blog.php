<?php
/*
 * General blog functions for the new 2019 "micro" blog (micro in terms of:
 * no to little infrastructure).
 *
 * Include this instead of "lib/technikum29.php"
 */

// The "seiten_id" should always be "blog" in order to trick the navigation
// system for the time being. It's a workaround because I don't want to
// touch the t29 navigation system but keep the "blog" link active.
$seiten_id = 'blog';
$titel = $blog_title . " &mdash; in the Tube, a technikum29 blog";

$lang = "en"; // for the time being

$dynamischer_inhalt = true; // at least during development

require "../lib/technikum29.php";

?>
	<header class="teaser seitenstart blog">
		<span id="blog-heading">
			<a class="title" href="/blog/">Tubes</a>
			<span class="subtext">A <a href="/">computer museum</a> blog</span>
		</span>
		<img class="no-copyright" src="/shared/photos/blog/blog-teaser-background-tubes.jpg" width="940" height="243">
	</header>
<?php

function print_blog_title() {
	global $blog_title, $blog_date, $blog_author;
?>
	<h2><?php print $blog_title; ?>
	    <span class="blog_subline">on <?php print $blog_date; ?> by <a href="#author-<?php print strtolower($blog_author); ?>"><?php print $blog_author; ?></a></span>
	</h2>
<?php
}

function print_author_info() {
	global $blog_author, $blog_title, $blog_date;
	$blog_author = isset($blog_author) ? strtolower($blog_author) : Null;
	
	print_author_box($blog_author,
		"<h4>About the author of the blog post “${blog_title}”</h4><p>",
		"</p><em>Blog post written at $blog_date.</em></p>"
	);
}

function get_author_picture_filename($blog_author) {
	global $webroot; // lib/technikum29.php
	$candidates = glob("$webroot/shared/photos/blog/blog-author-$blog_author.*");
	return ($candidates && isset($candidates[0])) ?
		substr($candidates[0], strlen($webroot)) : Null;
}

function print_author_box($blog_author, $prepend_text="", $append_text="") {
	print "<section class='blog author_info left clear-after' id='author-$blog_author'>";
	$author_picture = get_author_picture_filename($blog_author);
	if($author_picture)
		print "<a href='$author_picture' class='popup'><img src='$author_picture' alt='Photo of blog author' class='photo'></a>";
	print $prepend_text;
	
	switch($blog_author) {
	case "sven": ?>
		<a href="http://svenk.org">Sven K&ouml;ppel</a> is theoretical physicist with
		a focus on elementary particle and gravitational physics and a strong background
		in computational science. He is contributing to the <a href="/">technikum29
		computer museum</a> since more then 15 years.
		<?php
		break;
	case "you": ?>
		<em>Probably you?</em>
		If you want to write something, you are very welcome to send
		us texts <a href="/en/contact.php">by mail</a> or to contribute directly
		<a href="https://github.com/technikum29/technikum29-www">via Github</a>
		(it <a href="https://github.blog/2012-12-05-creating-files-on-github/">is easy</a>).
		<?php
		break;
	default:
		print "<em>Error: Missing author name, please provide as <tt>blog_author</tt>.</em>";
	}
	
	print $append_text;
	?>
	</section><?php
}
