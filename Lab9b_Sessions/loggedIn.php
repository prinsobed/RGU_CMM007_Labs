<?php
/**
 * Created by PhpStorm.
 * User: Kraine
 * Date: 4/11/2016
 * Time: 6:56 AM
 */
session_start();
$user = $_SESSION['thisUser'];
$level = $_SESSION['accessLevel'];

displayUserNameInformation($user);
displayAccessLevelInformation($level);


function displayUserNameInformation($user)
{
    if ($user == "user@gmail.com"){
        echo "<p style = \"background-color: yellow\"> Welcome ! </p>"."".$user;
    }
}

function displayAccessLevelInformation($level)
{
    if ($level == "standarduser"){
        echo "<p style = \"background-color: lightgreen\"> You are currently logged in as a 'Standard User'</p>";
    }
    else if ($level == "root"){
        echo "<p style = \"background - color: red\"> You are currently logged in as a 'Root User'</p>";
}
}


?>