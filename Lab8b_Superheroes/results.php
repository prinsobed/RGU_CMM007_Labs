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
    <?php
        $firstName = $_POST["firstName"];
        $lastName = $_POST["lastName"];
        $gender = &$_POST["gender"];
        $mainPower = $_POST["mainPower"];
        echo "Welcome ! " . $firstName." ".$lastName. "to our "." ".$gender. " team" ." on Director Coulson's Bus <br>";

    echo "Your ".$mainPower. " will be very useful";
    ?>


</main>
</body>
</html>

