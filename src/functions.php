<?php
    require_once('class.php');
    $offer = $connection->getTableOffer();
    $contract = $connection->getTableContract();
    $formation = $connection->getTableFormation();
    $skill = $connection->getTableSkill();

    updateProfil($offer, $connection);

    function updateProfil($_offer, $_connection)
    {
        $profils;
        foreach ($_offer as $item) {
            $itemSkills = $_connection->getTableOfferSkill($item[0]);
            $profils[] = new Profil($item[0], $item[1], $item[4], $item[2], $item[3], $item[5], $item[6], $itemSkills);
        }
    }
 ?>
