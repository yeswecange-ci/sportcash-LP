# syntax=docker/dockerfile:1

FROM php:8.4-cli AS app

# Extensions PHP requises par Laravel (boot minimal pour une landing page sans BDD)
RUN apt-get update \
    && apt-get install -y --no-install-recommends \
        git unzip libonig-dev libzip-dev \
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

# Autoloader optimisé + compilation des vues Blade
RUN composer dump-autoload --optimize --no-dev \
    && php artisan view:cache || true

EXPOSE 8080

# config:clear pour ne jamais servir une config figée au build ;
# les variables d'env (APP_KEY, etc.) sont lues au runtime depuis l'environnement Coolify.
CMD ["sh", "-c", "php artisan config:clear && php artisan serve --host=0.0.0.0 --port=8080"]
