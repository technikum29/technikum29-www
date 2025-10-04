---
seiten_id: website-guide
titel: Anleitung zur Bearbeitung der Website
frontmatter_docs:
- key: seiten_id
  meaning: >
    Ein kurzer Bezeichner für die Seite. Er dient zur Identifikation der Seite
    an verschiedenen Stellen, u.a. der Menüstruktur und für seitenspezifische CSS/JS.
    Außerdem wird er bei der Zuordnung deutsch/englischer Inhalte zugezogen, d.h.
    eine englisches Seitenequivalent benötigt zwingend die gleiche `seiten_id` wie
    die deutsche.
    
    Typischerweise verwenden wir hier kurze deutsche Stichwörter, komplett
    kleingeschrieben, mit Unterstrichen als Seperator. Wichtig, es dürfen keine
    Sonderzeichen oder Leerzeichen verwendet werden. Es handelt sich primär um
    einen maschinenlesbaren Bezeichner, der für Menschen nicht sichtbar wird.
- key: titel
  alias: title
  meaning: >
    Titel der Seite. Wird im HTML-Titel verwendet und erscheint im Browser-Tab oder
    -Fenster sowie bei Google, Social Media, uvm. Dieser Titel ist also sehr wichtig.
    Es handelt sich primär um einen Bezeichner für Menschen, der also nicht maschinenlesbar
    sein muss.
    
    Für gewöhnlich wird dieser Titel auch wiederverwendet in der ersten Überschrift
    der Seite. Dies kann mit dem Template-Syntax `{{titel}}` auch wo benötigt
    eingebunden werden.
    
    Falls im Titel ein Doppelpunkt vorkommt, muss er bei YAML in Anführungszeichen
    geschrieben werden.
- key: title_kurz
  meaning: >
    Sollte eigentlich nicht mehr verwendet werden - ein alternativer, kürzerer
    Titel für Blogpostings.
- key: parent
  meaning: >
    Zur hierarchischen Navigation wird hier die `seiten_id` der übergeordneten Seite
    angegeben. Auf diese Weise wird die Taxonomie in der Hauptnavigation aufgebaut.
- key: nav_titel
  alias: nav_title
  meaning: >
    Beschriftung der Seite in der Navigationsleiste. Wenn nicht angegeben, wird der
    Wert der Variable `titel` verwendet.
- key: nav_order
  meaning: >
    Eine Zahl (Ganzzahl oder Zahl mit Komma), die die Gewichtung bei der Herstellung
    einer Sortierung in einem Menü beeinflusst. Dies kommt immer zum Tragen innerhalb
    einer Hierarchieebene.
- key: nav_class
  meaning: >
    Eine Hilfsmethode, um die Navigationsanzeige optisch fein zu justieren.
- key: add_sub_navigation
  meaning: >
    Eine derzeit übergangsweise verwendete Hilfsmethode, um "virtuelle" Untermenüeinträge für 
    eine Seite zu erzeugen.
- key: layout
  meaning: >
    Steuert die Auswahl des Seitenlayouts. Sollte für gewöhnlich in den technikum29-Seiten
    nicht angefasst werden.
- key: permalink
  meaning: >
    Mithilfe eines Permalinks kann die URL einer Seite beeinflusst werden. Diese bildet
    sich normalerweise aus dem Dateinamen inklusive der Ordnerstruktur, in der die
    Datei sich befindet. Wenn eine Datei unter `/src/de/rechnertechnik/bla.htm`
    abgespeichert wird, dann wird der Permalink normalerweise berechnet zu
    `/de/rechnertechnik/bla`. Hingegen könnte er mit `permalink: /de/rechner/bli`
    explizit überschrieben werden.
- key: redirect_from
  meaning: >
    Eine Liste von URLs, die auf diese Seite führen sollten. Dies ist hilfreich, wenn
    die Seite umbenannt wurde und verhindert werden soll, dass bestehende Links an
    anderer Stelle (innerhalb der Website aber auch außerhalb) defekt werden.
    
    Typische Einträge sind hier so etwas wie `/de/rechnertechnik/alte-seite`.
- key: redirect_to
  meaning: >
    Ersetzt die komplette Seite durch eine Weiterleitungsseite auf eine neue URL.
    Das ist nur selten nötig und derzeit ein technischer Workaround im
    System, um die Navigationsstruktur so zu ermöglichen wie sie ist.
- key: tags
  meaning: >
    Tags sind Stichwörter, ihre Nennung führt zur Kategorisierung der Seite unter
    diesen Stichwörtern. Es kann entweder eine einzelne Kategorie angegeben werden,
    kommaseparierte Stichwörter oder eine YAML-Liste von Stichwörtern mit
    Spiegelstrichen.
    
    Manche Stichwörter erfüllen eine besondere Funktion im Seitensystem. Zum Beispiel
    führt der Tag `nav_horizontal` dafür, dass die Seite direkt in der horizontalen
    Navigation aufgeführt wird. Der Tag `blog` führt dazu, dass die Seite als Blogeintrag
    gelistet wird.
    
    Tags können vom System auch automatisch hinzugefügt werden und müssen nicht explizit
    angegeben werden. Das gilt zum Beispiel bei Blog-Einträgen oder der Sprachzuordnung
    mithilfe der Tags `de` und `en`.
