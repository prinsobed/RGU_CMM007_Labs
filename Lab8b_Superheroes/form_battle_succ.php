<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>S.H.I.E.L.D | Battle Record </title>
</head>
<body>
<header>
    <h1>Welcome to the Bus.. !</h1>
    <p><a href = "index.php"> Home Page </a><br></p>"
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
    $sID = $_POST["superheroID"];
    $vf = $_POST["villian"];


    $sql = "INSERT INTO battles(superheroID, villanFought)
                VALUES ('$sID','$vf')";

    if (mysqli_query($conn,$sql)){
        echo "New Battle Added ";
    }else{
        echo "Error: ".mysqli_connect_error($conn);

    }
    ?>

    <p><a href = "report_battles.php"> View all Battles </a><br></p>"



</main>
</body>
</html>

