# syntax=docker/dockerfile:1

# --- Build Stage ---
FROM composer:2.7 AS vendor
WORKDIR /app
# Copy only composer files for dependency install
COPY --link composer.json composer.lock ./
RUN composer install --no-dev --no-scripts --prefer-dist --no-interaction --optimize-autoloader

# --- App Stage ---
FROM php:8.2-fpm-alpine AS app

# Install system dependencies and PHP extensions
RUN apk add --no-cache \
    icu-dev \
    libzip-dev \
    zlib-dev \
    oniguruma-dev \
    curl \
    bash \
    shadow \
    && docker-php-ext-install intl pdo pdo_mysql zip opcache

# Install additional PHP extensions if needed
# RUN docker-php-ext-install ...

# Create non-root user
RUN addgroup -S appgroup && adduser -S appuser -G appgroup

WORKDIR /var/www/html

# Copy application code (excluding .env, .git, lock files, etc.)
COPY --link . .

# Copy installed vendor from build stage
COPY --link --from=vendor /app/vendor ./vendor

# Set permissions for storage and bootstrap/cache
RUN chown -R appuser:appgroup storage bootstrap/cache \
    && chmod -R 775 storage bootstrap/cache

USER appuser

# Expose port 9000 for PHP-FPM
EXPOSE 9000

# Entrypoint for PHP-FPM
CMD ["php-fpm"]

# --- .dockerignore (to be created alongside this Dockerfile) ---
# .git
# .gitignore
# .gitattributes
# .env
# composer.lock
# package-lock.json
# node_modules
# storage/*.log
# tests
# .editorconfig
#