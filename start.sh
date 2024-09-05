#!/bin/bash

# Suppression de la base de données
php artisan migrate:reset

# Exécuter les migrations
php artisan migrate

#Exécution d'un seed de la base de données
php artisan db:seed

php artisan db:seed --class=UsersTableSeeder

# Lancer le serveur de développement
php artisan serve