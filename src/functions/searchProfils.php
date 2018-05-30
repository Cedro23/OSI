<?php
require_once(__DIR__.'/../class.php');
    function searchProfils($_searchValue){
        $profils;
        $results = array_filter($profils, function($_show) use($_searchValue){
        return (strpos($_show,$_searchValue)!== false)? true : false;
        },ARRAY_FILTER_USE_KEY);
        return $results;
    }
 ?>
