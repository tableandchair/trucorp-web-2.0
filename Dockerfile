FROM php:7.4-apache
COPY ./index.php /var/www/html
COPY ./new.php /var/www/html
WORKDIR /var/www/html
RUN chown -R www-data:www-data /var/www
RUN chmod -R o-wx /var/www
RUN docker-php-ext-install mysqli
RUN docker-php-ext-enable mysqli

