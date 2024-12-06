FROM php:8.1-apache

# Update dan instal library yang diperlukan
RUN apt-get update && \
    apt-get install -y libssl-dev libssl1.1 openssl

# Pastikan ekstensi PHP OpenSSL terinstal
RUN docker-php-ext-install openssl

# Copy project files
COPY . /var/www/html/

# Install PHP extensions lainnya
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Set working directory
WORKDIR /var/www/html
