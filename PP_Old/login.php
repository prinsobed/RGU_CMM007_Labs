<?php
/**
 * Created by PhpStorm.
 * User: Kraine
 * Date: 15/07/2016
 * Time: 5:53 AM
 */

//include("dbConnect.php"); // Establish Connection with DB

define('DB_SERVER', 'ap-cdbr-azure-east-c.cloudapp.net');
define('DB_USERNAME','bed8c15b456030');
define('DB_PASSWORD', '58380471');
define('DB_DATABASE', 'db_prodpredict');

$dbConn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        $error = "Username or Password is invalid";
    }
    else
    {
// Declare $username and $password
        $username=$_POST['username'];
        $password=$_POST['password'];

// MySQL injection prevention
        $username = stripslashes($username);
        $password = stripslashes($password);
//        $username = mysql_real_escape_string($_POST['username']);
//        $password = mysql_real_escape_string($_POST['password']);

// SQL query to fetch information of registered users and finds user match.
        $query = "SELECT * FROM users WHERE corporate_email='$username' AND password='$password'";
        $rows = mysqli_num_rows($dbConn, $query);
        if ($rows == 1) {
            $_SESSION['login_user']=$username; // Initializing Session
            header("location:home.php"); // Redirecting To Other Page
        } else {
            $error = "Username or Password is invalid";
        }
        mysqli_close($dbConn); // Closing Connection
    }
}
