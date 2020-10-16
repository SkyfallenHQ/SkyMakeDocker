FROM php:7.4-apache
EXPOSE 80
COPY ./src /var/www/html
RUN docker-php-ext-install mysqli
RUN docker-php-ext-enable mysqli
RUN apt-get update
RUN apt-get install libzip-dev -y
RUN docker-php-ext-install zip
RUN docker-php-ext-enable zip
RUN a2enmod rewrite