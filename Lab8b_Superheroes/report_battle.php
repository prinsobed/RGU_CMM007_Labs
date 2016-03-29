<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>S.H.I.E.L.D | Battles </title>
</head>
<body>
<header>
    <h1>Battles</h1>
</header>
<main>


    <?php
    include("dbConnect.php"); // Establish Connection with DB
    ?>

    <form action = "form_superhero_succ.php" method = "post">
        <select name="Superheros">
        <option value = "<?php $superheros_query = "SELECT firstname, lastname FROM superherobattles";
                        $myquery = mysqli_query($db,$superheros_query); ?>
                        <?php echo "firstname"." "."lastname"?>"
                </select>
        <br><br>
        <input type="submit"
    </form>
<!--    --><?php
//    $sql = "SELECT * FROM superherobattles";
//    $myquery = mysqli_query($db,$sql);
//
//    if ($myquery->num_rows > 0) {
//    echo "<table><tr><th>Name</th><th>Gender</th><th>Superpower</th></tr>";
//    }
//
//    while($row = $myquery->fetch_array()) {
//    echo "<tr><td>" . $row["firstName"] . " " . $row["lastName"] . "</td><td>" . $row["gender"] . "</td><td>" . $row["mainPower"] . "</td></tr>";
//    }
//
//    echo "</table>";
//    ?>


</main>
</body>
</html>

