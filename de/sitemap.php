<?php
	$seiten_id = 'sitemap';
	$version = '$Id: sitemap.php 565 2014-06-05 12:48:12Z sven $';
	$titel = 'Sitemap';

	if(!require("../lib/technikum29.php")) return; // keine verschachtelten Aufrufe
?>
    <h2>Sitemap</h2>
    <p>Im Folgenden ist eine vollständige hierarchisch strukturierte Darstellung aller Einzelseiten
    des Internetauftritts von technikum29 dargestellt. Wenn Sie etwas nicht finden, ist dies eine
    Möglichkeit, zu suchen oder sich einen Überblick zu verschaffen. Wir weisen auch auf
    <a href="/de/suche.php">unsere Seitensuche</a> hin.
    </p>
    
    <?php
      // nicht dass das eh schon drin waere
      require_once("../lib/menu.php");
      $conf = $tmpl->conf; // Template-Konfiguration (Sprache, usw)

      $menu = new t29Menu($conf);
      $menu->hide_geraete_seiten = false;

      ?>
      
      <ul class="sitemap u0a">
	<li><a href="/">Hauptseite: technikum29.de</a>
		<ul class="u0b">
			<li><b>Über das Museum</b>
			<?php
				$menu->print_menu(t29Menu::horizontal_menu);
			?></li>
			
			<li><b>Führung durch das Museum</b>
			<?php
				$menu->print_menu(t29Menu::sidebar_menu);
			?></li>
		</ul>
	</li>
	<li><a href="http://labs.technikum29.de">Entwicklung: labs.technikum29.de</a>
		<ul class="u0b">
			<li><a href="http://labs.technikum29.de/wiki/DevelopmentProjects">Entwicklungs- und Programmierprojekte</a>
				<ul class="u1">
					<li><a href="http://labs.technikum29.de/wiki/DevelopmentProjects/PaperTapeProject">Lochstreifen-Projekte</a>
					<li><a href="http://labs.technikum29.de/wiki/DevelopmentProjects/PunchCardProject">Lochkarten-Projekte</a>
					<li><a href="http://labs.technikum29.de/wiki/DevelopmentProjects/BullAnalexProject">Bull-Anelex-Projekt</a>
					<li><a href="http://labs.technikum29.de/wiki/DevelopmentProjects/Univac9400Show">Univac9400-Show</a>
					<li><a href="http://labs.technikum29.de/wiki/DevelopmentProjects/Papers">Papers und Veröffentlichungen</a>
					
				</ul>
			<li><a href="http://labs.technikum29.de/wiki/Website">Website-Verwaltung</a>
				<ul class="u1">
					<li><a href="http://labs.technikum29.de/wiki/Website/Geschichte">historische Entwicklung</a>
					<li><a href="http://old.technikum29.de/">historischer Einblick</a>
				</ul>
			<li><a href="http://lists.technikum29.de/">technikum29-Mailinglisten</a>
		</ul>
	</li>
      </ul>