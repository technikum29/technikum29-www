<?php
	$seiten_id = 'punchcard-sorter';
	$version = '$Id';
	$titel = 'The function of the punch card sorter';
	
	require '../../lib/technikum29.php';
?>

<h2><?php print $title; ?></h2>

<p>Only people who are born prior to 1960 may have knowledge of the punch card machines. We would like to give you an example of these historic machines' functionality.</p>

<p>If we had a list of customer names to be sorted, we would first give each customer a three digit customer number. We can then sort this list in numerical (ascending) order or sort by their names.</p>

<p>If we would sort the customer names manually, the cards would initially be sorted by the 100's decimal place into 10 piles. Subsequently each of the 10 piles would be sorted by the 10's decimal place into 10 piles. Finally each of the piles would be sorted by the 1's decimal place.</p>

<div class="box center">
	<img src="/shared/photos/rechnertechnik/grafiken/lochkartensortierer.en.gif" width="700" height="531" alt="Diagram about the function of the card sorter" />
</div>

<p>Machine sorting can not use this procedure since we would need an unlimited number of sorting compartments (pockets). Thus it sorts the other way around, from the 1's decimal place to the 100's decimal place. In summary, in each step (2-4, according to the diagram), there would be a maximum of only 10 card decks per sort.</p>

<p>Summing up, this yields the basic rules of mechanical sorting, as the punch card collator uses them:</p>

<ul>
	<li>The elements which have to be sorted are treated as decimal numbers, each number is broken down in its decimal places</li>
	<li>The sorting algorithm starts with the least significant digit and ends with the most significant one</li>
	<li>The sorting algorithm needs as many loops as the number of digits in each number (three loops in this case)</li>
</ul>
