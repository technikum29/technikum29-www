<?php
	$seiten_id = 'punchcard-collator';
	$version = '$Id';
	$titel = 'The function of the punch card collator';
	
	require '../../lib/technikum29.php';
?>

<h2><?php print $title; ?></h2>

<p>What does a punch card collator do? Operations were mostly divided into two categories: Non-changing numbers (e.g. adresses are subject to few changes) and changing numbers (e.g. sales volume are constantly changing).</p>

<p>If we had a list of customer names to be sorted, we would first give each customer a 5 digit customer number.  We can then sort this list in numerical order or sort by their names.</p>

<div class="box center">
	<img src="/shared/photos/rechnertechnik/grafiken/lochkartenmischer.en.gif" width="600" height="523" alt="Diagram about the function of the card collator" />
</div>

<p>In our simple example, we have only two types of cards: Address cards and sales cards. The address input station/hoppers are filled in ascending customer numbers. Likewise the sales cards are in ascending order in the sales input station/hopper. Now the collator merges these two stacks to one stack where the sales cards are associated with every matching address/customer number. If the address/customer number card which is associated to a sales number is missing (or the other way around), the collator will separate the card in another pocket.</p>

<p>The ability to sort the 2 independent decks of input cards into these 3 categories was the primary task of the collator. Therefore, the machine requires 2 input hoppers and at least 4 output pockets. In addition there were many other sorting variations and possibilites for this machine.</p>
