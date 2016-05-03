<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bug Tracker | Home</title>
    <link rel="stylesheet" href="assets/css/styles.css"  type='text/css'>
    <link rel="stylesheet" href="assets/css/unsemantic-grid-responsive-tablet.css" type='text/css'>
    <link rel="stylesheet" href="assets/css/unsemantic-grid-desktop.css" type='text/css'>
    <link rel="stylesheet" href="assets/css/unsemantic-grid-mobile.css" type='text/css'>
    <link rel="stylesheet" href="assets/css/unsemantic-grid-responsive.css" type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>

    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1"/>
</head>
<body>
<!--Start of Header-->
<header>
    <a href="index.php"><img src="assets/images/logo.png" alt="Site Logo" id="logo"></a>
    <section id="headText">
        <h1>BugTracker</h1>
        <h2>Keeping Track of all the pesky bugs</h2>
    </section>
</header>
<!--End of Header-->

<!--Start of Page Main-->
<main class= "grid-container">
    <section class= "grid-15" id="cont1">
        <nav>
            <ul>
                <li><a href="showbugs.php">All Bug Items</a> </li>
                <li><a href="bugs.html">Android Bugs</a></li>
                <li><a href="bugs.html">iOS Bugs</a> </li>
                <li><a href="bugs.html">Windows Bugs</a></li>
                <li><a href="addbugs.php">Insert Bug</a> </li>
            </ul>
        </nav>
    </section>

    <section class= "grid-85" id="cont2">
        <article>
            <div id= "bugArticle">
                <p>
                    A software bug is an error, flaw, failure or fault in a computer program or
                    system that causes it to produce an incorrect or unexpected result, or to
                    behave in unintended ways. Most bugs arise from mistakes and errors made
                    by people in either a program's source code or its design, or in frameworks
                    and operating systems used by such programs, and a few are caused by compilers
                    producing incorrect code. A program that contains a large number of bugs, and/or
                    bugs that seriously interfere with its functionality, is said to be buggy or defective.</p>
                <p>
                    Reports detailing bugs in a program are commonly known as bug reports,
                    defect reports, fault reports, problem reports, trouble reports,
                    change requests and so forth.</p>
            </div>
        </article>
    </section>
</main>
<!--End of Page Main-->

<!--Start of Footer-->
<footer>
    <p>Designed by Obed Kraine Boachie, 2016.</p>
</footer>
<!--End of Footer-->
</body>
</html>

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
$username = "";
$level = "";


function displayUserNameInformation($user)
{
    if ($user == "user@gmail.com"){
        $user = $username;
    }
}

?>