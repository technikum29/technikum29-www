# Konvertierungsplan t29v6 zu t29v8

* Autor: SvenK
* Datum: 2025.06.24

"t29v6" ist der Titel für die Inkarnation der technikum29.de-Website die ungefähr 2012 entwickelt
wurde. Es handelt sich um eine PHP-Website im "klassischen" Stil, wo jede Textseite eine PHP-File ist.
Mit einem "Flat File"-Ansatz gibt es keine großen Abhängigkeiten, sodass sich die Website in einem
(damals gerad enoch zeitgemäßen) LAMP-Stack hosten lässt.

## Evaluation des Bestandssystems

Prinzipiell ist die Technologie der Website auch heute noch in Ordnung. Die Seite lässt sich, nach etwas
Einarbeiten, über Git relativ gut bearbeiten. Es gibt aber Gründe, sie technisch zu überarbeiten:

* Die Lernkurve ist relativ steil, selbst für technisch Versierte. Das liegt daran, dass überhaupt
  kein Framework verwendet wird und alles Individuallösungen sind, etwa die Navigation als XML-File.
* Das lokale Hosting der Seite während dem Bearbeiten ist für heutige Verhältnisse übermäßig aufwändig,
  weil man einen Webserver mit PHP benötigt. Zwar bringt PHP mittlerweile einen eingebauten 
  Entwicklungsserver mit, aber auch diesen zu benutzen benötigt Kommandozeilenerfahrung. Auf Mobilgeräten
  lässt sich die Seite nicht bearbeiten, außer in Einzeldateien auf Github.
* Komplett abhanden geht die Möglichkeit, eine GUI zum Bearbeiten zu benutzen, eben weil kein CMS
  verwendet wird. Hier gibt es mittlerweile IDEs in Webbrowsern, die aber ziemlich sicher das gleichzeitige
  Deployment nicht möglich machen.
* Die jetzige Seite zu bearbeiten macht keinen Spaß, weil man an einem Altsystem rumfrickeln muss.

Es gibt Seiteninhalte, die prinzipiell neu sind und deren Umsetzung im PHP-basierten System eher
schlecht als recht funktioniert:

* Teamdarstellung und Blog: Hat derzeit überhaupt kein Equivalent in der englischen Sprachdarstellung.
* Hochaufgelöste Bilder -- sie werden bislang manuell in zwei Auflösungen gespeichert. Das lässt sich mit
  einem SSG leichter und mit weniger Repository-Speicherplatz lösen.
* Medienlastige Inhalte -- der Orderner `/de/geraete/` ist auf mehrere Gigabyte an PDFs und Bildern
  angewachsen, er hat fast den Charakter eine Flat File Datenbank.
  Dieses Material ist prinzipiell unter `/shared/` zu verschieben oder es benötigt eine
  (weitere) Gerätedatenbank, die im alten System nicht mehr entwickelt werden wird.

## t29v7: Der MediaWiki-Ansatz

Die Überarbeitung der technikum29-Website wurde bereits ab 2018 in Erwägung gezogen. Unter dem Projektnamen
*t29v7* wurde dabei ein Skin für die MediaWiki-Software entwickelt, inklusive einem neuen Konzept für die
Navigation (ein Menü links, eines rechts). Es gab einige Argumente für MediaWiki:

* Mit der Wiki sollte direkt der Community-Gedanke getragen werden, also vielen Menschen ermöglichen,
  die Inhalte zu bearbeiten.
* Das Bearbeiten von Inhalten als Quelltext in der Wiki im Browser ist relativ einfach. Das Hochladen und
  Annotieren von Bildern ist sehr einfach. Langfristig sollte mit dem *VisualEditor* das direkte Bearbeiten
  von Rich-Text-Inhalten und MediaWiki-Vorlagen nochmals stark vereinfacht werden. Wie bei einem CMS
  ist es mit  der Wiki definitiv nicht mehr nötig (und auch gar nicht wirklich möglch), etwas lokal zu
  installieren. Das erlaubt zum ersten mal auch die Bearbeitung auf Mobilgeräten, etwa durch Handyfotos und
  oder auf einem Tablet.
