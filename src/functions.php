<?php
require_once('class.php');
require_once("functions/dataFormManager.php");
$offer = $connection->getTableOffer();
$contract = $connection->getTableContract();
$formation = $connection->getTableFormation();
$skill = $connection->getTableSkill();
$session = new Session();
$profils = updateProfil($offer, $connection);

//get current URL page
function getURL(){
    return $_SERVER['REQUEST_URI'];
}

function getSession(){
    global $session;
    return $session;
}

function updateProfil($_offer, $_connection)
{
    $profils;
    foreach ($_offer as $item) {
        $itemContract = $_connection-> getTableContract($item[0])[0][0];
        $itemSkills = NULL;
        $skills = $_connection->getTableUniqSkill($item[0]);

        foreach ($skills as $skill) {
            $itemSkills[]=$skill['title'];
        }
        $profils[] = new Profil($item[0], $item[1], $itemContract, $item[2], $item[3], $item[5], $item[6], $itemSkills);
    }
    return $profils;
}


 ?>
