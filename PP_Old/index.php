<?php
/**
 * Created by PhpStorm.
 * User: Kraine
 * Date: 15/07/2016
 * Time: 5:53 AM
 */

include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
    header("location: home.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ProdPredict | Log In</title>
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
    </header>

    <main>
    <article>
        <div id="login">
            <form action=" " method="post">
                <ul class='form-style-1'>

                    <h3>Log In</h3>

                    <li>
                    <label for = 'username'>Username: <span class='required'></span></label>
                    <input type='email' name='username' class='field-text' value=''  accesskey='1' placeholder='Corporate Email' required/>
                    <br></li>

                    <li>
                    <label for = 'password'>Password: <span class='required'></span></label>
                    <input type='password' name='password' class='field-text'   accesskey='2' placeholder='Password'/><br>
                    <br></li>

                    <li>
                    <input name='submit' type='submit' value='Enter' accesskey='3'><br><br>
                        <span><?php echo $error; ?></span>
                    </li>

                </ul>
            </form>

        </div>
    </article>
    </main>

    <footer>Designed by Obed Kraine Boachie, 2016.</footer>

</div>

</body>
</html>

