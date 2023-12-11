# Exercice formulaire niveau de difficulté très  difficile

1. A partir du template simple à télécharger qui fournit les vues, créez une application MVC séparant les vues, les modèles et les contrôleurs.

###  Spécifications techniques

- Initialisez votre nouveau projet avec  `composer init`
- Vous pouvez vous appuyer et vous inspirer du [template du niveau medium](./ressources/templates/medium.zip) ou de Symfony ou de Laravel (uniquement si vous connaissez déjà ces framework) pour avoir une idée de l'architecture (structure des dossiers)
- Utilisez  la POO et les namespace
- Gérez la création de la base de données et des tables dans un contrôleur dédié à l'administration
- Gérez les autres tâches dans des contrôleurs ordinaires 
  - Stockez, récupérez et affichez les articles des flux RSS depuis une  base de données
  - Stockez, récupérez et affichez la météo depuis une  base de données
  - Stockez, récupérer et afficher les pays et les villes depuis une base de données. L'affichage des pays doit se faire depuis un select dans le formulaire d'inscription, de même pour l'affichage des villes. Un script JS est fourni pour effectuer une requête asynchrone lorsqu'un pays est sélectionné pour récupérer les villes de ce pays. N'oubliez pas de modifier l'URL du fichier PHP à interroger.