<?php
class FormMail extends Form
{
    public function getPostData(){
        if(!$this->checkPost("mail")) return false;
        if(!$this->checkPost("num")) return false;
        if(!$this->checkPost("firstName")) return false;
        if(!$this->checkPost("lastName")) return false;
        $this->checkPost("comments");
        return true;
    }

    public function callFormFunction(){
        global $idProfil;
        $comment = (isset($this->posts['comments']) == true)? $this->posts['comments'] : " ";
        sendMail($idProfil, getProfils()[$idProfil]->getTitle(), $this->posts['num'], $this->posts['mail'], $this->posts['firstName'], $this->posts['lastName'], $comment);
    }
}

 ?>
