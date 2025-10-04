<?php
/**
 * t29v6 - t29v8 404er Entry Point
 *
 * Will be called as ErrorDocument 404 which also catches old
 * file.shtml? URLs as well as old URLs which should be remapped
 * to new ones.
 *
 **/

$redirects_file = "redirects.json"; // set in _data/messages.js
$template_file = "404.htm";

$wanted_page = $_SERVER['REQUEST_URI'];

// compile a "slugified" search query input from the path
$query = preg_replace('%[/\?=\+]%', ' ', $wanted_page);
$query = preg_replace('%\s+%', ' ', $query);


$redirects = json_decode(file_get_contents($redirects_file), true);

if (is_array($redirects)) {
    foreach ($redirects as $pattern => $rewrite) {
        #error_log("Testing $pattern on $wanted_page -> $rewrite");
        if (preg_match("#$pattern#i", $wanted_page, $matches)) {
            // Replace any $1, $2... in the rewrite using matches
            $target = $rewrite;
            foreach ($matches as $index => $match) {
                $target = str_replace('$' . $index, $match, $target);
            }

            #error_log("Matched, the target is $target. Checking if exists relative to " . $_SERVER['DOCUMENT_ROOT']);
            if (file_exists($_SERVER['DOCUMENT_ROOT'] . $target)) {
                $absPrefix = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'];
                
                http_response_code(301); // nginx/php-fpm safe sends header "Status: 301 Moved Permanently"
                header('HTTP/1.1 301 Moved Permanently'); // apache style
                header("Location: $absPrefix$target");
                echo "<html>t29v8 redirects this file to <a href='$target'>$target</a>";
                exit;
            }
        }
    }
}


// Fallback: serve custom 404 page

if (file_exists($template_file)) {
    $output = file_get_contents($template_file);
    $output = str_replace('404_WANTED_PAGE', htmlspecialchars($wanted_page), $output);
    $output = str_replace('404_QUERY', htmlspecialchars($query), $output);
} else {
    // template file is missing
    $output = "404 Not Found: " . htmlspecialchars($wanted_page);
}

http_response_code(404);
echo $output;
