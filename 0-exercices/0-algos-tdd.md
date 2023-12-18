# Exercice en autonomie en adoptant une approche pilotée par les tests

---

## Documentations et ressources

- [PHPUnit](https://docs.phpunit.de/en/10.5/writing-tests-for-phpunit.html)
- [Namespace](https://www.php.net/manual/en/language.namespaces.php)
- [Autoloading](https://coopernet.fr/formation/php/autoload)
- [Typages en PHP](https://tainix.fr/article-technique/Bonnes-pratiques-PHP-2-typage-protection-et-comparaison-stricte)
- [Simuler un disque pour manipuler des fichiers durant les tests](https://github.com/bovigo/vfsStream/wiki)

---

## Modalités

- Adoptez une approche pilotée par les tests avec le TDD.
- Utilisez la Programmation orientée objet (POO) en écrivant des classes, vous pouvez regrouper les fonctions à écrire dans les classes qui ont la même nature (exemple une classe lié aux opérations mathématiques, une classe pour les traitements sur les chaînes de caractère, etc.)
- Versionnez son code avec *Git*
- Utilisez plusieurs branches (ne pas travailler directement sur la main ou master)
- Faites un ou plusieurs commits (utilisez des tags si nécessaire pour avoir des numéros de version)

---

## Exercice 1

1. Déterminer à partir de l'âge si une personne est :
- Enfant (en dessous ou égale à 10 ans)
- Adolescent (entre 11 et 17 ans)
- Majeur (au-dessus de 18 ans)
- Senior (au-dessus de 50 ans)

---

## Exercice 2

1. Calculez la moyenne de plusieurs notes

### Spécifications techniques

- Une fonction qui prend en paramètre un tableau
- Votre fonction doit être testée à l'aide de PHPUnit
- Le tableau peut être un tableau numérique (indice numérique) ou associative (indice en string), dans l'un ou l'autre cas la fonction doit renvoyer un résultat correct

---

## Exercice 3

1. Calculez le prix TTC d'un produit

### Spécifications techniques

- Prix hors taxes et taux de la tva en entrée
- La fonction retourne le prix TTC

---

## Exercice 4

Affichez en fonction d'une heure, le moment de la journée s'il s'agit :
- Du matin (entre 6 et 12)
- De l'après-midi entre 12h et 18h
- De la soirée entre 18h et 00h
- La nuit entre 00h et 6

---

## Exercice 5

En utilisant la boucle while, retourner sous forme de tableau numérique tous les codes postaux possibles à partir d'un département comme par exemple le 69.

---

## Exercice 6

En utilisant la boucle for, afficher la table de multiplication du chiffre 5.

---

## Exercice 7

Vérifiez qu'une adresse email est au bon format.

---

## Exercice 8

Créez une fonction qui prend en entrée une ressource (fichier) et qui retourne son contenu.

---

## Exercice 9

Créez une fonction qui lit un csv et retourne le résultat sous forme de tableau (array)

---

## Exercice 10

Écrire un script qui produit le résultat ci-dessous à partir d'un nombre qu'on prend en entré. Par exemple ici 5 et qui produit ce résultat 122333444455555

---

## Exercice 11

Une fonction qui prend 2 paramètres en entrée et en sortie, il permute les deux nombres.

### Spécification technique

- Votre fonction retourne sous forme de tableau les deux nombres dans l'ordre qu'ils ont été saisis

#### Exemple

`myFn ($nb1, $nb2) {`

`// your code here`

`return [$nb1, $nb2];`

`}`

`myFn(2, 3) // [3,2]`

---

## Exercice 12

Créer une fonction qui permet de réaliser la suite de Fibonacci : 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, etc.

### Spécifications techniques

- Retournez les valeurs précédentes sous la forme d'un tableau numérique

---

## Exercice 13

A partir d'un tableau associatif, lorsqu'un utilisateur saisit la valeur de l'indice, vous devez récupérer la valeur associée à cette clé

### Exemple

`<?php
  $personnes = array('major' => true, 'age' => 36, 'name' => 'fatou');
  $vFatou = myFn("age"); // 36
  $vNull = myFn('address'); // null
  $numbers = [10,50,9,56,87];
  $vNum = myFn(50);//1`

---

## Exercice 14

A partir d'un tableau associatif, lorsqu'un utilisateur saisit la valeur, vous devez récupérer la valeur de l'indice associé à cette valeur

### Exemple

`<?php
  $personnes = array('major' => true, 'age' => 36, 'name' => fatou);
  $kFatou = myFunction(36); // age
  $vNull = myFunction('address'); // null
`

---

## Exercice 15

En utilisant le tableau ci-dessous, compter le nombre d'éléments du tableau et donnez le nombre total des habitants.

`<?php
  $pays_population = array('France' => 67595000, 'Suede' => 9998000, 'Suisse' => 8417000, 'Kosovo' => 1820631, 'Malte' => 434403, 'Mexique' => 122273500, 'Allemagne' => 82800000);
`

---

## Exercice 16

En utilisant la fonction rand(), remplir un tableau avec 10 nombres aléatoires compris entre 0 et 100. Puis, tester si le chiffre donné en paramètre est présent dans le tableau en retournant true ou false.

---

## Exercice 17

En utilisant la fonction rand(), remplir un tableau avec 10 nombres aléatoires compris entre 0 et 100. Répartir ensuite les valeurs dans deux tableaux distincts. Le premier contiendra les valeurs inférieures à 50 et le second contiendra les valeurs supérieures ou égales à 50.

---

## Exercice 18

Créez une fonction qui prend en paramètre un tableau de string et retourne le mot le plus petit.

---

## Exercice 19

Reprendre l'exercice sur les tableaux,
Lorsqu'une clé ou une valeur n'existe pas, déclenchez une exception

---

## Exercice 20

Une fonction fonctionne qui divise 2 nombres,
Lorsque le deuxième nombre est égale à 0, déclencher une exception.
