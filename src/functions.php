<?php
require_once('class.php');
require_once("functions/dataFormManager.php");
require_once("functions/sendMail.php");
require_once("functions/searchProfils.php");


$connection = new Connection("mysql:dbname=osi;host=127.0.0.1", "root", "");
$session = new Session();
$offers = $connection->getTableOffer();
$profils = updateProfil($offers, $connection);

checkURLForm();

$offers = $connection->getTableOffer();
$profils = updateProfil($offers, $connection);

$contracts = $connection->getTableContract();

$formations = $connection->getTableFormation();
$years = $connection->getTableYear();
$skills = $connection->getTableSkill(1);




//get current URL page
function getURL(){
    return $_SERVER['REQUEST_URI'];
}

function getConnection(){
    global $connection;
    return $connection;
}

function getSession(){
    global $session;
    return $session;
}

function getContracts(){
    global $contracts;
    return $contracts;
}

function getYears(){
    global $years;
    return $years;
}

function getFormations(){
    global $formations;
    return $formations;
}

function getProfils(){
    global $profils;
    return $profils;
}

function updateProfil($_offers, $_connection)
{
    $profils;
    foreach ($_offers as $item) {
        $itemSkills = NULL;
        $skills = $_connection->getTableUniqSkill($item["id"]);

        foreach ($skills as $skill) {
            $itemSkills[]=$skill['name'];
        }

        $profils[] = new Profil(
            $item["id"], $item["title"],
            getContracts()[$item["contract"]]['name'],
            getYears()[$item["year"]]['name'],
            getFormations()[$item["formation"]]["name"],
            $item["description"],
            $item["period"],
            $itemSkills
        );
    }
    return $profils;
}


 ?>
