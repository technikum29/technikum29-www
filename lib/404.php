<?php
/**
 * t29v6 404er Entry Point
 *
 * Will be called as ErrorDocument 404 which also catches old
 * file.shtml? URLs as well as old URLs which should be remapped
 * to new ones.
 *
 **/

// standard arguments
$seiten_id = '404';
$version = '$Id$';
$titel = "404 Seite nicht gefunden";
$dynamischer_inhalt = true;

$lib = dirname(__FILE__);
require "$lib/technikum29.php";

#require_once "$lib/link.php";

$wanted_page = $_SERVER['REQUEST_URI'];

# check if page exists when replacing '.shtml?' => '.php':
$phpext_path = $_SERVER['DOCUMENT_ROOT'] . preg_replace('/\.shtml?$/i', '.php', $wanted_page);
if(file_exists($phpext_path)) {
	$noext_path = preg_replace('/\.shtml?$/i', '', $wanted_page);
	header('HTTP/1.1 301 Moved Permanently');
	header('Location: '.$noext_path);
	exit;
}

# check that moved pages:
$redirects = array(
	# Inhaltsseiten
	#'/de/suche' => '/de/wir-suchen', # ups, das geht natuerlich
	#'/en/search' => '/en/wanted',    # so nicht. da es die neuen seiten ja jetzt gibt.

	# Geraete/Extraseiten
	'/de/geraete/anita' => '/de/rechnertechnik/elektronenroehren',
	'/en/devices/anita' => '/en/computer/electron-tubes',
	'/de/geraete/combitron' => '/de/rechnertechnik/programmierbare',
	'/en/devices/combitron' => '/en/computer/programmable',
	'/de/geraete/ibm_77' => '/de/rechnertechnik/lochkarten-edv#ibm77',
	'/de/geraete/kernspeicher' => '/de/rechnertechnik/speichermedien#kernspeicher',
	'/de/geraete/laufzeitspeicher' => '/de/rechnertechnik/speichermedien#laufzeitspeicher',
	'/de/geraete/pdp_8I' => '/de/rechnertechnik/fruehe-computer#pdp8i',
	'/de/geraete/univac9400' => '/de/rechnertechnik/univac9400',
	'/de/geraete/univac9400/univac_9300' => '/de/rechnertechnik/univac9200',
	'/en/devices/univac9400/univac_9300' => '/en/computer/univac9200',
	'/de/geraete/bull-bs-pr' => '/de/rechnertechnik/tabelliermaschine',
);

foreach($redirects as $source => $target) {
	if(strcasecmp($source, $wanted_page) == 0) {
		# we got a match
		header('HTTP/1.1 301 Moved Permanently');
		header('Location: '.$target);
		exit;
	}
}

require_once "$lib/client.php";
if(t29Client::getLanguage() == "de") {
?>
<h2>404 Seite nicht gefunden</h2>
<address><?=$wanted_page; ?></address>
<p>Unsere Website wurde im Herbst 2012 neugestartet. Sie können unsere Suche oder
die Navigation verwenden, um vielleicht doch noch an die gewünschten Informationen
zu kommen.</p>
<?php
} else { // language 
?>
<h2>404 Page not found</h2>
<address><?=$wanted_page; ?></address>
<p>Our website was reconstructed in autumn 2012. Maybe you find your wanted website
in the navigation or our new search form.</p>
<?php
} // language