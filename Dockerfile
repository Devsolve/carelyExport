# Use an official PHP runtime as the base image
FROM php:8.1-apache

# Set the working directory in the container
WORKDIR /var/www/html

# Install system dependencies
RUN apt-get update && \
    apt-get install -y \
        git \
        unzip

# Install PHP extensions
RUN docker-php-ext-install pdo pdo_mysql

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copy the project files into the container
COPY . .

# Install project dependencies
RUN composer install 

# Set file permissions
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Generate the application key
RUN php artisan key:generate

# Expose the container port
EXPOSE 80

# Start the Apache server
CMD php artisan serve --host=0.0.0.0 --port=8001
