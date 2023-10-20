FROM php:8.0-fpm

#RUN docker-php-ext-install mysqli

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

#RUN pecl install xdebug \
#    && docker-php-ext-enable xdebug

RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    libpq-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd pdo_mysql zip mysqli \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug pdo_mysql

COPY conf.d/* $PHP_INI_DIR/conf.d/

RUN apt-get install -y procps




