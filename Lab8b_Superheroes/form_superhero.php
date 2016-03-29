<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>S.H.I.E.L.D | Superhero Registration</title>
</head>
<body>
<header>
    <h1>Superhero Registration</h1>
    <p><a href = "index.php"> Home Page </a><br></p>
</header>
<main>


    <form action = "form_superhero_succ.php" method = "post">
        <input type = "text" placeholder = "firstName" name = "firstName">
        <input type = "text" placeholder = "lastName" name = "lastName">
        <input type="radio" name="gender" value="male" checked> Male<br>
        <input type="radio" name="gender" value="female"> Female<br>
        <input type="radio" name="gender" value="other"> Other
        <input type = "text" placeholder = "mainPower" name = "mainPower">
        <input type = "submit" value ="Join">
    </form>


</main>
</body>
</html>

