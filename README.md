# OSI

Dans ce fichier vous pourrez trouver comment mettre en place notre projet.   
## Google Analytics

 Afin de mesurer le trafic de notre site, devra être implémenté un suivi par Google Analytics.
 Pour le mesurer, la personne en possession des droits administrateurs devra:
   * Si vous n'avez pas de compte google créez en un puis connectez vous a votre compte google.
   * Aller sur le site de google Analytics
   * Cliquez sur Administration.
   + Cliquez sur le menu de la colonne COMPTE afin de sélectionner le compte auquel vous souhaitez ajouter la propriété.
   + Dans le menu de la colonne PROPRIÉTÉ, cliquez sur Créer une propriété.
   + Si vous ne disposez pas d'une autorisation Modifier sur le compte, l'option Créer une propriété ne s'affiche pas. Assurez-vous d'avoir sélectionné le compte approprié dans la colonne "COMPTE".
   + Sélectionnez Site Web.
   + Indiquez le nom du site Web
   + Saisissez l'URL du site Web, vous ne pouvez pas créer de propriété si le format de l'URL n'est pas correct.
   + Il faut créer une propriété dans Google Analytics. Pour cela il faut se connecter sur Google Analytics. Lors de la création de la propriété il faut faire attention à l'URL de notre site, s'il n'est pas valide la propriété ne pourra pas être créée, ainsi qu'à la génération de l'ID de suivi, un ID = un site.

Pour pouvoir analyser les différentes pages il faut remplacer l'id déjà présent par son propre ID de suivi dans le code se trouvant dans les balises <head> de chaque page comme dans l'image ci-dessous mais vous devez remplacer ce qu'il y a dans les cercles blancs par votre propre ID de suivi.

  **[Id de Suivi](B1_Ing_DelbecqLesueurGontard_Doc/Ressources/scriptGoogleAnalytics.JPG)**

Il faut aussi penser à vérifier si la mise en place du Google Analytics a fonctionné. Pour cela il faut accéder à son site et vérifier si notre visite est enregistrée dans les rapports en temps réel.

## Google Search Console
La Google Search Console va nous servir à obtenir les données, les outils et les diagnostics nécessaires pour gérer notre site Web.
 * Pour commencer, cliquez sur le bouton "Connexion" ci-dessus.
Il va nous permettre de :
 * Analyser les clics depuis la recherche Google.
 * Recevoir des notifications lorsque des problèmes ou des erreurs critiques se produisent.
 * Vérifier si l'interprétation de note contenu par Google est correcte.
Pour pouvoir bénéficier des services de la google Search console, vous devez confirmer que vous êtes bien le propriétaire via le site suivant: [searchConsole](https://www.google.com/webmasters/tools/home) et suivez les étapes .

## Base de donnée
Pour accéder à la base de donnée, sur phpmyadmin créez une nouvelle base de donnée du nom de **osi** et importez le fichier **osi.sql** présent à la racine du projet.

## Fichier de configuration

  Pour pouvoir utiliser le site correctement il faut à partir de wamp créer un virtual host avec pour chemin d'accès le dossier **public**.
  A partir de là, le nom de domaine suivi de **/home** vous emmenera à la page d'accueil, **/list** suivi de **/1**,**2**,**3**,**4** ou **5** vous emmenera à la page de liste des profils selon la formation dans l'ordre de gauche à droite présenté sur la page d'acceuil. **/profil** suivi de **/** puis un numéro vous emmenera sur la page du profil correspondant au numero s'il existe.
  Dans le fichier config.json dans authors vous pouvez créer des admnistateurs modifier le nom des administrateurs dans authors puis name ainsi que le mail de ceux-ci dans authors puis email.
 Pour que l'envoie de mail fonctionne, il vous faut installer SwiftMailer et ParseDown.
 Enfin le **login** et le **mot de passe** de l'adresse mail sont pour l'instant:
   * **Mail** : stageynovB1@gmail.com
   * **Mdp** : stageynov1gesup

  Et le **login** et le **mot de passe** de l'administrateur sont :
   * **Login** : username  
   * **Mdp** : password


   Le filtrage des profils ne marche qui si **au moins une compétence** est sélectionnée.
