technikum29-www Homepage
========================

This directory/repository contains the website of the technikum29 computer
museum. The official installation of this website is available at
http://technikum29.de. Documentation about the technical setup can be found
at the technikum29 Laboraties (http://labs.technikum29.de).

Since 2019-02-05, this website is managed via Github, the repository can be
found at https://github.com/technikum29/technikum29-www

Overview
--------

Since Version 6 (20129, the website is fully based on PHP. That means this
is a classical website where every single page is a PHP file. The directory
structure works like

  /de      - German pages
  /en      - English pages
  /lib     - PHP framework files
  /shared  - All assets (Pictures, CSS, Javascript)

The menu/sitemap is composed from the files navigation.xml. As this is quite
some work, the rendered pages are cached.

Installation
------------

The only non-standard PHP package which needs to be installed to run this
website is SimpleXML (php-xml).

There are no other dependencies, this is plain PHP. For running the website,
setup a classical webserver with PHP support (say a LAMP stack) and just make
this directory accessible in the webroot (ie. http://localhost).

The website can also run in subdirectories (ie. http://example.com/~you)
but requires adaptions with the t29Host system. The file lib/host.php
contains some examples how to generate links in such a setup.

The directory /shared/cache must be writable for the webserver/PHP process.

