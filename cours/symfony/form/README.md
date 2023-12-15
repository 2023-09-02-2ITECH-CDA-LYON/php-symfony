# Formulaire

---

## Documentation

- [Documentation symfony sur les formulaires](https://symfony.com/doc/current/form/form_customization.html)

## Concepts autour

- Formbuilder
- Entity
- Validator
- Twig
- Contrôleur

---

## Twig affichage du formulaire dans une view

- *form()*  rendra un formulaire en entier ;
- *form_row()*, le champ de formulaire et son label ;
- *form_widget*, seulement le champ ;
- *form_label*, le label uniquement

[Voir le README sur Twig](../twig/README.md)

---

## Validator

- [Documentation sur tous les validateurs](https://symfony.com/doc/current/reference/constraints.html)

### Installation si les bundles ne sont pas déjà installés

- `composer require symfony/validator`
- `composer require doctrine/annotations`

### Mise en place à faire au niveau des entités

Au niveau des entités (src/Entity), il suffit de rajouter au niveau des champs les annotations en fonction de la propriété.
Il faut utiliser use le namespace complet vers la classe Constraints en le renommant avec un alias plus court Assert (c'est une bonne pratique et convention pour ce cas de figure) : `use Symfony\Component\Validator\Constraints as Assert`

Quelques exemples : 

- `#[Assert\Length(min:5, max: 15, minMessage: "Au moins 5 caractères", maxMessage: "Moins de 15 caractères")]`
- `#[Assert\NotBlank(message: "ne peut pas être nulle")]`

Vous pouvez mettre plusieurs annotations sur une propriété, pour chaque règle, vous pouvez rajouter les messages d'erreurs à afficher à l'utilisateur lorsqu'il n'aura pas respecté les exigences des données attendues.

### Mise en place à faire au niveau du contrôleur

#### Dans le cas d'un site web

Ajouter les lignes suivantes pour demander à symfony de faire les vérifications à la soumission du formulaire et à partir des règles (annotations) qu'on a défini au niveau de l'entité

`public function add(Request $request) {
  $hostel = new Hostel();
  $form = $this->createForm(Hostel::class, $hostel);
  $form->handleRequest($request);
  // isValid vérifie que les contraintes dans la classe entity sont valides
  // isSubmitted vérifie si le formulaire a été soumis
  if($form->isSubmitted() && $form->isValid()) {
    // do something here
  }
  return $this->render('hostel/add.html.twig',[
    'form' => $form->createView()
  ]);
}`

#### Dans le cas d'une API

Il faut faire une injection de dépendance du validator dans la méthode et ajouter le code suivant : 

`<?php
  public function action(Request $request, SerializerInterface $serializer, ValidatorInterface $validator) 
  {
    $post = $serializer->deserialize($request->getContent(), Post::class, 'json');
    $errors = $validator->validate($post);
    if ($errors->count() > 0) {
      return new JsonResponse($serializer->serialize($errors, 'json'), JsonResponse::HTTP_BAD_REQUEST, [], true);
    }
  }`