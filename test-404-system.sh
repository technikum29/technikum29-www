#!/bin/bash

set -e

SKIP_HEAVY_ASSETS=1 BUILD_PHP=1 npx @11ty/eleventy

HOST=127.0.0.1:8080

tee _site/router.php <<< '<?php if(file_exists(__DIR__.parse_url($_SERVER["REQUEST_URI"],PHP_URL_PATH))) return false; include"404.php";'
( cd _site && php -S $HOST router.php )&
SERVER_PID=$!
trap "kill $SERVER_PID" EXIT

query() { curl -s -D- -o/dev/null http://$HOST/$1; }
status() { query $1 | head -n1 | awk '{print $2}'; } # prints HTTP response code
location() { query $1 | grep Location | awk '{print $2}'; } # prints location redirect if given
result() { echo "$(status $1): $1 => $(location $1)"; }

# test cases, human result
result /
result /de
result /de/geraete/anita
result /foo/bar.php  # target does not exist
result /de/impressum.php # target exists
