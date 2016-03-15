<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Marvel Movies | Home</title>
    <link type="text/css" rel="stylesheet" href="assets/css/styles.css"/>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
</head>
<body>
<main>
    <header>

        <img id="logo" src="assets/images/logomain.png" alt="marvel_logo">




                <nav>
                    <ul>
                    <li><a href="allmovies.php">All Movies</a></li>
                    <li><a href="marvel.php">Marvel Studio Movies</a></li>
                    <li><a href="2010movies.php">2010 Movies</a></li>
                    <li><a href="xmemmovies.php">X-Men Movies</a></li>
                    <li><a href="thormovies.php">Thor Movies</a></li>
                    <li><a href="contact">Contact Us</a></li>
                    </ul>
                </nav>


        <div id="main_banner">
            <img id="banner" src="assets/images/timeline.png" alt="main banner">
        </div>
    </header>

    <div class="main_content">
    <?php
    include("dbConnect.php"); // Establish Connection with DB
    $sql = "SELECT * FROM marvelmovies";
    $myquery = mysqli_query($db,$sql);

    while($row = $myquery->fetch_array())
    {

    $movieID = $row['marvelMovieID']; $yearReleased = $row['yearReleased']; $titles =$row['title']; $prosStudio = $row['productionStudio']; $note = $row['notes'];

    echo "<p>" . $movieID . " ". $yearReleased.  " ". $titles. " " . $prosStudio. " " . $note. " "."</p>";

    }
    ?>

    </div>
    <table>
        <tr>
            <th>MovieID</th>
            <th>Year Released</th>
            <th>Title</th>
            <th>Production Studio</th>
            <th>Notes</th>
        </tr>
        <tr>
            <td><?php echo $movieID ?></td>
            <td><?php echo $yearReleased ?></td>
            <td><?php echo $titles ?></td>
            <td><?php echo $prosStudio ?></td>
            <td><?php echo $note ?></td>

        </tr>
    </table>

</main>

<div class="fixer"></div>
<footer>
    <p>Marvel Cinematic Universe © 2016 Obed Kraine LabWorks</p>
</footer>

</body>


</html>