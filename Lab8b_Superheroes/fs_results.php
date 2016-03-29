<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>S.H.I.E.L.D | Agent Success </title>
</head>
<body>
<header>
    <h1>Welcome to the Bus.. !</h1>
</header>
<main>
    <?php
        $firstName = $_POST["firstName"];
        $lastName = $_POST["lastName"];
        $gender = &$_POST["gender"];
        $mainPower = $_POST["mainPower"];
    ?>

    <?php

    $servername = "ap-cdbr-azure-east-c.cloudapp.net";
    $username = "bf3d941a653cf6";
    $password = "68c64445";
    $dbname = "veesoft";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn){
        die("Connection Failed Buddie: ".mysqli_connect_error());
    }

    $sql = "INSERT INTO superheros(firstName, lastName, gender, mainPower)
                VALUES ('$firstName','$lastName','$gender','$mainPower')";

    if (mysqli_query($conn,$sql)){
        echo "New Meta-human has joined S.H.I.E.L.D ";
    }else{
        echo "Error: ".mysqli_connect_error($conn);

    }

    echo "<br>";
    echo "Welcome! " . $firstName." ".$lastName. " to our ".$gender. " team" ." on Director Coulson's Bus <br>";
    echo "Your ".$mainPower. " will be very useful, you will be trained by Agent May (The Calvary)";

    echo "<br><br>";


    ?>
    <p><a href = "bus_team.php"> View ALL Meta Humans on Coulson's Bus </a><br></p>"

</main>
</body>
</html>

