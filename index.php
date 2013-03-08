<?php
 /* technikum29 language negotation since v5.8.x
  * automatical redirection based on user language
  */
 $de = strpos($_SERVER['HTTP_ACCEPT_LANGUAGE'], 'de');
 $en = strpos($_SERVER['HTTP_ACCEPT_LANGUAGE'], 'en');
 
 // Support web prefixes, aka installation of the homepage in
 // subdirectorys and not in virtual hosts
 // Basically relative redirects would do the trick, too,
 // but officially they are not allowed (not standard compilant)
 include "lib/host.php";
 $host = t29Host::detect();
 // this is not implemented in the HTML below, since actually
 // there is no browser who see's that HTML.
 
 if( ($en !== false && $de !== false && $de < $en) ||
     ($en === false && de !== false)              )
        header("Location: {$host->web_prefix}/de/");
 else
        header("Location: {$host->web_prefix}/en/");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de">
<head>
    <title>technikum29</title>
    <link rel="stylesheet" href="shared/css/startseite.css" type="text/css" title="technikum29" />
    <link rel="start" href="/de/" title="Startseite" />
    <link rel="bookmark" href="/de/" title="Startseite" />

    <link rel="next" href="/de/" title="Deutsche Startseite" />
    <link rel="copyright" href="/de/impressum.shtm" title="Kontakt, Impressum, Copyright" />

    <script type="text/javascript" src="shared/js/startseite.js"></script>

    <meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" /> 
    <meta name="author" content="h. m&uuml;ller" />
    <meta name="ICBM" content="50.14, 8.456" /> <!-- somewhere in Kelkheim -->
    <meta http-equiv="Content-Script-Type" content="text/javascript" />
    <meta http-equiv="Content-Style-Type" content="text/css" />
    <meta name="DC.Format" content="text/html" />

    <meta name="DC.Identifier" content="http://www.technikum29.de/" />
    <meta name="DC.Language" content="de" />
    <meta name="robots" content="index,follow" />
    <meta name="keywords" content="technikum, Technikum29, Museum, Main-Taunus, Technikmuseum-Main-Taunus" />
    <meta name="DC.Title" content="technikum29.de" />
    <meta name="DC.Subject" content="technikum29 Homepage" />

    <meta name="t29.thisversion" content="06.08.2006/v5.5.6" />
</head>

<body>
<div id="container">
    <h1>technikum29</h1>
    <div id="languages">
        <div lang="de" xml:lang="de" id="de">
            <h2>technikum29 auf deutsch</h2>
            <p class="text">Museum für Rechner-, Computer- und Kommunikationstechnik</p>
            <p class="go" title="Weiter zur Homepage"><a href="/de/" title="Weiter">&raquo; <span>Deutsch</span></a></p>

            <p class="author">Autor: h.M&uuml;ller (dipl.-phys.)</p>
        </div>

        <div lang="en" xml:lang="en" id="en">
            <h2>technikum29 in english</h2>
            <p class="text">Museum of calculator, computer and communication technology</p>
            <p class="go"><a href="/en/" title="Next page...">&raquo; <span>English</span></a></p>

            <p class="author">Author: h.M&uuml;ller (dipl.-phys.)</p>
        </div>
    </div>
</div>
</body>
</html>

