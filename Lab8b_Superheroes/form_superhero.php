<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>S.H.I.E.L.D | Superhero Registration</title>
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


    <form action = "form_superhero_succ.php" method = "post">
        <fieldset>
            <legend>Registration</legend>
                <input type = "text" class= "csss" placeholder = "First Name Here" name = "firstName"><br>
                <input type = "text" class= "csss" placeholder = "Last Name Here" name = "lastName"><br>
                <label>Gender</label><br>
                <input type="radio" class= "csss" name="gender" value="male" checked> Male<br>
                <input type="radio" class= "csss" name="gender" value="female"> Female<br>
                <input type="radio" class= "csss" name="gender" value="other"> Other<br>
                <input type = "text" class= "csss" placeholder = "mainPower" name = "mainPower"><br><br>
                <input type = "submit" value ="Join">
        </fieldset>
    </form>


</main>
<footer>
    <p>S.H.I.E.L.D New Avengers © 2016 Obed Kraine LabWorks</p>
</footer>
</body>
</html>

