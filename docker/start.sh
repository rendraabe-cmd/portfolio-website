#!/bin/bash
cd /var/www

# Clear cache lama dulu, lalu cache ulang dengan env terbaru
php artisan config:clear
php artisan cache:clear
php artisan route:clear
php artisan view:clear

# Cache ulang dengan env yang fresh
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Debug: tampilkan mail config ke log saat startup
php artisan tinker --execute="echo 'MAIL_HOST: ' . config('mail.mailers.smtp.host') . PHP_EOL; echo 'MAIL_PORT: ' . config('mail.mailers.smtp.port') . PHP_EOL; echo 'MAIL_USER: ' . config('mail.mailers.smtp.username') . PHP_EOL; echo 'LOG_CHANNEL: ' . config('logging.default') . PHP_EOL; echo 'PASSWORD_LENGTH: ' . strlen(config('mail.mailers.smtp.password')) . PHP_EOL;"

# Set permissions
chown -R www-data:www-data /var/www/storage
chmod -R 775 /var/www/storage
chmod -R 775 /var/www/bootstrap/cache

mkdir -p /var/log/supervisor
exec /usr/bin/supervisord -c /etc/supervisor/conf.d/supervisord.conf
