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
    } elseif ($url[0] == 'profil') {
        require '../src/profil.php';
    } else {
        require '../src/Error404.php';
    }
 ?>
