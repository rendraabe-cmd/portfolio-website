#!/bin/bash

cd /var/www

# Generate app key kalau belum ada
php artisan key:generate --force

# Clear & cache config untuk production
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Set storage permissions
chown -R www-data:www-data /var/www/storage
chmod -R 775 /var/www/storage
chmod -R 775 /var/www/bootstrap/cache

# Buat log directory untuk supervisor
mkdir -p /var/log/supervisor

# Start supervisor (nginx + php-fpm)
exec /usr/bin/supervisord -c /etc/supervisor/conf.d/supervisord.conf
