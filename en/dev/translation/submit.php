<?php
/**
 * technikum29 translation system submission for AJAX calls.
 * September 2010, Quick and dirty
 **/

function get($var, $default=false, $valids=null, $do_not_check_for_bad_input=false) {
	$value = isset($_POST[$var]) ? $_POST[$var] : $default;
	if(isset($valids) && !in_array($value, $valids)) $value = $default;
	if(preg_match('/<(\s*)(script|style)|php|javascript|on[a-z]=/i', $value)) {
		// bad content! Exit immediately.
		header("HTTP/1.1 400 Bad Request");
		print "Illegal value for '$var'. Please contact the staff.";
		exit();
	}
	return $value;
}

$source = get("source", false, array('ajax'));
$page = get("page");
$node = get("node");
$initial_text = get("initial_text");
$initial_html = get("initial_html");
$new_text = get("new_text");
$new_html = get("new_html");
$user_name = get("user_name", "not given");
$user_loc = get("user_loc", "not given");

// spamschutz
if(!$source) {
	header("HTTP/1.1 400 Bad Request");
	print "Only AJAX driven calls are allowed.";
	exit;
}

// some intermediates
$pagename = preg_match("#/([^/]+?)(\.[a-z]+)?$#i", $page, $pageparts) ? $pageparts[1] : false;

// setup mail
$to = "sven";
$to .= "@technikum29.de"; // spamschutz (svn!)
$subject = "t29 translation submission";
if($pagename) $subject .= " for $pagename";
$message = <<<HERE
This ist technikum29 translation system at /en/dev/translation/submit.php form mailer.
A user translated, using $source,
	Page: $page
	Node: $node
	
New Plain Text is:

----------------------- START OF USER TEXT ------------------------------------
$new_text
------------------------ END OF USER TEXT -------------------------------------

Versus old Plaintext was:

----------------------- START OF OLD TEXT ------------------------------------
$initial_text
------------------------ END OF OLD TEXT -------------------------------------

New HTML is:

------------------------ START OF USER HTML -----------------------------------
$new_html
------------------------ END OF USER HTML -------------------------------------

Old HTML was:

------------------------ START OF OLD HTML -----------------------------------
$initial_html
------------------------ END OF OLD HTML -------------------------------------

Something about the user:

	Referer: $_SERVER[HTTP_REFERER]
	Agent:   $_SERVER[HTTP_USER_AGENT]
	IP:      $_SERVER[REMOTE_ADDR]

User given credentials:

	Name: 	$user_name
	Loc:	$user_loc
HERE;

// Send mail right now

if(mail($to, $subject, $message, "From: t29-translation-www"."@technikum29.de")) {
	// mail successfully sent
	print "Mail successfully sent :)";
} else {
	// error at mail sending!!!
	header("HTTP/1.1 500 Internal Server Error");
	print "I'm sorry, I could not mail your text to the developer team.";
}


