<?php
/**
 * Created by PhpStorm.
 * User: Kraine
 * Date: 4/24/2016
 * Time: 9:12 PM
 */

//include("dbConnect.php"); // Establish Connection with DB
//


$servername = "ap-cdbr-azure-east-c.cloudapp.net";
$username = "bf3d941a653cf6";
$password = "68c64445";
$dbname = "veesoft";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn){
    die("Connection Failed Buddie: ".mysqli_connect_error());
}

$bugName=$_POST['bugname'];
$bugSummary=$_POST['bugsummary'];
$bugCategory=$_POST['bugcategory'];


    $sql = "INSERT INTO bugtracker(bugname, bugsummary, bugcategory)
                VALUES ('$bugName','$bugSummary','$bugCategory')";

    if (mysqli_query($conn,$sql)){
        echo "New Bug Added";
    }else{
        echo "Error: ".mysqli_connect_error($conn);

    }

?>