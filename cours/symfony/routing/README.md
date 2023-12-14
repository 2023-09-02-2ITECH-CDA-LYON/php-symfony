# Routing

- `php bin/console debug:router`: voir toutes les routes de votre application
- [Documentation](http://igm.univ-mlv.fr/~dr/XPOSE2014/Symfony/architecture.png)
Il y a plusieurs façons de définir les routes
- Via les annotations (un commentaire avec le mot-clé route) directement au niveau des méthodes du contrôleur
- Via config/routes.yaml
- Via du code XML
- Via du code PHP

Je vous recommande de le faire soit directement au niveau des méthodes donc en utilisant la méthode des annotations ou soit via le fichier config/routes.yaml

- Source image [http://igm.univ-mlv.fr/~dr/XPOSE2014/Symfony/structure.html](http://igm.univ-mlv.fr/~dr/XPOSE2014/Symfony/structure.html)

![routing](http://igm.univ-mlv.fr/~dr/XPOSE2014/Symfony/architecture.png)
