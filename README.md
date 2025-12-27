TP 3 – Les formulaires en Symfony

Auteur:
Berrada Moetaz – 4ème année Génie Informatique – Groupe D – EHEI 2025/2026

Objectif du TP

Le but de ce TP était de créer un formulaire Symfony fonctionnel pour un produit (cas d’usage : “Premium Wireless Headphones”) en respectant l’énoncé fourni. L’objectif était de transformer un code HTML Bootstrap classique en un formulaire Symfony avec FormType, Twig et le composant Form.

Contenu du projet

src/Controller/FormController.php : Controller principal qui gère l’affichage du formulaire et le traitement des données après soumission.

src/Form/ProductType.php : FormType qui définit les champs du formulaire (quantité, couleur) et le bouton de validation.

templates/form/index.html.twig : Page du formulaire, basée sur le design Bootstrap de l’énoncé.

templates/form/success.html.twig : Page affichée après soumission réussie, qui montre les données envoyées.

config/routes.yaml : Configuration des routes pour activer le routing via les attributs #[Route].

Étapes réalisées

Copier le code HTML de la page produit fourni dans l’énoncé.

Créer un FormType Symfony pour gérer les champs du formulaire.

Personnaliser les widgets du formulaire pour qu’ils ressemblent au design Bootstrap (taille, couleurs, classes CSS).

Créer le controller pour gérer l’affichage du formulaire et la récupération des données.

Créer les templates Twig correspondants (index.html.twig et success.html.twig).

Configurer les routes Symfony pour que /form ouvre correctement le formulaire.

Tester dans l’environnement Docker Symfony (symfony-docker) pour vérifier le bon fonctionnement.