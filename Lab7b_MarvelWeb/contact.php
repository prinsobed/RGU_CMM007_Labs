<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Marvel Movies | All Movies</title>
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


        <h2>Contact Us</h2>
        <form action="action_page.php">
            &nbsp;&nbsp;
            <label for ="name">Name: </label>
            <input type="text" name="name" value="" width="100" required>
            </br></br>

            &nbsp;&nbsp;
            <label for="email">Email Address: </label>
            <input type="email" name="email" value="" required>
            </br></br>

            &nbsp;&nbsp;
            <label for ="problem">Message: </label>
            <input type="textarea"  name="problem" value="" rows="5" cols="14">
            </br></br>

            &nbsp;&nbsp;
            <input type="submit" value="Submit" onclick="alert('Problem Submitted!')" >
        </form>
</main>

<div class="fixer"></div>
<footer>
    <p>Marvel Cinematic Universe © 2016 Obed Kraine LabWorks</p>
</footer>

</body>


</html>