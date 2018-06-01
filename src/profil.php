<?php
    require_once("functions.php");
    require_once("../vendor/autoload.php");


    $title=$profils[$idProfil]->getTitle();
    $description="Profil de l'offre: ".$profils[$idProfil]->getDescription();
    $url =  "//{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
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
        <meta name="description" content="<?php print($description) ?>">
        <link rel="canonical" href=<?php print($url) ?> />
    	<meta property="og:type" content="website">
    	<meta property="og:title" content="<?php print($title) ?>">
    	<meta property="og:description" content="<?php print($description) ?>">
        <meta property="og:url"  content=<?php print($url)?>>
    	<meta property="og:locale" content="fr-FR">
    	<script type="text/javascript" async src=https://www.google-analytics.com/analytics.js></script>
        <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"></script>

        <title><?php print($title) ?></title>

        <!-- CSS -->
        <link rel="stylesheet" href="../css/style.css"/>
        <link rel="stylesheet" href="../fontawesome-free-5.0.13/web-fonts-with-css/css/fontawesome-all.css"/>

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

        <!--- Main--------------------------->
        <main class="text_page">
            <!--- Profil--------------------------->
            <!--Profil Title -->
            <section class="margin_section padding_side">
                <h1 class="text_h "> <?=($profils[$idProfil]->getTitle()) ?></h1>
                <a href="/editProfil/<?= $profils[$idProfil]->getId()?>" class="icon"> <i class="fas fa-pen-square fa-3x"></i> </a>
            </section>

            <!--Description -->
            <section class="margin_section padding_side text_page_left markdown">
                <p><?php $parsedown = new Parsedown();
                        print $parsedown->text($profils[$idProfil]->getDescription())
                    ?>
                </p>
            </section>

            <!--Skills -->
            <section class="margin_section padding_side text_page_left">
                <p><?php
                        $output="";
                        for ($i=0; $i < sizeof($profils[$idProfil]->getSkills()); $i++) {
                            $output.=$profils[$idProfil]->getSkills()[$i];
                            if ($i != sizeof($profils[$idProfil]->getSkills())-1) {
                                $output.='<span> // </span>';
                            }

                        }
                        echo $output;
                    ?></p>
            </section>

            <!--- Contact Form--------------------------->
            <section id="form_contact" class="margin_section padding_side">
                <form class="form" action="" method="post">
                    <h2 class="text_h text_h2"> Contact</h2>
                    <!--Hiden input ---------------------->
                    <input type="hidden" name="formSubmit" value="mail">
                    <input type="hidden" name="idForm" value="2">

                    <!--Visible input --------------------->
                    <!--title -->
                    <h4 class="text_h  text_page_left form_element"><?=($profils[$idProfil]->getTitle()).' - ID : '.$idProfil ?></h4>
                    <div class=" form_element form_element_row">
                        <!--Mail -->
                        <div class="form_check">
                            <h4 class="text_h text_page_left"> Mail</h4>
                            <input type="text" name="mail" value="" placeholder="Mail">
                        </div>
                        <!--Number -->
                        <div class="form_check">
                            <h4 class="text_h text_page_left"> Number</h4>
                            <input type="text" name="num" value="" placeholder="Numero Telephone">
                        </div>
                    </div>
                    <div class=" form_element form_element_row">
                        <!--First Name -->
                        <div class="form_check">
                            <h4 class="text_h  text_page_left"> Prénom</h4>
                            <input type="text" name="firstName" value="" placeholder="Prénom">
                        </div>
                        <!--Last Name -->
                        <div class="form_check">
                            <h4 class="text_h  text_page_left"> Nom</h4>
                            <input type="text" name="lastName" value="" placeholder="Nom">
                        </div>
                    </div>
                    <!--Comment -->
                    <div class="form_element text_page_left">
                        <h4 class="text_h  text_page_left"> Commentaires</h4>
                        <textarea name="comments" rows="8" cols="80" placeholder="Commentaires"></textarea>
                    </div>
                    <!--Submit -->
                    <div class="form_element">
                        <button type="submit" class="btn btn_red btn_submit">Envoyer</button>
                    </div>
                </form>
            </section>
        </main>
    </body>
</html>
