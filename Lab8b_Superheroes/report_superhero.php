<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>S.H.I.E.L.D | Superheros </title>
</head>
<body>
<header>
    <h1>All Superheroes</h1>
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

    <p><a href = "form_superhero.php"> Register New Superhero </a><br></p>"
    <p><a href = "index.php"> Home Page </a><br></p>"


</main>
</body>
</html>

