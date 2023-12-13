# Arborescence d'un projet sur symfony

- ***bin*** : exécutable pour effectuer certaines tâches
- ***config*** : configurations pour les routes, services, etc.
- ***public*** : racine du site (point d'entrée du site)
- ***src*** : tout le code source du projet (votre travail ici)
- ***src/templates*** : la partie vue avec le moteur de template Twig
- ***tests*** : dossiers dédiés aux tests automatisés (unitaires , intégrations, fonctionnels)
- ***translations*** : dédiés pour la traduction pour un site multilingue
- ***var*** : logs et cache
- ***vendor*** : toutes les dépendances (packages) installés via composer et les dépendances de base nécessaires au bon fonctionnement de Symfony

## Les environnements

### dev

- Environnement de développement et par défaut
- Avec la possibilité de débugger
- Affiche les erreurs
- Les variables d'environnement sont spécifiées dans le fichier *.env.dev*


### prod

- Destiné aux utilisateurs du site
- N’affiche pas les erreurs et les exceptions
- Les variables d'environnement sont spécifiées dans le fichier *.env.prod*


### test

- Dédié aux tests.
- Les variables d'environnement sont spécifiées dans le fichier *.env.test*