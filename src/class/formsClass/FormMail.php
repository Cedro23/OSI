<?php
class FormMail extends Form
{
    public function getPostData(){
        $postsCheck = [];
        if(!$this->checkPost("mail")){
            global $mailErr;
            $mailErr = '<i class="fas fa-exclamation-circle fa-lg"></i>Entrez un mail';
            $postsCheck[] = "false";
        }else{
            global $mail;
            $mail = $this->posts["mail"];
            $postsCheck[] = "true";
        }
        $this->checkPost("num");
            global $num;
            $num = $this->posts["num"];
        if(!$this->checkPost("firstName")){
            global $firstNameErr;
            $firstNameErr = '<i class="fas fa-exclamation-circle fa-lg"></i>Entrez un prénom';
            $postsCheck[] = "false";
        }else{
            global $firstName;
            $firstName = $this->posts["firstName"];
            $postsCheck[] = "true";
        }
        if(!$this->checkPost("lastName")){
            global $lastNameErr;
            $lastNameErr = '<i class="fas fa-exclamation-circle fa-lg"></i>Entrez un nom de famille';
            $postsCheck[] = "false";
        }else{
            global $lastName;
            $lastName = $this->posts["lastName"];
            $postsCheck[] = "true";
        }
        $this->checkPost("comments");
            global $comments;
            $comments = $this->posts["comments"];

        foreach ($postsCheck as $value) {
            if ($value == "false") return false;
        }
        return true;
    }

    public function callFormFunction(){
        global $idProfil;
        sendMail($idProfil, getProfils()[$idProfil]->getTitle(), $this->posts['num'], $this->posts['mail'], $this->posts['firstName'], $this->posts['lastName'], $this->posts['comments']);
    }
}

 ?>
