# Jamanim

## Projet WEB 

### Mehdi Ezzahi et Jules Dupuis

Nous avons voulu faire un site streaming (on est d'accord c'est illégal mais ici c'est dans le cadre du projet), regroupant des animés.
Nous avons une fonction de recherche, un système de commentaires sous les vidéos.
Vous pouvez aussi vous créer un compte.

Pour cloner ce projet, vous devez installer symfony, composer, nodeJS et yarn, nous vous donnons ici les liens vers les téléchargements:

https://symfony.com/download

https://getcomposer.org/download/

https://nodejs.org/fr/download/

https://classic.yarnpkg.com/en/docs/install/#windows-stable


Vous devez aussi avoir XAMPP, qui va vous permettre d'utiliser le PHP et la base de données comme il se doit.

Clonez le dossier sur ce git, puis lancez un terminal dans ce dossier, faites toutes les commandes suivantes:

```
composer require symfony/swiftmailer-bundle
composer require symfony/webpack-encore-bundle --dev
yarn install
yarn add @symfony/webpack-encore --dev
yarn add sass-loader@^9.0.1 node-sass --dev
npm uninstall node-sass
npm install node-sass@4.14.1
yarn encore dev
```

Vous devez ensuite créer la base de données de notre site, et importer les éléments que nous avons déjà créés.

```
php bin/console make:migration
php bin/console doctrine:migrations:migrate
php bin/console doctrine:fixtures:load
```

Pour finir lancer le serveur symfony grâce à la commande:

```
symfony server:start
```

Suivez cette URL:

```
http://127.0.0.1:8000/
```
