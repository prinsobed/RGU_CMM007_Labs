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
    <a href="http://www.google.com"> </a>

    <?php
    $query = $_GET["query"];
    $type = $_GET["type"];
    echo "The Query is ".$cat."and the type is ".$type;
    ?>
</main>
</body>
</html>

