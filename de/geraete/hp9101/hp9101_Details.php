<?php
	$seiten_id = 'hp9101';
	$version = '$Id';
	$titel = 'hp9101';
	
	require '../../../lib/technikum29.php';
?>

<h2><?php print $titel; ?></h2>

	<p>
	*** ACHTUNG BAUSTELLE ! ***
	Stand: 12. Juli 2024
</p>

	<p> An dieser Stelle berichten wir über die Bestandsaufnahme zur hp9101 Speichererweiterung und die Wiederinbetriebnahme der Maschine.
	Die Seite wird kontinuierlich mit neuen Inhalten ergänzt.
</p>

<h3>Herkunft unserer hp9101-Speichererweiterung</h3>

<p>Im Juni 2023 kam die hp9101 als Leihgabe ins Museum. Der Leihgeber erwarb sie auf einer Kleinanzeigenplattform.
</p>


<h3>Aufbau und Funktion der hp9101-Speichererweiterung</h3>

<p>1970 brachte Hewlett Packard diese Speichererweiterung für die Tischrechner 9100A und B heraus. Sie enthält einen Kernspeicher mit 
	20832 Bit, ausreichend für 248 zusätzliche Datenregister oder 3472 zusätzliche Programmschritte. Auf die Datenregister kann durch FMT-Befehle von dem 9100-Rechner 
	aus zugegriffen werden, alle 248 Register stehen auch für direkte Speicherarithmetik (+ - * / ) zur Verfügung und sie können auch indirekt adressiert 
	werden. <br>
	Da Programme nur im Kernspeicher des 9100A/B ausgeführt werden können, werden Programme und Unterprogramme dort erstellt und als Programmmodule 
	in die Speichererweiterung ausgelagert. Bei Bedarf läd die 9101 Unterprogramme in den Hauptrechner und erlaubt bis zu 14 Ebenen für Unterprogramme. 
	Ferner können Speicherbereiche in der 9101 gegen Änderung geschützt werden. Alles in allem eine mächtige Erweiterung der Fähigkeiten der 9100er Rechner (Details 
	siehe am Ende dieser Seite) !<br>
	Unsere Maschine ist Baujahr 1971 (Datum-Codes auf den ICs) und hat die Serien-Nr 0980A00880.
</p>

<h3>einige Detailbilder unserer 9101</h3>

	<p>Zum Vergrößern der Bilder bitte anklicken</p>

<div class="box center"> 
		 <a  href="/de/geraete/hp9101/hp9101_Bilder/hp9101_front_total_gr.jpeg" class="popup">
		<img src="/de/geraete/hp9101/hp9101_Bilder/hp9101_front_total.jpeg" width="230"  />
	</a>
		 <a  href="/de/geraete/hp9101/hp9101_Bilder/hp9101_front_gr.jpeg" class="popup">
		<img src="/de/geraete/hp9101/hp9101_Bilder/hp9101_front.jpeg" width="230"  />
	</a>
		 <a  href="/de/geraete/hp9101/hp9101_Bilder/hp9101_rueck_gr.jpeg" class="popup">
		<img src="/de/geraete/hp9101/hp9101_Bilder/hp9101_rueck.jpeg" width="255"  />
	</a>
		<p class="bildtext"><b>hp9101</b> Gesamtansicht (li), Front (mi) und Rückansicht (re)</p>
	</div>

<div class="box center"> 
		 <a  href="/de/geraete/hp9101/hp9101_Bilder/hp9101_Chassis_gr.jpeg" class="popup">
		<img src="/de/geraete/hp9101/hp9101_Bilder/hp9101_Chassis.jpeg" width="200"  />
	</a>
		 <a  href="/de/geraete/hp9101/hp9101_Bilder/hp9101_Chassis_leer_gr.jpeg" class="popup">
		<img src="/de/geraete/hp9101/hp9101_Bilder/hp9101_Chassis_leer.jpeg" width="184"  />
	</a>
		 <a  href="/de/geraete/hp9101/hp9101_Bilder/hp9101_manuals_gr.jpeg" class="popup">
		<img src="/de/geraete/hp9101/hp9101_Bilder/hp9101_manuals.jpeg" width="300"  />
	</a>
		<p class="bildtext"><b>hp9101</b> Chassis mit Platinen (li), Chassis leer (mi) und Manuals (re)</p>
	</div>

