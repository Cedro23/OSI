<?php

/**
 *
 */
class Session
{

    function __construct()
    {
        session_start();
    }

    public function getFormID(){
        if (isset($_SESSION["formID"])==false){
            $_SESSION["formID"] = -1;
        }
        return $_SESSION["formID"];
    }

    public function setFormID($_id){
        $_SESSION["formID"] = $_id;
    }
}
 ?>
