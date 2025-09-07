#!/bin/bash

# Khởi động PHP-FPM
php-fpm -D

# Khởi động Nginx
nginx -g "daemon off;"
