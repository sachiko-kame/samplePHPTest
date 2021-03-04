From php:7.4-apache

#wget pecl
RUN apt-get update \
&& apt-get install -y \
zip \
unzip \
wget

# なんかインストールされているって言われているようなのでここの記述いらないかもです、、
RUN docker-php-ext-install tokenizer

# コードジェネレーターで必要
RUN pecl install xdebug

COPY html/php.ini /usr/local/etc/php/conf.d

WORKDIR /var/www/html

