FROM php:8.1-apache

# install zip, composer
RUN apt-get update && \
	curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# setup Apache
RUN a2dismod cgi
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf && \
	sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf && \
	a2enmod rewrite && \
	a2enmod headers

# add source code and dependencies
COPY . /var/www/html
WORKDIR /var/www/html
RUN composer install

# setup Laravel
RUN touch /var/www/html/storage/logs/laravel.log && \
        cp .env.docker .env && \
        php artisan key:generate && \
        php artisan -q storage:link

# create SQLite database
RUN touch /var/www/html/database/data/database.sqlite

# populate SQLite database
RUN php artisan migrate
RUN php artisan db:seed
