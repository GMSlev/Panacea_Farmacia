FROM ubuntu:22.04

# Evita prompts interativos
ENV DEBIAN_FRONTEND=noninteractive

# Atualiza pacotes e instala PHP + SQLite
RUN apt-get update && apt-get install -y \
    php \
    php-sqlite3 \
    sqlite3 \
    curl \
    unzip \
    git \
    && rm -rf /var/lib/apt/lists/*

# Instala Composer
RUN curl -sS https://getcomposer.org/installer | php && \
    mv composer.phar /usr/local/bin/composer

# Cria diretório de trabalho
WORKDIR /workspace