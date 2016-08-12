<?php
/**
 * Created by PhpStorm.
 * User: Kraine
 * Date: 7/15/2016
 * Time: 9:06 AM
 */

include('dbConnect.php');

// Starting Session
session_start();

// Storing Session
$user_check=$_SESSION['login_user'];

// SQL Query To fetch name Of User
$ses_sql="SELECT firstname FROM users WHERE corporate_email='$user_check'";
$row = mysqli_fetch_assoc($dbConn, $ses_sql);

$login_session =$row['firstname'];
if(!isset($login_session)){
    mysqli_close($connection); // Closing Connection
    header('Location: home.php'); // Redirecting To Home Page
}
?>