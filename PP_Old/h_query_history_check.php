<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ProdPredict | Well Production History</title>
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
        <div id="status">
            <p class="status"><a href="index.php">Home> </a>Well Production History</p>
        </div>
    </header>

    <main>
        <nav>
            <ul>
                <h3>History</h3>
                <li><a href="h_query_history_check.php">Check Well History</a></li>
                <li><a href="h_view_wells_history.php">Wells History</a></li>
            </ul>
            <ul>
                <h3>Performance</h3>
                <li><a href="add_well.php">Check Well Performance</a></li>
                <li><a href="#">Compare Wells</a></li>
            </ul>
            <ul>
                <h3>Forecast</h3>
                <li><a href="add_well_prod.php">Run a Well Forecast</a></li>
                <li><a href="#">View Existing</a></li>
            </ul>
        </nav>

    <article>
        <div id="check_history">
            <form>
                <ul class='form-style-1'>

                    <h2>Well History</h2><br>

                    <label for = 'history_well'>Well: <span class='required'></span></label>
                    <select name="history_well" required>
                        <option value="" accesskey='1'>Please Select</option>
                        <option value="AFG">Afghanistan</option>
                        <option value="ALA">Åland Islands</option>
                    </select><br>
                    <br>

                    <label for = 'history_start_date'>History Start Date: </label>
                    <input type="checkbox" name="history_start_date" value="prod_start_date" accesskey='2' checked> Production Start Date<br>
                    <input type="date" name='history_start_date'/><br>
                    <br>

                    <label for = 'history_end_date'>History End Date: </label>
                    <input type="checkbox" name="history_end_date" value="prod_start_date" accesskey='3' checked> Last Production Date<br>
                    <input type="date" name='history_end_date'/><br>

                    <label for = 'history_type'>Report Type: <span class='required'></span></label>
                    <input type="radio" name="history_type" value="data"> Data<br>
                    <input type="radio" name="history_type" value="graph"> Graph<br>
                    <input type="radio" name="history_type" value="both"> Both<br>
                    <br>
                    <br>

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