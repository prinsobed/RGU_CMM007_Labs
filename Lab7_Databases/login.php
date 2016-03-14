<?php
/**
 * Created by PhpStorm.
 * User: Kraine
 * Date: 3/14/2016
 * Time: 5:53 AM
 */
include("dbConnect.php"); // Establish Connection with DB

if(empty($_POST["username"])|| empty($_POST["password"])) {
    echo "Both fields are required.";
}else
{
    $username=$_POST['username'];
    $password=$_POST['password'];
}

$sql="SELECT uid FROM users WHERE username='$username' and password='$password'";

$result=mysqli_query($db,$sql);


?>