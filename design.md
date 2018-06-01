
# Ergonomie
### Charte graphique

**Typographie**

H1 : MontSerratBold, serif
H2 : MontSerratBold, serif
Paragraphe p : MontSerratLight, Serif
Bouton : MontSerratBold, Serif


**Taille**
Font size : 1.6em

 * H1 :3.6 rem (36px)
 * H2 :3.0 rem (30 px), 2.0 rem(20 px)
 * Paragraphe p : 1.8 rem (18px)
 * Bouton: 1.2 rem (12px)
 * Titre entete : 1.8 rem (18px)
 * Titre footer / sous titre entête : 2.5rem 22px ;

**Colorimétrie**
 * #e94e6d, rgb(35, 178, 165): h1, h2, bouton
 * #23b2a4, rgb(73,0, 43): bouton, fond filtre, ajout offre
 * #000000 : Fond navbar lors du scroll, couleur typo sur fond clair, info form
 * #ffffff : Fond page, couleur typo sur fond foncé/coloré, fond sur image
 * #363636, rgb(54, 54, 54): fond footer, strong
 * #ededed, rgb(237, 237, 237): label form ou placeholder

## Général:
 Possibilité de naviguer en tab index : Pratique pour l’utilisateur et pour également pour les personnes atteintes d’un handicap

## Page Home
Page qui s’insert bien dans la rubrique Recruter nos Etudiants déjà existante sur le site d’**ynovlyon**.
Premier filtrage par **formation**-> Lorsque notre souris est sur la formation de l’étudiant, on peut voir le titre des offres avec une grosse icone **+** qui donne envie à l’utilisateur de cliquer cela le conduira à la page list avec toutes les offres de contrat concernant la formation concernée
**[WireFrame Page Home](WireFrameHome.png)**
## Page list
Dans la barre de navigation en gros il y a un bouton login pour se connecter en tant qu’**administrateur**. Nous l’avons mis dans la barre de navigation car c’est la première chose qu’on voit et qui attire le regard quand on arrive sur une page : Permet à l’administrateur de ne pas avoir a chercher et de descendre dans la page pour pouvoir se connecter.
**Titre : Recrutez-nos étudiant- titre de la formation** pour que l’utilisateur sache à tout instant la formation concernée par la liste d’offre
La page list correspond à la **liste des offres pour la formation déjà filtrée auparavant**. On peut y voir le **titre de la formation cliquable** qui redirige vers la **page d’offre** ainsi que le **type de contrat** et l’ensemble des **compétences requises** à maitriser pour obtenir le contrat. A droite de l’offre il y a une grosse icone **+** qui appelle à cliquer et qui comme le titre redirigera vers la **page de l’offre** en question.
Il y a un certain espace entre chaque offre et les champs de chaque offre pour améliorer la visibilité du site.
Le titre de l’offre est plus gros et d’une **autre couleur** pour d’une part attirer le regard de l’utilisateur et lui suggérer l’idée que le titre est différent et qu’il peut rediriger vers la page des offres

Possibilité de **filtrer les offres** avec (en mode utilisateur) un gros bouton filtrer qui appelle également à cliquer. A partir d’ici il sera possible de filtrer par **mot clé** par **niveau** (B1, B2,B3,M1et M2), par **contrat** , par **période** et par **technologie**.
En effet en général un recruteur sait exactement le type de profil qu’il recherche et c’est pour rendre sa recherche plus **agréable** et **rapide** que nous avons instauré ce système.

**[WireFrame Page List](WireFrameListeDesProfils.png)**
## Page profil

Sur la page **profil** en tout premier lieu nous avons décider de mettre un titre bien voyant et centré pour qu’il n’échappe pas au regard de l’utilisateur mais aussi de la personne en charge de l’**administration** qui aura accès a la page de l’offre depuis le **mail** qu’elle aura reçu si le recruteur rempli le formulaire si joint a la page. La personne en charge de l’administration aura tout de suite le contexte de l’offre
En seconde position vient la description écrit en gros ce qui permet aux personne malvoyante de pouvoir la lire assez clairement et avec un espace suffisant entre les lignes pour permettre à l’utilisateur de ne pas se perdre dans sa lecture d’une ligne à l’autre.
En bas de la page et en plus petit sera écrit la liste des compétences requises pour cette offre séparé par deux slashs d’une couleur différente du texte pour une question de lisibilité.

