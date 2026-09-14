#!/usr/bin/env bash
# exit on error
set -o errexit

echo "--- Building Laravel Portfolio Project for Render ---"

# Install PHP composer packages
echo "Installing Composer dependencies..."
composer install --no-dev --optimize-autoloader --no-interaction

# Install NPM packages & build frontend assets (Vite)
echo "Building frontend assets with Vite..."
npm install
npm run build

# Prepare SQLite Database
echo "Setting up database..."
mkdir -p database
touch database/database.sqlite

# Run migrations
echo "Running database migrations..."
php artisan migrate --force || true

# Cache configuration, routes, and views
echo "Caching Laravel configuration..."
php artisan config:cache
php artisan route:cache
php artisan view:cache

echo "--- Build Finished Successfully! ---"
