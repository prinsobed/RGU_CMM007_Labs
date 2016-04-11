<?php
/**
 * Created by PhpStorm.
 * User: Kraine
 * Date: 4/11/2016
 * Time: 6:50 AM
 */

$username = $_POST["username"];
$password = $_POST["password"];

if ($username=="user" && $password=="8865")
{
    setcookie('access_level_cookie','standarduser');
}

header('Location: loggedIn.php');

?>