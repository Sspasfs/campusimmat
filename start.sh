#!/bin/bash

# Exécuter les migrations
php artisan migrate

# Exécuter les seeders
php artisan db:seed

# Lancer le serveur de développement
php artisan serve