#!/bin/bash
cd /var/www

# Cache config, route, view (skip key:generate, APP_KEY sudah dari env)
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Set permissions
chown -R www-data:www-data /var/www/storage
chmod -R 775 /var/www/storage
chmod -R 775 /var/www/bootstrap/cache

mkdir -p /var/log/supervisor
exec /usr/bin/supervisord -c /etc/supervisor/conf.d/supervisord.conf
