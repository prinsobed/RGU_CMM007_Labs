<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>S.H.I.E.L.D | Battles </title>
</head>
<body>
<header>
    <h1>Battles</h1>
    <p><a href = "index.php"> Home Page </a><br></p>
</header>
<main>
    <?php
    include("dbConnect.php"); // Establish Connection with DB

    $sql = "SELECT * FROM superherobattles";
    $myquery = mysqli_query($db,$sql);

    if ($myquery->num_rows > 0) {
        echo "<table><tr><th>Superhero</th><th>Villan</th></tr>";
    }

    while($row = $myquery->fetch_array()) {
        echo "<tr><td>" . $row["firstname"] . " " . $row["lastname"] . "</td><td>" . $row["villanFought"] . "</td><td>" . $row["mainPower"] . "</td></tr>";
    }

    echo "</table>";
    ?>
</main>
</body>
</html>

