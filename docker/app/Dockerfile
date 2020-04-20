FROM ubuntu:18.04

ENV DEBIAN_FRONTEND=noninteractive

RUN apt-get update

RUN apt-get install -y software-properties-common

RUN LC_ALL=C.UTF-8 add-apt-repository ppa:ondrej/php

RUN apt-get update

RUN apt-get install -y \
    nginx \
    php7.4-fpm \
    php7.4-cli \
    php7.4-intl \
    php7.4-mbstring \
    php7.4-zip \
    php7.4-xml \
    php7.4-mysql \
    php-imagick \
    curl \
    wget \
    git \
    mc

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
    apt-get update

ADD ./php.ini /usr/local/etc/php/conf.d/40-custom.ini

COPY ./nginx/default /etc/nginx/sites-available/

CMD service php7.4-fpm start && nginx -g "daemon off;"

EXPOSE 80
