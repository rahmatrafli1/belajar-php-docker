# Dockerfile for Apache and PHP
FROM php:8.3-apache

RUN apt update && apt upgrade -y

# Install PHP extensions
RUN docker-php-ext-install mysqli pdo pdo_mysql

# enable mod_rewrite
RUN a2enmod rewrite

# new file apache configuration
RUN touch /etc/apache2/sites-available/belajar-php-docker.com.conf

# Copy Apache configuration
COPY apache.conf /etc/apache2/sites-available/belajar-php-docker.com.conf

# disable access apache default 
RUN a2dissite 000-default.conf

# enable access apache new virtualhost 
RUN a2ensite belajar-php-docker.com.conf

# Expose port 80
EXPOSE 80
