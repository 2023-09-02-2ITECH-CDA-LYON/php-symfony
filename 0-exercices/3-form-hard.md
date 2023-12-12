# Exercice formulaire niveau difficulté difficile

---

## Documentation et ressources

- [PDO connexion à une base de données](https://www.php.net/manual/fr/pdo.connections.php)
- [PDO requête préparée](https://www.php.net/manual/fr/pdo.prepare.php)
- [Configuration de PDO](https://www.php.net/manual/fr/pdo.setattribute.php)
- [Crypter les données](https://www.php.net/manual/fr/function.password-hash)
- [Vérification des hash(données cryptées)](https://www.php.net/manual/fr/function.password-verify.php)
- [Stocker des valeurs dans les sessions](https://www.php.net/manual/fr/reserved.variables.session.php)
- [Toutes les fonctions liées aux sessions](https://www.php.net/manual/fr/ref.session.php)
- [Cookies](https://www.php.net/manual/fr/function.setcookie.php)
- [Tests E2E (end to end) avec Cypress](https://docs.cypress.io/guides/overview/why-cypress#Writing-tests)
- [MVC](../cours/php/mvc/README.md)
- [Sérialiser un objet en JSON](https://www.php.net/manual/fr/function.json-encode.php)
- [desérialiser un JSON en Objet ou tableau](https://www.php.net/manual/fr/function.json-decode.php)

---

## Modalités

- **Récupérez les [sources depuis ce template contenant le HTML/CSS/JS](./ressources/source.zip)**
- Codez en utilisant la programmation orientée objet (POO)

---

## Phase 1

1. Récupérez et vérifiez les données venant du client.

## Spécifications techniques

- En utilisant les [validateurs](https://www.php.net/manual/fr/filter.examples.validation.php) et les [expressions régulières](https://www.php.net/manual/en/function.preg-match.php)
- Ecrivez des tests unitaires pour vérifier la validité des données
- Le nom et prénom doivent avoir au moins 2 lettres, les tirets et les espaces sont acceptés, les chiffres sont interdits
- L'email au format conventionnel exemple contact@tshimini.fr
- Entre 15 et 36 caractères pour le mot de passe et ne contient pas les suites abcdef, qwerty, azerty, 123456
- L'âge compris entre 14 et 130 ans
- Pays et ville au moins 2 caractères, chiffres, lettres tout est autorisé

---

## Phase 2

1. Créez une classe pour gérer une base de données
- création de la base de données
- création de la table ou des tables
2. Stockez les nouveaux utilisateurs dans cette base en cryptant leur mot de passe

### Spécifications techniques

- Pas de test unitaire (une base de données ne peut pas être testé de manière unitaire, on peut le faire avec des mocks mais on fera des tests de niveau supérieur plus tard)
- Utiliser la classe PDO
- Crypter les mots de passe
- Stocker l'ID dans une session
- Stocker quelques infos dans les cookies

---

## Phase 3

1. Une fois l'utilisateur authentifié, créez une session et stockez quelques informations dans les cookies
2. Après l'authentification redirigé l'utilisateur vers la page d'actualité, ce dernier affiche  les actualités d'un ou plusieurs flux RSS ainsi que la météo de la ville de l'utilisateur choisi lors de son inscription


<!-- ---

## Bonus

1. Ecrivez des tests fonctionnels avec [cypress](https://docs.cypress.io/guides/overview/why-cypress#Setting-up-tests) pour les scénarios suivants
- Connexion
- Inscription
- D'actualité -->