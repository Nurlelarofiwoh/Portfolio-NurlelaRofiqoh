#!/bin/sh
set -e

# Ensure SQLite file exists if using sqlite
if [ ! -f /var/www/html/database/database.sqlite ]; then
    touch /var/www/html/database/database.sqlite
    chown www-data:www-data /var/www/html/database/database.sqlite
    chmod 664 /var/www/html/database/database.sqlite
fi

# Ensure storage directory permissions
chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Generate key if not set
if [ -z "$APP_KEY" ]; then
    echo "Generating Laravel APP_KEY..."
    php artisan key:generate --force
fi

# Run database migrations
echo "Running migrations..."
php artisan migrate --force || true

# Optimize & Cache Laravel
echo "Caching Laravel configuration & routes..."
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Start Apache in foreground
echo "Starting Apache..."
exec apache2-foreground
