<?php
	$titel = 'Team';
	require "../lib/team.php";
?>

  <h2>Team</h2>
  
  <p>Since the  <a href="/heribert-mueller/">sudden death of the founder and maintainer Heribert Müller</a>,
  the technikum29 computer museum is still in an interim phase. It is currently maintained by a group of
  volunteers, which are presented on this page. This doesn't display the full picture, since
  the big network of friends and supporters is not (yet) listed.</p>
  
  
    <?php  print_team_list(); ?>
