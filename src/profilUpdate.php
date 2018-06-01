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
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119962245-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-119962245-1');
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="robots" content="noodp"/>
    <link rel="canonical" href=<?php print($url) ?> />
    <meta property="og:type" content="website">
    <meta property="og:title" content=<?php print( "Modifiez l'offre:".$profils[$idProfil]->getTitle()) ?>>
    <meta property="og:description" content=<?php  ?>>
    <meta property="og:url"  content=<?php print($url)?>>
    <meta property="og:locale" content="fr-FR">
    <script type="text/javascript" async src=https://www.google-analytics.com/analytics.js></script>
    <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"></script>

    <title><?php print($title) ?></title>

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
                    <a class="" href="">YNOV LYON</a>
                </li>
                <li class="header_ahead_menu_element">
                    <a class="" href="">FORMATIONS</a>
                </li>
                <li class="header_ahead_menu_element header_ahead_element_select">
                    <a class="" href="/home/">ENTREPRISES</a>
                </li>
                <li class="header_ahead_menu_element">
                    <a class="" href="">BLOG</a>
                </li>
                <li class="header_ahead_menu_element">
                    <a class="" href="">CANDIDATER</a>
                </li>
                <li class="header_ahead_menu_element">
                    <a class="" href="">CONTACT</a>
                </li>
            </ul>
        </nav>
    </header>

    <main  class="text_page">
        <section class="margin_section padding_side">
            <form class="form update" action="<?=$idProfil?>" method="post">
                <!--Hiden input ---------------------->
                <input type="hidden" name="formSubmit" value="update">
                <input type="hidden" name="idForm" value="2">
                <input type="hidden" name="formation" value="1">
                <input type="hidden" name="id" value="<?=$idProfil?>">

                <!--Visible input --------------------->
                <h1 class="text_h"> Modifier l'offre</h1>
                <!--title -->
                <div class="form_element text_page_left">
                    <h4 class="text_h  ">Titre</h4>
                    <input type="text" name="title" value="<?= $profils[$idProfil]->getTitle()?>" placeholder="<?= $profils[$idProfil]->getTitle()?>">
                </div>
                <!--Description -->
                <div class="form_element text_page_left">
                    <h4 class="text_h ">Description</h4>
                    <textarea name="description" rows="8" cols="80" placeholder="" ><?= $profils[$idProfil]->getDescription()?></textarea>
                </div>

                <div class="form_element form_element_row">
                    <!--Contract -->
                    <div class="form_select">
                        <h4 class="text_h form_select_element">Contrat</h4>
                        <select class="form_select_element" name="contract">

                            <option value="<?= $offers[$idProfil]["contract"]?>"><?= $profils[$idProfil]->getContract()?> </option>
                            <?php foreach ($contracts as $key=>$option ) {
                                echo '<option value="'.$key.'">'.$option["name"].'</option>';
                            } ?>
                        </select>
                    </div>
                    <!--year -->
                    <div class="form_select">
                        <h4 class="text_h   form_select_element">Année</h4>
                        <select class="form_select_element" name="year">
                            <option value="<?= $offers[$idProfil]["year"] ?>"> <?= $profils[$idProfil]->getYear()?></option>
                            <?php foreach ($years as $key=>$option) {
                                echo '<option value="'.$key.'">'.$option["name"].'</option>';
                            } ?>
                        </select>
                    </div>
                </div>
                <!--Competence -->
                <div class="form_element form_check text_page_left">
                    <div class="form_check_title">
                        <h4 class="form_check_title_text text_h  ">Compétences</h4>
                        <a href="" class="form_check_title_btn"><i class="fas fa-angle-down"></i></a>
                    </div>
                    <div class="form_check_options">
                        <?php
                           foreach ($skills as $key => $skill) {
                               echo '<div class="option">
                                   <input type="checkbox" id="'.$skill["name"].'" name="skills[]" value="'.$key.'" checked>
                                   <label for="'.$skill["name"].'">'.$skill["name"].'</label>
                               </div>';
                           }

                         ?>
                    </div>
                </div>
                <!--Period -->
                <div class="form_element text_page_left">
                    <h4 class="text_h  ">Periode</h4>
                    <input type="text" name="period" value="<?= $profils[$idProfil]->getPeriod() ?>" placeholder="periode">
                </div>
                <!--Submit -->
                <div class="form_element">
                    <button type="submit" class="btn btn_blue btn_submit">Modifier</button>
                </div>
            </form>
        </section>
    </main>
 </body>
</html>
