# Use an official PHP image
FROM php:8.2-fpm

# Install dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg-dev \
    libonig-dev \
    libxml2-dev \
    libicu-dev \
    libpq-dev \
    zip \
    unzip \
    curl \
    git \
    npm \
    nodejs \
    nginx \
    supervisor \
    net-tools \
    && docker-php-ext-configure intl \
    && docker-php-ext-install intl \
    && docker-php-ext-install pdo_pgsql pgsql \
    && docker-php-ext-install mbstring exif pcntl bcmath gd \
    && rm -rf /var/lib/apt/lists/*


# RUN apt-get update && apt-get install -y net-tools


# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer


# Set working directory
WORKDIR /var/www

# Copy Laravel files
COPY . .

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader
# install faker
RUN composer require fakerphp/faker
# Install Node dependencies and build assets
# RUN npm install

# Build
# RUN npm run build

# Set file permissions
RUN chown -R www-data:www-data /var/www \
    && chmod -R 775 /var/www/storage
# RUN chmod -R 775 /var/www/storage
# Expose port
EXPOSE 7982

# Copy Supervisor config file
COPY setup.sh /var/www/setup.sh
RUN chmod +x /var/www/setup.sh


CMD ["/var/www/setup.sh"]

