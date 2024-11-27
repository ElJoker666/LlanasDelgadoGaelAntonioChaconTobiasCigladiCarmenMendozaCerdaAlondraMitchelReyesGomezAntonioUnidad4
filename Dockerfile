# Usa una imagen base de PHP con Apache
FROM php:8.2-apache

# Instala las extensiones necesarias para PHP y MySQL, y también PostgreSQL
RUN apt-get update && apt-get install -y \
    libzip-dev zip unzip \
    libpq-dev && \  
    docker-php-ext-install pdo_mysql pdo_pgsql  # Agrega pdo_pgsql

# Copia el código de la aplicación al contenedor
COPY . /var/www/html/

# Establece permisos adecuados
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Habilita el módulo de reescritura de Apache
RUN a2enmod rewrite

# Expone el puerto 80
EXPOSE 80
