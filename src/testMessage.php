<?php
require_once("../vendor/autoload.php");

// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl'))
        ->setUsername('stageynovB1@gmail.com')
        ->setPassword('Stageynov1gesup');

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// Create a message
$message = (new Swift_Message('CA MAAAAARCHEEEEE'))
->setFrom(['stageynovB1@gmail.com' => 'Stage Ynov'])
->setTo(['cedric1lesueur@gmail.com' => 'Cedric Lesueur'])
->setBody('FAZDAFAJ¨VN¨N¨JAF AFOE¨P Ä DJ ADAOIFOSQUBF AFBAGKSBD LUADSDAUH FBAIU SODN LNNJALJLIBFLAUZ ODHSQVHZERFOQYJMWXN AIYFBOZEYVFSQMDN LQUSBVCzbiuHCI IUIQBV QOI')
;

// Send the message
$result = $mailer->send($message);

?>
