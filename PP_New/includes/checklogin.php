<?php
/**
 * Created by PhpStorm.
 * User: Obed Kraine, RGU-1314863 , o.k.boachie@rgu.ac.uk
 * Project: ProdPredict V1
 * Date: 8/1/2016
 * Time: 8:02 AM
 */


$host="ap-cdbr-azure-east-c.cloudapp.net"; // Host name
$username="bed8c15b456030"; // Mysql username
$password="58380471"; // Mysql password
$db_name="db_prodpredict"; // Database name
$tbl_name="users"; // Table name

// Connect to server and select databse.
$conn=mysqli_connect($host, $username, $password, $db_name)or die("Cannot Connect");
mysqli_select_db($conn, $db_name)or die("Cannot Select DB");

// username and password sent from form
$myusername=$_POST['username'];
$mypassword=$_POST['password'];

// To protect MySQL injection (more detail about MySQL injection)
//$myusername = stripslashes($myusername);
//$mypassword = stripslashes($mypassword);
//$myusername = mysqli_real_escape_string($myusername, $conn);
//$mypassword = mysqli_real_escape_string($mypassword, $conn);
//$enc_mypassword=md5($mypassword);


$sql="SELECT * FROM $tbl_name WHERE email='$myusername' and password='$mypassword'";
$result=mysqli_query($conn, $sql);



if(mysqli_num_rows($result) == 1){
while($returnedResult = mysqli_fetch_array($result)){

    session_start();
    $_SESSION['username'] = $myusername;
    $_SESSION['firstname'] = $returnedResult["firstname"];
    $_SESSION['user_type'] = $returnedResult["user_type"];
    }
    header("location:login_success.php");
}
else{
    header('Location: ../index.php?login=error');
}




