<?php
    $userErr = $passwordErr ="";
    require_once("functions.php");
$url =  "//{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="robots" content="noindex"/>
        <meta name="robots" content="nofollow"/>
        <meta property="og:url"  content=<?php print($url)?>>
        <meta property="og:locale" content="fr-FR">
        <meta property="og:title" content="Login">
        <meta property="og :description" content="Connecte toi au compte administrateur avec ton login et ton mot de passe">
        <title>Login</title>
        <link rel="stylesheet" href="../css/style.css"/>
        <link rel="stylesheet" href="../fontawesome-free-5.0.13/web-fonts-with-css/css/fontawesome-all.css"/>

    </head>
    <body>
        <main class="text_page">
            <section id="form_admin" class="padding_side">
                <form class="form" action="" method="post">
                    <input type="hidden" name="formSubmit" value="admin">
                    <input type="hidden" name="idForm" value="2">
                    <h1 class="text_h">Log In</h1>
                    <div class="form_content">
                        <div class="form_element">
                            <h4 class="text_h  text_h_white">Username *  <span class="error icon"><?= $userErr?></span></h4>
                            <input type="text" name="username" value="" placeholder="username"/>
                        </div>
                        <div class="form_element">
                            <h4 class="text_h  text_h_white">Password *  <span class="error icon"><?= $passwordErr?></span></h4>
                            <input type="password" name="password" value="" placeholder="password"/>
                        </div>
                        <div class="form_element">
                            <button type="submit" class="btn btn_blue btn_submit">Se connecter</button>
                        </div>
                    </div>
                </form>
            </section>
        </main>

    </body>
</html>
