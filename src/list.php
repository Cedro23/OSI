<?php
    require_once("class.php");
    require_once("functions.php");
 ?>
<<<<<<< HEAD
 <!doctype html>
 <html lang="en">
 <head>
     <!--Meta -- >
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta name="description" content="">
     <meta name="author" content="">

     <title>Portfolio</title>

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
             <h1 class="text_h text_h1"> Chercher le bon profil</h1>
             <p> Toute l’année nos étudiants sont à l’écoute d’opportunités.</p>
             <p> Vous pouvez recruter des étudiants de Bachelor en stage temps complet de juin à septembre, et des étudiants de Mastère en alternance (contrat de professionnalisation) tout au long de l’année. </p>
         </section>

         <section class="margin_section padding_side filter">
             <h2 class="text_h text_h2"> Filtrer les resultats</h2>
             <form class="" action="list" method="post">
                 <div class="filter_element text_page_left">
                     <h3 class="text_h text_h3">Contrat</h3>
                     <div class="filter_element_options">
                         <div class="option">
                             <input type="checkbox" id="CDI" name="contract" value="coding">
                             <label for="CDI">CDI</label>
                         </div>
                         <div class="option">
                             <input type="checkbox" id="Stage" name="contract" value="coding">
                             <label for="Stage">Stage</label>
                         </div>
                     </div>
                 </div>
                 <div class="filter_element text_page_left">
                     <h3 class="text_h text_h3">Année</h3>
                     <div class="filter_element_options">
                         <div class="option">
                             <input class="option_checkbox" type="checkbox" id="B1" name="contract" value="coding" >
                             <label for="B1">B1</label>
                         </div>
                         <div class="option">
                             <input type="checkbox" id="B2" name="contract" value="coding">
                             <label for="B2">B2</label>
                         </div>
                     </div>
                 </div>
                 <button type="submit" class="btn btn_submit">Rechercher</button>
             </form>
         </section>

         <section class="margin_section padding_side results text_page_left">
             <ul class="results_list">
                 <?php foreach ($offer as $item): ?>
                     <li class="result">
                         <h3 class="text_h text_h3 text_h_grey result_element result_title"><?php print($item[1]) ?></h3>
                         <p class="result_element"><?php print($item[2]) ?></p>
                         <p class="result_element">tag//tag//tag</p>
                         <a href="profil/<?php print($item[0]) ?>" class=" result_element btn btn_blue text_btn"> button </a>
                     </li>
                 <?php endforeach; ?>
             </ul>
         </section>

     </main>

 </body>
 </html>
=======
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>List</title>
    </head>
    <body>
        Liste des profils
    </body>
</html>
>>>>>>> parent of ac8eaee... Mise en place de l'html dans les fichier php home et list
