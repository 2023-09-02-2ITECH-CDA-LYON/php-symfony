# Cours et documentation

Architecture pour séparer les responsabilités au sein de son application entre le contrôleur, la vue et le modèle

![mvc](https://adventy.org/architecture-mvc.jpg)

---

## Responsabiltés du contrôleur

- Communique avec la vue et le modèle
- Traiter une requête HTTP cliente
- Faire appel aux modèles pour récupérer des données stockées dans un support de stockage des données (Base de données, fichiers par exemple)
- Envoyer les données à la vue pour construire la page finale
- Rétourner une réponse au client
- Gère la logique de la programmation avec les traitements (calculs) à faire.

---

## Responsabilités du modèle

- Ne communique jamais avec la vue
- Récupérer les données et les retourner au contrôleur
- Gère la logique métier

---

## Responsabilités de la vue

- Ne communique jamais avec le modèle
- Récupérer les données transférées par le contrôleur et réaliser le rendu final puis le renvoyer au contrôleur
- Préparer l'affichage avec les données reçues par le contrôleur
- Code HTML, quelques codes en PHP pour l'affichage (echo des variables) en utilisant des boucles et des conditions très simples.

---

## contrôleur frontal

- Le contrôleur frontal (appelée aussi Dispatcher) joue le rôle de routeur, sa responsabilité est d'analyser la requête URL et la méthode HTTP pour rédiriger la requête vers le bon contrôleur.