# test_dev_laravel_vue

## Installation

Cloner le projet et se déplacer à l'intérieur :

```sh
> git clone git@github.com:AnaelBonnafous/test_dev_web_laravel_vue.git
> cd test_dev_web_laravel_vue
```

Installer les dépendances et compiler les assets :

```sh
> composer install
> npm install
> npm run build
```

Créer une base de données `test_dev_web_laravel_vue` et ajuster les informations de connexion dans le fichier `.env` selon l'environnement :

```
DB_DATABASE=test_dev_web_laravel_vue
DB_USERNAME=root
DB_PASSWORD=
```

Lancer les migrations et ajouter des données de test :

```sh
> php artisan migrate --seed
```

## Informations

Aller sur [http://localhost](http://localhost) pour voir la page d'accueil.

Aller sur [http://localhost/dashboard](http://localhost/dashboard) pour accéder au back-office.

> Identifiants de connexion : admin@example.com/password

## Développement

Le projet est une application Laravel 10 initialisée avec le starter-kit Breeze pour l'authentification au back-office et la stack Inertia.js pour rapidement développer avec Vue.js et avoir TaildwindCSS préinstallé.

Documentation Breeze : [https://laravel.com/docs/10.x/starter-kits#laravel-breeze](https://laravel.com/docs/10.x/starter-kits#laravel-breeze)
Documentation Inertia.js : [https://inertiajs.com/](https://inertiajs.com/)
