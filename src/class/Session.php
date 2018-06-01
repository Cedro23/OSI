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

    public function connectAdmin($_isConnect){
        $_SESSION['admin'] = $_isConnect;
    }

    public function getConnectionAdmin(){
        if (isset($_SESSION["admin"])==false){
            $_SESSION["admin"] = false;
        }
        return $_SESSION['admin'];
    }
}
 ?>
