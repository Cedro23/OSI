<?php
require_once("src/class.php");

$xml='<?xml version="1.0" encoding="UTF-8"?>';
$xml.='    <urlset>
        <url>
            <loc>http://www.ynovlyon.com/fr/entreprises/recruter-nos-etudiants/</loc>
            <lastmod>2018-05-2018</lastmod>
        </url>
        <url>
            <loc>http://www.ynovlyon.com/fr/entreprises/recruter-nos-etudiants/profil</loc>
            <lastmod>2018-05-2018</lastmod>
            <prority>1<priority>
        </url>
        <url>
            <loc>http://www.ynovlyon.com/fr/entreprises/recruter-nos-etudiants/list</loc>
            <lastmod>2018-05-2018</lastmod>
            <changefreq>daily</changefreq>
        </url>';

        $requete = $connection->prepare('
    SELECT title
    FROM osi_skill
    ');
    $requete->execute();

    $resultat = $requete->fetchAll(PDO::FETCH_OBJ);

    foreach ($resultat as $skill){
        $xml.='<url>
            <loc>http://www.ynovlyon.com/fr/entreprises/recruter-nos-etudiants/list?skill='.$skill.'</loc>
            <changefreq>daily</changefreq>
        </url>';

    }

    $xml.='</urlset>';

$file = fopen('sitemap.xml', 'r+');
fputs($file, $xml);
 ?>
