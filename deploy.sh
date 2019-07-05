#!/usr/bin/env bash
# https://gist.github.com/BenSampo/aa5f72584df79f679a7e603ace517c14
# Turn on maintenance mode
php artisan down

# Pull the latest changes from the git repository
git pull

# Install/update composer dependecies
composer install --no-interaction --prefer-dist --optimize-autoloader

# Run database migrations
php artisan migrate --force

# Clear caches
php artisan cache:clear

# Clear expired password reset tokens
php artisan auth:clear-resets

# Clear and cache routes
php artisan route:clear
php artisan route:cache

# Clear and cache config
php artisan config:clear
php artisan config:cache

# Install node modules
npm install

# Build assets using Laravel Mix
npm run dev

# build storage link
php artisan storage:link

./vendor/bin/php-cs-fixer fix ./app


# Turn off maintenance mode
php artisan up
