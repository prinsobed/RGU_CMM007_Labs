<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bug Tracker | Home</title>
    <link type="text/css" href="../assets/css/styles.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
</head>
<body>
<!--Start of Header-->
<header>
    <img src="../assets/images/logo.png" alt="Site Logo" id="logo">
    <section id="headText">
        <h1>BugTracker</h1>
        <h2>Keeping Track of all the pesky bugs</h2>
    </section>
</header>
<!--End of Header-->

<!--Start of Page Main-->
<main>
    <aside>
        <nav>
            <ul>
                <li><a href="../showbugs.html">All Bug Items</a> </li>
                <li><a href="bugs.html">Android Bugs</a></li>
                <li><a href="bugs.html">iOS Bugs</a> </li>
                <li><a href="bugs.html">Windows Bugs</a></li>
                <li><a href="../addbugs.html">Insert Bug</a> </li>
            </ul>
        </nav>
    </aside>
    <section>
        <div id="Main">
            <?php
            include("dbConnect.php"); // Establish Connection with DB

            $sql = "SELECT * FROM bugtracker";
            $myquery = mysqli_query($db,$sql);

            if ($myquery->num_rows > 0) {
                echo "<table><tr><th>Bug Name</th><th>Category</th><th>Summary</th></tr>";
            }
            while($row = $myquery->fetch_array()) {
                //$movieID = $row['marvelMovieID']; $yearReleased = $row['yearReleased']; $titles =$row['title']; $prosStudio = $row['productionStudio']; $note = $row['notes'];

                echo "<tr><td>" . $row["bugname"] . "</td><td>" . $row["bugcategory"] . "</td><td>" . $row["bugsummary"] . "</td></tr>";
            }
            echo "</table>";
            ?>
        </div>
    </section>
</main>
<!--End of Page Main-->

<!--Start of Footer-->
<footer>
    <p>Designed by Obed Kraine Boachie, 2016.</p>
</footer>
<!--End of Footer-->
</body>
</html>