- key: author
  meaning: >
    Nur verwendet innerhalb des Blogs: Erlaubt die Assoziation des Autorennamens zu
    einem Blogposting. Der Name muss dabei dem `identifier`-Feld in der Teamliste
    entsprechen (siehe `_data/team.yml`). Groß- und Kleinschreibung ist nicht wichtig.
- key: date
  meaning: >
    Nur verwendet innerhalb des Blogs: Datumsangabe des Postings. Typischerweise sollte
    hier eine Datumsangabe im Format YYYY-MM-DD verwendet werden, zB.
    `2025-10-04`.
- key: lang
  meaning: >
    Definiert sie Sprache der Seite. Erlaubte Werte sind `de` oder `en`. Wenn nicht
    angegeben, wird die Sprache versucht automatisch anhand des Verzeichnisses,
    in dem sich die Datei befindet, herauszufinden. Oder sie wird als deutsch
    angenommen.
- key: open_graph
  meaning: >
    Die Open-Graph-Struktur erlaubt spezifische Einträge für Suchmaschinen und
    Social-Media-Listings zu verwenden. Häufige Unterpunkte sind `description` oder
    `image`.
- key: body_append
  meaning: >
    Möglichkeit, Scripte in Seiten einzufügen. Das sollte aber nur beim Einbinden
    externer Libraries verwendet werden, da es für interne Scripte das System gibt,
    dass Scripte automatisch von `shared/js-v6/pagescripts/{seiten_id}.js` eingebunden
    werden.
- key: header_prepend
  meaning: >
    Möglichkeit, Inhalte im HTML-Header einzufügen. Sollte nur beim Einbinden
    externer JS/CSS-Libraries verwendet werden, da es für interne JS/CSS-Files
    das `shared/js-v6/pagescripts` bzw. `shared/css-v6/pagestyles`-System gibt,
    welches zugehörige Daten automatisch einbindet.
- key: eleventyExcludeFromCollections
  meaning: >
    Eine Möglichkeit, eine Seite zu verstecken. Ist spezifisch für das 11ty-System.
    Mögliche Werte sind, wenn gesetzt, `true` oder `false`.
---

## {{ titel }}

Diese Seite dokumentiert, wir man die technikum29-Website bearbeitet, und zwar auf
dem **redaktionellen Level**. Sie liest sich damit ergänzend zu

* Der [README-File](https://github.com/technikum29/technikum29-www/blob/1b3dd9d3e70436948324fbad60c69b7396280317/README.md)
  der Website, welche grundlegende Einführung in die Inbetriebnahme
  einer Entwicklungsinstallation gibt
* Blogposts zur neuen Website, etwa
  [Neue Website mit 11ty](/blog/2025-10-04-Neue-Website/)
* Der Dokumentation des verwendeten Satic Site Generators, etwa dem
  [11ty: Glossar](https://www.11ty.dev/docs/glossary/)

### Zur Dateistruktur und Frontmatter

Dateien mit `.md`-Endung werden als Markdown-Files interpretiert. Die meisten Dateien auf
der technikum29-Website sind aber als HTML geschrieben und haben daher die Dateiendung
`.htm` oder `.html`. In allen Fällen findet eine Auswertung von Seitenvariablen statt,
die auch im folgenden Abschnitt erläutert werden. Die Variablenwerte können mit geschweiften
Klammern ausgegeben werden, zB. wird `{%raw%}{{ titel }}{%endraw%}` bei dieser Seite
zu *{{titel}}* ausgewertet.

Jede Seite hat ein *Frontmatter*, auch *Colophon* bezeichnet, in dem seitenspezifische Variablen beschrieben
werden. Zum Beispiel hat die Seite [gamma10.htm](https://github.com/technikum29/technikum29-www/blob/1b3dd9d3e70436948324fbad60c69b7396280317/src/en/computer/gamma10.htm)
folgenden Anfang:

```
---
title: "EDV-Anlage der 2. Generation: BULL GAMMA 10"
nav_title: "BULL Gamma 10"
nav_order: 2
seiten_id: gamma10
parent: grossrechner
---
```

Der Syntax hier ist [YAML](https://yaml.org/). YAML erlaubt es, strukturierte Daten zu beschreiben,
dazu gehören neben oben gezeigten Schlüssel-Werte-Paaren auch Listen, Datentypen wie Zahlen,
verschachtelte Schlüssel-Werte-Paare sowie Zeilenkommentare die mit einer Raute `#` anfangen.

Nach den drei Strichen `---` fängt der eigentliche Seiteninhalt an.


### Dokumentation der Frontmatter-Variablen

<dl>
{% for var in frontmatter_docs %}
    <dt class="linkable"><tt>{{ var.key }}</tt></dt>
    <dd>{{ var.meaning }}</dd>
{% endfor %}
</dl>
