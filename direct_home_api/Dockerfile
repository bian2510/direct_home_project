FROM php:7.4-cli
RUN apt-get update && \
    apt-get install -y git -y zip -y libpq-dev \
    && docker-php-ext-install mysqli pdo pdo_mysql \
    && docker-php-ext-enable pdo_mysql

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php composer-setup.php --install-dir=/usr/local/bin --filename=composer    

WORKDIR /var/www/html

COPY composer.json composer.lock ./

RUN composer install --no-scripts --no-autoloader

COPY . .

EXPOSE 8000

CMD [ "php", "artisan", "serve", "--host", "0.0.0.0", "--port", "8000" ]