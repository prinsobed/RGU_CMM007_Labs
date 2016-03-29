<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>S.H.I.E.L.D | Superhero Battles </title>
</head>
<body>
<header>
    <h1>Superhero Battles</h1>
    <p><a href = "index.php"> Home Page </a><br></p>
</header>
<main>


    <form action = "form_superhero_succ.php" method = "post">
        <select name="Superheros">
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


    <p><a href = "form_superhero.php"> Register New Superhero </a><br></p>
</main>
</body>
</html>