**[WireFrame Page Profil](WireFrameProfils.png)**
## En mode Administrateur    

Sur la page list, il y a beaucoup d’offre de présente et l’administrateur sait l’offre qu’il cherche et n’a pas besoin de parcourir toute la liste. C’est pour faciliter sa recherche qu’il pourra,comme l’utilisateur, accéder l’onglet filtrer.
Différemment de la page list d’un utilisateur, dans la liste d’offre, pour chacune d’entre elles, à côté du bouton pour accéder à la page de l’offre,sera présent deux icones une pour **modifier l’offre** et accéder à la page de modification d’offre et l’autre pour supprimer l’offre sans être obligé d’aller voir le détail de l’offre ou d’être obligé de saisir le titre de l’offre à supprimer ou modifier. C’est dans un souçis de **praticité** et de **faciliter** la navigation de l’administrateur que nous avons procédé de cette manière
Sur la page de l’offre sera également présent l’icône de modification explicite en gros en dessous du titre pour qu’on ne puisse pas émettre de doute sur comment accéder à la page de modification de l’offre.
**Page log-in**
**Formulaire de connection** avec le **login** et le **mot de passe** **obligatoire**.  
### Page de modification de profil :
  * Formulaire pré-rempli avec le titre/ la description en markdown pour permettre à l’administrateur de mettre des titres ou des listes à   puces par exemple pour plus de lisibilité.
  * Gros bouton très visible d’envoie du formulaire.
  * Pas d’envoi du formulaire tant que tous les champs obligatoires renseignés par une petite étoile ne sont pas rempli et à côté de chaque champs non conforme sera présent un warning pour dire que ce champs n’a pas été rempli ou pas correctement
  * Enfin si un champs n’a pas été rempli et qu’il a appuyer sur le bouton pour envoyer le formulaire, les données dans les champs sont conservés pour lui éviter de tout réecrire.
  
 # Référencement

## Liste des méta-données qui permettent un meilleur référencement
   * meta charset="utf-8"
   * meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
   * meta name="description" content=""
   * **link rel="canonical" href=url** && meta property="**og:url**" content="": **Réecriture d'url** sur chaque page pour un meilleur référencement.
   * **meta property="og:type" content="website"**: type de la page
   * **meta property="og:title" content="">** :Pour l'offre c'est le titre de l'offre donc dynamique et permet un meilleur référencement puisqu'il est réécris dans la balise **<title>**  et présent également dans les balises **h1** de la page.Regroupe les mots clé des pages.
   * **meta property="og:description" content=""**: Pour l'offre c'est la descriptiption de l'offre donc **dynamique** et  **différent** pour chaque offre
   * **meta property="og:locale" content="fr-FR"**
   * <script type="text/javascript" async src=https://www.google-analytics.com/analytics.js></script>: Sert a google analytics donc la mesure du trafic
   * <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"></script>
   * **meta name="robots" content="noindex"/> && <meta name="robots" content="nofollow"**: Uniquement sur les pages qu'on ne veux pas indexer pour indiquer au robot qu'il **ne faut pas** les indexer
                                                       
 ## Mots Clés
 ### Page list(filtre)
  * Développement web/ logiciel/ mobile
  * Réseaux
  * Cybersécurité
  * Expert Big Data
  * Java
  * C#
  * PHP
  * SQL
  *Symphony
 ### Moteur de Recherche
  * Offre stage informatique/ art/ graphic design/ Web et communication/business 
  * Stagiaire/ Alternant master 2 spécialisé développement logiciel Lyon
  * Trouver stagiaire/Alternant domaine du business Lyon
  * Recherche étudiant Stage/Alternance
  * Recruter étudiant Stage/Alternance
  * Liste des offres de stage/alternance art Lyon
Recherche de contrat Professionnel
  * Recruter étudiant Ynov
  * Stage étudiant informatique
  * Contrat pro bachelor
  * Contrat pro étudiant Master
  * Contrat pro étudiant Master
  * Stage étudiant Art
  * Stage Informatique
  * Stage/contrat/alternance étudiant commerce
  * Stage/contrat/alternance étudiant audioVisuel
  * Stage étudiant business school
  * Stage étudiant Animation3D
  * Stage étudiant Jeu vidéo

