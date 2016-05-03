<?php
/**
* Created by PhpStorm.
* User: 1314863
* Date: 14/03/2016
* Time: 10:14
*/

//include("dbConnect.php"); // Establish Connection with DB

$servername = "ap-cdbr-azure-east-c.cloudapp.net";
$username = "bf3d941a653cf6";
$password = "68c64445";
$dbname = "veesoft";

$conn = mysqli_connect($servername, $username, $password, $dbname);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bug Tracker | Add Bug</title>
    <link rel="stylesheet" href="assets/css/styles.css"  type='text/css'>
    <link rel="stylesheet" href="assets/css/formstyles.css"  type='text/css'>
    <link rel="stylesheet" href="assets/css/unsemantic-grid-responsive-tablet.css" type='text/css'>
    <link rel="stylesheet" href="assets/css/unsemantic-grid-desktop.css" type='text/css'>
    <link rel="stylesheet" href="assets/css/unsemantic-grid-mobile.css" type='text/css'>
    <link rel="stylesheet" href="assets/css/unsemantic-grid-responsive.css" type='text/css'>
    <link rel="stylesheet" href="assets/css/message.css" type="text/css"/>
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
    <aside class= "grid-15" id="cont1">
        <nav>
            <ul>
                <li><a href="showbugs.php">All Bug Items</a> </li>
                <li><a href="bugs.html">Android Bugs</a></li>
                <li><a href="bugs.html">iOS Bugs</a> </li>
                <li><a href="bugs.html">Windows Bugs</a></li>
                <li><a href="addbugs.php">Insert Bug</a> </li>
            </ul>
        </nav>
    </aside>

    <section class= "grid-85" id="cont2">
        <article>
            <div id="bugTable">
                <?php
                if ($_SERVER['REQUEST_METHOD'] === 'GET') {
                    echo "
                <form action = '<?{$_SERVER['PHP_SELF']}?>' method = 'POST'>
                    <ul class='form-style-1'>
                        <li>
                            <label for = 'bugName'>Bug Name: <span class='required'>*</span></label>
                            <input type='text' name='bugName' class='field-text' value=''  accesskey='1' placeholder='Name of Bug' required/><br>
                        </li>
                        <li>
                            <label for = 'bugCategory'>Bug Category: <span class='required'>*</span></label>
                            <select name='bugCategory' class='field-select' id='bugCategory' accesskey='2' required>
                            <option value= ' '>Select Option</option>
                            <option value='Android'>Android Bugs</option>
                            <option value='iOS'>iOS Bugs</option>
                            <option value='Windows'>Windows Bugs</option>
                            </select>
                        </li>
                        <br>
                        <li>
                            <label for = 'bugSummary'>Bug Summary: <span class='required'>*</span></label>
                            <textarea name='bugSummary' class='field-long' id='bugSummary' accesskey='3' placeholder='Your comments on this Bug' required></textarea>
                        </li>
                        <br>
                        <li>
                        <input type='submit' value='Submit'>
                        </li>
                    </ul>
                </form>";
                }

                elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // execute if requested using HTTP POST Method
                $bugName=$_POST['bugName'];
                $bugSummary=$_POST['bugSummary'];
                $bugCategory=$_POST['bugCategory'];


                $sql = "INSERT INTO bugtracker(bugname, bugsummary, bugcategory)
                VALUES ('$bugName','$bugSummary','$bugCategory')";
                mysqli_query($conn, $sql);
                    header('location: showbugs.php');
                }
                else{
                    header('location: index.php');
                }
                    ?>
                ?>
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
<!---->
<?php
//if (!$conn){
//    die("<div class=\"boundary\">
//                <div role=\"alert\" class=\"message critical\">
//                    <p><b>Opps, error occured</b></p>
//                    <p>Could not connect to DB. Please check your Connection.</p>
//                </div>
//                </div>
//                ");
//}
//
//if (mysqli_query($conn,$sql)){
//    echo "<div class=\"boundary\">
//                <div role=\"alert\" class=\"message success\">
//                    <p><b>Congrats, you arrested a New Bug!</b></p>
//                    <p>Record Inserted into Database.</p>
//                </div>
//                </div>";
//}else{
//    echo "\"<div class=\"boundary\">
//                <div role=\"alert\" class=\"message critical\">
//                    <p><b>Opps, error occured</b></p>
//                    <p>Could not insert into DB. Please check your Insert Code.</p>
//                </div>
//                </div>";
//}
//?>