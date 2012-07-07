<?php
	$seiten_id = 'diehl';
	$version = '$Id';
	$titel = 'Details der Combitronic und Algotronic';
	
	require '../../lib/technikum29.php';
?>

<h2><?php print $title; ?></h2>

<div class="box center">
	<div style="white-space:nowrap">
        <img src="/shared/photos/rechnertechnik/combitronic-lochstreifen.jpg" width="330" height="247" alt="Bootlochstreifen" />
        <img src="/shared/photos/rechnertechnik/combitronic-logik.jpg" width="322" height="247" alt="Combitronic Logikplatinen" style="margin-left:14px" />
	</div>
    <p>Hier ein paar Details der Combitronic. Rechts ist der Bootlochstreifen (dünnes Stahlband) zu sehen. Er wird vom Motor des Druckers angetrieben. Links oben die Platine zur Druckeransteuerung, Mitte die Logik-Platine mit keramischen LSI-ICs (Combitronic) und unten die Speicherplatine der Algotronic. </p>
	
	<p>Historisch interessant ist, wie DIEHL das Prinzip der kleinen Schritte weiter verfolgte: Im Nachfolgemodell z.B. <b>DIEHL Algotronic</b> (ca. 1973/74) wurde der Laufzeitspeicher durch zwei mal 21 Stück Schieberegister mit je 512 Bit Kapazität ersetzt. Das ergab insgesamt ca. 20 KBit Speicherkapazität und erlaubte, den immer noch verwendeten Metall-Bootlochstreifen erheblich zu erweitern. Dieser Lochstreifen hatte nun 3 Spuren (davon eine Taktspur), wobei die eine Spur beim Abspulen und die andere beim sofort danach einsetzenden Rückspulen in die Schieberegister eingelesen wurde. Dieses "Boottape" enthielt auch Mikroprogramme für wissenschaftliche Funktionen (sin, cos, tan, ln, exp u.a.). Sollte der Rechner für statistische Funktionen ausgelegt werden, brauchte er nur einen anderen Bootlochstreifen und ein paar andere Tasten. Der Algotronic Rechner sieht wie die Combitronic aus, hat jedoch 12 Tasten mehr. Insgesamt war die Architektur des Tischrechners für die damalige Zeit längst überholt.<br/> Danach hat Diehl die Rechnerentwicklung mit den Typen "Alphatronic, DS 300, DS 400" vollkommen erneuert. Diese sind jedoch aus historischer Sicht für das technikum29 weniger interessant.  </p>
</div>
