# FROM alpine

# CMD tail -f /dev/null # keep container up
FROM php:8-apache

RUN apt-get update && \
    apt-get install -y --no-install-recommends nano

ADD vhost.conf /etc/apache2/sites-enabled/000-default.conf

RUN echo "Hello nothing" > willnotexist.txt

#WORKDIR /






