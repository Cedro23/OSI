<?php
    require_once('class.php');
    $offer = $connection->getTableOffer();
    $skill = $connection->getTableSkill();

    $profils = updateProfil($offer, $connection);

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
