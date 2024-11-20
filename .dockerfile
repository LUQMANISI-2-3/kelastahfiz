dockerfile
# Use an official PHP image as the base image
FROM php:8.1-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    libzip-dev \
    unzip \
    git \
    && docker-php-ext-install zip pdo_mysql

# Set the working directory in the container
WORKDIR /var/www/html

# Copy the composer files
COPY composer.json composer.lock ./

# Install composer dependencies
RUN composer install --no-interaction --no-dev --optimize-autoloader

# Copy the application files
COPY . .

# Generate application key
RUN php artisan key:generate

# Set file permissions
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 775 storage bootstrap/cache

# Expose the web server port
EXPOSE 80

# Start the PHP-FPM process
CMD ["php-fpm"]
