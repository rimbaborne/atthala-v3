# Menggunakan PHP 8.3 dengan FPM
FROM php:8.3-fpm

FROM dunglas/frankenphp

# Install dependencies yang diperlukan termasuk oniguruma
RUN apt-get update && apt-get install -y \
    libzip-dev \
    libxml2-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libonig-dev \
    unzip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install \
    mbstring \
    pdo \
    pdo_mysql \
    xml \
    pcntl \
    zip \
    gd \
    exif \
    && docker-php-ext-enable exif

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Install FrankenPHP (Pastikan URL yang tepat)
#RUN curl -sSL https://github.com/frankensoft/frankenphp/releases/latest/download/frankenphp-linux-amd64.tar.gz | tar xz -C /usr/local/bin && \
#    chmod +x /usr/local/bin/frankenphp

# Set direktori kerja
WORKDIR /var/www

# Salin file composer.json dan composer.lock
COPY composer.json composer.lock ./

# Install dependensi Laravel tanpa script dan autoloader
RUN composer clear-cache
RUN composer install --no-dev --no-autoloader --no-scripts

# Salin sisa aplikasi
COPY . .

# Jalankan autoloader
RUN composer dump-autoload --optimize

# Permissions untuk Laravel
RUN chown -R www-data:www-data storage bootstrap/cache

# Expose port 9000
EXPOSE 9000

# Jalankan FrankenPHP di port 9000
#CMD ["frankenphp", "start", "--port", "9000"]
CMD ["php", "artisan", "octane:frankenphp", "--port", "9000"]


#ENTRYPOINT ["php", "artisan", "octane:frankenphp"]
