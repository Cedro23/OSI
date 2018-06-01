<?php
    require_once("functions.php");

    $isAdmin = false;

    if (isset($_POST['username']) and isset($_POST['password'])) {
        $logins = $connection->getTableLogin();

            if ($_POST['username'] == $logins[1]['username']) {
                if ($_POST['password'] == $logins[1]['password']) {
                    $isAdmin = true;
                }
            }
    }
    var_dump($isAdmin);
 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <form class="" action="" method="post">
            Username :<br>
            <input type="text" name="username" value="" placeholder="username">
            <br>Password :<br>
            <input type="password" name="password" value="" placeholder="password">
            <br>
            <button type="submit" name="btn_login">Se connecter</button>
        </form>
    </body>
</html>