* Zum einen habe ich ein Faible für MediaWiki und habe für diese Software oft schon Skins und Extensions
  entwickelt. Zum anderen ermöglicht dieses Wiki-System einen einfachen Austausch mit der Wikipedia,
  sowohl hinsichtlich Interwiki-Links aber vor allem der Einbindung von Bildern aus dem Wikimedia-Commons
  Medienarchiv. Dies fördert sowohl den Austausch (Direktupload von großen Medien des Museums auf die
  Commons) und vereinfacht das Einbinden von Icons, Illustrationen, usw. Die gleiche Auszeichnungssprache
  vereinfacht auch das Kopieren oder Transferieren von Textinhalten in die Wikipedia.

Gegen die MediaWiki sprachen aber auch einige Argumente:

* das Skin ist zwar größtenteils fertig, aber bestenfalls in einer 80-20-Lösung, also ohne viel Liebe zum
  Detail. Das liegt vor allem daran, dass die Wiki Elemente im Benutzerinterface mitbringt, die im alten
  Layout keine Entsprechung haben, wie weitere Menüs, Buttons, zahlreiche kleine Links überall, usw.
* Das Deployment ist weiterhin relativ komplex. Es gibt ein Usermanagament, das System muss Mails schreiben
  können. Es benötigt eine vernünftige Backup-Strategie von Datenbank und Medien.
* MediaWiki muss regelmäßig aktualisiert werden, schon allein aus Gründen der IT-Sicherheit (Hot Fixing).
  Im schlechtesten Fall zieht das Maintenance des Codes für das eigene Skin nach sich.
