FROM php:8.2-apache

# Installe les dépendances nécessaires et les extensions PDO et PDO_MySQL
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

RUN docker-php-ext-install pdo pdo_mysql && docker-php-ext-enable pdo pdo_mysql