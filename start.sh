#!/bin/bash

# Exécuter les migrations
php artisan migrate

# Exécuter la migration et rafraîchir la base de données
php artisan migrate:refresh

#Exécution d'un seed de la base de données
php artisan db:seed

php artisan db:seed --class=UsersTableSeeder

# Lancer le serveur de développement
php artisan serve