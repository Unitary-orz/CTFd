FROM php:5.6-apache

COPY ./www/ /var/www/html/

RUN set -ex\
    && chown root:root -R /var/www \
    && chmod 0755 -R /var/www \
    && apt-get update && apt-get install -y mysql-client mariadb-server-10.1 \
    && /etc/init.d/mysql start \