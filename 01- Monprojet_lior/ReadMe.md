# tuto
https://www.youtube.com/watch?v=0B2HVZoQl00&list=PLjA66rpnHbWnKQYwhiEH43IX-Ay8TgfXa

# Installation
composer create-project symfony/skeleton nomprojet "4.4.*"


# Entrer
cd symfonyapp
git init

# pour installer symfony cli
  1.powershell
  2.Set-ExecutionPolicy RemoteSigned -scope CurrentUser
  3.iex (new-object net.webclient).downloadstring('https://get.scoop.sh')
  4.scoop install symfony-cli

# Autre commande d'installation :
symfony new monblog --version=4.4 --full

# Démarrer le serveur
composer require server -dev
php bin/console server:run
ou
Une fois l'installation terminée: php bin/console server:run
Pour Symfony 4.4 et 5 : La commande est symfony serve

# Modele MVC
model avec doctrine, vue avec twig et les controllers
  -Pour installer un controller : php bin/console make:controller
     Premiere lettre en Maj puis camelCase
  -Dans twig, on peut interpoller: des variables : {{title}}
                                   des commandes: {% cmd %}
  Si on veut que quelque chose soit dupliquer dans toutes nos pages, il faut le mettre dans le ficher base.html.twig, puis il faut inclure {% extends 'base.html.twig' %} dans les pages qui doivent hériter de la base et également notre code doit être présent entre les {% block body %} et {% endblock %} par exemple
  * Pour mettre un lien interne dans un fichier twig, {{ path('lien du la fonction dans le controller') }}
  theme bootstrap : https://bootswatch.com/flatly/
  -Pour la base de donnée, symfony utilise l'orm Doctrine, divisé en trois:
      * Entity qui représente la table
      * Manager qui permet de manipuler une ligne: insertion, mise à jour, suppression
      * Repository qui permet de faire des selections

  Premiere chose a faire: modifier le fichier .env en indiquant ou se trouve la bdd
      ex: DATABASE_URL="mysql://root:@127.0.0.1:3306/blogsymflior"
  Ensuite pour créer la bdd: php bin/console doctrine:database:create
  Ensuite pour créer une table: php bin/console make:entity
  Enfin il faut la migrer dans la base: php bin/console make:migration
  et la lancer: php bin/console doctrine:migration:migrate

  Pour créer un jeu de fausse donnée, fixture: composer require orm-fixtures --dev