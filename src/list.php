<?php
    $titleErr = $descriptionErr = $contractErr = $yearErr = $skillsErr= $periodErr ="";
    $title = $description = $contract = $year = $period =""; $skillsCheck=[];
    $searchFilter = $contractFilter = $yearFilter = ""; $skillsFilter=[];
    $backgrounds[1] = "flap_store_element_ingesup";
    $backgrounds[2] = "flap_store_element_business";
    $backgrounds[3] = "flap_store_element_audiovisuel";
    $backgrounds[4] = "flap_store_element_jeuxvideo";
    $backgrounds[5] = "flap_store_element_web";

    if($idFormation <1) header('Location: home');
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
     <link rel="stylesheet" href="../fontawesome-free-5.0.13/web-fonts-with-css/css/fontawesome-all.css"/>
 </head>


 <body>
    <script>
     document.addEventListener("DOMContentLoaded",function(){
         console.log("[DOM] Loaded")

         isAddDisplayed = false;
         isFilterDisplayed = false;

        document.getElementById('btn_filter').addEventListener("click", function(){
         document.getElementById('form_add').classList.add("hide_form");
         if (isFilterDisplayed == true) {
             document.getElementById('form_filter').classList.add("hide_form");
             isFilterDisplayed = false;
             isAddDisplayed = false;
         } else {
             document.getElementById('form_filter').classList.remove("hide_form");
             isFilterDisplayed = true;
             isAddDisplayed = false;
         }
        });

        document.getElementById('btn_add').addEventListener("click", function(){
         document.getElementById('form_filter').classList.add("hide_form");
         if (isAddDisplayed == true) {
             document.getElementById('form_add').classList.add("hide_form");
             isAddDisplayed = false;
             isFilterDisplayed = false;
         } else {
             document.getElementById('form_add').classList.remove("hide_form");
             isAddDisplayed = true;
             isFilterDisplayed = false;
         }
        });
    })
     </script>
     <!--- Header --------------------------->
     <header class="header text_headfoot <?=$backgrounds[$idFormation]?>">
         <nav class="header_ahead">
             <picture class="header_ahead_element header_ahead_logo">
                 <img class="header_ahead_logo_img" src="../img/logo_ynov_campus_rvb_blanc.png" alt="Logo Ynov">
             </picture>
             <ul class="header_ahead_element text_header_title header_ahead_menu">
                 <li class="header_ahead_menu_element">
                     <a class="" href="">YNOV LYON</a>
                 </li>
                 <li class="header_ahead_menu_element header_ahead_element_select">
                     <a class="" href="/home/">ENTREPRISES</a>
                 </li>
                 <li class="header_ahead_menu_element">
                     <a class="" href="">CONTACT</a>
                 </li>
                 <li class="header_ahead_menu_element">
                     <?php if($session->getConnectionAdmin() == false){
                                echo '<a class="btn btn_blue btn_header" href="/admin">Login</a>';
                            }else {
                             echo '<form class="btn btn_blue btn_header" action="" method="post">
                                 <input type="hidden" value="" name ="disconnect">
                                 <button type="submit" name="button" class="btn_header"> Logout </button>
                             </form>';
                         }
                      ?>
                 </li>
             </ul>
         </nav>
     </header>

     <!--- Main--------------------------->
     <main class="text_page">
         <section class="margin_section padding_side">
             <h1 class="text_h ">Chercher le bon profil - <?=getFormations()[$idFormation]["name"]?></h1>
             <p> Toute l’année nos étudiants sont à l’écoute d’opportunités.</p>
             <p> Vous pouvez recruter des étudiants de Bachelor en stage temps complet de juin à septembre, et des étudiants de Mastère en alternance (contrat de professionnalisation) tout au long de l’année. </p>
         </section>

         <section class="margin_section padding_side btns_form">
             <a id="btn_filter" class="btn btn_blue text_btn btns_form_element"> Filtrer </a>
             <a id="btn_add" class="btn btn_red text_btn  btns_form_element <?= ($session->getConnectionAdmin() == true)?"":"hide" ?>"> Ajouter </a>
         </section>

         <!---Filter--------------------->
         <section id="form_filter" class="margin_section padding_side hide_form">
            <form class="form" action="" method="post">
                <h2 class="text_h text_h_white"> Filtrer les resultats</h2>
            <div class="form_content">
                 <!--- Hidden Input--------------------------->
                 <input type="hidden" name="formSubmit" value="filter">
                 <input type="hidden" name="idForm" value="2">
                 <input type="hidden" name="formation" value="<?= $idFormation ?>">

                 <!--- Visible Input--------------------------->
                 <!--Profil Title -->
                 <div class="form_element">
                     <input type="text" name="search" value="<?=$searchFilter?>" placeholder="Rechercher">
                 </div>
                 <div class="form_element form_element_row">
                     <!--Contract -->
                     <div class="form_select">
                         <h4 class="text_h  text_h_white form_select_element">Contrat</h4>
                         <select class="form_select_element" name="contract">
                             <option value="<?= $contract?>"> <?= ($contract == "")? "" : $contracts[$contract]['name']?> </option>
                             <?php foreach ($contracts as $key=>$option ) {
                                 echo '<option value="'.$key.'">'.$option["name"].'</option>';
                             } ?>
                         </select>
                     </div>
                     <!--Year -->
                     <div class="form_select">
                         <h4 class="text_h  text_h_white form_select_element">Année</h4>
                         <select class="form_select_element" name="year">
                             <option value="<?= $year?>"> <?= ($year == "")? "" : $years[$year]['name']?> </option>
                             <?php foreach ($years as $key=>$option ) {
                                 echo '<option value="'.$key.'">'.$option["name"].'</option>';
                             } ?>
                         </select>
                     </div>
                 </div>
                 <!--Skills -->
                 <div class="form_element form_check text_page_left">
                     <div class="form_check_title">
                         <h4 class="form_check_title_text text_h_white title_text text_h ">Compétences</h4>
                         <a class="form_check_title_btn"><i class="fas fa-angle-down fa-lg"></i></a>
                     </div>
                     <div class="form_check_options">
                         <?php foreach ($skills as $key => $skill): ?>
                             <div class="option">
                                 <input type="checkbox" id="<?=$skill["name"]?>" name="skills[]" value="<?=$key?>" <?= (array_key_exists($key,$skillsFilter))? "checked" : "" ?>>
                                 <label for="<?=$skill["name"]?>"><?=$skill["name"]?></label>
                             </div>
                         <?php endforeach; ?>
                     </div>
                 </div>
                 <!--Submit -->
                 <div class="form_element">
                     <button type="submit" class="btn btn_red btn_submit">Rechercher</button>
                 </div>
             </div>
             </form>
         </section>

         <!---ADD--------------------->
         <section id="form_add" class="margin_section padding_side hide_form">
            <form class="form" action="<?=htmlspecialchars(getURL())?>" method="post">
                <h2 class="text_h text_h_white"> Ajouter une offre</h2>
            <div class="form_content">
                 <!--- Hidden Input--------------------------->
                 <input type="hidden" name="formSubmit" value="add">
                 <input type="hidden" name="idForm" value="2">
                 <input type="hidden" name="formation" value="<?= $idFormation ?>">

                 <!--- Visible Input--------------------------->

                 <!--Profil Title -->
                 <div class="form_element text_page_left">
                     <h4 class="text_h  text_h_white">Titre *  <span class="error icon"><?= $titleErr?></span></h4>
                     <input type="text" name="title" value="<?= $title?>" placeholder="Titre">
                 </div>
                 <!--Description -->
                 <div class="form_element text_page_left">
                     <h4 class="text_h  text_h_white">Description * <span class="error icon"><?= $descriptionErr?></span></h4>
                     <textarea name="description" rows="8" cols="80" placeholder="Description"><?= $description?></textarea>

                 </div>
                 <div class="form_element form_element_row">
                     <!--Contract -->
                     <div class="form_select">
                         <h4 class="text_h  text_h_white form_select_element">Contrat *</h4>
                         <select class="form_select_element" name="contract">
                             <option value="<?= $contract?>"><?= ($contract == "")? "" : $contracts[$contract]['name']?> </option>
                             <?php foreach ($contracts as $key=>$option ) {
                                 echo '<option value="'.$key.'">'.$option["name"].'</option>';
                             } ?>
                         </select>
                         <span class="error icon"><?= $contractErr?></span>
                     </div>
                     <!--Year -->
                     <div class="form_select">
                         <h4 class="text_h  text_h_white form_select_element">Année *</h4>
                         <select class="form_select_element" name="year">
                             <option value="<?= $year?>"> <?= ($year == "")? "" : $years[$year]['name']?> </option>
                             <?php foreach ($years as $key=>$option) {
                                 echo '<option value="'.$key.'">'.$option["name"].'</option>';
                             } ?>
                         </select>
                         <span class="error icon"><?= $yearErr?></span>
                     </div>
                 </div>
                 <!--Skills -->
                 <div class="form_element form_check text_page_left">
                     <div class="form_check_title">
                         <h4 class="form_check_title_text text_h  text_h_white">Compétences * <span class="error icon"><?= $skillsErr?></span></h4>
                         <a href="" class="form_check_title_btn"><i class="fas fa-angle-down fa-lg"></i></a>
                     </div>
                     <div class="form_check_options">
                         <?php foreach ($skills as $key => $skill): ?>
                             <div class="option">
                                 <input type="checkbox" id="<?=$skill["name"]?>" name="skills[]" value="<?=$key?>" <?= (array_key_exists($key,$skillsCheck))? "checked" : "" ?>>
                                 <label for="<?=$skill["name"]?>"><?=$skill["name"]?></label>
                             </div>
                         <?php endforeach; ?>
                     </div>
                 </div>
                 <!--Period -->
                 <div class="form_element text_page_left">
                     <h4 class="text_h  text_h_white">Periode * <span class="error icon"><?= $periodErr?></span></h4>
                     <input type="text" name="period" value="<?=$period ?>" placeholder="periode">
                 </div>
                 <!--Submit -->
                 <div class="form_element">
                     <button type="submit" class="btn btn_blue btn_submit">Ajouter</button>
                 </div>
             </div>
             </form>
         </section>

         <?php if (sizeof($profils)>0): ?>
         <section class="padding_side results text_page_left">
             <ul class="results_list">

                 <?php foreach ($profils as $item): ?>
                     <li class="result">
                         <h3 class="text_h result_element result_element_2"><a href="/profil/<?=$item->getId()?>"><?= $item->getTitle()?></a></h3>
                         <p class="result_element"><?= $item->getContract() ?></p>
                         <p class="result_element"><?= $item->getYear() ?></p>
                         <p class="result_element result_element_2">
                            <?php
                                $i = 0;
                                $output ="";
                                foreach ($item->getSkills() as $skill) {
                                    $output.=$skill;
                                    $i++;
                                    if ($i != sizeof($item->getSkills())) {
                                        $output.='<span> // </span>';
                                    }
                                }
                                echo $output;
                            ?>
                        </p>
                        <a href="/profil/<?=$item->getId()?>" class=" result_element icon icon_plus"> <i class="fas fa-plus-circle fa-3x"></i> </a>
                        <a href="/editProfil/<?=$item->getId()?>" class=" result_element icon <?= ($session->getConnectionAdmin() == true)?"":"hide" ?>"> <i class="fas fa-pen-square fa-3x"></i> </a>
                        <form class="result_element icon" action="" method="post">
                            <input type="hidden" value="<?=$item->getId()?>" name ="delete">
                            <button type="submit" name="button" class="<?= ($session->getConnectionAdmin() == true)?"":"hide" ?>"> <a><i class="fas fa-times fa-3x"> </i></a> </button>
                        </form>
                     </li>
                 <?php endforeach; ?>
             </ul>
         </section>
     <?php else: ?>
         <section class="margin_section">
             <p>Il n'y a aucun resultats correspondant</p>
         </section>
     <?php endif; ?>
     </main>

 </body>
 </html>
