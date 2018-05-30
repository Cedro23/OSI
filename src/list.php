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

     <!--- Main--------------------------->
     <main class="text_page">
         <section class="margin_section padding_side">
             <h1 class="text_h "> Chercher le bon profil</h1>
             <p> Toute l’année nos étudiants sont à l’écoute d’opportunités.</p>
             <p> Vous pouvez recruter des étudiants de Bachelor en stage temps complet de juin à septembre, et des étudiants de Mastère en alternance (contrat de professionnalisation) tout au long de l’année. </p>
         </section>

         <!---Filter--------------------->
         <section class="margin_section padding_side filter">
             <form class="form" action="index.html" method="post">
                 <h2 class="text_h text_h_white"> Filtrer les resultats</h2>
                 <div class="form_element">
                     <input type="text" name="search" value="" placeholder="Rechercher">
                 </div>
                 <div class="form_element form_element_row">
                     <div class="form_select">
                         <h4 class="text_h text_h_form text_h_white form_select_element">Contrat</h4>
                         <select class="form_select_element" name="contract">
                             <option value=""> </option>
                             <?php foreach ($contracts as $option ) {
                                 echo '<option value="'.$option["id"].'">'.$option["name"].'</option>';
                             } ?>
                         </select>
                     </div>
                     <div class="form_select">
                         <h4 class="text_h text_h_form text_h_white form_select_element">Année</h4>
                         <select class="form_select_element" name="year">
                             <option value=""> </option>
                             <?php foreach ($years as $option ) {
                                 echo '<option value="'.$option["id"].'">'.$option["name"].'</option>';
                             } ?>
                         </select>
                     </div>
                 </div>
                 <div class="form_element form_check text_page_left">
                     <div class="form_check_title">
                         <h4 class="form_check_title_text text_h_white title_text text_h text_h_form">Compétences</h4>
                         <a href="" class="form_check_title_btn"><i class="fas fangle-down"></i></a>
                     </div>
                     <div class="form_check_options">
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
                     <button type="submit" class="btn btn_red btn_submit">Rechercher</button>
                 </div>
             </form>
         </section>

         <!---ADD--------------------->
         <section class="margin_section padding_side add">
             <form class="form" action="list.php" method="post">
                 <input type="hidden" name="formSubmit" value="add">
                 <input type="hidden" name="idForm" value="2">
                 <input type="hidden" name="formation" value="1">
                 <h2 class="text_h text_h_white"> Ajouter une offre</h2>
                 <div class="form_element text_page_left">
                     <h4 class="text_h text_h_form text_h_white">Titre</h4>
                     <input type="text" name="title" value="" placeholder="Titre">
                 </div>
                 <div class="form_element text_page_left">
                     <h4 class="text_h text_h_form text_h_white">Description</h4>
                     <textarea name="description" rows="8" cols="80" placeholder="Description"></textarea>
                 </div>
                 <div class="form_element form_element_row">
                     <div class="form_select">
                         <h4 class="text_h text_h_form text_h_white form_select_element">Contrat</h4>
                         <select class="form_select_element" name="contract">
                             <option value=""> </option>
                             <?php foreach ($contracts as $option ) {
                                 echo '<option value="'.$option["id"].'">'.$option["name"].'</option>';
                             } ?>
                         </select>
                     </div>
                     <div class="form_select">
                         <h4 class="text_h text_h_form text_h_white form_select_element">Année</h4>
                         <select class="form_select_element" name="class">
                             <option value=""> </option>
                             <?php foreach ($years as $option) {
                                 echo '<option value="'.$option["id"].'">'.$option["name"].'</option>';
                             } ?>
                         </select>
                     </div>
                 </div>
                 <div class="form_element form_check text_page_left">
                     <div class="form_check_title">
                         <h4 class="form_check_title_text text_h text_h_form text_h_white">Compétences</h4>
                         <a href="" class="form_check_title_btn"><i class="fas fa-angle-down"></i></a>
                     </div>
                     <div class="form_check_options">
                         <div class="option">
                             <input type="checkbox" id="PHP" name="skills" value="coding">
                             <label for="PHP">PHP</label>
                         </div>
                         <div class="option">
                             <input type="checkbox" id="Node.js" name="skills" value="coding">
                             <label for="Node.js">Node.js</label>
                         </div>
                     </div>
                 </div>
                 <div class="form_element">
                     <button type="submit" class="btn btn_blue btn_submit">Rechercher</button>
                 </div>
             </form>
         </section>

         <section class="padding_side results text_page_left">
             <ul class="results_list">
                 <?php foreach ($profils as $item): ?>
                     <li class="result">
                         <h3 class="text_h text_h3 text_h_grey result_element result_title"><?= $item->getTitle() ?></h3>
                         <p class="result_element"><?= $item->getContract() ?></p>
                         <p class="result_element">
                            <?php     $i = 0;
                                foreach ($item->getSkills() as $skill) {
                                    print($skill);
                                    $i++;
                                    if ($i != sizeof($item->getSkills())) {
                                        printf('//');
                                    }
                                }
                            ?>
                        </p>
                        <a href="profil/<?php print($item->getId()) ?>" class=" result_element btn btn_blue text_btn"> button </a>
                     </li>
                 <?php endforeach; ?>
             </ul>
         </section>
     </main>

 </body>
 </html>
