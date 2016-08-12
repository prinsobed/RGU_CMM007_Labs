<?php
/**
 * Created by PhpStorm.
 * User: Kraine
 * Date: 15/07/2016
 * Time: 5:53 AM
 */

include('session.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ProdPredict | Home</title>
    <link rel="stylesheet" href="assets/css/main.css" type='text/css'>
    <link rel="stylesheet" href="assets/css/forms.css" type='text/css'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto"  type='text/css'>

    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1"/>
</head>

<body>
<div class="container">
    <header>
        <div id="header">
            <h1 class="header">ProdPredict</h1>
        </div>
        <div id="profile">
            <b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
            <b id="logout"><a href="logout.php">Log Out</a></b>
        </div>
        <div id="status">
            <p class="status"><a href="home.php">Home</a></p>
        </div>
    </header>

    <main>
        <nav>
            <ul>
                <h3>Fields</h3>
                <li><a href="add_field.php">Add New</a></li>
                <li><a href="#">View Existing</a></li>
            </ul>
            <ul>
                <h3>Wells</h3>
                <li><a href="add_well.php">Add New</a></li>
                <li><a href="#">View Existing</a></li>
            </ul>
            <ul>
                <h3>Production</h3>
                <li><a href="add_well_prod.php">Add New</a></li>
                <li><a href="#">View Existing</a></li>
            </ul>
        </nav>

    <article>
        <div id="well_analysis">
        <h3>Well Analysis</h3>

            <div id="mainfeature">
                <a href="history/h_query_history_check.php">History</a>
            </div>
            <div id="mainfeature">
                <a href="p_query_performance_check.php">Performance</a>
            </div>
            <div id="mainfeature">
                <a href="forecast/f_query_forecast_check.php">Forecast</a>
            </div>
        </div>
    </article>
    </main>

    <footer>Designed by Obed Kraine Boachie, 2016.</footer>

</div>

</body>
</html>


