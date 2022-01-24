FROM mileschou/phalcon:7.4-fpm-alpine

WORKDIR /app

COPY . .

RUN apk add --update composer postgresql-dev libpq && \
    docker-php-ext-install pdo pdo_pgsql && \
    ./docker/docker-phalcon-install-devtools && \
    composer install

ENTRYPOINT ["phalcon", "serve"]

EXPOSE 8000