<div class="box center"> 
		 <a  href="/de/geraete/hp9101/hp9101_Bilder/hp9101_PCB_1f_gr.jpeg" class="popup">
		<img src="/de/geraete/hp9101/hp9101_Bilder/hp9101_PCB_1f.jpeg" width="80"  />
	</a>
		 <a  href="/de/geraete/hp9101/hp9101_Bilder/hp9101_PCB_2f_gr.jpeg" class="popup">
		<img src="/de/geraete/hp9101/hp9101_Bilder/hp9101_PCB_2f.jpeg" width="80"  />
	</a>
		 <a  href="/de/geraete/hp9101/hp9101_Bilder/hp9101_PCB_3f_gr.jpeg" class="popup">
		<img src="/de/geraete/hp9101/hp9101_Bilder/hp9101_PCB_3f.jpeg" width="80"  />
	</a>
		<a  href="/de/geraete/hp9101/hp9101_Bilder/hp9101_PCB_4f_gr.jpeg" class="popup">
		<img src="/de/geraete/hp9101/hp9101_Bilder/hp9101_PCB_4f.jpeg" width="80"  />
	</a>
		<a  href="/de/geraete/hp9101/hp9101_Bilder/hp9101_PCB_5f_gr.jpeg" class="popup">
		<img src="/de/geraete/hp9101/hp9101_Bilder/hp9101_PCB_5f.jpeg" width="80"  />
	</a>
		<a  href="/de/geraete/hp9101/hp9101_Bilder/hp9101_PCB_6f_gr.jpeg" class="popup">
		<img src="/de/geraete/hp9101/hp9101_Bilder/hp9101_PCB_6f.jpeg" width="80"  />
	</a>
		<a  href="/de/geraete/hp9101/hp9101_Bilder/hp9101_PCB_7f_gr.jpeg" class="popup">
		<img src="/de/geraete/hp9101/hp9101_Bilder/hp9101_PCB_7f.jpeg" width="80"  />
	</a>
		 <a  href="/de/geraete/hp9101/hp9101_Bilder/hp9101_PCB_8f_gr.jpeg" class="popup">
		<img src="/de/geraete/hp9101/hp9101_Bilder/hp9101_PCB_8f.jpeg" width="80"  />
	</a>
		 <a  href="/de/geraete/hp9101/hp9101_Bilder/hp9101_PCB_9f_gr.jpeg" class="popup">
		<img src="/de/geraete/hp9101/hp9101_Bilder/hp9101_PCB_9f.jpeg" width="80"  />
	</a>
		<p class="bildtext"><b>hp9101</b> Bestückungsseiten der einzelnen Platinen (von li nach re im Chassis), KLICK für grosses Bild !</p>
	</div>

<div class="box center"> 
		 <a  href="/de/geraete/hp9101/hp9101_Bilder/hp9101_PCB_1r_gr.jpeg" class="popup">
		<img src="/de/geraete/hp9101/hp9101_Bilder/hp9101_PCB_1r.jpeg" width="80"  />
	</a>
		 <a  href="/de/geraete/hp9101/hp9101_Bilder/hp9101_PCB_2r_gr.jpeg" class="popup">
		<img src="/de/geraete/hp9101/hp9101_Bilder/hp9101_PCB_2r.jpeg" width="80"  />
	</a>
		 <a  href="/de/geraete/hp9101/hp9101_Bilder/hp9101_PCB_3r_gr.jpeg" class="popup">
		<img src="/de/geraete/hp9101/hp9101_Bilder/hp9101_PCB_3r.jpeg" width="80"  />
	</a>
		<a  href="/de/geraete/hp9101/hp9101_Bilder/hp9101_PCB_4r_gr.jpeg" class="popup">
		<img src="/de/geraete/hp9101/hp9101_Bilder/hp9101_PCB_4r.jpeg" width="80"  />
	</a>
		<a  href="/de/geraete/hp9101/hp9101_Bilder/hp9101_PCB_5r_gr.jpeg" class="popup">
		<img src="/de/geraete/hp9101/hp9101_Bilder/hp9101_PCB_5r.jpeg" width="80"  />
	</a>
		<a  href="/de/geraete/hp9101/hp9101_Bilder/hp9101_PCB_6r_gr.jpeg" class="popup">
		<img src="/de/geraete/hp9101/hp9101_Bilder/hp9101_PCB_6r.jpeg" width="80"  />
	</a>
		<a  href="/de/geraete/hp9101/hp9101_Bilder/hp9101_PCB_7r_gr.jpeg" class="popup">
		<img src="/de/geraete/hp9101/hp9101_Bilder/hp9101_PCB_7r.jpeg" width="80"  />
	</a>
		 <a  href="/de/geraete/hp9101/hp9101_Bilder/hp9101_PCB_8r_gr.jpeg" class="popup">
		<img src="/de/geraete/hp9101/hp9101_Bilder/hp9101_PCB_8r.jpeg" width="80"  />
	</a>
		 <a  href="/de/geraete/hp9101/hp9101_Bilder/hp9101_PCB_9r_gr.jpeg" class="popup">
		<img src="/de/geraete/hp9101/hp9101_Bilder/hp9101_PCB_9r.jpeg" width="80"  />
	</a>
		<p class="bildtext"><b>hp9101</b> Lotseiten der einzelnen Platinen (von li nach re im Chassis), KLICK für grosses Bild !</p>
	</div>


