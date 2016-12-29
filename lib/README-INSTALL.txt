Short Howto install the t29 website on your computer
====================================================

There are almost no dependencies as this is plain PHP.

Just checkout the subversion repository and make it accessible
in a webroot (ie. http://localhost/) and you're done.

It can also run in subdirectories (ie. http://example.com/~you)
but requires adaptions with the t29Host system.

PHP module dependencies (in terms of Ubuntu packages):

  - php-xml

Attention: You want to make /share/cache writeable
for the PHP process, otherwise caching of rendered pages
will fail.

-- SK, 2016-12-29

