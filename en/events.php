<?php
/**
 * Termine im Englischen sind, auf Heriberts Wunsch im Juni 2017 entstanden.
 *
 * Die Idee dieser Umsetzung ist, dass die deutsche Seite angezeigt wird und
 * darueber ein Hinweis, der in etwa die Message trägtt "Sieht, bei uns ist
 * viel los, wir können das gar nicht alles übersetzen".
 *
 */

	$seiten_id = 'termine';
	$version = '$Id: index.php 387 2013-05-08 09:58:11Z heribert $';
	$titel = 'Events and guided tours';
	
	require "../lib/technikum29.php";
?>


<h2>Events and guided tours</h2>

<p>We don't have daily tours at technikum29 computer museum, but instead a lively timetable full
of specialized events tailored for the registered audience. We invite anybody to register by writing
an email to <a href="mailto:post@technikum29.de">post@technikum29.de</a>. This also applies to
international publicum. From time to time or in special cases we offer tours in English language.

<p>Next to the typical guided tour, we have built up a broad curriculum on
<a href="/en/education.php">educational courses and workshops for children</a>, "research"-like
<a href="/en/study-projects.php">school projects</a>, artistic
<a href="/en/miscellaneous.php#music">music projects</a> and
<a href="/en/miscellaneous.php#leander">art projects</a>. We also frequently host public evening
talks for general purpose outreach.

<p>The following information is merely a copy of our <a href="/de/termine.php">calender of tours and
events for the German-speaking audience</a>. We can hardly translate the frequent changes and it is
probably also of little interest for non-German speaking visitors.


<!-- Links from no-translation.php -->
<?php $path = "/de/termine.php"; ?>
<p>You can also access machine-translated versions of the dates, ie. the <a href="http://translate.google.com/translate?hl=en&sl=de&u=http://www.technikum29.de<?=$path; ?>&prev=/search%3Fq%3Dtechnikum29%26hl%3Den%26lr%3D%26sa%3DN">Google translation "Events"</a> or the
<a href="http://www.microsofttranslator.com/bv.aspx?from=de&to=en&a=http://www.technikum29.de<?=$path; ?>">Bing translation "Events"</a>.


<!-- From here, everything is from the german termine.php page -->
<?php 
	/* This only works because ../lib/technikum29.de
	   recognizes loop includes and is skipped in
	   ../de/termine.php */
	include "../de/termine.php";
?>
