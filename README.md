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

Pour pouvoir analyser les différentes pages il faut remplacer l'id déjà présent par son propre ID de suivi dans le code se trouvant dans les balises <head> de chaque page.
 ![Zozor](http://uploads.siteduzero.com/files/420001_421000/420263.png)

Il faut aussi penser à vérifier si la mise en place du Google Analytics a fonctionné. Pour cela il faut accéder à son site et vérifier si notre visite est enregistrée dans les rapports en temps réel.

## Google Search Console
