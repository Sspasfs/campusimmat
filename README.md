<p align="center">
  <img src="/public/images/logo.png" alt="Logo de l'application" width="300px">
</p>


# CampusImmat

CampusImmat est une application web permettant de gérer les informations des étudiants et des plaques d'immatriculation dans une école.

## Fonctionnalités

- Gestion des étudiants : Ajouter, afficher, modifier et supprimer des étudiants.
- Gestion des plaques d'immatriculation : Ajouter, afficher, modifier et supprimer des plaques d'immatriculation associées aux étudiants.
- Interface conviviale : Utilisation de Tailwind CSS pour une interface utilisateur moderne et réactive.

## Configuration requise

- PHP >= 7.4
- Composer
- Node.js >= 14
- MySQL ou autre SGBD

## Installation

1. Clonez le dépôt : `git clone <URL_DU_DEPOT>`
2. Installez les dépendances PHP : `composer install`
3. Installez les dépendances JavaScript : `npm install`
4. Copiez le fichier `.env.example` en `.env` : `cp .env.example .env`
5. Générez la clé d'application : `php artisan key:generate`
6. Configurez votre base de données dans le fichier `.env`
7. Effectuez les migrations de la base de données : `php artisan migrate`
8. Démarrez le serveur de développement : `php artisan serve`

## Note importante
- Un fichier ".env" est déjà présent sur le projet afin de facilité l'installation, vous pouvez le modifier en fonction de votre configuration avec MySQL et PHP
- Un compte "Test" est créé afin d'accèder au projet (mail: test@test.fr / mot de passe: test)
- Vous avez également un accès GLPI avec les identifiants (test_exam, mot de passe: test)
  
## Utilisation

- Accédez à l'application dans votre navigateur : `http://127.0.0.1:8000`
- Explorez les fonctionnalités de gestion des étudiants et des plaques d'immatriculation.

## Contributeurs

- LE BLAY Alex- Développeur principal


