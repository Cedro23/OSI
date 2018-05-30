<?php
    require_once("class.php");
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

     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="robots" content="noodp"/>
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
     <link rel="stylesheet" href="../public/css/style.css"/>
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
                 </li>
                 <li class="header_ahead_menu_element">
                     <a class="header_ahead_menu_title" href="">BLOG</a>
                 </li>
                 <li class="header_ahead_menu_element">
                     <a class="header_ahead_menu_title" href="">CANDIDATER</a>
                 </li>
                 <li class="header_ahead_menu_element">
                     <a class="header_ahead_menu_title" href="">CONTACT</a>
                 </li>
             </ul>
         </nav>
         <div class="header_ahead_submenu">
         </div>
     </header>

     <!--- Main--------------------------->
     <main class="text_page">
         <section class="margin_section padding_side">
             <h1 class="text_h text_h1"> Recrutez nos étudiants</h1>
             <p> Toute l’année nos étudiants sont à l’écoute d’opportunités.</p>
             <p> Vous pouvez recruter des étudiants de Bachelor en stage temps complet de juin à septembre, et des étudiants de Mastère en alternance (contrat de professionnalisation) tout au long de l’année. </p>
         </section>

         <section class="margin_section padding_side filter">

             <form class="form margin_section padding_side filter" action="index.html" method="post">
                 <h2 class="text_h text_h2"> Filtrer par</h2>
                 <div class=" form_element_fixed">
                     <div class="form_element text_page_left">
                         <h3 class="text_h text_h3">Contrat</h3>
                         <div class="form_element_options">
                             <div class="option">
                                 <input type="checkbox" id="CDI" name="contract" value="coding">
                                 <label for="CDI">CDI</label>
                             </div>
                             <div class="option">
                                 <input type="checkbox" id="Stage" name="contract" value="coding">
                                 <label for="Stage">Stage</label>
                             </div>
                             <div class="option">
                                 <input type="checkbox" id="Alternance" name="contract" value="coding">
                                 <label for="Alternance">Alternance</label>
                             </div>
                             <div class="option">
                                 <input type="checkbox" id="Freelance" name="contract" value="coding">
                                 <label for="Freelance">Freelance</label>
                             </div>
                         </div>
                     </div>
                     <div class="form_element text_page_left">
                         <h3 class="text_h text_h3">Année</h3>
                         <div class="form_element_options">
                             <div class="option">
                                 <input class="option_checkbox" type="checkbox" id="B1" name="contract" value="coding" >
                                 <label for="B1">B1</label>
                             </div>
                             <div class="option">
                                 <input type="checkbox" id="B2" name="contract" value="coding">
                                 <label for="B2">B2</label>
                             </div>
                             <div class="option">
                                 <input class="option_checkbox" type="checkbox" id="B3" name="contract" value="coding" >
                                 <label for="B3">B3</label>
                             </div>
                             <div class="option">
                                 <input class="option_checkbox" type="checkbox" id="M1" name="contract" value="coding" >
                                 <label for="M1">M1</label>
                             </div>
                             <div class="option">
                                 <input class="option_checkbox" type="checkbox" id="M2" name="contract" value="coding" >
                                 <label for="M2">M2</label>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="form_element text_page_left">
                     <h3 class="text_h text_h3">Compétences</h3>
                     <div class="form_element_options">
                         <div class="option">
                             <input type="checkbox" id="CSS" name="skill" value="coding">
                             <label for="CSS">CSS</label>
                         </div>
                         <div class="option">
                             <input type="checkbox" id="HTML" name="skill" value="coding">
                             <label for="HTML">HTML</label>
                         </div>
                     </div>
                 </div>
                 <div class="form_element">
                     <button type="submit" class="btn btn_submit">Rechercher</button>
                 </div>
             </form>
         </section>

         <section class="margin_section padding_side results text_page_left">
             <ul class="results_list">
                <?php foreach ($offer as $item): ?>
                    <li class="result">
                        <h3 class="text_h text_h3 text_h_grey result_element result_title"><?php print($item[1]) ?></h3>
                        <p class="result_element"><?php print($contract[$item[2]-1][0]) ?></p>
                        <?php $offerSkill = $connection->getTableOfferSkill($item[0]); ?>
                        <p class="result_element"><?php for ($i=0; $i < sizeof($offerSkill); $i++) {
                                                                 print($skill[$offerSkill[$i][0]-1][0]);
                                                                 if ($i != sizeof($offerSkill)-1) {
                                                                     printf('//');
                                                                 }
                                                             }?></p>
                        <a href="profil/<?php print($item[0]) ?>" class=" result_element btn btn_blue text_btn"> button </a>
                    </li>
                <?php endforeach; ?>
             </ul>
         </section>

     </main>

 </body>
 </html>
