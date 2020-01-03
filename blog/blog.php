<?php
/*
 * General blog functions for the new 2019 "micro" blog (micro in terms of:
 * no to little infrastructure).
 *
 * Include this instead of "lib/technikum29.php"
 *
 * It can also be used as a blog-related library from other places, in case
 * they have lib/technikum29.php included or the constant T29 defined,
 * respectively.
 *
 */

if(!defined('T29')) {

// The "seiten_id" should always be "blog" in order to trick the navigation
// system for the time being. It's a workaround because I don't want to
// touch the t29 navigation system but keep the "blog" link active.

$seiten_id = 'blog';
$titel = $blog_title . " &mdash; in the Tube, a technikum29 blog";

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

}/* end ifdef T29 */


function slurp_blog_postings() {
	/**
	 * For abusing the "include hack", as in the old news system, it would require
	 * each blog posting to include blog.php conditionally, such as with the cryptical
	 * if(!require("blog.php")) return; That's not so nice, so we don't include...
	 **/
	/*
	$pwd = realpath(getcwd()); chdir("../blog/"); // for includes in the including files
	$posting_files = glob("20*.php");
	$postings = array();
	if(!defined('T29_BLOG_SLURPING')) define('T29_BLOG_SLURPING', true); // for the hack
	foreach($posting_files as $posting) {
		echo "INCLUDING $posting\n";
		include $posting;
		$postings[$posting] = compact($blog_title, $blog_author, $blog_date);
	}
	chdir($pwd);
	return $postings;
	*/
	// but instead, for the time being, just slurp the interesting stuff with regexpes :(
	// That's of course not super stable at all.
	$posting_files = glob("../blog/20*.php");
	arsort($posting_files); // newest to oldest
	$postings = array();
	foreach($posting_files as $posting) {
		$posting_text = file_get_contents($posting);
		preg_match_all('/^\s*\$blog_(?P<key>[a-z]+)\s*=\s*("|\')(?P<value>.+)\2/m', $posting_text, $matches);
		$postings[$posting] = array_combine($matches['key'], $matches['value']);
	}
	return $postings;
}

function print_blog_title() {
	global $blog_title, $blog_date, $blog_author, $blog_title_kurz;
?>
	<h2><?php print isset($blog_title_kurz) ? $blog_title_kurz : $blog_title; ?>
	    <span class="blog_subline">on <?php print $blog_date; ?> by <a href="#author-<?php print strtolower($blog_author); ?>"><?php print $blog_author; ?></a></span>
	</h2>
<?php
}

function load_team() {
	global $webroot, $lang_path; // defined by technikum29.php
	$team_filename = "$webroot/$lang_path/team-list.xml";
	$team = simplexml_load_file($team_filename);
	if(!$team) trigger_error("$team_filename is not well formed XML.");
	return $team;
}

function load_author($blog_author) {
	if(is_string($blog_author)) {
		$blog_author = strtolower($blog_author);
		$team = load_team();
		$candidates = $team->xpath("member[@identifier='$blog_author']");
		if(!$candidates) trigger_error("team-list.xml: Missing author '$blog_author'");
		else return $candidates[0];
	} else return $blog_author; // assume XMLElement or so
}

function print_author_info() {
	global $blog_author, $blog_title, $blog_date;
	$blog_author = isset($blog_author) ? strtolower($blog_author) : Null;
	
	print_author_box($blog_author,
		"<h4>About the author of the blog post “${blog_title}”</h4><p>",
		"</p><em>Blog post written at $blog_date.</em></p>"
	);
}

function print_author_box($blog_author, $prepend_text="", $append_text="") {
	$author = load_author($blog_author);

	echo "<section class='blog author_info left clear-after' id='author-$author[identifier]'>";
	print $prepend_text;
	foreach($author->xpath("./img[@class='thumbnail']") as $pic)
		echo "<a href='$pic[src]' class='popup'>".$pic->asXML().'</a>';
	echo $author->abstract->asXML();
	print $append_text;
	echo "</section>";
}

function print_all_blog_authors() {
	$team = load_team();
	foreach($team->xpath("member[@is_active_blog_author='Yes']") as $author)
		print_author_box($author);
}
