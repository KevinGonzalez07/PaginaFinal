# Usa una imagen oficial de PHP con Apache
FROM php:8.2-apache

# Copia SOLO el contenido dentro de PAGINAFINAL a /var/www/html/
COPY . /var/www/html/

# Habilita las extensiones necesarias
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Asigna los permisos correctos
RUN chown -R www-data:www-data /var/www/html

# Expone el puerto 80
EXPOSE 80
