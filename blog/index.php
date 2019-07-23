<?php
	/*
	   The blog entry pages are now handled by the languages
	   itself, i.e. /de/blog.php and /en/blog.php.
	   Since we are lazy, we let the global entry page do the
	   decision to determine the browser language.
	*/
	header("Location: /?suffix=blog.php");
?>
