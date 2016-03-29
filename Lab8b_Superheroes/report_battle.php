<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>S.H.I.E.L.D | Battles </title>
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
<footer>
    <p>S.H.I.E.L.D New Avengers © 2016 Obed Kraine LabWorks</p>
</footer>
</body>
</html>

