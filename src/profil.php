<?php
    require_once("class.php");
    require_once("functions.php");

    $offer= $connection->getTableOffer();
    foreach ($offer as $field) {
        if ($field['id']==1){
            $description="Profil de l'offre: ".$field['description'];
            $title=$field['title'] ;
            $id=$field['id'];
            $url="http://www.ynovlyon.com/fr/entreprises/recruter-nos-etudiants/profil?id=".$id;
        }
    }

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
            <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119962245-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-119962245-1');
        </script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    	<meta name="robots" content="noodp"/>
        <link rel="canonical" href=<?php print($url) ?> />
    	<meta property="og:type" content="website">
    	<meta property="og:title" content=<?php print($title) ?>>
    	<meta property="og :description" content=<?php print($description) ?>>
        <meta property="og:url"  content=<?php print($url)?>>
    	<meta property="og:locale" content="fr-FR">
    	<script type="text/javascript" async src=https://www.google-analytics.com/analytics.js></script>
        <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"></script>

        <title><?php print($title) ?></title>
    </head>
    <body>
        Ceci est un profil
    </body>
</html>
