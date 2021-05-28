FROM php:8-apache

RUN apt-get update && \
    apt-get install -y -–no-install-recommends nano

ADD vhost.conf /etc/apache2/sites-enabled/000-default.conf