<?php
/**
 * Created by PhpStorm.
 * User: Kraine
 * Date: 4/24/2016
 * Time: 9:12 PM
 */

include("dbConnect.php"); // Establish Connection with DB

    $bugName=$_POST['bugname'];
    $bugSummary=$_POST['bugsummary'];
    $bugSummary=$_POST['bugcategory'];

    $sql = "INSERT INTO bugtracker(bugname, bugsummary, bugcategory)
                VALUES ('$bugName','$bugSummary','$bugCategory')";

?>