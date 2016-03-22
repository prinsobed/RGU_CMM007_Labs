<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>The PHP Get Method</title>
</head>
<body>
<header>
    <h1>Using Urls to send information</h1>
</header>
<main>
    <a href="helloSelector.php?userName=mike">HTML - Click Me</a>

    <?php
    $location = "helloSelector.php?username=mike";
    header($location);
    ?>

    <?php
    $username =$_GET["username"];
    echo $username;
    ?>

    <?php
    $username = $_GET["username"];
    echo $username;

    echo "<p>Hello".$username.", how are you today</p>";

    echo "<p>Hello {$username}, how are you today</p>"
    ?>


</main>
</body>
</html>

