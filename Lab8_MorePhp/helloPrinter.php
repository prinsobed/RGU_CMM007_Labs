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


    <form action = "helloSelector.php" method = "post">
        <input type = "text" placeholder = "Username" name = "username">
        <input type = "password" placeholder = "Password" name = "password">
        <input type = "submit" value ='Go.. Go.. Goo..!'
    </form>

    <?php
    //include database
    include ("dbConnect.php");

    $firstName = $_POST["username"];
    $lastName = $_POST["password"];

    $sql = "INSERT INTO users(username, password) VALUES ('$username','$password')";

    if (mysqli_query($db, sql)){

    }else {
        echo "Error" . $sql . "<br>" . mysqli_error($db);
    }

    header("location:viewusers.php")
    ?>


</main>
</body>
</html>

