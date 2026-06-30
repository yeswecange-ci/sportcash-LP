# syntax=docker/dockerfile:1

FROM php:8.4-fpm AS app

# nginx + extensions PHP requises par Laravel (boot minimal, sans BDD)
RUN apt-get update \
    && apt-get install -y --no-install-recommends \
        nginx git unzip libonig-dev libzip-dev \
    && docker-php-ext-install -j"$(nproc)" mbstring zip bcmath opcache \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /app

# Dépendances (cache Docker tant que composer.* ne change pas)
COPY composer.json composer.lock ./
RUN composer install --no-dev --optimize-autoloader --no-interaction --no-scripts --prefer-dist

# Code applicatif
COPY . .
RUN composer dump-autoload --optimize --no-dev

# Config nginx (un seul bloc location / — pas de doublon) + entrypoint
COPY docker/nginx.conf /etc/nginx/sites-available/default
COPY docker/entrypoint.sh /usr/local/bin/entrypoint.sh
RUN chmod +x /usr/local/bin/entrypoint.sh

# Permissions pour que php-fpm (www-data) puisse écrire sessions/cache/logs
RUN chown -R www-data:www-data /app/storage /app/bootstrap/cache

EXPOSE 8080

CMD ["/usr/local/bin/entrypoint.sh"]
