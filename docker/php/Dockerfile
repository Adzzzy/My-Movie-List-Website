FROM php:8.4-fpm-alpine

#install & enable php extension for mysql database connections. docker-php-ext-install and docker-php-ext-enable are helper scripts defined in php base image
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# Copy our php.ini config file into the php image's conf.d directory under the name custom.ini to add additional configurations to the default php configs
COPY ./php.ini /usr/local/etc/php/conf.d/custom.ini

# Set working directory
WORKDIR /var/www

#Run the php-fpm command to start php-fpm
CMD ["php-fpm"]

# php-fpm docker base image already exposes port 9000 for us but will keep this here if we want to change the port
EXPOSE 9000
