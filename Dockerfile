FROM php:7.2
RUN apt-get update -y && apt-get install -y libmcrypt-dev openssl
RUN pecl install mcrypt-1.0.1 docker-php-ext-enable mcrypt44
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
WORKDIR /app
COPY . /app
RUN composer install

CMD php artisan serve --port=8000
EXPOSE 8000