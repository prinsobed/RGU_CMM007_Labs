<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>S.H.I.E.L.D | Superhero Registration</title>
    <link type="text/css" rel="stylesheet" href="assets/css/styles.css"/>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
</head>
<body>
<header>
    <img id="logo" src="assets/images/banner.png" alt="Logo">

    <nav>
        <ul>
            <li><a href = "form_superhero.php">Register as a Superhuman</a></li>
            <li><a href = "form_battle.php">Add a Battle</a></li>
            <li><a href = "report_superhero.php">View all Superheros</a></li>
            <li><a href = "report_battle.php">View all Battles</a></li>
            <li><a href = "report_superhero_select.php">Select Battles of Superheros</a></li>
        </ul>
    </nav>
</header>
<main>

    <?php
    $servername = "ap-cdbr-azure-east-c.cloudapp.net";
    $username = "bf3d941a653cf6";
    $password = "68c64445";
    $dbname = "veesoft";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn){
        die("Connection Failed Buddie: ".mysqli_connect_error());
    }

    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $gender = &$_POST["gender"];
    $mainPower = $_POST["mainPower"];

    $sql = "INSERT INTO superheros(firstName, lastName, gender, mainPower)
                VALUES ('$firstName','$lastName','$gender','$mainPower')";

    if (mysqli_query($conn,$sql)){
        echo "New Meta-human has joined S.H.I.E.L.D ";
    }else{
        echo "Error: ".mysqli_connect_error($conn);

    }

    echo "<br>";
    echo "Welcome to S.H.I.E.L.D, Agent " . $firstName." ".$lastName. "<br>";
    echo "<br><br>";
    echo "Your Codename is: ".$mainPower ;
    ?>

    <p><a href = "report_superhero.php"> View all Superheros </a><br></p>


</main>
<footer>
    <p>S.H.I.E.L.D New Avengers © 2016 Obed Kraine LabWorks</p>
</footer>
</body>
</html>

