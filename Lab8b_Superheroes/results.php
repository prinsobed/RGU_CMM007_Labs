<!---->
<!--/**-->
<!-- * Created by PhpStorm.-->
<!-- * User: Kraine-->
<!-- * Date: 3/22/2016-->
<!-- * Time: 6:19 AM-->
<!-- */-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Agents of S.H.I.E.L.D | MetaHuman Registration</title>
</head>
<body>
<header>
    <h1>Registration for Meta-Humans - Details Confirmation</h1>
</header>
<main>


    <form action = "results.php" method = "post">
        <input type = "text" placeholder = "firstName" name = "firstName">
        <input type = "text" placeholder = "lastName" name = "lastName">
        <input type="radio" name="gender" value="male" checked> Male<br>
        <input type="radio" name="gender" value="female"> Female<br>
        <input type="radio" name="gender" value="other"> Other
        <input type = "text" placeholder = "mainPower" name = "mainPower">
        <input type = "submit" value ='Go.. Go.. Goo..!'
    </form>
    <?php
        $firstName = $_POST["firstName"];
        $lastName = $_POST["lastName"];
        $gender = &$_POST["gender"];
        $mainPower = $_POST["mainPower"];
        echo "Welcome ! " . $firstName.$lastName. "to our ".$gender. " team" ." on Director Coulson's Bus <br>";

    echo "Your ".$mainPower. " will be very useful";
    ?>


</main>
</body>
</html>

