<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>S.H.I.E.L.D | Battle Record</title>
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
    <form action = "form_battle_succ.php" method = "post">
        <select name="superheros">
            <?php
            include("dbConnect.php"); // Establish Connection with DB
            $superheros_query = "SELECT * FROM superheros";
            $results = $db->query($superheros_query);
            while($row = $results->fetch_array())
            {
                $sID = $row['superheroID'];
                $fname = $row['firstName'];
                $lname = $row['lastName'];
                $gender = $row['gender'];
                $mpower = $row['mainPower'];

                echo "<option value = '{$sID}'>{$fname} {$lname}</option>";
            }?>

        </select>
        <br><br>
        <input type = "text" name = "villian" placeholder="Villian Fought">
        <input type="submit" text="Add Battle">
    </form>


    <p><a href = "report_battle.php"> View all Battles </a><br></p>

</main>
<footer>
    <p>S.H.I.E.L.D New Avengers © 2016 Obed Kraine LabWorks</p>
</footer>
</body>
</html>

