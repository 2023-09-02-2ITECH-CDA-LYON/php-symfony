
# Authentification

## Concepts autour

- Les rôles, par défaut *ROLE_ADMIN* et *ROLE_USER*
- Par défaut, tous les utilisateurs sont authentifiés en tant qu'anonyme
- *config/packages/security.yaml* pour gérer
- Firewall (pare-feu qui gère l'accès aux routes)
- Providers (fournisseurs des utilisateurs (fichier, base de données))
- Classe ***AuthentificationUtils***

## Gestion avec le bundle security

### Installation si le bundle n'est pas inclut par défaut (regardez le composer.json pour le voir ou non au niveau de "require")

- `composer require symfony/security-bundle`

### Création d'une entité User

Il faut créer une entité User et modifier le fichier ***config/packages/security.yaml*** pour dire à symfony comment on souhaite stocker les utilisateurs, sur quel support (fichier, base de données, etc) et mettre en place des firewalls et vérifications des rôles sur des chemins d'URL spécifique.

- `php bin/console make:user` : commande spécifique pour les utilisateurs, gérer plus facilement les rôles. Se laisser guider ensuite en répondant aux questions de symfony. Communément, on laisse le nom de la classe à User.
Une classe est créée dans src/Entity/User est créée.

Pour rajouter vos propriétés supplémentaires, il vous suffit de faire comme d'habitude `php bin/console make:entity User`puis `php bin/console make:migrations` enfin `php bin/console doctrine:migrations:migrate`

Vous pouvez gérer plusieurs rôles, mais généralement, on a un rôle ADMIN et un rôle USER, vous pouvez en avoir d'autres.

Vous pouvez également rajouter des champs à l'aide de `php bin/console make:entity`, taper User, rajouter les champs et se laisser guider par symfony pour la suite.

Une fois, tout est bon, vous pouvez créer vos fixtures pour commencer à travailler, cf la [création des fixtures](../doctrine/README.md).
Pour hasher les mots de passe de vos fixtures, utiliser la classe `Symfony\Component\PasswordHasher\Haser\UserPasswordHasherInterface` à injecter au niveau du constructeur de la classe `AppFixtures`.

---

## Au niveau de Twig

- Vérification qu'un utilisateur est authentifié : `{% if(is_granted('IS_AUTHENTICATED_FULLY') %}`

---

## Au niveau du contrôleur

- Vérification qu'un utilisateur a les droits d'accès et d'effectuer certaines actions : annotations `@isGranted("ROLE_ADMIN")` dans les commentaires de classe (globale donc s'applique à toutes les méthodes de la classe) du contrôleur ou d'une méthode (uniquement sur la méthode ou se trouve l'annotation)
