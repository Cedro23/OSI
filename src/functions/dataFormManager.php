<?php

require_once(__DIR__.'/../class.php');


//check url for form action
function checkURLForm(){
    if (isset($_POST["delete"])){
        getConnection()->deleteOffer($_POST["delete"]);
    }
    if (isset($_POST["disconnect"])){
        $session->connectAdmin(false);
        var_dump("aller");
    }

    $session = getSession();
    if (isset($_POST["formSubmit"])){
        $id = $_POST["idForm"];

        if ($id != $session->getFormID()){
            $form = createForm();
            if(isset($form) == false) return;

            if($form->getPostData()){
                $form->callFormFunction();

            }else{
                if($session->getConnectionAdmin() == true)
                {
                    echo('<script>
                     document.addEventListener("DOMContentLoaded",function(){
                         console.log("[DOM] Loaded")

                         document.getElementById(\'form_add\').classList.remove("hide_form");
                    })
                     </script>');
                }
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
        case 'admin':
            return new FormAdmin();
            break;
        default:
            return null;
            break;
    }
}
?>
