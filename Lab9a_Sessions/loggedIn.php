<?php
/**
 * Created by PhpStorm.
 * User: Kraine
 * Date: 4/11/2016
 * Time: 6:56 AM
 */
session_start();
$accesslevel = $_COOKIE['access_level_cookie'];

displayAccessLevelInformation($accesslevel);

function displayAccessLevelInformation($accesslevel)
{
    if ($accesslevel == "standarduser"){
        echo "<p style = \"background-color: lightgreen\"> You are currently logged in as a 'Standard User'</p>";
    }
    else if ($accesslevel == "root"){
        echo "<p style = \"background - color: red\"> You are currently logged in as a 'Root User'</p>";
}
}
?>