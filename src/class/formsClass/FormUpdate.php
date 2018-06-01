<?php
class FormUpdate extends FormAdd
{
    public function getPostData(){
        if(!$this->checkPost("id"))return false;
        parent::getPostData();
        return true;
    }

    public function callFormFunction(){
        getConnection()->updateOffer($this->posts);
        $this->init();
    }
}

 ?>
