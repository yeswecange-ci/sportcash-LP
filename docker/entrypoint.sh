#!/bin/sh
set -e

# Les variables d'env (APP_KEY, etc.) sont fournies au runtime par Coolify.
# On nettoie tout cache de config figé, puis on (re)génère le cache des vues.
php artisan config:clear || true
php artisan view:cache || true

# php-fpm en arrière-plan, nginx au premier plan (PID 1 du conteneur).
php-fpm -D
exec nginx -g 'daemon off;'
