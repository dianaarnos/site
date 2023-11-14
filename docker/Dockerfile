# Essa imagem é apenas para desenvolvimento local, não deve ser usada como modelo para imagens de CI ou prod
FROM php:8.2-cli

COPY --from=composer /usr/bin/composer /usr/bin/composer

# Composer precisa da extensão "zip" do php. Essa extensão depende do pacote libzip  
RUN apt-get update && apt-get install -y libzip-dev

RUN docker-php-ext-configure zip && docker-php-ext-install zip

# O CMD roda só depois das instruções do compose.yaml
# Isso significa que, nesse ponto, já temos os arquivos do projeto montados em /app
WORKDIR /app
CMD [ "sh", "-c", "composer install --no-interaction && php -S 0.0.0.0:8000 -t web" ]
