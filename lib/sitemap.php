<?php
      $test_files = array(__FILE__);
      if(!require("../lib/technikum29.php")) return; // keine verschachtelten Aufrufe
      require_once("../lib/menu.php");
	/**
	* TODO:
	*   2. de/en Texte sollten serverseitig rausgefiltert werden
	**/


      function print_sitemap() {
		global $tmpl; // global from technikum29

	      $conf = $tmpl->conf; // Template-Konfiguration (Sprache, usw)

	      $menu = new t29Menu($conf);
	      $menu->hide_geraete_seiten = false;

	      ?>
     
      <ul class="sitemap u0a">
	<li><a href="/">
			<span class="de">Hauptseite: technikum29.de</span>
			<span class="en">Main website: technikum29.de</span>
	    </a>
		<ul class="u0b">
			<li><b><span class="de">Über das Museum</span><span class="en">About our museum</span></b>
			<?php
				$menu->print_menu(t29Menu::horizontal_menu);
			?></li>
			
			<li><b><span class="de">Führung durch das Museum</span><span class="en">Electronical guide</span></b>
			<?php
				$menu->print_menu(t29Menu::sidebar_menu);
			?></li>
		</ul>
	</li>
	<li><a href="http://labs.technikum29.de">
			<span class="de">Entwicklung: labs.technikum29.de</span>
			<span class="en">Development projects: labs.technikum29.de</span>
		</a>
		<ul class="u0b">
			<li><a href="http://labs.technikum29.de/wiki/DevelopmentProjects">
					<span class="de">Entwicklungs- und Programmierprojekte</span>
					<span class="en">Programming and hardware projects</span></a>
				<ul class="u1">
					<li><a href="http://labs.technikum29.de/wiki/DevelopmentProjects/PaperTapeProject"><span class="de">Lochstreifen-Projekte</span><span class="en">Projects involving Paper Tape devices and storage</span></a>
					<li><a href="http://labs.technikum29.de/wiki/DevelopmentProjects/PunchCardProject"><span class="de">Lochkarten-Projekte</span><span class="en">Projects involving Punch card devices and storage</a>
					<li><a href="http://labs.technikum29.de/wiki/DevelopmentProjects/BullAnalexProject"><span class="de">Bull-Anelex-Projekt</span><span class="en">Connecting an Anelex Highspeed printer to the BULL Gamma Mainframe</span></a>
					<li><a href="http://labs.technikum29.de/wiki/DevelopmentProjects/Univac9400Show"><span class="de">Univac9400-Show</span><span class="en">Univac9400 show emulation</span></a>
					<li><a href="http://labs.technikum29.de/wiki/DevelopmentProjects/Papers"><span class="de">Papers und Veröffentlichungen</span><span class="en">Papers and publications</span></a>
					
				</ul>
			<li><a href="http://dev.technikum29.de/"><span class="de">Weitere Websites</span><span class="en">Website managament and design</span></a>
				<!--<ul class="u1">
					<li><a href="http://labs.technikum29.de/wiki/Website/Geschichte"><span class="de">historische Entwicklung</span><span class="en">historical evolution</span></a>
					<li><a href="http://old.technikum29.de/"><span class="de">historischer Einblick</span><span class="en">Zeitgeist-like archives</span></a>
				</ul>-->
			<!--<li><a href="http://lists.technikum29.de/"><span class="de">technikum29-Mailinglisten</span><span class="en">technikum29 mailing lists</span></a>-->
		</ul>
	</li>
      </ul>
<?php
      // End of function print_sitemap
      }
