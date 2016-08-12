<?php
/**
 * Created by PhpStorm.
 * User: Kraine
 * Date: 7/15/2016
 * Time: 9:25 AM
 */

session_start();
if(session_destroy()) // Destroying All Sessions
{
    header("Location: index.php"); // Redirecting To Home Page
}
