<!---->
<!--/**-->
<!-- * Created by PhpStorm.-->
<!-- * User: Kraine-->
<!-- * Date: 3/22/2016-->
<!-- * Time: 6:19 AM-->
<!-- */-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Agents of S.H.I.E.L.D | MetaHuman Registration</title>
</head>
<body>
<header>
    <h1>Registration for Meta-Humans - Details Confirmation</h1>
</header>
<main>
<!--    --><?php
//        $firstName = $_POST["firstName"];
//        $lastName = $_POST["lastName"];
//        $gender = &$_POST["gender"];
//        $mainPower = $_POST["mainPower"];
//        echo "Welcome ! " . $firstName." ".$lastName. " to our ".$gender. " team" ." on Director Coulson's Bus <br>";
//
//    echo "Your ".$mainPower. " will be very useful";
//    ?>

    <?php

    $servername = "ap-cdbr-azure-east-c.cloudapp.net";
    $username = "bf3d941a653cf6";
    $password = "68c64445";
    $dbname = "veesoft";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!conn){
        die("Connection Failed Buddie: ".mysqli_connect_error());
    }

    $sql = "INSERT INTO superheros('firstName', 'lastName', 'gender', 'mainPower')
                VALUES ($firstName,$lastName,$gender,$mainPower)";

    if (mysqli_query($conn,$sql)){
        echo "New MetaHuman has joined S.H.I.E.L.D";
    }else{
        echo "Error: ".mysqli_connect_error($conn);

    }

    echo "Welcome ! " . $firstName." ".$lastName. " to our ".$gender. " team" ." on Director Coulson's Bus <br>";
    echo "Your ".$mainPower. " will be very useful";
    ?>

</main>
</body>
</html>

