<?php
class Form
{
    private $posts = [];

    function __construct()
    {

    }

    protected function checkPost(string $_str){
        var_dump($_str);
        if ($_POST[$_str] == "" || isset($_POST[$_str]) == false){
            return false;
        }else{
            $this->posts[$_str] = $_POST[$_str];
            return true;
        }
    }

    public function getPostData(){

    }

    public function callBdd(){
        switch ($this->formType) {
            case 'Add':
                $connection->addOffer($this->posts);
                break;
            case 'Modify':
                $connection->addOffer($this->posts);
                break;
        }
    }
}


class FormAdd extends Form
{
    public function getPostData(){
        if($this->checkPost("title")) return false;
        if($this->checkPost("contract")) return false;
        if($this->checkPost("class")) return false;
        if($this->checkPost("formation")) return false;
        if($this->checkPost("description")) return false;
        if($this->checkPost("period")) return false;

    }
}

class FormUpdate extends FormAdd
{
    public function getPostData(){
        checkPost("id");
        parrent::getPostData();
    }
}



?>
