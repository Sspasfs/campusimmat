CampusImmat
CampusImmat est une application web pour gérer les informations des élèves et des plaques d'immatriculation dans un établissement scolaire.

Fonctionnalités
Gestion des élèves : Ajouter, afficher, modifier et supprimer des élèves.
Gestion des plaques d'immatriculation : Ajouter, afficher, modifier et supprimer des plaques d'immatriculation associées aux élèves.
Authentification : Les utilisateurs peuvent s'inscrire, se connecter et gérer leur profil.
Technologies utilisées
Laravel : Framework PHP pour le développement web.
Jetstream : Kit de démarrage pour l'authentification et la gestion des équipes.
Livewire : Bibliothèque pour créer des composants interactifs en PHP.
Tailwind CSS : Framework CSS pour la conception d'interfaces utilisateur.
Installation
Cloner le dépôt GitHub :
bash
Copy code
git clone https://github.com/votre-utilisateur/campusimmat.git
Installer les dépendances PHP :
bash
Copy code
composer install
Copier le fichier .env.example et le renommer en .env :
bash
Copy code
cp .env.example .env
Générer une clé d'application :
bash
Copy code
php artisan key:generate
Configurer la base de données dans le fichier .env.

Exécuter les migrations pour créer les tables de la base de données :

bash
Copy code
php artisan migrate
Démarrer le serveur de développement :
bash
Copy code
php artisan serve
