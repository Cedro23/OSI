<?php
require_once("formsClass/FormAdd.php");
require_once("formsClass/FormUpdate.php");
require_once("formsClass/FormFilter.php");
require_once("formsClass/FormMail.php");
class Form
{
    protected $posts = [];

    function __construct()
    {

    }

    protected function checkPost(string $_str){
        if(isset($_POST[$_str]) == false){
            var_dump("null");
            return false;
        }
        else if ($_POST[$_str] == "" ){
            $this->posts[$_str] = "";
            return false;
        }else{
            $this->posts[$_str] = $_POST[$_str];
            return true;
        }
    }

    protected function getSkills(){
        if(isset($_POST["skills"]) == false){
            $this->posts["skills"] = [];
            return false;
        }
        else if ($_POST["skills"] == "" ){
            $this->posts["skills"] = [];
            return false;
        }else{
            $this->posts["skills"] = [];
            foreach ($_POST["skills"] as $skill) {
                $this->posts["skills"][$skill]=$skill;
            }
            return true;
        }
    }

    public function callFormFunction(){

    }

    public function getPostData(){

    }
}








?>
