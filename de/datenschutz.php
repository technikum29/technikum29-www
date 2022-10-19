<?php
	$seiten_id = 'datenschutz';
	$version = '$Id$';
	$titel = 'Datenschutz und Nutzungsbedingungen';
	
	require "../lib/technikum29.php";
?>

<h2>Datenschutz</h2>
<p>Wir, die Betreiber des technikum29 Computermuseums, nehmen Datenschutz sehr ernst. Als
computeraffine Menschen ist uns aber auch die Tragkraft typischer Datenschutzerklärungen
bewusst. Diese Website gibt es seit über zehn Jahren. Seinerzeit hatten Webseitenbetreiber
Angst vor der "Störerhaftung", also der Haftung für die Inhalte von externen Seiten,
auf die verlinkt wird (stets bedrohlich mit Aktenzeichen von Gerichten markiert &emdash;
etwas, womit man als naturwissenschaftlich-technischer Mensch ohne juristische Ausbild
natürlich Respekt hat). Solche "Disclaimer", die stets den gleichen Text beinhalteten,
sind auf der Website des technikum29 nie erschienen, vor allem weil sie völlig bedeutungslos
sind. Über das
<a href="https://www.it-recht-kanzlei.de/disclaimer-sinn-unsinn.html">Gruselkabinett der 
Distanzierungshinweise</a> und deren Unsinn kann man im Web stundenlang lesen.


<p>
Wir begrüßen aber das Zustandekommen der neuen
<a href="https://dsgvo-gesetz.de/">Datenschutz-Grundverordnung (DSGVO)</a> und versuchen
in diesem Umfang, in einem Text <strong>von Menschen für Menschen</strong> zu beschreiben,
wie unsere Systeme arbeiten und wie das Museum als Instanz funktioniert.
Diese Datenschutzerklärung dient zur Erfüllung der nach Artikel 13 EU DSGVO geforderten
Informationspflicht bei Erhebung von Daten zum Zeitpunkt der Erhebung bei betroffenen Personen.


<h3>Der gesunde Menschenverstand</h3>
<p>Unsere Vorstellung von Datenschutz lässt sich kurz zusammenfassen. Es gibt ein paar
Selbstverständlichkeiten beim Besuch unserer Website:

<ul>
  <li>Natürlich benutzt unsere Website <strong>Cookies</strong>. Der Code der Website
      <a href="https://github.com/technikum29/technikum29-www">ist Open-Source</a>,
      und damit ist es sehr leicht, herauszufinden, 
      <a href="https://github.com/technikum29/technikum29-www/search?q=cookie&unscoped_q=cookie">an
      welchen Stellen Cookies verwendet werden</a>: und zwar zum Speichern von
      Anzeigeeinstellungen. Die Website funktioniert auch ohne Cookies gut, daher
      befürworten und empfehlen wir die Nutzung eines
      <a href="https://support.mozilla.org/en-US/kb/block-websites-storing-cookies-site-data-firefox"
      >cookie-blockierenden Browsers</a> wie
      <a href="https://mozilla.org">Mozilla Firefox</a>.
  <li>Natürlich loggen wir Webseitenbesuche serverseitig im
      <a href="https://en.wikipedia.org/wiki/Common_Log_Format">NCSA-Standardformat</a>,
      das beinhaltet also die IP-Adresse des Besuchers, den Namen seines Browsers, die Uhrzeit,
      die Herkunfstswebsite (falls vom Client übertragen) und die angefragte Ressource.
      Wir haben anhand dieser Logfiles früher für uns als Webseitenbetreiber
      mit klassischer Analysesoftware wie <a href="http://www.webalizer.org/">Webalizer</a>
      oder <a href="https://www.awstats.org/">AWStats</a> beobachtet, wie viele Menschen die
      Website besuchen und von wo sie kommen.
      Auch hier ist der mündige Besucher Herr seiner Daten und kann den <em>User Agent</em> seines
      Browsers ebenso einstellen wie die Übertragung eines <em>Referers</em>.
      <br/>Während der saubere Umgang mit solchen Daten vorsieht, sie zeitnah (in der Regel
      vier Tage) zu löschen oder zu randomysieren (in der Regel durch Hashen der IP-Adresse
      des Clients), will ich ganz ehrlich sein: In unserer klassischen LAMP-Umgebung
      häufen sich die Logs an, bis die Festplatte voll ist, und dann löschen wir sie. Das passiert
      manchmal schon mit monatlicher Regelmäßigkeit, aber eigentlich seltener. In diese Logs
      schaut einfach niemand mehr rein. Stattdessen haben wir...
  <li>... natürlich auch modernes Javascript-basiertes User-Tracking, und zwar eine
      selbstgehostete Instanz der Open-Source-Software <a href="https://matomo.org/">Matomo</a>.
      An dieser Stelle würde ich gerne den obligatorischen <em>Opt-Out</em>-Frame zeigen
      (und darauf hinweisen, dass Matomo nicht nur den
      <a href="https://www.eff.org/issues/do-not-track">Do-Not-Track</a>-Header
      beachtet, sondern auch IP-Adressen ordnungsgemäß hasht), aber leider
      <strong>ist unsere Matamo-Installation derzeit defekt</strong> und damit ohnehin
      nicht brauchbar. Glück gehabt! Momentan wird nichts gespeichert.
  <li>Die Website ist zwar größtenteils statisch, aber es gibt auch hin- und wieder ein
      paar Formulare. Und <em>natürlich</em> verarbeiten wir die Eingaben dieser Formulare,
      sonst wären sie ja sinnlos. Da ist etwa <a href="/de/suche.php">das Suchformular oben rechts</a>,
      was direkt und klientseitig per Javascript Ergebnisse von Google anzeigt -- das geht also an
      unseren Servern vorbei. Dann gibt es etwa die <a href="/de/anmeldung.php">Veranstaltungsanmeldung</a>,
      die dort eingegebenen Daten landen als E-Mail bei uns im Posteingang und entziehen sich danach
      der automatisierten Verarbeitung.
