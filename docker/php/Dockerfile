FROM ghcr.io/geerteltink/php:8.2-fpm

WORKDIR /app

# Install necessary dependencies and build tools for xdebug
RUN  apk add --no-cache --update --virtual buildDeps \
     && apk --no-cache add autoconf \
     && apk del buildDeps \
     && apk --no-cache add pcre-dev \
     && apk add --no-cache build-base \
     && apk add --update linux-headers \
# Install xdebug extension
     && pecl install xdebug \
     && docker-php-ext-enable xdebug