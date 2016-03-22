<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>S.H.I.E.L.D | Bus Team </title>
</head>
<body>
<header>
    <h1>The Bus Team</h1>
</header>
<main>
<!--    --><?php
//        $firstName = $_POST["firstName"];
//        $lastName = $_POST["lastName"];
//        $gender = &$_POST["gender"];
//        $mainPower = $_POST["mainPower"];
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

    $sql_query = "SELECT * FROM superheros";

    $result = $db->query($sql_query);

    while ($row = $result->fetch_array()){
        //echo "firstName";

        echo "<tr><td>" . $row["firstName"] . "</td><td>" . $row["lastName"] . "</td><td>" . $row["gender"] . "</td><td>" . $row["superPower"] . "</td></tr>";

//        echo "Name: "."." ".$lastName." , "."Gender: ".$gender." , "."Main Power: ".$mainPower;

    }
    ?>

</main>
</body>
</html>

