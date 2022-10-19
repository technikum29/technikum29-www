<?php
	$seiten_id = 'univac-kosten';
	$version = '$Id';
	$titel = 'What was the price one had to pay for an UNIVAC 9400?';
	
	require '../../../lib/technikum29.php';
?>
<h2><?php print $titel; ?></h2>

   <!--
     Some notes about prices:

       * USD to German Mark currency rate: 3,6 DM = 1 US $
         Taken from http://de.wikipedia.org/wiki/Deutsche_Mark#Wechselkurs_zum_US-Dollar
         with the value of the year 1970

       * Price of a VW bug: 2000 US $
         Taken from http://dev.technikum29.de/mails/archive/0016.html

       * Problem: Car number must match to german car number. If calulating the right
         way,
           German price / (currency rate) = USD price
           USD price / (USD price of VW bug) = No. of VW bugs
         you'll get a lower VW bug number.
         Therefore I calculated the wrong way:
           No. of VW bugs * (USD price of VW bug) = USD price
         Which makes the currency rate between USD and German Marks quite strange.
         But the USD number is always even, thats good ;-)

   -->

    <p>40 years ago, computer systems were incredibly expensive. The prices in the
       following abstract are taken from the original UNIVAC price list from 1968
       to 1970. To visualize what this mainframe is worth, we also investigated the
       prices of a Volkswagen Type 1 (commonly known as beetle), a typical economy
       car produced in Germany in the 1960/70s. In 1970, a 55&nbsp;HP model cost
       about 6000&nbsp;DM. In the USA, it was sold for approximately 2000 US&nbsp;$.</p>

    <table width="100%" class="t29-details">
      <colgroup>
        <col width="10%" />
        <col />
        <col width="15%;" align="right" />
        <col width="15%" />
        <col width="20%" />
      </colgroup>
      <tr>
        <th>model number</th>
        <th>Name</th>
        <th>price in DM</th>
        <th>price in US $</th>
        <th>Number of equivalent Volkswagen beetle</th>
      </tr>
      <tr>
        <td>3019</td>
        <td>Main processor cabinet (CPU and console)</td>
        <td>258,000 DM</td>
        <td>86,000 $</td>
        <td>43</td>
      </tr>
      <tr>
        <td>7010 *)</td>
        <td>Plated wire storage  24  KB (minimum)</td>
        <td>272,000 DM</td>
        <td>90,000 $</td>
        <td>45</td>
      </tr>
      <tr>
        <td>7010 *)</td>
        <td>Plated wire storage  131 KB (maximum)</td>
        <td>900,000 DM</td>
        <td>300,000 $</td>
        <td>150</td>
      </tr>
      <tr>
        <td>716</td>
        <td>Punch card reader</td>
        <td>70,000 DM</td>
        <td>22,000 $</td>
        <td>11</td>
      </tr>
      <tr>
        <td>768</td>
        <td>High speed printer</td>
        <td>252,000 DM</td>
        <td>84,000 $</td>
        <td>42</td>
      </tr>
      <tr>
        <td>5024</td>
        <td>Disk drive controller</td>
        <td>128,000 DM</td>
        <td>42,000 $</td>
        <td>21</td>
      </tr>
      <tr>
        <td>8414 **)</td>
        <td>Removable disk unit (6 drives)</td>
        <td>764,000 DM</td>
        <td>254,000 $</td>
        <td>127</td>
      </tr>
      <tr>
        <td>5017</td>
        <td>Tape controller</td>
        <td>121,000 DM</td>
        <td>40,000 $</td>
        <td>20</td>
      </tr>
      <tr>
        <td>861</td>
        <td>UNISERVO  12  (master)</td>
        <td>102,000 DM</td>
        <td>24,000 $</td>
        <td>17</td>
      </tr>
      <tr>
        <td>861</td>
        <td>UNISERVO  12  (slave)</td>
        <td>60,000 DM</td>
        <td>20,000 $</td>
        <td>10</td>
      </tr>
      <tr>
        <td>862</td>
        <td>UNISERVO 16</td>
        <td>157,000 DM</td>
        <td>52,000 $</td>
        <td>26</td>
      </tr>
      <tr>
        <td></td>
        <td>UNISCOPE 100 (CRT terminal) ***)</td>
        <td>15,000 DM</td>
        <td>4,000 $</td>
        <td>2</td>
      </tr>
      <tr>
        <td></td>
        <td>Hard drive  (40 MB), 1 unit</td>
        <td>2,950 DM</td>
        <td>1,000 $</td>
        <td>0,5</td>
      </tr>
      <tr style="line-height: 200%;">
        <th></th>
        <th>Sum (with 10 hard drives) about</th>
        <th>2,800,000 DM</th>
        <th>940,000 $</th>
        <th>470 cars!!</th>
      </tr>
    </table>

    <p style="font-size: 90%;">
      <span style="visibility:hidden;">**</span>*)  We have the semiconductor memory 7028, featuring 262 KB<br/>
      <span style="visibility:hidden;">*</span>**) We have the successor 8425, with 5 drives<br/>
      ***)  We have the UNISCOPE 200
    </p>

    <p>These incredible prices originated from the very high
       development costs and the low quantities. The illustration
       on the right hand shows the curious value comparison:
       Arranging all these 470 cars successively would result in a
       2.3 kilometer long chain of new cars! Therefore computer
       firms earned quite well in those days and were able to
       expand very fast.</p>

    <p>The prices for random access memory are quite outstanding.
       After the development of semiconductor memories at the early
       1970s, RAM got much cheaper.</p>

    <p>Companies closed deals with UNIVAC for maintenance and paid
       more than 4,000$. Therefore it was cheaper for them to hire and
       train own engineers for exclusively this purpose.</p>

    <p>Enterprises could also lease the mainframes from UNIVAC, which
       was quite common in the early days of EDP. Our mainframe with
       10 hard drives and fully equipped RAM would cost about
       18,000 US$ every month. Even at this time machine time was
       settled to the second, like at today's high end super computers
       where machine time can be purchased. Thus buying such a mainframe
       computer was only affordable for very big concerns.</p>

   <!-- absolut positioniertes Bildchen -->
    <img src="/shared/photos/rechnertechnik/univac/kosten-gleichsetzung.jpg"
         class="autobild"
         alt="An illustration: One Univac 9400 equals 470 cars!"  />
