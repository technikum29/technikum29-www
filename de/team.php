<?php
	$seiten_id = 'team';
	$version = '$Id$';
	$titel = 'Team';
	
	$dynamischer_inhalt = true; // for dev
	require "../lib/technikum29.php";
	
	$team = simplexml_load_file("team.xml");
	if(!$team) trigger_error("team.xml: XML-Datei ist nicht wohlgeformt.");
	// it follows poor man's XSLT
?>
  <h2>Team</h2>

  <p>Das technikum29-Team, blubb blubb</p>
  
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
         echo "<h3>$member[full_name]</h3>";
         echo $member->xpath("./img[@class='photo']")[0]->asXML();
         echo '<p>' . $member->biography->asXML() . '</p>';
     }
  ?>
