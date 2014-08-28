<?php
	$seiten_id = 'news';
	$version = '$Id$';
	$titel = "What's new?";
	$menu_version = 2;

	$neues_menu = <<< MENU
- datum: July 2014
  titel: "Historic workshop device"
  text: "<em>A historic 5-bit character decoder</em> from the university. Here it is used as a decryption engine in our experimental workshop."
  bild: /shared/photos/kommunikationstechnik/telegrafenalphabet.jpg
  link: /de/kommunikationstechnik/faxtechnik.php#decoder

- datum: June 2014
  titel: "Art installation with cards"
  text:  "Our Cardpunch IBM029 were on jorney: For some time, it were part of an art installation in Tübingen (Baden-Wüttemberg, near Stuttgart)."
  bild: /shared/photos/rechnertechnik/tuebingen.jpg
  link: http://www.kunst-stoff.fr/tresorraum/wir-die-iborgs/

- datum: May 2014
  titel: "Facit papertape device"
  untertitel: "IBM1130"
  text: "Periphery of the 1130: Facit tape devices"
  bild: /shared/photos/rechnertechnik/facit4000.jpg
  link: /en/computer/ibm1130.php#1130

- datum: January 2014
  titel: "IBM 1130"
  text: "A new callenge: IBM 1130 Mainframe"
  bild: /shared/photos/rechnertechnik/ibm-1130.jpg
  link: /en/computer/ibm1130.php#ibm1130

- datum: December 2013
  titel: Reproducing punch
  untertitel: A new IBM device
  text: "Recruit: A large IBM reproducing punch from the early days of computing"
  bild: /shared/photos/rechnertechnik/ibm-514.jpg
  link: /en/computer/punchcard.php#reproducing

- datum: September 2013
  titel: "Gamma 55 is up und running"
  text: "Success! The BULL GAMMA 55 is up and running! An historical moment."
  bild: /shared/photos/rechnertechnik/leser617.jpg
  link: /en/computer/gamma55.php#ge-55

MENU;
// ende der menue-Eintraege

	if(!require("../lib/news.php")) return;
?>

<h2>What's new?</h2>

    <p>This is a news feed for the recent changes on our homepage. The latest
       posts are on top.</p>

<!--
  ACHTUNG, Testlauf im ENGLISCHEN:

  Der Inhalt der Neuigkeiten-Datei im englischen ist nun nicht mehr "doppelt-gemoppelt", sondern
  wird nur noch einmal gewartet, und zwar in dem obigen Auflistungsbereich. Im Bereich hier unten
  wird der obige Inhalt nur noch in die gewohnte HTML-Formatierung gebracht.

  - Sven, 28. August 2014
-->

<ul class="news-feed news-ng">
	<?php /* soll funktion werden in news.php */
//function print_newsfeed() {
//	global $neues_menu, $lib;
	require $lib.'/spyc.php';
	$data = Spyc::YAMLLoad($neues_menu);
	$fields = array('titel', 'datum', 'text');

	$news_ul_content = '';
	foreach($data as $e) {
		if(!array_reduce(array_map(function($x) use ($fields,$e){ return isset($e[$x]); }, $fields),
				function($a,$b){ return $a && $b;}, true)) {
			print "<li><a href='#'>Fehler in Formatierung!<em>Dieser Menüeintrag ist falsch formatiert</em></a></li>";
			$this->log->WARN("<h5>Neuigkeiten-Liste: Fehler in Formatierung</h5><p>Ein Eintrag in der Neuigkeisten-Liste ist falsch formatiert. Ich erwarte zu jedem Menüeintrag die Felder ".implode(", ", $fields).". Eine der Angaben fehlt oder ist fehlerhaft formatiert: <pre>".var_export($e, true)."</pre>");
		} else {
			?><li><a href="<?php print isset($e['link']) ? $e['link'] : '#'; ?>">
				<h3><?php print $e['datum']; ?></h3>
				<?php print isset($e['bild']) ? "<img src='$e[bild]' alt='$e[titel]'>" : ''; ?>
				<?php print $e['text']; ?>
			</a></li>
			<?php
		}
	}
//}


//	 print_newsfeed(); 
?>
</ul>



