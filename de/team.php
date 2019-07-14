<?php
	$seiten_id = 'team';
	$version = '$Id$';
	$titel = 'Team';
	
	$team_mitglieder_structured = <<<YAML
	
- full_name: Sven Köppel
  identifier: sven
  is_active_blog_author: Yes
  biography:
    de: |
       Blablabla
       und blablabla
    en: |
       Bio Text comes here.

- full_name: Roland Langfeld
  identifier: roland
  is_active_blog_author: No
  biography:
    de: |
        Beschreibung auf Deutsch
    en: |
         asdasd
	
YAML;

	require "../lib/technikum29.php";
	
	// Idea: this is expensive, call only once
	function get_team_mitglieder() {
		global $team_mitglieder_structured;
		global $lib; // defined by lib/technikum29.php
		require_once $lib.'/spyc.php';
		$team = Spyc::YAMLLoad($team_mitglieder_structured);

		// enrich
		global $webroot; // defined by lib/technikum29.php
		foreach($team as $i => $author) {
			$candidates = glob("$webroot/shared/photos/blog/blog-author-${author['identifier']}.*");
			$team[$i]["photo"] = ($candidates && isset($candidates[0])) ?
				substr($candidates[0], strlen($webroot)) : Null;
		}
		
		return $team;
	}
	
	$team_mitglieder = get_team_mitglieder();
?>
  <h2>Team</h2>

  Bla Bla BLa
  
  <pre><?php
  
  print_r($team_mitglieder);
  
  ?></pre>
