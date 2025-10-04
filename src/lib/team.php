<?php
	// Base file to include in /de/team.php and /en/team.php

	$seiten_id = 'team';
	$version = '$Id$';
	// set $title yourself
	
	$test_files = array("../lib/team.php", "team-list.xml");
	require "../lib/technikum29.php";
	
	$team = simplexml_load_file("team-list.xml");
	if(!$team) trigger_error("team-list.xml: XML-Datei ist nicht wohlgeformt.");
	// for the rest of this file, it follows poor man's XSLT
	
	// Sort team "list" (very cumbersome due to ugly PHP XML<->Array interface)
	$team_key = array();
	foreach($team->xpath("member[not(@is_dummy)]") as $member)
		$team_key[(string)($member['identifier'])] = (string)$member["full_name"];
	asort($team_key); // sort by value
	$team_key = array_keys($team_key); // wipe value
	$team_key[] = "you"; // restore dummy, put at end
	
	function print_team_list() {
		global $team, $team_key;
		
		?>
		<ul class="thumbs">
		<?php
		foreach($team_key as $key) {
			$member = $team->xpath("//member[@identifier='$key']")[0];
			// guess first name: (should be made as a XML attribute if it stays)
			$firstname = strstr($member['full_name'] . ' ', ' ', true );
			echo "<li><a href='#$member[identifier]'>";
			echo $member->xpath("./img[@class='thumbnail']")[0]->asXML();
			echo "<span>$firstname</span></a>";
		}
		?>
		</ul>
		<?php

		foreach($team_key as $key) {
     			$member = $team->xpath("//member[@identifier='$key']")[0];
			echo "<h3 id='$member[identifier]'>$member[full_name]</h3>";
			echo '<div class="box left clear-after" style="margin-top:0">';
			$thumb = $member->xpath("./img[@class='thumbnail']");
			$photo = $member->xpath("./img[@class='photo']");
			$thumb = $thumb ? $thumb[0]->asXML() : '';
			$photo = $photo ? $photo[0]['src'] : '';
			echo "<a href='$photo' class='popup thumbnail'>$thumb</a>";
			echo '<p>' . $member->biography->asXML() . '</p>';
			echo '</div>';
		}
	} // end of print_team_list()
?>
