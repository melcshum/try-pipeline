web: vendor/bin/heroku-php-apache2 public/
release: php artisan migrate --force && php artisan cache:clear
scheduler: php -d memory_limit=512M artisan schedule:daemon