* Spambefall ist ein ernsthaftes Problem in einer Wiki, sowohl bei der Benutzeranmeldung als auch beim
  Inhalt. Ich habe im gleichen Zeitraum in einem anderen Projekt eine MediaWiki betreut (und zwar
  https://the-analog-thing.org/wiki) und dort über die Zeit keinen ausreichenden Spamschutz gefunden.
  MediaWiki bietet prinzipiell Sichtungsmöglichkeiten, die aber zu Frustration bei Autor:innen führen, da
  die Inhalte nicht sichtbar werden. Hingegen ermöglicht ein SSG, dass andere Branches des Codes an anderen
  Stellen sichtbar sind (z.B. `https://feature.branch.technikum29.de`). Darüberhinaus sind Git Push Requests
  bei Inhalten in *forges* etablierter, wenn auch technisch viel schwieriger zu benutzen von Autor:innen.
* Der Massentransfer von Inhalten ist aufwändig. Selbst wenn automatisch alle Bilder hochgeladen werden und
  alle Inhalte 1:1 übertragen werden, muss jede Seite manuell angefasst werden um den Syntax zu korrigieren,
  etwa bei Seitenverlinkungen. Vor allem Bildeinbettungen sind in MediaWiki nicht so frei und flexibel wie
  in purem HTML, sodass zweifellos auch viele Gestaltungen verloren gehen. Insgesamt ist also viel Handarbeit
  nötig.
  
Die Entwicklung von t29v7 wurde daher auf Eis gelegt. Unter https://github.com/technikum29/t29v7 findet sich
der Code für das Skin, unter https://v7.technikum29.de/w/ die Test-Installation samt einigen Inhalten.

Als Alternative wurde 2024 kurz evaluiert, das [Kirby-CMS](https://getkirby.com) oder das
[Bolt-CMS](https://www.boltcms.io/) zu verwenden. Beide sind moderne PHP-basierte Flat File CMS, die aber
über ein eher klassisches Backend verfügen. Die Hoffnung war hier, dass der Übergang vom textbasierten
Altsystem t29v6 einfacher ist.

## t29v8: Der Static Site Generator-Ansatz

Im Sommer 2025 wurden folgende Beobachtungen kombiniert:

* Das Altsystem t29v6 ist vom Aufbau sehr ähnlich zu einem Static Site Generator (SSG)-basierten System.
  Dies ermöglicht eine Transition, ohne dass dafür mehr als Metadaten angefasst werden müssen. So kann
  schrittweise ein neues System eingeführt werden ohne dass ein Altsystem weiterbetrieben werden muss,
  die Website bleibt "aus einem Guss".
* Viele SSGs lassen sich mit "headless CMS" erweitern. So ergibt sich eine Möglichkeit, hybrid zu arbeiten,
  also die Vorteile eines SSGs mit einem CMS zu kombinieren. Insbesondere kann so weiterhin *git*
  zur Inhaltsverwaltung verwendet werden. Ein Beispiel für ein solches headless CMS ist
  https://pagescms.org/docs/
* SSGs sind gerade bei inhaltslastigen Seiten im Bereich der technischen Dokumentation extrem verbreitet.
  Der Schritt von t29v6 zu einem SSG ist ein verhältnismäßíg kleiner, der die Website aber sofort in

Das t29v6-Altsystem hat mit einem typischen SSG folgende Gemeinsamkeiten:

* Individuelle Seiten sind als Textdateien abgespeichert.
* Es gibt in jeder dieser Textdateien ein *Front Matter*, in welchem Metadaten wie Seitentitel
  hinterlegt sind.
* Auch Menüstrukturen werden in der Regel Textdateien strukturiert vorgehalten.
* SSGs werden häufig in Dokumentationssystemen eingesetzt, wo es oft auch Seitenrelationen wie
  "Nächste Seite" und "Vorherige Seite" gibt.

Das t29v6-System ist hier erstaunlich nah dran, wenn man lediglich das PHP-Frontmatter durch ein 
YAML-Frontmatter ersetzt und ebenso die XML-Menüdateien durch eine YAML-File. Das System wäre dann
so generisch, dass es sich sogar leicht an verschiedene SSGs anpassen lässt.

### Must haves

Ein Grund, warum 2012 PHP gewählt wurde, war das kaum verbreitete Preprocessing. Mit dem komplett
selbstentwickelten System sollte den unkonventionellen Ansprüchen an die Seite Rechnung getragen werden.
Aus Gründen der zukünftigen Wartbarkeit ist es *zwingend* geboten, viele dieser Ansprüche fallen zu lassen
und damit das schon damals angefangene Prinzip fortzusetzen, die Website und ihre Teile zunehmend zu
"standarisieren".

Beispiele für (wortwörtliche) Designentscheidungen, die bei einer technischen Neuentwicklung einfließen
müssen (Must-Haves):

* Bislang wurden "Geräteseiten" als seperate Untermenüs behandelt (`.u3.geraete`). Es gab dabei zeitweise
  die Möglichkeit, diese Menüs anzuzeigen. Diese Sonderbehandlung sollte fallen gelassen werden, um
  eine klarere Menüstruktur aufzubauen. Optisch sollte die Verwendung von *Breadcrumbs* in Erwagung
  gezogen werden.
  

### Nice to Haves

* Seiteninhalte sollten zukünftig vermehrt in Markdown geschrieben werden, wenn sie keine HTML-Formatierungen benötigen.
* Komplett unabhängig vom SSG: Das generelle Seitenlayout könnte mit den modernen CSS-Methoden *flexbox*/*grid*
  neuentwickelt werden, um eine echte *Mobile First* Ansicht zu erreichen. Mit ein oder zwei Hamburger-Menüs
  würde auch das Navigationsproblem dauerhaft geklärt.
* Die englische Übersetzung sollte entweder komplett abgeschafft werden oder mithilfe von DeepL o.ä.
  (teil)automatisiert. Vor allem könnte die Übersetzung feingliedriger geschehen, d.h. unterschiedliche Teile/Blöcke
  einer Seite könnten unterschiedliche Übersetzungsgrade haben. Dies sollte nicht zur SSG-Laufzeit passieren,
  sondern ein seperater Schritt sein. Es spricht daher prinzipiell einiges dafür, die `/de` und `/en`-Trennung
  beizubehalten. An anderen Stellen (etwa im Blog oder dem neuartigen Geräteordner) hingegen kommt Material und
  Text zusammen, sodass es dort vielleicht sinnvoller ist, die mehrsprachigen Texte nah beianander zu halten, also
  im gleichen Ordner.
