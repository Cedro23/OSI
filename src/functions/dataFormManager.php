<?php

require_once(__DIR__.'/../class.php');


//check url for form action
function checkURLForm(){
    if (isset($_POST["delete"])){
        getConnection()->deleteOffer($_POST["delete"]);
    }

    $session = getSession();
    if (isset($_POST["formSubmit"])){
        $id = $_POST["idForm"];
        if ($id != $session->getFormID()){
            $form = createForm();
            if(isset($form) == false) return;
            if($form->getPostData()){
                $form->callFormFunction();
                var_dump(getProfils());
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

        case 'mail':
            return new FormMail();
            break;

        case 'filter':
            return new FormFilter();
            break;
        default:
            return null;
            break;
    }
}
?>
