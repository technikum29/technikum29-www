<?php
	$seiten_id = 'no-translation'; // befindet sich nicht in navi
	$lang = 'en'; // force language
	$version = '$Id$';
	$titel = 'No English translation available';
	$dynamischer_inhalt = true;
	
	// see usage below
	$how = isset($_GET['how']) ? $_GET['how'] : 'no';
	$backurl = isset($_GET['backurl']) ? $_GET['backurl'] : null;
	$backtitle = isset($_GET['backtitle']) ? $_GET['backtitle'] : null;
	
	$template_callback = function($template) use($backurl,$backtitle) {
		if($backurl) {
			$template->set_page_relation("prev", $backurl, $backtitle ? $backtitle : "German version of page");
			$template->current_link_classes = array('show-rel-prev');
		}
		
		$template->interlang_links = array(
			'de' =>  $backurl ? t29Menu::dom_new_link($backurl, $backtitle) : t29Menu::dom_new_link('#', 'unknown'),
			'en' =>  t29Menu::dom_new_link('#', 'This "no translation available" page'),
		);
	};

	require "../lib/technikum29.php";
?>
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

    <? /*
    <!--#if expr="$QUERY_STRING = /how=([^,&]+)/" --><!--#set var="how" value="$1" --><!--#endif --> 
    <!--#if expr="$QUERY_STRING = /backurl=([^,&]+)/" --><!--#set var="url_de" value="$1" --><!--#endif --> 
    <!--#if expr="$QUERY_STRING = /backtitle=([^,&]+)/" --><!--#set var="backtitle" value="$1" --><!--#endif --> 
    */ ?>

    <?php

	
	if($how == 'yet')
		$h2 = "The page &raquo;$backtitle&laquo; has not been translated yet";
	else
		$h2 = "There is no translation for ".($backtitle ? " &raquo;$backtitle&laquo" : "the page you requested");
    
	print "<h2>$h2</h2>";
	
	//$url_de = "/de/"...
	//$backurl = "/de/".$url_de;
	
	if($backurl)  {
		?><p class="panel-hide">Please <a href="<?=$backurl; ?>">go back to the german page</a>.</p>
		<p>You can also use automatically generated translations from <a href="http://www.google.com">Google</a> or <a href="http://babelfish.altavista.com">Altavista Babelfish</a>
		(but don't expect too much):</p>
		<ul>
		<li><a href="http://translate.google.com/translate?hl=en&sl=de&u=http://www.technikum29.de/<?=$backurl; ?>&prev=/search%3Fq%3Dtechnikum29%26hl%3Den%26lr%3D%26sa%3DN">Read the google translation</a></li>
		<!--<li><a href="http://babelfish.altavista.com/babelfish/tr?doit=done&url=http://www.technikum29.de/<?=$backurl; ?>&lp=de_en">Read the Altavista bablefish translation</a>-->
		<li><a href="http://www.microsofttranslator.com/bv.aspx?from=de&to=en&a=http://www.technikum29.de/<?=$backurl; ?>">Read the Microsoft translator (Babelfish/Bing)</a></li>
		</ul><?php
	} else {
		?>
		<p>There is no english translation for the requested page.</p>
		<p><a class="go" href="javascript:history.go();">Back to the german page</a></p>
		<?php
	}
