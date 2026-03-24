FROM php:8.2-cli

# Instala dependências do sistema
RUN apt-get update && apt-get install -y \
    unzip \
    libzip-dev \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    && docker-php-ext-install \
    mbstring \
    zip \
    gd \
    xml

# Instala Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Define diretório de trabalho
WORKDIR /app

# Copia arquivos do projeto
COPY . .

# Instala dependências do Composer
RUN composer install

# Expõe porta
EXPOSE 8000

# Sobe servidor PHP
CMD ["php", "-S", "0.0.0.0:8000"]