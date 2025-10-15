---
title: Website-Upgrade
author: Sven
date: 2025-10-04
lang: de
---

Im 20-jährigen Jubiläumsjahr des Museums releasen wir nun im Oktober ein großes technisches
Upgrade der Website. Das besondere: Es sieht auf den ersten Blick alles genauso aus wie vorher.
Was sich geändert hat, ist also nicht das *Frontend*, sondern das *Backend*. Dieser Blogpost
erläutert bearbeitenden Personen sowie einer interessierten Leserschaft,
warum diese Erneuerung nötig ist und was sich in Zukunft ändert. Er ist der erste Teil
einer kleinen Serie von Blogposts rund um die Website des Museums.

### Die Ausgangssituation

Die technikum29-Website besteht aus fast 300 Einzelseiten und mehr als 1000 Bildern
(siehe auch [Sitemap](/de/sitemap)). Der Inhalt liegt zu guten Teilen in zwei Sprachen vor
(Deutsch und Englisch). Die Website gab es schon vor der Museumseröffnung, sie ist also
mehr als 25 Jahre lang gewachsen und hatte entsprechend schon einige größere Änderungen
erlebt. Die letzte war 2012, als *Version 6* erschien. Sie brachte das auch heute noch sichtbare
Design sowie eine Struktur, die erstmals in der populären Programmiersprache [PHP](https://www.php.net/)
realisiert wurde. Bemerkenswert ist, dass dies ohne Verwendung populärer Libraries und Tools
wie etwa *Wordpress* passierte, es handelt sich also um eine komplette Eigenentwicklung im Umfang von
ca. 5.000 Zeilen PHP (*Backend*) nebst 2.000 Zeilen JavaScript und 4.000 Zeilen CSS (*Frontend*).
Die Website ist seit 2008 mit [Subversion](https://subversion.apache.org/) revisioniert, 
2019 erfolgte mit der Neuausrichtung des Museums auch der Wechsel nach Github in das Repository
[technikum29/technikum29-www](https://github.com/technikum29/technikum29-www).

Prinzipiell ist die Technologie der Website auch heute noch in Ordnung. Die Seite lässt sich nach kurzer
Einarbeitung sogar auf Github bearbeiten. Es gibt aber Gründe, sie technisch zu überarbeiten:

* Die redaktionelle Lernkurve ist steil, selbst für technisch versierte Menschen. Das liegt daran, dass
  die individuell gefertigte Seite ein echtes Unikat ist. Ihre
  [Navigation als XML-File](https://github.com/technikum29/technikum29-www/blob/06c2467c7b3b6ab447acd2dbd0053678520d86c5/de/navigation.xml)
  findet man so kein zweites mal. Dadurch kann jemand neues, der die Seite tiefgreifender bearbeiten will,
  sich bei einer Suchmaschine wie Google oder einer KI wie ChatGPT keine gute Hilfe holen.
* Zum Bearbeiten der Seite benötigt man idealerweise einen Webserver mit PHP für die schnelle Vorschau. Mit
  dem [XAMPP-Webserver](https://www.apachefriends.org/) gibt es ein benutzerfreundliches Produkt, das
  aber nur als Desktop-Anwendung (Windows/Mac/Linux) zur Verfügung seht. Auf Mobilgeräten,
  etwa iOS/Android-Tablets, lässt sich die Seite daher nicht vernünftig bearbeiten, außer in Einzeldateien auf Github.
* Komplett abhanden geht die Möglichkeit, eine grafische Benutzeroberfläche (GUI) zum Bearbeiten zu benutzen,
  weil ja eben kein verbreitetes Content-Managament-System (CMS) verwendet wird.
* Die jetzige Seite zu bearbeiten macht keinen Spaß, weil zeitgenössische Technologien nicht eingesetzt werden
  können. Das Altsystem ("Legacy") wird nicht weiter entwickelt, da der Aufwand zur Pflege der Indivudallösung
  unverhältnismäßig groß ist. Die Website stagniert damit.
* Das Git-Repository ist mittlerweile auf fast 5GB angewachsen, dadurch kommt man an die Grenzen von Github.
  Hier ist eine bessere Lösung im Medienmanagament nötig, die weiteres Wachstum erlaubt.

Es gibt Seiteninhalte, die seit der Museumsneuausrichtung 2020 prinzipiell neu sind und deren Umsetzung im
PHP-basierten System eher schlecht als recht funktioniert:

* Blog: Dem 2020 adhoc per PHP implementierten Blogsystem fehlen essentielle Funktionen, die man von einem Blogsystem
  erwartet, etwa die Kategorisierung von Inhalten.
* Englische Übersetzung: Ihre Wartung erfordert viel Aufwand, sie wurde in den letzten Jahren eher stiefmütterlich
  behandelt. Anders als vor 20 Jahren gibt es mittlerweile aber dank künstlicher Intelligenz und Large Language Models
  sehr leistungsfähige automatische Übersetzungen. Das Altsystem stellt kaum Möglichkeiten zur Verfügung,
  solche automatischen Übersetzungen einzubauen. Beispiele für bislang unübersetzte Inhalte sind etwa die
  [Teamdarstellung](/de/team) und der [Blog](/blog).
* Hochaufgelöste Bilder werden bislang händisch in mehreren Auflösungen erzeugt/gespeichert.
  Das lässt sich mit einem modernen Website-System automatisieren. Das spart nicht nur Zeit, sondern auch
  Speicherplatz im Repository.

### Evaluation von neuen Content-Managament-Lösungen

Seit der Neueröffnung des Museums 2018, also seit sieben Jahren, sind wir auf der Suche nach einem neuen
System für die Website. Dabei wurden unter anderem evaluiert:

* Eine [Wiki](https://de.wikipedia.org/wiki/Wiki): Damit sollte direkt dem Community-Gedanken rechnung
  getragen werden, also vielen Menschen ermöglicht werden, den Inhalt zu bearbeiten. Dafür habe ich 2021
  für die populäre [MediaWiki](https://www.mediawiki.org)-Software ein Skin angefertigt
  (Code ist online [auf Github: t29-v7](https://github.com/technikum29/t29v7)), also die
  Altwebsite optisch übernommen und einige Inhalte testweise übertragen. Eine Testinstallation
  lief unter [v7.technikum29.de](https://v7.technikum29.de/w/index.php?title=Hauptseite). Die Entwicklung
  wurde aber auf Eis gelegt, weil ich mit dem System nicht ganz zufrieden war.
  <a href="https://github.com/technikum29/technikum29-www/blob/a1aa0144c9c4c88a87af69d238b3fd9d2ca33599/KONVERTIERUNG-v8.md#t29v7-der-mediawiki-ansatz" class="go">Mehr Informationen zu t29v7</a>
* Als Alternative wurde 2024 kurz evaluiert, das [Kirby-CMS](https://getkirby.com) oder das
  [Bolt-CMS](https://www.boltcms.io/) zu verwenden. Beide sind moderne PHP-basierte Flat File CMS, die aber
  über ein eher klassisches Backend verfügen. Die Hoffnung war hier, dass der Übergang vom textbasierten
  Altsystem t29v6 einfacher ist. Wir konnten dafür sogar von Kirby wegen unsere allgemeinnützigen
  Ausrichtung eine lebenslang kostenlose Lizenz erwerben! In die Entwicklung einer Kirby-basierten Website
  ist es aber nie gekommen.
* Stattdessen habe ich im Juni 2025 einmal testweise damit angefangen, die Website in das
  [Static Site Generator](https://en.wikipedia.org/wiki/Static_site_generator)-System [11ty](https://www.11ty.dev/)
  zu übertragen und bin dabei in wenigen Monaten zu einem für mich zufriedenstellenden Ergebnis gekommen.
  Dieser Ansatz soll im folgenden erläutert werden.

### t29v8: Der Static Site Generator-Ansatz

Im Sommer 2025 habe ich folgende Beobachtungen gemacht:

* Das Altsystem (*t29v6*) ist vom Aufbau sehr ähnlich zu einem Static Site Generator (SSG)-basierten System.
  Dies erlaubt die Website mit nur minimalen Änderungen umzustellen: In jeder Seite/Textdatei müssen nur die
  Metadaten in der Quelltext-Formatierung leicht verändert werden. Auf diese Weise kann ein neues System
  leicht eingeführt werden und dann nach und nach um weitere Funktionen ergänzt werden. Gleichzeitig bleibt
  die Website "aus einem Guss", da das alte PHP-System nicht weiterbetrieben werden muss.
* SSGs sind gerade bei inhaltslastigen Seiten im Bereich der technischen Dokumentation sehr verbreitet.
  Die Technologie "passt" damit prinzipiell gut. Nicht nur das technische Upgrade zu einem "echten SSG" ist
  damit ein eher kleiner Schritt, sondern auch ein potentieller Wechsel von einem SSG zu einem anderen. Auf
  diese Weise wird ein [Lock-In-Effekt](https://de.wikipedia.org/wiki/Lock-in-Effekt) vermieden, wie er etwa
  bei größeren datenbank-basierten Wiki-Systemen oder CMS existiert.
* Viele SSGs lassen sich mit einem [headless CMS](https://en.wikipedia.org/wiki/Headless_content_management_system)
  erweitern. So ergibt sich in der Praxis eine Möglichkeit, die Vorteile eines SSGs mit einem CMS zu kombinieren.
  Insbesondere kann so weiterhin *git* zur Inhaltsverwaltung verwendet werden.
  Ein Beispiel für ein solches headless CMS ist [PagesCMS](https://pagescms.org/docs/), das wurde auch schon evaluiert.
  Im Ergebnis entsteht (langfristig) ein System, dass sich für den Redaktionsprozess (auch auf Mobilgeräten)
  im Browser verwenden lässt, ohne dass man dafür etwas installieren muss. Auch *Github codespaces* 
  oder [DevPods](https://devpod.sh/) können eine portable Entwicklungsumgebung für ein nodejs-Projekt darstellen,
  wenngleich diese Browser-IDEs sich eher an Software-Entwickelnde oder die Arbeit am Text statt an Medien richten.

Das t29v6-Altsystem hat mit einem typischen SSG folgende Gemeinsamkeiten:

* Individuelle Seiten sind als Textdateien abgespeichert.
* Es gibt in jeder dieser Textdateien ein *Front Matter*, in welchem Metadaten wie Seitentitel
  hinterlegt sind.
* Auch Menüstrukturen werden in der Regel in Textdateien strukturiert vorgehalten oder direkt aus den Inhalten
  abgeleitet.
* Seitenrelationen wie "Nächste Seite" und "Vorherige Seite" lassen sich in SSGs in der Regel gut abbilden.

Der Übersetzungsprozess ließ sich (teil-)automatisieren:

* Zum Einsatz kamen Standard-Linux-Kommandozeilenwerkzeuge, die Dateinamen umgeschrieben haben. Beispielsweise
  zur Umbenennung von `.php`-Dateien in `.htm`-Dateien oder zum Ersetzen von PHP-Relikten wie
  `<?php echo $seiten_titel; ?>` durch Twig/Nunjuck-Templates der Form `{%raw%}{{ seiten_titel }}{%endraw%}`.
* Kleine Scripte wie [v8-remove-php.py](https://github.com/technikum29/technikum29-www/blob/a1aa0144c9c4c88a87af69d238b3fd9d2ca33599/v8-remove-php.py)
  übersetzten die Frontmatter-Metadaten in das verbreitete [YAML](https://yaml.org/)-Dateiformat.
* Mithilfe von LLMs wie ChatGPT oder Claude wurde zum Teil in PHP geschriebene Logik in
  JavaScript-Code übersetzt, der im NodeJS-Ökosystem funktioniert.

### Quirks und Standarisierung

Mit dem komplett selbstentwickelten PHP-System sollte 2012 den unkonventionellen Ansprüchen der Webseite
Rechnung getragen werden, etwa die ungewöhnliche Menüführung mit den *Geräteseiten* oder interaktiven
Elementen zB. zur Besucheranmeldung. Eine Motivation bei dem Einsatz des verbreiteten SSG-Ansatzes ist,
die Website Schritt für Schritt ähnlicher zu anderen Websites zu machen, also die Website und ihre Teile
zunehmend zu "standarisieren". Das kann zB. durch die Homogenisierung des Menüs und der Verwendung von
*Breadcrumbs* passieren. Seiteninhalte sollen zukünftig vermehrt in der einfachen Auszeichnungssprache
[Markdown](https://de.wikipedia.org/wiki/Markdown) geschrieben werden, wenn sie keine HTML-Formatierungen benötigen.

Die englische Übersetzung sollte entweder komplett abgeschafft werden oder mithilfe von DeepL o.ä.
(teil)automatisiert. Vor allem könnte die Übersetzung feingliedriger geschehen, d.h. unterschiedliche Teile/Blöcke
einer Seite könnten unterschiedliche Übersetzungsgrade haben. Dies sollte nicht zur SSG-Laufzeit passieren,
sondern ein seperater Schritt sein. Es spricht daher prinzipiell einiges dafür, die `/de` und `/en`-Trennung
beizubehalten. An anderen Stellen (etwa im Blog oder dem neuartigen Geräteordner) hingegen kommt Material und
Text zusammen, sodass es dort vielleicht sinnvoller ist, die mehrsprachigen Texte nah beianander zu halten, also
im gleichen Ordner.

### Zur Funktionsweise des Menüs

Einer der größten Unterschiede, die SSGs untereinander haben, ist die Art, wie die Menüführung realisiert
wird. Zwei verbreitete Wege sind:

* Die Navigationsstruktur der Website wird einer (oder weniger) zentraler Datei(en) entnommen.
  In der Vergangenheit auf der technikum29-Website war das etwa `/de/navigation.xml` und
  `/en/navigation.xml`.
* Die Navigationsstruktur wird aus den Inhaltsdateien entnommen. Typischerweise kommen dabei die 
  lexikalische Sortierung der Dateinamen in einer Ordnerstruktur zum tragen und eine Feinsteuerung findet
  per Frontmatter statt. Alternativ findet eine Taxonomie lediglich anhand der Frontmatter-Daten statt.

Ich hab mich dazu entschieden, die Navigation nicht wie in der Vergangenheit aus einer Datei auszulesen,
sondern aus der Seitenstruktur. Ein Vorteil davon ist, dass alle nötigen Informationen zu einer einzelnen
Seite nur dort im Frontmatter stehen und nirgendwo anders. Beispielsweise lässt sich ihre Bezeichnung im
Menü direkt in der Datei der Seite bearbeiten. Ein Nachteil ist, dass eine größere Umstrukturierung des
Menüs nun das Bearbeiten von mehreren Dateien erfordert.

Für weitere Informationen über das Menü und die Seitenvariablen siehe die
<a href="/de/website-guide" class="go">redaktionelle Anleitung zur technikum29-Website</a>.

### Ankündigung zukünftiger Funktionen

Das neue Website-System ist die Grundlage für Weiterentwicklungen der Website, zu der etwa gehören:

* Eine bessere Struktur/Ausarbeitung der Informationen *über* des Museums, also der Inhalte die
  derzeit im "horizontalen" Menü oben zu finden sind.
* Automatisierung der Bilder-Verkleinerung (Thumbnails) und damit Verkleinerung des Repositories.
* Überarbeitung der Suchfunktion und automatisierten englischen Übersetzungen
* Verbesserung des Layouts für Mobilgeräte
* Implementierung eines browser-basierten Redaktionsprozesses (Headless-CMS), um das Bearbeiten der
  Seite zu vereinfachen.
* Vereinheitlichung und bessere grafische Darstellung von gleichartigen Informations-Sammlungen,
  seien es Youtube-Videos, Zeitungsartikel, Blogposts, Gerätelisten uvm.
* Lösungen für das Medienhosting, also der großen Informationsmengen.
