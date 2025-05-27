# Usa una imagen oficial de PHP con Apache
FROM php:8.2-apache

# Copia todo el contenido del proyecto al directorio público de Apache
COPY . /var/www/html/

# Habilita las extensiones necesarias (como mysqli para base de datos)
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Asigna los permisos correctos
RUN chown -R www-data:www-data /var/www/html

# Expone el puerto 80 (Render lo detectará automáticamente)
EXPOSE 80
