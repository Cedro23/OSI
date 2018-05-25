<?php
    require_once("../src/class.php");
    $url = '';
    if (isset($_GET['url'])) {
        $url = explode('/',$_GET['url']);
    }

    if ($url == '') {
        print('Page d\'accueil');
    } elseif ($url[0] == 'list') {
        print('List des profils');
    } elseif ($url[0] == 'profil') {
        print('Profils');
    } else {
        print('Error 404');
    }
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <div class="">
            <h1>CA MAAAAAAAAAAAAAAARCHE</h1>
            <a href="../src/list.php">Oyo</a>
        </div>
    </body>
</html>
