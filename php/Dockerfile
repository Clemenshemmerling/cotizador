FROM php:7.0-fpm

RUN docker-php-ext-install mysqli && \
    docker-php-ext-install tokenizer

RUN apt-get update && apt-get \
    install -y mysql-client php5-mysql
