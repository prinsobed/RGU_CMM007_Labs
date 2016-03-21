<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Marvel Movies | Marvel Studio Movies</title>
    <link type="text/css" rel="stylesheet" href="assets/css/styles.css"/>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
</head>
<body>
<main>
    <header>

        <img id="logo" src="assets/images/logomain.png" alt="marvel_logo">




                <nav>
                    <ul id="mainNav">
                    <li><a href="index.php">All Movies</a></li>
                    <li><a href="marvel.php">Marvel Studio Movies</a></li>
                    <li><a href="2010movies.php">2010 Movies</a></li>
                    <li><a href="xmenmovies.php">X-Men Movies</a></li>
                    <li><a href="thormovies.php">Thor Movies</a></li>
                    <li><a href="contact">Contact Us</a></li>
                    </ul>
                </nav>


        <div id="main_banner">
            <img id="banner" src="assets/images/newbanner.png" alt="main banner">
        </div>
    </header>

    <div class="main_content">
    <?php
    include("dbConnect.php"); // Establish Connection with DB

    $sql = "SELECT * FROM marvelmovies WHERE 'productionStudio' LIKE {%Marvel}";
    $myquery = mysqli_query($db,$sql);

    if ($myquery->num_rows > 0) {
        echo "<table><tr><th>MovieID</th><th>Year</th><th>Title</th><th>Production Studio</th><th>Notes</th></tr>";
    }
    while($row = $myquery->fetch_array()) {
        //$movieID = $row['marvelMovieID']; $yearReleased = $row['yearReleased']; $titles =$row['title']; $prosStudio = $row['productionStudio']; $note = $row['notes'];

        echo "<tr><td>" . $row["marvelMovieID"] . "</td><td>" . $row["yearReleased"] . "</td><td>" . $row["title"] . "</td><td>" . $row["productionStudio"] . "</td><td>" . $row["notes"] . "</td></tr>";
    }
    echo "</table>";

    ?>

    </div>

</main>

<div class="fixer"></div>
<footer>
    <p>Marvel Cinematic Universe © 2016 Obed Kraine LabWorks</p>
</footer>

</body>


</html>