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
        <div>
        <img id="logo" src="assets/images/logo.jpg" alt="marvel_logo">
            <!--<img id="welcome" src="assets/images/welcome.jpg" alt="marvel_welcome">-->
        </div>
        <div>
                <nav>
                    <a href="allmovies.php">All Movies</a>
                    <a href="marvel.php">Marvel Studio Movies</a>
                    <a href="2010movies.php">2010 Movies</a>
                    <a href="xmemmovies.php">X-Men Movies</a>
                    <a href="thormovies.php">Thor Movies</a>
                    <a href="contact">Contact Us</a>
                </nav>
        </div>
        <div id="main_banner">
            <img id="banner" src="assets/images/titles.jpg" alt="main banner" width="960px">
        </div>
    </header>

    <div class="maincontent">
    <?php
    include("dbConnect.php"); // Establish Connection with DB
    $sql = "SELECT * FROM marvelmovies";
    $myquery = mysqli_query($db,$sql);

    while($row = $myquery->fetch_array())
    {

    $movieID = $row['marvelMovieID']; $yearReleased = $row['yearReleased']; $titles =$row['title']; $prosStudio = $row['productionStudio']; $note = $row['notes'];

    //echo "<p>" . $movieID . " ". $yearReleased.  " ". $titles. " " . $prosStudio. " " . $note. " "."</p>";

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