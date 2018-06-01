<?php

/**
 *
 */
class FormAdmin extends Form
{
    public function getPostData(){
        $postsCheck = [];
        if(!$this->checkPost("username")){
            global $userErr;
            $userErr = '<i class="fas fa-exclamation-circle fa-lg"></i>Mauvais identifiant';
            return false;
        }
        if(!$this->checkPost("password")){
            global $passwordErr;
            $passwordErr = '<i class="fas fa-exclamation-circle fa-lg"></i>Mauvais mot de passe';
            return false;
        }
    }
    public function callFormFunction(){
        logAdmin($this->posts['username'],$this->posts['password']);
        header("Location: /home/");
    }
}

 ?>
