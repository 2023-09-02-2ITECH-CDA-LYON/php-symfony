# Twig

- [Documentation](https://twig.symfony.com/doc/3.x/)

Moteur de gabarit(template), composant qui permet de générer la partie *Vue*. Son concurrent est [smarty](https://smarty-php.github.io/smarty/4.x/)


## Syntaxe

- {# ceci est un commentaire et non exécuté par twig #}
- {{ variable }} : affichage de la valeur d'une variable passé via le contrôleur
- {% ... %} : pour les instructions pour les structures if, for et les déclarations de variable en twig avec set

## Fonctions pour les formulaires

- *form_start* = la balise <form>
- *form_row* : affichage d'un champ avec le label et messages d'erreurs compris
- *form_widget* : <input>
- *form_label* :  <label>
- *form_errors* : les erreurs
- *form_rest* :  rends tous les champs non encore rendus
* *form_end* : balise fermante du formulaire </form>

## Liens vers les routes

`{{ path('name_of_root')}}` pour les liens vers les pages internes

<!-- - filtres
- fonctions
- extensions
- interpolation
- Concurrent smarty
- webpack encore -->