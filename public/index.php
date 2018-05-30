<?php
    require_once("../src/class.php");

    $url = '';
    if (isset($_GET['url'])) {
        $url = explode('/',$_GET['url']);
    }

    if ($url == '' or $url[0] == 'home') {
        require '../src/home.php';
    } elseif ($url[0] == 'list') {
        $idFormation = (isset($url[1]) and is_numeric($url[1]))? $url[1] : 1 ;
        require '../src/list.php';
    } elseif ($url[0] == 'profil' and is_numeric($url[1]) and isset($url[1])) {
        $idProfil = $url[1];
        $idFormation = 0;
        require '../src/profil.php';
    } elseif ($url[0] == 'sitemap') {
        require '../sitemap.php';
    } elseif ($url[0] == 'profilUpdate'and is_numeric($url[1]) and isset($url[1])) {
        $idProfil = $url[1];
        $idFormation = 0;
        require '../src/profilUpdate.php';

    } elseif ($url[0] == 'test') {
        require '../src/testRecherche.php';
    }else {
        require '../src/Error404.php';
    }
 ?>
