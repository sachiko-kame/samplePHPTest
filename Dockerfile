From php:7.4-apache

RUN apt-get update \
&& apt-get install -y \
zip \
unzip

WORKDIR /var/www/html