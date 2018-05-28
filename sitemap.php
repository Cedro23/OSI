<?php
require_once("src/class.php");
$date=date('Y-m-d');
$xml='<?xml version="1.0" encoding="UTF-8"?>';
$xml.='    <urlset>
        <url>
            <loc>http://www.ynovlyon.com/fr/entreprises/recruter-nos-etudiants/</loc>
            <lastmod>'.$date.'</lastmod>
        </url>
        <url>
            <loc>http://www.ynovlyon.com/fr/entreprises/recruter-nos-etudiants/profil</loc>
            <lastmod>'.$date.'</lastmod>
            <priority>1</priority>
        </url>
        <url>
            <loc>http://www.ynovlyon.com/fr/entreprises/recruter-nos-etudiants/list</loc>
            <lastmod>'.$date.'</lastmod>
            <changefreq>daily</changefreq>
        </url>

        <url>
            <loc>http://www.ynovlyon.com/fr/entreprises/recruter-nos-etudiants/list/admin</loc>
            <lastmod>'.$date.'</lastmod>
            <changefreq>daily</changefreq>
        </url>';

        $statement =$connection->getConnection()->prepare('
    SELECT type
    FROM osi_contract
    ');
    $statement->execute();

    $resultat = $statement->fetchAll();

    foreach ($resultat as $field){
        $xml.='
        <url>
            <loc>http://www.ynovlyon.com/fr/entreprises/recruter-nos-etudiants/list?contract='.$field['type'].'</loc>
            <lastmod>'.$date.'</lastmod>
            <changefreq>daily</changefreq>
        </url>';
        ;
    }

    $statement =$connection->getConnection()->prepare('
SELECT title
FROM osi_skill
');
$statement->execute();

$resultat = $statement->fetchAll();
    foreach ($resultat as $field){
        $xml.='
        <url>
            <loc>http://www.ynovlyon.com/fr/entreprises/recruter-nos-etudiants/list?skill='.$field['title'].'</loc>
            <lastmod>'.$date.'</lastmod>
            <changefreq>daily</changefreq>
        </url>';
        ;
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
 ?>
