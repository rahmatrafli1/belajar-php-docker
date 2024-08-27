# Dockerfile for Apache and PHP
FROM php:8.3-apache

RUN apt update && apt upgrade -y

# Install PHP extensions
RUN docker-php-ext-install mysqli pdo pdo_mysql

# enable mod_rewrite
RUN a2enmod rewrite

# Copy Apache configuration
COPY apache.conf /etc/apache2/sites-available/000-default.conf

# Expose port 80
EXPOSE 80
