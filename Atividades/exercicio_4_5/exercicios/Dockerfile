# Usa PHP com CLI (mais leve e ideal pro artisan serve)
FROM php:8.3-cli

# Instala dependências do sistema
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    curl \
    libzip-dev \
    libxml2-dev \
    sqlite3 \
    libsqlite3-dev \
    && docker-php-ext-install \
        pdo \
        pdo_sqlite \
        zip \
        xml

# Instala Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Define diretório de trabalho
WORKDIR /var/www

# Copia arquivos do projeto
COPY . .

# Instala dependências do Laravel
RUN composer install

# Permissões (evita erro com cache/logs)
RUN chmod -R 777 storage bootstrap/cache

# Expõe a porta 8000
EXPOSE 8000

# Sobe o servidor Laravel
CMD php artisan serve --host=0.0.0.0 --port=8000