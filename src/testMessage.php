<?php
require_once("../vendor/autoload.php");

// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl'))
        ->setUsername('stageynovB1@gmail.com')
        ->setPassword('Stageynov1gesup');

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// Create a message
$messageToYnov = (new Swift_Message('Interet pour offre [Nom de l\'offre]'))
->setFrom(['stageynovB1@gmail.com' => 'Stage Ynov'])
->setTo(['stageynovB1@gmail.com' => 'Stage Ynov'])
->setBody('Bonjour,
Je suis interessé par [Nom de l\'offre]. Pour plus d\'information vous pouvez me contacter au [Numéro de téléphone].
Bien à vous,
[Nom de l\'envoyeur]')
;

$messageToSender = (new Swift_Message('Demande de contact YnovStage'))
->setFrom(['stageynovB1@gmail.com' => 'Stage Ynov'])
->setTo(['cedric1lesueur@gmail.com' => 'Cédric Lesueur'])
->setBody('Bonjour,
Votre demande a bien été prise en compte.')
;

// Send the message
$result = $mailer->send($messageToYnov);
$result = $mailer->send($messageToSender);

?>
