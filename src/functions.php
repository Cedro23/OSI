<?php
require_once('class.php');
require_once("functions/dataFormManager.php");
require_once("functions/sendMail.php");
require_once("functions/searchOffers.php");


$connection = new Connection("mysql:dbname=osi;host=127.0.0.1", "root", "");
$session = new Session();
$offers = $connection->getTableOffer();
$profils;

$contracts = $connection->getTableContract();

$formations = $connection->getTableFormation();
$years = $connection->getTableYear();
$skills;

if(isset($idFormation)){
    initOffers();
    initSkills();
    initProfils($offers);

    checkURLForm();

    initOffers();
    if (isset($_POST['search'])) {
        $offersFilter = searchOffers($_POST['search']);
        initProfils($offersFilter);
    }else{
        initProfils($offers);
    }
}


function initSkills(){
    global $skills;
    global $idFormation;
    global $offers;
    global $idProfil;
    $idFormation = ($idFormation>0)? $idFormation : $offers[$idProfil]["formation"];
    $skills = getConnection()->getTableSkill($idFormation);

}

function initOffers(){
    global $offers;
    global $idFormation;
    $connection = getConnection();
    if($idFormation > 0 ){
        $offers = $connection->getTableOfferFormation($idFormation);
    }else{
        $offers = $connection->getTableOffer();
    }
}

function initProfils($_offers){
    global $profils;
    $profils = updateProfil($_offers, getConnection());
}
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
    $profils = null;
    foreach ($_offers as $key=> $item) {
        $itemSkills = NULL;
        $skills = $_connection->getTableUniqSkill($key);
        foreach ($skills as $skill) {
            $itemSkills[]=$skill['name'];
        }
        $profils[$key] = new Profil(
            $key, $item["title"],
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
