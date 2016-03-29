<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>S.H.I.E.L.D | Superheros and their Battles </title>
</head>
<body>
<header>
    <h1>All Superheroes</h1>
</header>
<main>
    <?php
    include("dbConnect.php"); // Establish Connection with DB
    ?>

    <form action = "form_superhero_succ.php" method = "post">
        <select name="Superheros">

                <?php $superheros_query = "SELECT firstname, lastname FROM superherobattles";
                      $results = $db->query($superheros_query);
                while($row = $results->fetch_array())
                {
                    $fname = $row['firstName'];
                    $lname = $row['lastName'];
                    $gender = $row['gender'];

                echo $fname." ".$lname;
                }?>
            <option value = "<?php echo $fname." ".$lname?>">

        </select>
        <br><br>
        <input type="submit"
    </form>


    <p><a href = "form_superhero.php"> Register New Superhero </a><br></p>
    <p><a href = "index.php"> Home Page </a><br></p>


</main>
</body>
</html>

