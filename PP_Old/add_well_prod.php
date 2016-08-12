<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ProdPredict | Add Well Production</title>
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
            <p class="status"><a href="home.php">Home> </a>Add Well Production</p>
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
        <div id="add_well_prod">
            <form>
                <ul class='form-style-1'>

                    <h3>Add Well Production</h3>

                    <label for = 'prod_ID'>Production ID: <span class='required'></span></label>
                    <input type='text' name='prod_ID' class='field-text' value=''  accesskey='1' placeholder='Production Identification No.' required/><br>
                    <br>

                    <label for = 'well_ID'>Well: </label>
                    <input type='text' name='well_ID' class='field-text' value=''  accesskey='2' placeholder='Production Well'/><br>
                    <br>

                    <label for = 'prod_date'>Production Date: </label>
                    <input type="date" name='prod_date' accesskey='3'/><br>
                    <br>

                    <label for = 'oil_prod'>Oil Produced: <span class='required'></span></label>
                    <input type='text' name='oil_prod' class='field-text' value=''  accesskey='4' placeholder='Oil Produced'/><br>
                    <br>

                    <label for = 'gas_prod'>Gas Produced: <span class='required'></span></label>
                    <input type='text' name='gas_prod' class='field-text' value=''  accesskey='5' placeholder='Gas Produced'/><br>
                    <br>

                    <label for = 'water_prod'>Water Produced: <span class='required'></span></label>
                    <input type='text' name='water_prod' class='field-text' value=''  accesskey='6' placeholder='Water Produced'/><br>
                    <br>

                    <label for = 'gas_oil_ratio'>Gas Oil Ratio: <span class='required'></span></label>
                    <input type='text' name='gas_oil_ratio' class='field-text' value=''  accesskey='7' placeholder='Gas Oil Ratio'/><br>
                    <br>

                    <label for = 'basic_sed_water'>Basic Sediment Water: <span class='required'></span></label>
                    <input type='text' name='basic_sed_water' class='field-text' value=''  accesskey='8' placeholder='Basic Sediment Water'/><br>
                    <br>

                    <label for = 'bean'>Bean: <span class='required'></span></label>
                    <input type='text' name='bean' class='field-text' value=''  accesskey='9' placeholder='Bean/Choke'/><br>
                    <br>

                    <label for = 'tubing_hang_press'>Oil Produced: <span class='required'></span></label>
                    <input type='text' name='tubing_hang_press' class='field-text' value=''  accesskey='10' placeholder='Tubing Hanger Press'/><br>
                    <br>

                    <label for = 'bottom_hole_pressure'>Bottom Hole Pressure: <span class='required'></span></label>
                    <input type='text' name='bottom_hole_pressure' class='field-text' value=''  accesskey='11' placeholder='Bottom Hole Pressure'/><br>
                    <br>

                    <label for = 'a_p_i'>API: <span class='required'></span></label>
                    <input type='text' name='a_p_i' class='field-text' value=''  accesskey='12' placeholder='API'/><br>
                    <br>

                    <input type='submit' value='Clear' accesskey='13'>
                    <input type='submit' value='Save' accesskey='14'>

                </ul>
            </form>
        </div>
    </article>
    </main>

    <footer>Designed by Obed Kraine Boachie, 2016.</footer>

</div>

</body>
</html>