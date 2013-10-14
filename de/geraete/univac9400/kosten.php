<?php
	$seiten_id = 'univac-kosten';
	$version = '$Id';
	$titel = 'Wie viel kostete die UNIVAC 9400-Anlage?';
	
	require '../../../lib/technikum29.php';
?>
<h2><?php print $titel; ?></h2>

    <p>Es ist unglaublich, wie teuer Computer vor ca. 40 Jahren waren.
       Wir stellen hier die Preise (in DM, für Euro-Preise ist der
       Wert jeweils durch 2 zu teilen) unserer Anlage zusammen, die aus
       der UNIVAC-Preisliste aus den Jahren 1968-1970 entnommen wurden.</p>

    <p>Um sich ein noch besseres Bild vom Wert solcher Anlagen machen
       zu können, geben wir auch die Preise als Vielfaches von
       VW-Kraftfahrzeugen an. Für einen VW-Käfer (durchschnittliches
       KFZ im Jahre 1968) musste man damals ca. 6000,- DM bezahlen
       (gehobene Ausführung).</p>

    <table width="100%" class="t29-details">
      <colgroup>
        <col style="text-align: left;"/>
        <col />
        <col width="20%;" />
        <col width="20%" />
      </colgroup>
      <tr>
        <th>Typ</th>
        <th>Bezeichnung</th>
        <th>Preis inkl. 11% MWSt in DM</th>
        <th>Zahl der äquivalenten VW (Stück)</th>
      </tr>
      <tr>
        <td>3019</td>
        <td>Zentraleinheit (Prozessor inkl. Konsole)</td>
        <td>258.000,-</td>
        <td>43</td>
      </tr>
      <tr>
        <td>7010 *)</td>
        <td>Magnetdrahtspeicher  24  KB (minimal)</td>
        <td>272.000,-</td>
        <td>45</td>
      </tr>
      <tr>
        <td>7010 *)</td>
        <td>Magnetdrahtspeicher  131 KB (maximal)</td>
        <td>900.000,-</td>
        <td>150</td>
      </tr>
      <tr>
        <td>716</td>
        <td>Lochkartenleser</td>
        <td>70.000,-</td>
        <td>11</td>
      </tr>
      <tr>
        <td>768</td>
        <td>Schnelldrucker</td>
        <td>252.000,-</td>
        <td>42</td>
      </tr>
      <tr>
        <td>5024</td>
        <td>Platten-Controller (Steuereinheit)</td>
        <td>128.000,-</td>
        <td>21</td>
      </tr>
      <tr>
        <td>8414 **)</td>
        <td>Wechselplatteneinheit mit 6 Stationen</td>
        <td>764.000,-</td>
        <td>127</td>
      </tr>
      <tr>
        <td>5017</td>
        <td>Band-Controller (Steuereinheit)</td>
        <td>121.000,-</td>
        <td>20</td>
      </tr>
      <tr>
        <td>861</td>
        <td>UNISERVO  12  (Master)</td>
        <td>102.000,-</td>
        <td>17</td>
      </tr>
      <tr>
        <td>861</td>
        <td>UNISERVO  12  (Slave)</td>
        <td>60.000,-</td>
        <td>10</td>
      </tr>
      <tr>
        <td>862</td>
        <td>UNISERVO 16</td>
        <td>157.000,-</td>
        <td>26</td>
      </tr>
      <tr>
        <td></td>
        <td>UNISCOPE 100 (Bildschirmgerät) ***)</td>
        <td>15.000,-</td>
        <td>2</td>
      </tr>
      <tr>
        <td></td>
        <td>Plattenstapel  (50 MB), 1 Stück</td>
        <td>2.950,-</td>
        <td>0,5</td>
      </tr>
      <tr style="line-height: 200%;">
        <th></th>
        <th>Summe (mit 10 Plattenstapel) ca.</th>
        <th>2.800.000,-  DM</th>
        <th>470  Stück!!</th>
      </tr>
    </table>

    <p style="font-size: 90%;">
      <span style="visibility:hidden;">**</span>*)  Wir haben den Halbleiterspeicher 7028, mit 262 KB<br/>
      <span style="visibility:hidden;">*</span>**) Wir haben das Nachfolgermodell 8425, mit 5 Stationen<br/>
      ***)  Wir haben das UNISCOPE 200
    </p>

       <p>Diese enormen Preise lassen sich nur durch die sehr hohen
          Entwicklungskosten und den kleinen Stückzahlen erklären. 		Nebenstehende Grafik zeigt den paradoxen
          Wertvergleich. Würde man die 470 Autos hintereinander stellen, so wäre die Länge dieser Neuwagenkette ca. 2,3 km!! Computerfirmen haben damals wirklich richtig gut
          verdient und konnten daher schnell expandieren.</p>

       <p>Auffällig hoch sind die Kosten für den Arbeitsspeicher. Die Preise
          hierfür sind jedoch mit der Entwicklung der Halbleiterspeicher Anfang
          der 70er Jahre schnell gefallen.</p>

       <p>Firmen, die einen Wartungsvertrag mit UNIVAC abgeschlossen hatten,
          mussten dafür monatlich ca. 10.000,- DM bezahlen. Daher war es
          preiswerter, eigene Ingenieure und Techniker hierfür einzustellen.</p>

      <p>Man konnte die Anlage von UNIVAC auch mieten, was in der frühen EDV-Zeit
         sogar üblich war. Für die oben aufgeführte Anlage hätte man mit maximal
         ausgebautem Arbeitsspeicher monatlich stolze 65.000,- DM bezahlen müssen. Deshalb wurden Rechenzeiten intern sekundengenau abgerechnet. 
         Der Kauf (oder die Miete) eines solchen Rechners kam daher nur für große Unternehmen in Betracht.</p>

    <!-- absolut positioniertes Bildchen -->
    <img src="/shared/photos/rechnertechnik/univac/kosten-gleichsetzung.jpg" class="autobild" alt="Illustration: Ein Gedankenspiel: Eine Univac 9400 entspricht 450 Autos!"  />
