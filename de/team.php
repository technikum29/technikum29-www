<?php
	$seiten_id = 'team';
	$version = '$Id$';
	$titel = 'Team';
	
	$test_files = array("team-list.xml");
	require "../lib/technikum29.php";
	
	$team = simplexml_load_file("team-list.xml");
	if(!$team) trigger_error("team-list.xml: XML-Datei ist nicht wohlgeformt.");
	// it follows poor man's XSLT
?>
  <h2>Team</h2>

  <p>Das technikum29 befindet sich seit dem <a href="/heribert-mueller/">Tod des Gründers Heribert Müller</a>
  in einer Übergangsphase, in dem es von einigen Freiwilligen betrieben wird, die sich auf dieser Seite
  vorstellen. Unerwähnt bleibt dabei das große Netzwerk an Freunden und Förderern, die an dieser Stelle
  (noch) nicht genannt sind.</p>
  
  <!-- For a short overview: -->
  <!--
  <ul class="thumbs">
    <?php
      foreach($team as $member) {
         echo "<li><a href='#$member[identifier]'>";
         echo $member->xpath("./img[@class='thumbnail']")[0]->asXML();
         echo "<span>$member[full_name]</span></a>";
      }
    ?>
  </ul>
  -->
  
  <!-- For a longer list -->
  <?php
     foreach($team->xpath("member[not(@is_dummy)]") as $member) {
         echo '<div class="box left clear-after">';
		$thumb = $member->xpath("./img[@class='thumbnail']");
		$photo = $member->xpath("./img[@class='photo']");
		$thumb = $thumb ? $thumb[0]->asXML() : '';
		$photo = $photo ? $photo[0]['src'] : '';
		echo "<a href='$photo' class='popup thumbnail'>$thumb</a>";
         
         echo "<h4>$member[full_name]</h4>";
         echo '<p>' . $member->biography->asXML() . '</p>';
         echo '</div>';
     }
  ?>
