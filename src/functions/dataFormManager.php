<?php

require_once('./class.php');

checkURLForm();
//check url for form action
function checkURLForm(){
    $session = getSession();
    var_dump($_POST["formSubmit"]);
    if (isset($_POST["formSubmit"])){

        $id = $_POST["idForm"];
        if ($id != getSession()->getFormID()){
            $form = createForm();
            if(isset($form) == false) return;
            if($form->getPostData()){

            }
        }
    }
}

function createForm(){
    switch ($_POST["formSubmit"]) {
        case 'add':
            return new FormAdd();
            break;

        case 'update':
            return new FormUpdate();
            break;

        default:
            return null;
            break;
    }
}
?>
