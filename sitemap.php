<?php
require_once("src/functions.php");
$date=date('Y-m-d');
$xml='<?xml version="1.0" encoding="UTF-8"?>';
$xml.='    <urlset>
        <url>
            <loc>http://www.ynovlyon.com/fr/entreprises/recruter-nos-etudiants/</loc>
            <lastmod>'.$date.'</lastmod>
        </url>
        <url>
            <loc>http://www.ynovlyon.com/fr/entreprises/recruter-nos-etudiants/home</loc>
            <lastmod>'.$date.'</lastmod>
        </url>
        ';

//nom des formations
    $formation =$connection->getConnection()->prepare('
        SELECT id
        FROM osi_formation;
    ');
    $formation->execute();

    $formation_id= $formation->fetchAll();


    foreach ($formation_id as $id){
        $xml.='
        <url>
            <loc>http://www.ynovlyon.com/fr/entreprises/recruter-nos-etudiants/list/'.$id['id'].'</loc>
            <lastmod>'.$date.'</lastmod>
            <changefreq>daily</changefreq>
        </url>
        ';
    }

    $statement =$connection->getConnection()->prepare('
SELECT *
FROM osi_offer;
');
$statement->execute();

$resultat = $statement->fetchAll();
foreach ($resultat as $offer){
    $xml.='
    <url>
        <loc>http://www.ynovlyon.com/fr/entreprises/recruter-nos-etudiants/profil/'.$offer['id'].'</loc>
        <lastmod>'.$date.'</lastmod>
    </url>
    ';
}
    $xml.=' </urlset> ';
$file = fopen('../sitemap.xml', 'r+');
ftruncate($file,0);
fputs($file, $xml);
require_once("../sitemap.xml");
 ?>
