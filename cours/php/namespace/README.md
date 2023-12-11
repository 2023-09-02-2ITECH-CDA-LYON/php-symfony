# Cours et documentation

- [Explication autoload](https://coopernet.fr/formation/php/autoload)

Un espace de nom permet de créer des classes dans des espaces qui sont réservés, ce qui permet de pouvoir facilement partager et utiliser des classes qui portent les mêmes noms mais qui ne seront pas dans les mêmes namespace donc ça ne pose aucun problème.

## Modification namespace dans composer.json

A faire à chaque fois que vous allez modifier vos espaces de noms dans le composer.json `composer dump-autoload` pour régénérer les fichiers.
Il faudra ensuite penser à importer le fichier `vendor/autoload.php` pour pouvoir utiliser les classes dans les fichiers "clients"(fichiers qui créent des instances et qui exécutent votre code).