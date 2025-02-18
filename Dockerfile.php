# Using official PHP 8.3 with FPM as a base image
FROM php:8.3-fpm

# Installing dependencies
RUN apt-get update && apt-get install -y \
unzip \
git \
curl \
libpq-dev \
libzip-dev \
nodejs \
npm \
&& docker-php-ext-install pdo pdo_mysql zip

# Copy configuration
COPY php/conf/php.ini /usr/local/etc/php/

# Installing Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Installing Laravel Installer
RUN composer global require laravel/installer

# Adding Composer в PATH
ENV PATH="/root/.composer/vendor/bin:${PATH}"

# Set working directory
WORKDIR /var/www