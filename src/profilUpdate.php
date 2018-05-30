<?php
    require_once("functions.php");

    $url =  "//{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
?>
<!doctype html>
<html lang="en">
<head>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-119962245-1');
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="">

    <link rel="canonical" href=<?php print($url) ?> />
    <meta property="og:type" content="website">
    <meta property="og:title" content="Listes des offres de Stage/CDI/Alternance par type de formation ">
    <meta property="og :description" content="Liste des offres avec possibilité de filtrage par type de contrat(Stage,CDI,Alternance, Contrat professionnel) par année(B1,B2, B3, M1, M2) et par compétence selon la formation de l'étudiant. Recrutez le profil d'étudiant que vous cherchez">
    <meta property="og:url"  content=<?php print($url)?>>
    <meta property="og:locale" content="fr-FR">
    <script type="text/javascript" async src=https://www.google-analytics.com/analytics.js></script>
    <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"></script>

    <title>Liste des offres</title>

    <!-- CSS -->
    <link rel="stylesheet" href="../css/style.css"/>
</head>


<body>
    <!--- Header --------------------------->
    <header class="header text_headfoot">
        <nav class="header_ahead">
            <picture class="header_ahead_element header_ahead_logo">
                <img class="header_ahead_logo_img" src="../img/logo_ynov_campus_rvb_blanc.png" alt="Logo Ynov">
            </picture>
            <ul class="header_ahead_element text_header_title header_ahead_menu">
                 <li class="header_ahead_menu_element">
                     <a class="header_ahead_menu_title" href="">YNOV LYON</a>
                 </li>
                 <li class="header_ahead_menu_element">
                     <a class="header_ahead_menu_title" href="">FORMATIONS</a>
                 </li>
                 <li class="header_ahead_menu_element">
                     <a class="header_ahead_menu_title" href="">ENTREPRISES</a>
                     <hr class="header_ahead_element_select"></hr>
                 </li>
                 <li class="header_ahead_menu_element">
                     <a class="header_ahead_menu_title" href="">BLOG</a>
                 </li>
                 <li class="header_ahead_menu_element">
                     <a class="header_ahead_menu_title btn btn_blue btn_header" href="">CANDIDATER</a>
                 </li>
                 <li class="header_ahead_menu_element">
                     <a class="header_ahead_menu_title" href="">CONTACT</a>
                 </li>
             </ul>
         </nav>
         <div class="header_ahead_submenu">
         </div>
    </header>

    <main>
        
    </main>
 </body>
</html>
