
FROM php:7.1.13-fpm

# php-fpm default WORKDIR is /var/www/html
# change it to /var/www
WORKDIR /var/www

RUN apt-get update && apt-get install -y \
    libmcrypt-dev \
    mysql-client --no-install-recommends \
    && docker-php-ext-install mcrypt pdo_mysql \
    && pecl install xdebug \
    && echo "zend_extension=$(find /usr/local/lib/php/extensions/ -name xdebug.so)\n" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.remote_enable=1\n" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.remote_autostart=1\n" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.remote_connect_back=0\n" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.remote_host=192.168.0.24\n" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.remote_port=9001\n" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.idekey=REMOTE\n" >> /usr/local/etc/php/conf.d/xdebug.ini

RUN apt-get install -y zip unzip \
    && php -r "readfile('https://getcomposer.org/installer');" | php -- --install-dir=/usr/local/bin/ \
    && ln -s /usr/local/bin/composer.phar /usr/local/bin/composer