<?php
    require_once("functions.php");
    $url =  "//{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";


 ?>
<!DOCTYPE html>
<html lang="en">
<head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119962245-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-119962245-1');
    </script>
    <!--Meta -- >
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	<link rel="canonical" href="<?php print($url)?>" />
	<meta property="og:type" content=”website”>
	<meta property="og:title" content="Recruter nos étudiants -Ynov Lyon">
	<meta property="og :description" content="Recrutez nos étudiants Ynov
    du Bachelor au Master. Offre de Stage/Alternance/Contrat de professionnalisation.Recherche par profil.
     Nos formations : Animation 3D, Digital Business School,Informatique(Developpement Web/Logiciels, Infrastructure et réseaux), Audiovisuel, Communication et graphic Design.">
	<meta property="og:url"  content="<?php print($url)?> ">
	<meta property="og:locale" content="fr-FR">
	<script type="text/javascript" async src=https://www.google-analytics.com/analytics.js></script>
	<script type="text/javascript" async src=//www.googleadservices.com/pagead/conversion_async.js ></script>


    <title>Recruter nos étudiants - Ynov Lyon</title>

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
            <h1 class="text_h "> Recruter nos étudiants</h1>
            <p> Toute l’année nos étudiants sont à l’écoute d’opportunités.</p>
            <p> Vous pouvez recruter des étudiants de Bachelor en stage temps complet de juin à septembre, et des étudiants de Mastère en alternance (contrat de professionnalisation) tout au long de l’année. </p>
        </section>




        <section class="margin_section">
            <h2 class="text_h text_h2"> Choisir la formation</h2>
            <div class="flap_store">
                <div class="flap_store_element flap_store_element_ingesup">
                    <div class="flap_store_element_content">
                        <img class="flap_store_element_logo" src="../img/logo_ingesup.png">
                        <div class="flap_store_element_title">
                            <h3 class=" ">INFORMATIQUE</h3>
                            <h3 class=" ">INGESUP</h3>
                        </div>
                        <div class="flap_store_element_description margin_section">
                            <p> Developpement Web</p>
                            <p> Developpement Logiciel</p>
                            <p> Infrastructure Réseau</p>
                        </div>
                        <a href="/list/1" class="icon icon_plus"><i class="fas fa-plus-circle fa-5x"></i></a>
                    </div>
                </div>
                <div class="flap_store_element flap_store_element_business">
                    <div class="flap_store_element_content">
                        <img class="flap_store_element_logo" src="../img/logo_business.png">
                        <div class="flap_store_element_title">
                            <h3 class=" ">DIGITAL</h3>
                            <h3 class=" ">BUSINESS SCHOOL</h3>
                        </div>
                        <div class="flap_store_element_description margin_section">
                            <p> Developpement Web</p>
                            <p> Developpement Logiciel</p>
                            <p> Infrastructure Réseau</p>
                        </div>
                        <a href="/list/2" class="icon icon_plus"><i class="fas fa-plus-circle fa-5x"></i></a>
                    </div>
                </div>
                <div class="flap_store_element flap_store_element_jeuxvideo">
                    <div class="flap_store_element_content">
                        <img class="flap_store_element_logo" src="../img/logo_jeuxvideo.png">
                        <div class="flap_store_element_title">
                            <h3 class=" ">ANIMATION 3D</h3>
                            <h3 class=" ">JEUX VIDEO</h3>
                        </div>
                        <div class="flap_store_element_description margin_section">
                            <p> Developpement Web</p>
                            <p> Developpement Logiciel</p>
                            <p> Infrastructure Réseau</p>
                        </div>
                        <a href="/list/4" class="icon icon_plus"><i class="fas fa-plus-circle fa-5x"></i></a>
                    </div>
                </div>
                <div class="flap_store_element flap_store_element_web">
                    <div class="flap_store_element_content">
                        <img class="flap_store_element_logo" src="../img/logo_web.png">
                        <div class="flap_store_element_title">
                            <h3 class=" ">GRAPHISME</h3>
                            <h3 class=" ">DESIGN</h3>
                        </div>
                        <div class="flap_store_element_description margin_section">
                            <p> Developpement Web</p>
                            <p> Developpement Logiciel</p>
                            <p> Infrastructure Réseau</p>
                        </div>
                        <a href="/list/5" class="icon icon_plus"><i class="fas fa-plus-circle fa-5x"></i></a>
                    </div>
                </div>
                <div class="flap_store_element flap_store_element_audiovisuel">
                    <div class="flap_store_element_content">
                        <img class="flap_store_element_logo" src="../img/logo_audiovisuel.png">
                        <div class="flap_store_element_title">
                            <h3 class=" ">AUDIOVISUEL</h3>
                        </div>
                        <div class="flap_store_element_description margin_section">
                            <p> Developpement Web</p>
                            <p> Developpement Logiciel</p>
                            <p> Infrastructure Réseau</p>
                        </div>
                        <a href="/list/3" class="icon icon_plus"><i class="fas fa-plus-circle fa-5x"></i></a>
                    </div>
                </div>
            </div>
        </section>

        <section class="margin_section padding_side text_page_left">
            <p><strong class="text_font_bold">Quel rythme pour l’alternance ?</strong></p>
            <p>Le rythme est de 2 jours en entreprises et 3 jours à l’école puis 3 jours en entreprise et 2 jours à l’école.</p>
        </section>

        <section class="margin_section section_visual padding_side">
            <div class="margin_side section_visual_rect">
                <section class="margin_section">
                    <h2 class="text_h text_h2"> Nous Contacter</h2>
                    <p> Vous pouvez nous contacter etc..</p>
                </section>
            </div>
        </section>
    </main>

    <!--- Footer --------------------------->
    <footer class="footer text_headfoot">
        <section class="footer_section">
            <div class="footer_section_element">
                <img class="footer_logo_img" src="../img/logo_ynov_campus_rvb_blanc.png" alt="Logo Ynov">
                <p>27 rue Raoul Servant</p>
                <p>69007 LYON</p>
                <p>FRANCE</p>
            </div>

            <div class="footer_section_element">
                <p class="text_footer_title">Envie de rejoindre Ynov Lyon ?</p>
            </div>

            <div class="footer_section_element">
                <p class="text_footer_title">En savoir plus sur nos informations ?</p>
            </div>
        </section>

        <hr></hr>

        <section class="footer_section">

        </section>
    </footer>
</body>
</html>
