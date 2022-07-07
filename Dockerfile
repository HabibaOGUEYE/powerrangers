FROM php:8.2-rc-apache
LABEL MAINTAINER "Powers Rangers"
WORKDIR /var/www/html
COPY ./app/* app/
EXPOSE 80