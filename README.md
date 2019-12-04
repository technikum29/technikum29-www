The technikum29 Computer Museum Homepage
========================================

This directory/repository contains the website of the technikum29 computer
museum. The official installation of this website is available at
https://technikum29.de. Documentation about the technical setup can be found
at the technikum29 Laboraties (http://labs.technikum29.de).

Since 2019-02-05, this website is managed via Github, the repository can be
found at https://github.com/technikum29/technikum29-www

Overview
--------

Since Version 6 (20129, the website is fully based on PHP. That means this
is a classical website where every single page is a PHP file. The directory
structure works like

```
  /de      - German pages
  /en      - English pages
  /lib     - PHP framework files
  /shared  - All assets (Pictures, CSS, Javascript)
```

The menu/sitemap is composed from the files navigation.xml. As this is quite
some work, the rendered pages are cached.

Getting started with Docker
---------------------------

If you like Docker, you can build and run a minimal LAMP container by
running `./start-docker.sh`. That is, you can run this website on your
computer as simple as

```
git clone --depth=1 https://github.com/technikum29/technikum29-www.git
./technikum29-www/start-docker.sh
```

and open http://localhost in your browser. Happy editing!


Manual Installation
-------------------

You only need basic PHP extensions to run this website. These are not installed
on all systems by default:

  * [SimpleXML](https://www.php.net/manual/en/book.simplexml.php) (`php-xml`)
  * [JSON](https://www.php.net/manual/en/book.json.php) (`php-json`)
  * [DOM](https://www.php.net/manual/en/book.dom.php) (`php7-dom`)
  * [Ctype](https://www.php.net/manual/en/ref.ctype.php) (`php7-ctype`)

There are no other dependencies, this is plain PHP. For running the website,
setup a classical webserver with PHP support (say a LAMP stack) and just make
this directory accessible in the webroot (ie. http://localhost).

The website can also run in subdirectories (ie. http://example.com/~you)
but requires adaptions with the `t29Host` system. The file lib/host.php
contains some examples how to generate links in such a setup.

The directory `/shared/cache` must be writable for the webserver/PHP process.

