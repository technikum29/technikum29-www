<?php
	$titel = 'Team';
	require "../lib/team.php";
?>
  <h2>Team</h2>

  <p>Das technikum29 befindet sich seit dem <a href="/heribert-mueller/">Tod des Gründers Heribert Müller</a>
  in einer Übergangsphase, in dem es von einigen Freiwilligen betrieben wird, die sich auf dieser Seite
  vorstellen. Unerwähnt bleibt dabei das große Netzwerk an Freunden und Förderern, die an dieser Stelle
  (noch) nicht genannt sind.</p>

  <?php  print_team_list(); ?>
