# Gunakan image PHP dengan Apache sebagai base image
FROM php:8.2-apache

# Install ekstensi PHP yang dibutuhkan Laravel
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    git \
    unzip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory ke /var/www
WORKDIR /var/www

# Salin semua file Laravel ke dalam container
COPY . .

# Install dependensi Laravel menggunakan Composer
RUN composer install --no-dev --optimize-autoloader

# Set permission untuk folder storage dan cache Laravel
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

# Enable mod_rewrite untuk Apache
RUN a2enmod rewrite

# Ubah DocumentRoot ke folder public Laravel
RUN sed -i 's|DocumentRoot /var/www/html|DocumentRoot /var/www/public|' /etc/apache2/sites-available/000-default.conf

# Expose port 80 untuk Apache
EXPOSE 80

# Jalankan Apache di foreground
CMD ["apache2-foreground"]
