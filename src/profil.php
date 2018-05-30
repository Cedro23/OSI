<?php
    require_once("class.php");
    require_once("functions.php");
    require_once("../vendor/autoload.php");

    if (isset($_POST['num']) and isset($_POST['mail']) and isset($_POST['firstName']) and isset($_POST['lastName'])) {
        sendMail($profils[$idProfil-1]->getTitle(), $_POST['num'], $_POST['mail'], $_POST['firstName'], $_POST['lastName'], $_POST['comments']);
    }


    $offer= $connection->getTableOffer();
    $url =  "//{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
    foreach ($offer as $field) {
        if ($field['id']==1){
            $description="Profil de l'offre: ".$field['description'];
            $title=$field['title'] ;
            $id=$field['id'];
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
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
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

        <!-- CSS -->
        <link rel="stylesheet" href="../css/style.css"/>
        <link rel="stylesheet" href="../font-awesome/css/fontawesome.min.css"/>
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
                <h1 class="text_h text_h1"> <?php print($profils[$idProfil-1]->getTitle()) ?></h1>
            </section>

            <section class="margin_section padding_side text_page_left">
                <p><?php $parsedown = new Parsedown();
                            print $parsedown->text($profils[$idProfil-1]->getDescription()) ?></p>
                <p><?php for ($i=0; $i < sizeof($profils[$idProfil-1]->getSkills()); $i++) {
                        print($profils[$idProfil-1]->getSkills()[$i]);
                        if ($i != sizeof($profils[$idProfil-1]->getSkills())-1) {
                            printf('//');
                        }
                    }?></p>
            </section>

            <section class="margin_section padding_side filter">
                <h2 class="text_h text_h2"> Contact</h2>

                <form class="form" action="" method="post">
                    <h4 class="text_h text_h_white text_page_left form_element"><?php print($profils[$idProfil-1]->getTitle()) ?></h4>

                    <div class=" form_element form_element_row">
                        <div class="form_check">
                            <h4 class="text_h text_h_white text_page_left"> Mail</h4>
                            <input type="text" name="mail" value="" placeholder="Mail">
                        </div>
                        <div class="form_check">
                            <h4 class="text_h text_h_white text_page_left"> Number</h4>
                            <input type="text" name="num" value="" placeholder="Numero Telephone">
                        </div>
                    </div>
                    <div class=" form_element form_element_row">
                        <div class="form_check">
                            <h4 class="text_h text_h_white text_page_left"> Prénom</h4>
                            <input type="text" name="firstName" value="" placeholder="Prénom">
                        </div>
                        <div class="form_check">
                            <h4 class="text_h text_h_white text_page_left"> Nom</h4>
                            <input type="text" name="lastName" value="" placeholder="Nom">
                        </div>
                    </div>
                    <div class="form_element text_page_left">
                        <h4 class="text_h text_h_white text_page_left"> Commentaires</h4>
                        <textarea name="comments" rows="8" cols="80" placeholder="Commentaires"></textarea>
                    </div>
                    <div class="form_element">
                        <button type="submit" class="btn btn_submit">Envoyer</button>
                    </div>
                </form>
            </section>
        </main>
    </body>
</html>
