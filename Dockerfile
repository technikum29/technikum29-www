# Docker image size is about 30MB

FROM alpine:3.10
# could also have used something like FROM php:5.6-apache
# if we wanted to craft a vintage docker machine

MAINTAINER SvenK <technikum29.de>

RUN apk update && apk upgrade && apk add \
	nano dash \
	apache2 php7-apache2 php7-xml php7-simplexml php7-dom php7-json php7-ctype \
	rm -f /var/cache/apk/*

# Prepare apache

RUN mkdir /www && echo 'Missing mount' > /www/index.htm && \
    mkdir /etc/apache2/sites-enabled  && \
    sed -i '/rewrite_module/ s/^#//' /etc/apache2/httpd.conf && \
    ln -s /www/lib/installation/prototypical-apache-vhost.conf /etc/apache2/sites-enabled/ && \
    echo 'IncludeOptional /etc/apache2/sites-enabled/*.conf' >> /etc/apache2/httpd.conf && \
    echo 'ServerName localhost:80' >>  /etc/apache2/httpd.conf

# COPY ./lib/installation/prototypical-apache-vhost.conf  /etc/apache2/sites-enabled/

# todo: Tell /etc/php7/php.ini to output logs

EXPOSE 80
WORKDIR /www

# start with: httpd -f /etc/apache2/httpd.conf
# cmd rm -f /run/apache2/*.pid
# cmd  httpd -D FOREGROUND

# Something interactive :-)
CMD /usr/sbin/httpd -f /etc/apache2/httpd.conf && \
    echo "Started Apache2 httpd in Background, tailing error log. Type 'exit' to quit docker." && \
    tail -f /var/log/apache2/error.log & \
    /bin/sh
