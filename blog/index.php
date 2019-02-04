<?php
	$blog_title = "Index";
	#$blog_author = "Sven";
	#$blog_date = "2019-02-04";

	require "blog.php";
?>

<h2>Tubes: A blog about the future of technikum29</h2>

<p>Welcome to our new small blog where we write about current topics in
technikum29. This blog was started in February 2019 and will be mixed language
(German, English). It is authored by the technikum29 team but open for guest
contributions.

<h3>Entries</h3>
<p>The following entries have been written so far:

<ul>
<li>2019-02-04: <a href="2019-02-04-the-heritage.php">The Heritage</a>, by <a href="#author-sven">Sven</a>
</ul>



<h3>Authors</h3>
<p>So far, we have the following authors:

<?php
print_author_box("sven");
print_author_box("you");
?>
