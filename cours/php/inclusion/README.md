# Cours et documentation

- [require](https://www.php.net/manual/fr/function.require.php) : inclus un fichier et rends toutes les variables PHP disponibles depuis le fichier PHP source (celui qui inclut) dans le fichier importé. Déclenche une erreur fatale lorsque le fichier n'est pas trouvé.
- [require_once](https://www.php.net/manual/fr/function.require-once.php) : similaire à require sauf qu'il déclenche une Fatal Exception si on essaye d'inclure 2 fois le même fichier dans le fichier source.
- [include](https://www.php.net/manual/fr/function.include.php) : idem que require sauf qu'il n'y a pas d'erreur fatale lorsque le fichier n'est pas trouvé, il y a un warning qui ne bloque pas la suite de l'exécution de votre code.
- [include_once](https://www.php.net/manual/fr/function.include-once.php) : si le fichier est déjà inclut, il ne va pas l'inclure une deuxième fois