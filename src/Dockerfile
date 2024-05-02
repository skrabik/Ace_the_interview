FROM php:fpm

RUN apt-get update && apt-get upgrade
RUN apt-get install -y git 
RUN apt-get install -y zip
RUN apt-get install -y iputils-ping
RUN docker-php-ext-install pdo pdo_mysql

WORKDIR /var/www/app