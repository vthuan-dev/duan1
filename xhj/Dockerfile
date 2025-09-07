FROM php:5.6-fpm

# Cài đặt các extension cần thiết
RUN apt-get update && apt-get install -y \
    nginx \
    mysql-client \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    libcurl4-openssl-dev \
    libxml2-dev \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd mysqli pdo_mysql zip curl xml mbstring

# Copy code
COPY . /var/www/html/

# Copy cấu hình Nginx
COPY nginx.conf /etc/nginx/sites-available/default

# Set quyền
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html \
    && chmod 777 /var/www/html/Runtime \
    && chmod 777 /var/www/html/Upload

# Expose port
EXPOSE 80

# Script khởi động
COPY start.sh /start.sh
RUN chmod +x /start.sh

CMD ["/start.sh"]
