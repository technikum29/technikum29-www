<?php
/**
 * t29v6 401er Entry Point
 *
 * Will be called as ErrorDocument 404 which also catches old
 * file.shtml? URLs as well as old URLs which should be remapped
 * to new ones.
 *
 **/

// standard arguments
$seiten_id = '401';
$version = '$Id$';
$titel = "401 Unauthorized";
$dynamischer_inhalt = true;

$lib = dirname(__FILE__);
require "$lib/technikum29.php";

$wanted_page = $_SERVER['REQUEST_URI'];

require_once "$lib/client.php";
if(t29Client::getLanguage() == "de") {
?>
<h2>401 Nicht authorisiert</h2>
<address><?=$wanted_page; ?></address>
<p>Der Zugriff auf diese Ressource ist nicht gestattet.</p>
<?php
} else { // language 
?>
<h2>401 Unauthorized</h2>
<address><?=$wanted_page; ?></address>
<p>You are not authorized to view the requested resource.</p>
<?php
} // language
