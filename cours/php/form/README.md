# Cours et documentation

## Côté client

- Dans le formulaire dans la balise form, les attributs
 - method qui prend la valeur `GET` ou `POST` permet de spécifier la méthode du protocole HTPP à utiliser pour envoyer les données du formulaire au serveur
 - `action` prend le chemin complet ou le nom du fichier de destination des données au serveur

## Côté serveur

- Pour récupérer les données envoyés par la méthode GET, il faut utiliser la superglobale ***$_GET***, un tableau associatif contenant une clé (valeur de l'attribut name côté serveur) et la valeur saisi ou sélectionné par l'utilisateur
- superglobale ***$_POST*** pour les données envoyées avec la méthode post, idem un tableau associatif
- superglobale ***$_REQUEST*** récupère les données envoyées dans la requête (peu importe la méthode GET ou POST)