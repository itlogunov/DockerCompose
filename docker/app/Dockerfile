FROM ubuntu:18.04

ENV DEBIAN_FRONTEND=noninteractive

RUN apt-get update

RUN apt-get install -y software-properties-common

RUN LC_ALL=C.UTF-8 add-apt-repository ppa:ondrej/php

RUN apt-get update

RUN apt update

RUN apt-get install -y \
    nginx \
    php7.4-fpm \
    php7.4-cli \
    php7.4-intl \
    php7.4-mbstring \
    php7.4-zip \
    php7.4-xml \
    php7.4-gd \
    php7.4-mysql \
    curl \
    wget \
    git \
    mc

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
    apt-get update

COPY ./nginx/default /etc/nginx/sites-available/

ADD ./php/php.ini /etc/php/7.4/fpm/conf.d/40-custom.ini

CMD service php7.4-fpm start && nginx -g "daemon off;"

EXPOSE 80
