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
    <?php
    include("dbConnect.php"); // Establish Connection with DB

    $sql = "SELECT * FROM superheros";
    $myquery = mysqli_query($db,$sql);

    if ($myquery->num_rows > 0) {
    echo "<table><tr><th>Name</th><th>Gender</th><th>Superpower</th></tr>";
    }

    while($row = $myquery->fetch_array()) {
    echo "<tr><td>" . $row["firstName"] . " " . $row["lastName"] . "</td><td>" . $row["gender"] . "</td><td>" . $row["mainPower"] . "</td></tr>";
    }

    echo "</table>";
    ?>


</main>
</body>
</html>

