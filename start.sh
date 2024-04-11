#!/bin/bash

# Vérification et installation du pilote MySQL
mysql_driver_path="/usr/lib/php/20190902/mysql.so" # Chemin vers le pilote MySQL
if [ ! -f "$mysql_driver_path" ]; then
    echo "Le pilote MySQL n'est pas installé. Installation en cours..."
    
    # Téléchargement du pilote MySQL
    wget -O /tmp/mysql.so "https://github.com/php/pecl-database-mysql/releases/download/mysql-2.0.4/mysql-2.0.4.tgz"
    
    # Extraction du pilote
    tar -xzf /tmp/mysql-2.0.4.tgz -C /tmp/
    
    # Copie du pilote dans le répertoire approprié
    sudo cp /tmp/mysql.so "$mysql_driver_path"
    
    echo "Installation du pilote MySQL terminée."
else
    echo "Le pilote MySQL est déjà installé."
fi

# Exécuter les migrations
php artisan migrate

# Exécuter la migration et rafraîchir la base de données
php artisan migrate:refresh

#Exécution d'un seed de la base de données
php artisan db:seed

php artisan db:seed --class=UsersTableSeeder

# Lancer le serveur de développement
php artisan serve