<?php
require_once("src/class.php");
$date=date('Y-m-d');
$xml='<?xml version="1.0" encoding="UTF-8"?>';
$xml.='    <urlset>
        <url>
            <loc>http://www.ynovlyon.com/fr/entreprises/recruter-nos-etudiants/</loc>
            <lastmod>'.$date.'</lastmod>
        </url>
        ';
//nom des formations/type de contrat/niveau
        $statement =$connection->getConnection()->prepare('
    SELECT name,niveau,type
    FROM osi_formation, osi_niveau_etude,osi_contract;
    ');
    $statement->execute();

    $resultat = $statement->fetchAll();
    //nom des formations/type de contrat/niveau avec les skills associés a chaque formation
    $allFilters =$connection->getConnection()->prepare('
        SELECT name,type,title,niveau
        FROM osi_formation, osi_niveau_etude,osi_contract,osi_skill
        WHERE id_formation=formation;
    ');
    $allFilters->execute();

    $results = $allFilters->fetchAll();
//nom des formations
    $formation =$connection->getConnection()->prepare('
        SELECT name
        FROM osi_formation
    ');
    $formation->execute();

    $formation_name= $formation->fetchAll();

    foreach ($resultat as $field){
        $xml.='
        <url>
            <loc>http://www.ynovlyon.com/fr/entreprises/recruter-nos-etudiants/list/'.$field['name'].'?type='.$field["type"].'&amp;niveau='.$field['niveau'].'</loc>
            <lastmod>'.$date.'</lastmod>
            <changefreq>daily</changefreq>
        </url>
        ';
    }
    foreach ($formation_name as $name){
        $xml.='
        <url>
            <loc>http://www.ynovlyon.com/fr/entreprises/recruter-nos-etudiants/list/'.$name['name'].'</loc>
            <lastmod>'.$date.'</lastmod>
            <changefreq>daily</changefreq>
        </url>
        ';
    }
    foreach($results as $field){
        $xml.='
        <url>
            <loc>http://www.ynovlyon.com/fr/entreprises/recruter-nos-etudiants/list/'.$field['name'].'?type='.$field["type"].'&amp;niveau='.$field['niveau'].'&amp;skill='.$field['title'].'</loc>
            <lastmod>'.$date.'</lastmod>
            <changefreq>daily</changefreq>
        </url>
        ';
    }


    $statement =$connection->getConnection()->prepare('
SELECT *
FROM osi_offer
');
$statement->execute();

$resultat = $statement->fetchAll();
foreach ($resultat as $offer){
    $xml.='
    <url>
        <loc>http://www.ynovlyon.com/fr/entreprises/recruter-nos-etudiants/profil?id='.$offer['id'].'</loc>
        <lastmod>'.$date.'</lastmod>
    </url>
    ';
}
    $xml.=' </urlset> ';
$file = fopen('sitemap.xml', 'r+');
ftruncate($file,0);
fputs($file, $xml);
//header('Location: sitemap.xml');
 ?>
