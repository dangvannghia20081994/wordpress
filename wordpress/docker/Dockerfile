FROM php:8.2.8-fpm-alpine
RUN docker-php-ext-install mysqli
COPY ./docker/custom.ini /usr/local/etc/php/conf.d
RUN chmod 777 -R /var/www/html
WORKDIR /var/www/html
