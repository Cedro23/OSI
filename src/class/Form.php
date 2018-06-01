<?php
class Form
{
    protected $posts = [];

    function __construct()
    {

    }

    protected function checkPost(string $_str){
        if ($_POST[$_str] == "" || isset($_POST[$_str]) == false){
            return false;
        }else{
            $this->posts[$_str] = $_POST[$_str];
            return true;
        }
    }

    protected function getSkills(){
        if ($_POST["skills"] == "" || isset($_POST["skills"]) == false){
            return false;
        }else{
            $this->posts["skills"] = [];
            foreach ($_POST["skills"] as $skill) {
                $this->posts["skills"][]=$skill;
            }
            return true;
        }
    }

    public function callFormFunction(){

    }

    public function getPostData(){

    }

    public function callBdd(){

    }
}


class FormAdd extends Form
{
    public function getPostData(){
        if(!$this->checkPost("title")) return false;
        if(!$this->checkPost("contract")) return false;
        if(!$this->checkPost("year")) return false;
        if(!$this->checkPost("formation")) return false;
        if(!$this->checkPost("description")) return false;
        if(!$this->checkPost("period")) return false;
        if(!$this->getSkills()) return false;

        return true;
    }
    public function callFormFunction(){
        getConnection()->addOffer($this->posts);
    }
}

class FormUpdate extends FormAdd
{
    public function getPostData(){
        if(!$this->checkPost("id"))return false;
        parent::getPostData();
        return true;
    }

    public function callFormFunction(){
        getConnection()->updateOffer($this->posts);
    }
}

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
