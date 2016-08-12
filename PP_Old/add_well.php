<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ProdPredict | Add Well</title>
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
            <p class="status"><a href="home.php">Home> Add Well</a></p>
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
        <div id="add_well">
            <form>
                <ul class='form-style-1'>

                    <h3>Add Well</h3>

                    <label for = 'well_ID'>Well ID: <span class='required'></span></label>
                    <input type='text' name='wellID' class='field-text' value=''  accesskey='1' placeholder='Well Identification No.' required/><br>
                    <br>

                    <label for = 'well_name'>Name: </label>
                    <input type='text' name='well_name' class='field-text' value=''  accesskey='2' placeholder='Well Name'/><br>
                    <br>

                    <label for = 'well_field'>Field: <span class='required'></span></label>
                    <select name="field" required>
                        <option value="" accesskey='3'>Please Select</option>
                        <option value="AFG">Afghanistan</option>
                        <option value="ALA">Åland Islands</option>
                    </select><br>
                    <br>

                    <label for = 'prod_start_date'>Productions Start Date: </label>
                    <input type="date" name='production_start_date' accesskey='4'/><br>
                    <br>

                    <label for = 'well_status'>Status: <span class='required'></span></label>
                    <input type="radio" name="well_status" value="Production" accesskey='5'> Production<br>
                    <input type="radio" name="well_status" value="Abandonment"> Abandonment<br>
                    <br>

                    <input type='submit' value='Clear' accesskey='6'>
                    <input type='submit' value='Enter' accesskey='7'>

                </ul>
            </form>
        </div>
    </article>
    </main>

    <footer>Designed by Obed Kraine Boachie, 2016.</footer>

</div>

</body>
</html>