<h3>Status der 9101</h3>
	<p>Die 9101 war in optisch sehr gutem Zustand. Sie wurde vom Staub der Jahrzehnte gereinigt, dann wurde das Chassis ohne Platinen über Regel-Trenntrafo 
	in Betrieb genommen. Die 4 Versorgungsspannungen waren im Soll: +15V (15.28V), -2.4 V (-2.436 V), -5 V (-5.027 V) und -15 V (-15.19 V). Mit eingebauten 
	Platinen an einen 9100A angeschlossen: Es konnten ohne Probleme Register angesprochen und geändert/ausgelesen werden. <b>In den Grundfunktionen ist das 
	Gerät betriebsbereit.</b><br>
	Weitere Tests mit Programmein- und -auslagerung stehen noch an, ebenso die Durchführung des 9101er-Testprogramms aus der Program Library. Es muss leider 
	eingetippt werden, da die zum 9101 gehörende Magnetkarte mit dem Diagnoseprogramm fehlt.
	</p>

<p><b>UPDATE Juli 2024</b><br>
	Als wir uns den Speicherinhalt der Speichererweiterung etwas näher angesehen hatten, fanden wir die beiden Teile des Testprogramms im Speicher ! Es ist der 
	Vorteil der Kernspeicher, dass der Speicherinhalt auch ohne Stromversorgung erhalten bleibt. Das ersparte uns das mühevolle Eintippen des Prüfprogramms. Wir 
	sicherten das Programm auf Magnetkarte und starteten es: es lief ohne Probleme durch, <b>die Speichereinheit ist voll betriebsbereit.</b></p>
	
<p>Die <b>Organisation des Speichers</b> ist im Detail im <b>HP Calculator Extended Memory Mod. 9101A Operating Manual</b> beschrieben. Hie nur ganz kurz das Prinzip:<br><br>
	Die Einheit umfasst 248 Register entsprechend den 16 bzw 32 Register der Rechner 9100A bzw. 9100B. Jedes Register kann 14 Programmschritte aufnehmen, maximal 
	sind 248 * 14 = 3472 Programmschritte möglich.<br>
	Programme aus dem Speicher des 9100 werden ab Register 0 in die Erweiterungseinheit geschrieben und eindeutig nummeriert. Es sind max. 100 Programme (00 - 99) 
	in der Speichererweiterung möglich. Das erste freie Register "hinter" 
	dem zuletzt gespeicherten Programm wird zur Grenze für die <b>File Protect Funktion</b>: Register mit kleineren Adressen (also die abgelegten Programme) können 
	nur gelesen werden. Ab der Grenzadresse 
	können Register gelesen und geschrieben werden, das ist der Pool der freien Datenregister. Dieser Schutz wandert mit jedem neu hinzu gefügten Programm weiter.<br>
	Zur Ausführung gespeicherter Programme werden diese mit ihrer Nummer über FMT-Befehle vom Rechner aufgerufen und in den Hauptspeicher des 9100 geladen, nur hier können sie ausgeführt 
	werden. Der Bereich über der Grenze steht den Programmen als freier Datenbereich zur Verfügung.<br>
	Für spezielle Zwecke (z.B. dem Überschreiben von Programmen) lässt sich die Speichergrenze auch über einen FMT-Befehl manuell ändern.</p>





