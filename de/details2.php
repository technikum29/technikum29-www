<?php
	$seiten_id = 'details2';
	$version = '$Id$';
	$titel = 'Mittlere Datentechnik und professionelle Früh-Computer aus dem Museumsbestand';
	
	require "../lib/technikum29.php";
?>
<h2><?php print $titel; ?></h2>

<table width="100%" border="0" cellpadding="0" cellspacing="1" class="t29-details">
  <colgroup>
    <col class="middle" /> <!-- middle-Klasse nicht -->
    <col class="middle" /> <!-- eingerichtet        -->
    <col class="middle" />
    <col class="bemerkungen" />
  </colgroup>
<!-- <tr>
    <th colspan="4">Mittlere Datentechnik und professionelle Früh-Computer aus dem Museumsbestand</th>
  </tr> -->
  <tr>
    <th width="20%">Hersteller, Typ</th>
    <th width="5%">Baujahr</th>
    <th width="25%">Peripherie</th>
    <th width="50%">Bemerkungen</th>
  </tr>
   <tr>
    <td class="b">LGP-21</td>
    <td>1964</td>
    <td>Flexowriter, Lochstreifenleser, Magnetbandlaufwerk, zusätzliche Festplatten</td>
    <td>In Deutschland gebauter, sehr früher wissenschaftlicher Rechner mit Germaniumtransistoren</td>
  </tr>
  <tr>
    <td class="b">DEC Classic 8</td>
    <td>1965</td>
    <td>Großes Bandlaufwerk "580", Festplatte DF 32, 12 KB Zusatzspeicher**, Teletype</td>
    <td>Erster in Serie gebauter "Mini"computer der Welt mit sehr niedriger Seriennummer. Die 	Classic 8 und die Peripheriegeräte enthalten keine ICs. Es handelt sich daher um einen 	Computer der 2. Generation</td>
  </tr>
  <tr>
    <td class="b">DEC PDP 8 I</td>
    <td>1967-69</td>
    <td>Teletype, zwei DECTAPEs inkl. Kontroller (Transistortechnik), Lochstreifenleser, 		Analog-Digital-Wandler, Plotter u. vieles mehr</td>
    <td>Nach der "Classic-8" ist die 8I der erste Rechner von DEC mit integrierten Schaltkreisen. 	8 KB Kernspeicher. Früher "Mini"-Computer in der Größe eines kleinen Schrankes (ca. 		300kg). Typischer Industrie-Urcomputer der vielseitig anwendbar ist. 		Kernspeichertechnik.<br/>Das Gesamtsystem ist voll funktionsfähig angeschlossen</td>
  </tr>
  <tr>
    <td class="b">DEC PDP 8L</td>
    <td>1968-70</td>
    <td>Teletype-Drucker, zwei Speichererweiterungen (jetzt 12K).</td>
    <td>"L" stand wohl für "Low Cost", ein abgespeckter PDP 8I. </td>
  </tr>
  <tr>
  <td class="b">DEC PDP 12</td>
  <td>1969-73</td>
  <td>Teletype....siehe<a href="/de/rechnertechnik/fruehe-computer.php#pdp12"> <i>PDP-12 Rechner</i></a></td>
  <td>Wissenschaftlicher Laborrechner der im LINC-8 und PDP-8 Modus arbeiten kann.<br>
  Hoch ausgebauter Rechner mit über 450 Einzelmodulen.</td>
  </tr>
  
  <tr>
    <td class="b">DEC LAB 8e</td>
    <td>1971/72</td>
    <td>2 Bandlaufwerke TU56, Hochgeschwindigkeits-Lochstreifenleser und Stanzer, 	Wechselplattenlaufwerk RK05, 8 Zoll Floppy RX01, Bildschirm VR12, AD-DA-Wandler, 	Teletype</td>
    <td>Labor-Rechner mit dem Gewicht einer halben Tonne. Erster DEC-Rechner mit Bus-System, 	daher sehr vielseitig erweiterbar.</td>
  </tr>
  <tr>
    <td class="b">DEC PDP 11/20</td>
    <td>1970</td>
    <td>Hochgeschwindigkeits-<br/>Lochstreifenleser- und stanzer, Teletype</td>
    <td>Platine M 729 fehlt. Erster Rechner der 11er Serie Kernspeichertechnik.</td>
  </tr>
  <tr>
    <td class="b">WANG 2200 A/B</td>
    <td>1973</td>
    <td>8-Zoll-3fach Diskettenlaufwerk, 36-cm Fest-Wechselplattenlaufwerk, Lochstreifenleser, Stapelkartenleser, Spezial-BASIC-Tastatur, Mehrere Drucker, Teletype</td>
    <td>Vermutl. das erste Gerät, welches mit heutigen Computern ähnlichkeit hat. Reiner BASIC-Rechner, CPU ohne Mikroprozessor. Zentraleinheit, Netzteil, Tastatur und Sichtgerät ist jeweils getrennt. Eingeb. Bandlaufwerk: 1,7KB pro m. Arbeitsspeicher: 8KB. Plattenlaufwerk: 5 MB.<br/>Dieser sehr frühe Computer dürfte in der vorhandenen Ausbaustufe einmalig in Deutschland sein. Damaliger Gesamtwert: Weit über 100.000,- DM</td>
  </tr>
  
  <tr>
  <td class="b">Data General: NOVA 2</td>
  <td>1973</td>
  <td>Lochstreifenleser, 8"-Floppy, Wechselplatten, Terminal, Teletype</td>
  <td>Konkurrenzmodell zu den PDP-8-Rechnern von DEC.</td>
  <tr>
  
    <td class="b">WANG PCS II</td>
    <td>1976</td>
    <td>Integriertes, aufgesetztes Doppelfloppy (5 &frac14;-Zoll)</td> <!--  HIER IST DAS 1/4-ZEICHEN ODER SO WAS MAL SCHAUEN !!!!!!!!! -->
    <td>Erster <i>Personal</i>computer (PC) der Welt.</td>
  </tr>
  <tr>
    <td class="b">WANG 2200 VP**</td>
    <td>1977</td>
    <td>Peripherie kompatibel zu 2200 A/B</td>
    <td>VP: Very Powerful. Sehr leistungsfähiges Gerät mit erweitertem Basic-2 von Wang</td>
  </tr>
  <tr>
    <td class="b">WANG 2200 MVP**</td>
    <td>1979</td>
    <td>Typenraddrucker, Weitere Peripherie ist mit 2200 A/B kompatibel</td>
    <td>Rechner für bis zu 4 Arbeitsplätze. 32K (64K) Arbeitsspeicher. 80 MB Festplattensystem kostete alleine 80.000,- DM (also pro MB 1000,-DM) und mußte in klimatisiertem Raum laufen.</td>
  </tr>
  <tr>
    <td colspan="4"><i>**) Diese Geräte befinden sich aus Platzgründen zur Zeit im Archiv.</i></td>
  </tr>
</table>
