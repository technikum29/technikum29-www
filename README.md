The technikum29 Computer Museum Homepage
========================================

This directory/repository contains the website of the technikum29 computer
museum. The official installation of this website is available at
https://technikum29.de. 

Since 2019-02-05, this website is managed via Github, the repository can be
found at https://github.com/technikum29/technikum29-www

Since the repository is huge, we recommend a shallow copy by running
`git clone --depth=1 https://github.com/technikum29/technikum29-www.git`.
However, if you want to commit your changes, you first need to download
the whole repository, for instance with `git fetch --unshallow origin`.
This will download ~5GB of data.

t29v8: Getting started with Eleventy Static Site Generator
----------------------------------------------------------

Between 2012 and 2025, Version 6 of the website was based on a custom PHP
toolkit. With Version 8 of this website, this dependency was skipped in
favour the up-to-date static site generator (SSG) [11ty](https://www.11ty.dev/).
See [Konvertierung-v8.md](KONVERTIERUNG-v8.md) for the background.
For a quick first start,

1. you need a JavaScript runtime such as
   [node](https://nodejs.org/en/download) or [deno](https://deno.com/) on
   your computer.
2. Run `npm install` on the fresh git checkout
3. Run `npx @11ty/eleventy --serve` in order to spin up a development webserver.
   Open http://localhost:8080/ in your browser and preview your edits locally
   before commiting/pushing them. The SSG output will be loacted in `_site`.

Each file has metadata at its top ("front matter"). The navigation/menu/sitemap
are extracted from these files, there is no more central `navigation.xml` file.
Content files are in `/de` (German pages) and `/en` (English pages). Static
assets (Pictures, Photos, CSS/JS) are supposed to be located in `/shared`.

Deployment with PHP
-------------------

In order to make the user experience more convenient, a few dynamic server
side functions remain even after getting rid of PHP for the content pages. This
is, in particular, the content negotiating `/index.php` as well as the `404.php`
error handler which features a little regexp-based URL rewriting map for
[cool URIs](https://www.w3.org/Provider/Style/URI).

In order to test this deployment method locally,

1. You need to [install PHP](https://www.php.net/downloads.php) on your computer,
   but you don't need an additional webserver.
1. Run `BUILD_PHP=1 npx @11ty/eleventy`
3. Optional: Make the router which respects the 404-handler: `tee _site/router.php <<< '<?php if(file_exists(__DIR__.parse_url($_SERVER["REQUEST_URI"],PHP_URL_PATH))) return false; include"404.php";'`
4. Serve: `cd _site && php -S 127.0.0.1:8080 router.php`

