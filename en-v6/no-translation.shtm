<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head><!--#set var="title"        value="No English version available"
   --><!--#set var="location"     value=""
   --><!--#set var="url_de"       value=""
   --><!--#set var="prev"         value=""
   --><!--#set var="prev_title"   value=""
   --><!--#set var="next"         value=""
   --><!--#set var="next_title"   value=""
   -->
     <title>technikum29 - <!--#echo var="title" --></title>
    <!--#include virtual="/en/inc/head.inc.shtm" -->
    <meta name="DC.title" content="technikum29 - <!--#echo var="title" -->" />
    <meta name="DC.subject" content="Special page for pages that don't have a translation" />
    <meta name="t29.germanoriginal" content="no original" />
    <meta name="robots" content="noindex" />
</head>
<body>
<!--#echo encoding="none" var="heading" -->
<div id="content">
    <!--
       "Not yet translated"-Page Usage
       Get-Param    optional  values
       how          yes       (yet|no)   => yet = Not yet translated | no = no translation
       backurl      yes       == url_de
       backtitle    required  title of german page

       GET-Parameters can be seperated by using , (commas) or normal sperators (&), for example:
         ?how=yet&backurl=index.shtm&backtitle=Main%20Page
         ?how=no,backtitle=Blabla
    -->

    <!--#if expr="$QUERY_STRING = /how=([^,&]+)/" --><!--#set var="how" value="$1" --><!--#endif --> 
    <!--#if expr="$QUERY_STRING = /backurl=([^,&]+)/" --><!--#set var="url_de" value="$1" --><!--#endif --> 
    <!--#if expr="$QUERY_STRING = /backtitle=([^,&]+)/" --><!--#set var="backtitle" value="$1" --><!--#endif --> 

    <!--#if expr="$how = yet" -->
    <h2>The page <!--#if expr="($backtitle)" -->&raquo;<!--#echo var="backtitle" -->&laquo;<!--#else --><!--#endif --> has not been translated yet</h2>
    <!--#else -->
    <h2>There is no translation for <!--#if expr="($backtitle)" -->&raquo;<!--#echo var="backtitle" -->&laquo;<!--#else -->the page you requested<!--#endif --> </h2>
    <!--#endif -->

    <!--#if expr="($url_de)" -->
    <p>Please <a href="/de/<!--#echo var="url_de" -->">go back to the german page</a>.</p>
    <p>You can also use automatically generated translations from <a href="http://www.google.com">Google</a> or <a href="http://babelfish.altavista.com">Altavista Babelfish</a>
       (but don't expect too much):</p>
    <ul>
       <li><a href="http://translate.google.com/translate?hl=en&sl=de&u=http://www.technikum29.de/de/<!--#echo var="url_de" -->&prev=/search%3Fq%3Dtechnikum29%26hl%3Den%26lr%3D%26sa%3DN">Read the google translation</a></li>
       <li><a href="http://babelfish.altavista.com/babelfish/tr?doit=done&url=http://www.technikum29.de/de/<!--#echo var="url_de" -->&lp=de_en">Read the Altavista bablefish translation</a>
    </ul>
    <!--#else -->
    <p>There is no english translation for the requested page.</p>
    <p><a class="go" href="javascript:history.go();">Back to the german page</a></p>
    <!--#endif -->

</div>

<!-- end of content -->
<!--#include virtual="/en/inc/menu.inc.shtm" -->
</body>
</html>