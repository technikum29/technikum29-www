<?php
	$seiten_id = 'punchcard-sorter';
	$version = '$Id';
	$titel = 'Die Funktion der Sortiermaschine';
	
	require '../../lib/technikum29.php';
?>

<h2><?php print $title; ?></h2>

<p>Nur die deutlich über 60-jährigen wissen noch, wie solche Lochkartenmaschinen arbeiten. Daher versuchen wir, Ihnen einen Einblick zu geben.</p>

<p>Nehmen wir an, es solle eine Kundenkartei (jeder Kunde hat eine Nummer) nach der Kundennummer sortiert werden (man kann natürlich auch nach Namen sortieren).</p>

<p>Der Ordnungsbegriff ist z.B. eine dreistellige Nummer. Um die Belege (Lochkarten) von Hand zu sortieren, würde man zunächst nach der Hunderterstelle sortieren und so 10 Stapel gewinnen. Anschließend würde jeder Stapel nach der Zehnerstelle geordnet werden und schließlich diese je nach der Einerstelle. Das Prinzip besteht also in einem fortgesetzten Zerlegen in immer kleinere Stapel, die erst nach dem letzten Sortiergang wieder zusammengefasst werden.</p>

<div class="box center">
	<!-- 700px PNG-Export aus SVG und dann 50 Farben GIMP auf gif => 30kb -->
	<img class="weisser-rahmen" src="/shared/photos/rechnertechnik/grafiken/lochkartensortierer.de.gif" width="700" height="528" alt="Grafik zur Funktion des Sortierers" />
</div>

<p>Das maschinelle Sortieren kann dieses Verfahren, das eine unbegrenzte Zahl von Ablegefächern benötigen würde, nicht anwenden. Es schlägt den umgekehrten Weg ein und geht von der niedrigsten Stelle des Sortierbegriffs zur höchsten. Der Kartenstapel wird dazu zunächst nach der Einerstelle sortiert. Die entstehenden zehn Pakete werden in auf- oder absteigender Folge von Hand zusammengelegt. Anschließend wird der neue Stapel geschlossen nach der Zehnerstelle sortiert. Nach dem erneuten Zusammenfassen wird nach der Hunderterstelle sortiert usw.
<br/>Das Prinzip des maschinellen Sortierens besteht also in einem abwechselnden Zerlegen und Zusammenfassen, es lässt nie mehr als 10 Kartenstapel entstehen.</p>

<p>Daraus ergeben sich die Grundregeln des maschinellen Sortierens:</p>

<ul>
	<li>Es wird nach einer Spalte des Sortierbegriffes sortiert</li>
	<li>Die Sortierung beginnt an der wertniedrigsten Stelle und endet an der werthöchsten</li>
	<li>Die Sortierung erfordert soviel Maschinendurchläufe, wie der Ordnungsbegriff an Stellen umfasst (hier 3 Stück)</li>
</ul>

<!--<p>Das untenstehende Bild zeigt, wie Karten mit dreistelligem Sortierbegriff in drei Sortiergängen in aufsteigende numerische Ordnung gebracht werden.</p>-->