<html>
<head>
    <title>technikum29 translation system</title>
    <link rel="stylesheet" href="/shared/css/fresh.css" type="text/css" title="technikum29">
    <meta http-equiv="content-type" content="text/html; charset=ISO-8859-1"> 
</head>
<body>
<h1 class="dev"><a href="http://dev.technikum29.de/"><span>technikum29</span></a></h1>

<div id="page">
<h2>Correct mistakes</h2>

<p>Thank you for improving this page.</p>

<form method="post" action="http://dev.technikum29.de/cgi-bin/mail.php">
<?php

if(!isset($_GET['page'])) {
	print "Please specify a page, e.g. ?page=/en/computer/gamma3.shtm";
	exit;
}

$input = $_GET['page'];

if(!preg_match("#^/(de|en)/[/a-z]+\.s?html?$#", $input)) {
	print "Bad input filename.";
	exit;
}

$raw = @file_get_contents("http://www.technikum29.de".$input);

// versuchen, seite etwas einzugrenzen
$content = '';
if(!preg_match('#^.+?<div id="content">(.+?)<div id="sidebar">.+?$#s', $raw, $matches)) {
	//print "Cannot find content";
	$content = $raw;
} else {
	$content = $matches[1]."...";
}

$text = html2text($content);

?>

<input type="hidden" name="to" value="dev">
<input type="hidden" name="subject" value="t29 translation system non-scripted submission">
<input type="hidden" name="pre" value="Someone edited <?php print htmlentities($input, ENT_QUOTES); ?>">
<input type="hidden" name="out_heading" value="Thank you for your corrections">
<input type="hidden" name="out_text" value="Your edit was mailed to the translation team and will be published on the website in the next days. <a href=http://www.technikum29.de<?php print $input; ?>>Return to website</a>">

<textarea cols="100" rows="30">
<?php print html2text($content); ?>
</textarea>

<p><input type="Submit" value="Submit" style="font-weight: bold;">
<br><small>(Captcha challenge in next step)</small>

</form>

<?php
function html2text($html) {
    $search = array(
        "/\r/",                                  // Non-legal carriage return
        "/[\n\t]+/",                             // Newlines and tabs
        '/[ ]{2,}/',                             // Runs of spaces, pre-handling
        '/<script[^>]*>.*?<\/script>/i',         // <script>s -- which strip_tags supposedly has problems with
        '/<style[^>]*>.*?<\/style>/i',           // <style>s -- which strip_tags supposedly has problems with
        //'/<!-- .* -->/',                         // Comments -- which strip_tags might have problem a with
        '/<h[123][^>]*>(.*?)<\/h[123]>/ie',      // H1 - H3
        '/<h[456][^>]*>(.*?)<\/h[456]>/ie',      // H4 - H6
        '/<p[^>]*>/i',                           // <P>
        '/<br[^>]*>/i',                          // <br>
        '/<b[^>]*>(.*?)<\/b>/ie',                // <b>
        '/<strong[^>]*>(.*?)<\/strong>/ie',      // <strong>
        '/<i[^>]*>(.*?)<\/i>/i',                 // <i>
        '/<em[^>]*>(.*?)<\/em>/i',               // <em>
        '/(<ul[^>]*>|<\/ul>)/i',                 // <ul> and </ul>
        '/(<ol[^>]*>|<\/ol>)/i',                 // <ol> and </ol>
        '/<li[^>]*>(.*?)<\/li>/i',               // <li> and </li>
        '/<li[^>]*>/i',                          // <li>
        '/<a [^>]*href="([^"]+)"[^>]*>(.*?)<\/a>/i',
                                                 // <a href="">
        '/<hr[^>]*>/i',                          // <hr>
        '/(<table[^>]*>|<\/table>)/i',           // <table> and </table>
        '/(<tr[^>]*>|<\/tr>)/i',                 // <tr> and </tr>
        '/<td[^>]*>(.*?)<\/td>/i',               // <td> and </td>
        '/<th[^>]*>(.*?)<\/th>/ie',              // <th> and </th>
        '/&(nbsp|#160);/i',                      // Non-breaking space
        '/&(quot|rdquo|ldquo|#8220|#8221|#147|#148);/i',
                                                 // Double quotes
        '/&(apos|rsquo|lsquo|#8216|#8217);/i',   // Single quotes
        '/&gt;/i',                               // Greater-than
        '/&lt;/i',                               // Less-than
        '/&(amp|#38);/i',                        // Ampersand
        '/&(copy|#169);/i',                      // Copyright
        '/&(trade|#8482|#153);/i',               // Trademark
        '/&(reg|#174);/i',                       // Registered
        '/&(mdash|#151|#8212);/i',               // mdash
        '/&(ndash|minus|#8211|#8722);/i',        // ndash
        '/&(bull|#149|#8226);/i',                // Bullet
        '/&(pound|#163);/i',                     // Pound sign
        '/&(euro|#8364);/i',                     // Euro sign
		'/<head[^>]*>(.*?)<\/head>/is',           // unwanted tags
        '/&[^&;]+;/i',                           // Unknown/unhandled entities
        '/[ ]{2,}/'                              // Runs of spaces, post-handling
    );

    /**
     *  List of pattern replacements corresponding to patterns searched.
     *
     *  @var array $replace
     *  @access public
     *  @see $search
     */
    $replace = array(
        '',                                     // Non-legal carriage return
        ' ',                                    // Newlines and tabs
        ' ',                                    // Runs of spaces, pre-handling
        '',                                     // <script>s -- which strip_tags supposedly has problems with
        '',                                     // <style>s -- which strip_tags supposedly has problems with
        //'',                                     // Comments -- which strip_tags might have problem a with
        "strtoupper(\"\n\n\\1\n\n\")",          // H1 - H3
        "ucwords(\"\n\n\\1\n\n\")",             // H4 - H6
        "\n\n\t",                               // <P>
        "\n",                                   // <br>
        'strtoupper("\\1")',                    // <b>
        'strtoupper("\\1")',                    // <strong>
        '_\\1_',                                // <i>
        '_\\1_',                                // <em>
        "\n\n",                                 // <ul> and </ul>
        "\n\n",                                 // <ol> and </ol>
        "\t* \\1\n",                            // <li> and </li>
        "\n\t* ",                               // <li>
        '\\2',                                  // <a href="">
        "\n-------------------------\n",        // <hr>
        "\n\n",                                 // <table> and </table>
        "\n",                                   // <tr> and </tr>
        "\t\t\\1\n",                            // <td> and </td>
        "strtoupper(\"\t\t\\1\n\")",            // <th> and </th>
        ' ',                                    // Non-breaking space
        '"',                                    // Double quotes
        "'",                                    // Single quotes
        '>',
        '<',
        '&',
        '(c)',
        '(tm)',
        '(R)',
        '--',
        '-',
        '*',
        '£',
        'EUR',                                  // Euro sign. € ?
		'',                                     // unwanted tags
        '',                                     // Unknown/unhandled entities
        ' '                                     // Runs of spaces, post-handling
    );

    $text = preg_replace($search, $replace, $html);

    // Strip any other HTML tags
    $text = strip_tags($text);

    // Bring down number of empty lines to 2 max
    $text = preg_replace("/\n\s+\n/", "\n\n", $text);
    $text = preg_replace("/[\n]{3,}/", "\n\n", $text);

    // Wrap the text to a readable format
    $text = wordwrap($text, 80);

	return $text;
}

