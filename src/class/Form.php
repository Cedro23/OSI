<?php
class Form
{
    private $posts = [];

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
        }
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
        $this->getSkills();
    }
    public function callBdd(){
        $connection->addOffer($this->posts);
    }
}

class FormUpdate extends FormAdd
{
    public function getPostData(){
        checkPost("id");
        parrent::getPostData();
    }

    public function callBdd(){
        $connection->addOffer($this->posts);
    }
}



?>