</ul>

<p>Aber was passiert nun außerhalb unserer Website? Als Museumsverein (in Gründung) und Museumsbetrieb
mit Publikumsverkehr haben wir mit Menschen zu tun. Von denen speichern wir völlig chaotisch und
unorganisiert in Excel-Listen das, was sie uns an Daten freiwillig übermitteln: Ihren Namen,
Kontaktmöglichkeiten (E-Mail, Postadresse und/oder Telefonnummer), möglicherweise ihr Alter.
Wir reichern diese Daten mit "Customer relationship"-Daten an: Wo haben wir die Person
kennengelernt? Wofür ist sie Experte? Ist sie uns sympathisch, würden wir gerne einen Kaffee
mit ihr trinken? Ich hoffe es ist klar, dass wir hier nicht die Liste des Teufels führen,
sondern versuchen, uns irgendwie zu organisieren. Im Übrigen freuen wir uns über jeden, der uns
dabei hilft.

<h3>Verantwortliche</h3>
<p>
Name und Anschrift der Betreiber finden sich <a href="/de/impressum.php">in unserem Impressum</a>,
sie tragen das volle Risiko. Die <a href="/de/team.php">auf unserer Team-Seite</a> genannten Helfer
trägt keine Schuld.

<p>
Der Datenschutzbeauftragte des Museums ist <a href="/de/team.php#sven">Dr. Sven Köppel</a>, der
auch diesen Text frabriziert hat. Er hat zehn Jahre Erfahrung mit Nutzungsverordnungen und
Datenschutz im universitären Umfeld und dort Freud und Leid gesehen. Jeder hat das recht,
sich bei datenschutzrechtlichen Problemen bei mir zu beschweren. Meine Kontaktadresse findet
ihr auch <a href="http://svenk.org">auf meiner privaten Homepage</a>.

<p>Alle Personen im Umfeld des Museums haben das Recht auf Auskunft, Berichtigung oder
Löschung, Einschränkung der Verarbeitung, Widerruf der Einwilligung, Widerspruch gegen
die Verarbeitung oder das Recht auf die Datenübertragung gemäß einem Standardformat
(Apropos, wir mögen Open-Source und hassen Vendor-Lockin). Sie müssen sich dafür einfach
nur an den Datenschutzbeauftragten wenden.

<p>Ein erster Schritt ist aber auf jeden Fall: Browser-Hardening. Öffnen Sie die Einstellungen
Ihres Browsers und deaktivieren Sie die Annahme von Cookies und das Ausführen von JavaScript,
das ist schonmal die halbe Miete.
