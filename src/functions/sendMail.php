<?php
require_once("../vendor/autoload.php");

    function sendMail($_title, $_numero, $_mail, $_firstName, $_lastName, $_comments)
    {
        // Create the Transport
        $transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl'))
                ->setUsername('stageynovB1@gmail.com')
                ->setPassword('Stageynov1gesup');

        // Create the Mailer using your created Transport
        $mailer = new Swift_Mailer($transport);

        // Create a message
        $message = (new Swift_Message('Interet pour offre '.$_title))
        ->setFrom(['stageynovB1@gmail.com' => 'Stage Ynov'])
        ->setTo(['stageynovB1@gmail.com' => 'Stage Ynov'])
        ->setBody('Bonjour,
        Je suis interessé par l\'offre '.$_title.'. Pour plus d\'information vous pouvez me contacter au '.$_numero.' ou par mail '.$_mail.' .
        Bien à vous,
        '.$_firstName.' '.$_lastName.'

        Commentaires :
        '.$_comments);

        // Send the message
        $result = $mailer->send($message);
        echo '<script>alert("Votre demande de contact a bien été envoyée !");</script>';
    }

?>
