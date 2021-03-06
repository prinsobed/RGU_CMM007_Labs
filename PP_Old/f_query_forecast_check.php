<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ProdPredict | Well Production Forecast</title>
    <link rel="stylesheet" href="assets/css/main.css"  type='text/css'>
    <link rel="stylesheet" href="assets/css/forms.css"  type='text/css'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto"  type='text/css'>

    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1"/>
</head>

<body>
<div class="container">
    <header>
        <div id="header">
            <h1 class="header">ProdPredict</h1>
        </div>
        <div id="status">
            <p class="status"><a href="index.php">Home> </a>Well Production Forecast</p>
        </div>
    </header>

    <main>
        <nav>
            <ul>
                <h3>Forecast</h3>
                <li><a href="f_query_forecast_check.php">Run a Well Forecast</a></li>
                <li><a href="#">View Existing</a></li>
            </ul>
            <ul>
                <h3>History</h3>
                <li><a href="query_history_check.php">Check Well History</a></li>
                <li><a href="view_wells_history.php">Wells History</a></li>
            </ul>
            <ul>
                <h3>Performance</h3>
                <li><a href="add_well.php">Check Well Performance</a></li>
                <li><a href="#">Compare Wells</a></li>
            </ul>
        </nav>

    <article>
        <div id="check_forecast">
            <form>
                <ul class='form-style-1'>

                    <h3>Well Forecast</h3><br>

                    <label for = 'forecast_well'>Well: <span class='required'></span></label>
                    <select name="forecast_well" required>
                        <option value="" accesskey='1'>Please Select</option>
                        <option value="AFG">Afghanistan</option>
                        <option value="ALA">Åland Islands</option>
                    </select><br>
                    <br>

                    <label for = 'forecast_end_date'>Forecast End Date: </label>
                    <input type="date" name='forecast_end_date'/><br>

                    <input type='submit' value='Clear' accesskey='4'>
                    <input type='submit' value='Enter' accesskey='5'>

                </ul>
            </form>
        </div>
    </article>
    </main>

    <footer>Designed by Obed Kraine Boachie, 2016.</footer>

</div>

</body>
</html>