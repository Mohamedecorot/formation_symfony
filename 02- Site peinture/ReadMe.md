#Test

1- Tests unitaires

php bin/phpunit --testdox

#Creer un test
symfony console make:unit-test

#couverture de test

installer php xdebug

puis ajouter en bas du fichier php.ini :
zend_extension = xdebug
xdebug.mode=develop,debug,coverage

Commande:
php bin/phpunit --coverage-html var/log/test/test-coverage

2- Tests fonctionnels

Créer une bdd de test :
symfony console doctrine:database:create --env=test [APP_ENV=test symfony console doctrine:database:create]
symfony console doctrine:migrations:migrate -n --env=test

symfony composer req orm-fixtures --dev [symfony console doctrine:fixture:load --env=test]

Pour creer des tests fonctionnels: symfony console make:functional-test

Pour jouer les tests: symfony php bin/phpunit --coverage-html var/log/test/test-coverage  --env=test

Pour ignorer une class dans les test fonctionnels :
/**
 * @codeCoverageIgnore
 */