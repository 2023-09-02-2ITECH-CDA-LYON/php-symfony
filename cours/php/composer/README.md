# Explications

Composer est le gestionnaire de paquets pour PHP. C'est l'équivalent de npm ou yarn pour JavaScript.

---

## Commandes

### Initialiser un projet

- `composer init` à faire à la racine de votre projet. Il faut ensuite se laisser guider et répondre aux questions posées.
A la fin de cette commande, 2 fichiers seront générés composer.json (contenant les informations, scripts, dépendances, etc) et composer.lock (contenant les dépendances de vos dépendances). Un dossier vendor est également crée dans le cas ou ous auriez répondu "yes" pour installer vos dépendances immédiatement.


### Régénérer le fichier vendor/autoload.php suite à la modification de la partie "autoload" ou "autoload-dev" dans le composer.json

`composer dump-autoload`