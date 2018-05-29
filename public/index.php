<?php
    require_once("../src/class.php");

    $url = '';
    if (isset($_GET['url'])) {
        $url = explode('/',$_GET['url']);
    }

    if ($url == '' or $url[0] == 'home') {
        require '../src/home.php';
    } elseif ($url[0] == 'list') {
        require '../src/list.php';
    } elseif ($url[0] == 'profil' and is_numeric($url[1]) and isset($url[1])) {
        $idProfil = $url[1];
        require '../src/profil.php';
    } elseif ($url[0] == 'sitemap') {
        require '../sitemap.php';
    } else {
        require '../src/Error404.php';
    }
 ?>
