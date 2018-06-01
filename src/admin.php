<?php
    require_once("functions.php");

    if (isset($_POST['username']) and isset($_POST['password'])) {
        logAdmin($_POST['username'],$_POST['password']);
    }

 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <form class="" action="" method="post">
            <label for="username">Username :</label>
            <input type="text" name="username" id="username" value="" />
            <label for="password">Mot de passe :</label>
            <input type="password" name="password" id="password" value="" />
            <button type="submit" name="btn_login">Se connecter</button>
        </form>
    </body>
</html>
