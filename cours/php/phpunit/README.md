# Explication

Package dédié aux tests, plus précisément les tests unitaires

## Installation

`composer install phpunit/phpunit`

## Lancer les tests depuis un terminal

Dans le fichier composer.json, ajouter dans la partie "scripts", un script avec un nom, communément *unit* ou *test* qu'on pourra lancer directement en mettant `composer run nomDuScript`.
Cette commande doit lancer `phpunit tests`. tests ici est le nom du dossier qui contient les tests.

`
"scripts": {
    "unit":"phpunit tests"
}
`

---

## Conventions de nommage

- Les classes pour les tests doivent avoir le suffixe Test et en PascalCase. Exemple, PersonTest pour le nom de la classe et PersonTest.php pour le nom du fichier.

- Les méthodes pour les tests doivent avoir le préfixe test et en camelCase.

` public function testAverage()`

---

## Stratégie

- KISS

Ensuite, il faut essayer dans la mesure du possible de couvrir dans cet ordre les scénarios suivants : 
- principal
- critique
- d'erreur
