<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>S.H.I.E.L.D | Superheros </title>
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

    <p><a href = "form_superhero.php"> Register New Superhero </a><br></p>
</main>
<footer>
    <p>S.H.I.E.L.D New Avengers © 2016 Obed Kraine LabWorks</p>
</footer>
</body>
</html>

