<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bug Tracker | Login</title>
    <link rel="stylesheet" href="assets/css/styles.css"  type='text/css'>
    <link rel="stylesheet" href="assets/css/unsemantic-grid-responsive-tablet.css" type='text/css'>
    <link rel="stylesheet" href="assets/css/unsemantic-grid-desktop.css" type='text/css'>
    <link rel="stylesheet" href="assets/css/unsemantic-grid-mobile.css" type='text/css'>
    <link rel="stylesheet" href="assets/css/unsemantic-grid-responsive.css" type='text/css'>
    <link rel="stylesheet" href="assets/css/login.css"  type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>

    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1"/>
</head>
<body>
<!--Start of Header-->
<header>
    <a href="index.php"><img src="assets/images/logo.png" alt="Site Logo" id="logo"></a>
    <section id="headText">
        <h1>BugTracker</h1>
        <h2>Keeping Track of all the pesky bugs</h2>
    </section>
</header>
<!--End of Header-->

<!--Start of Page Main-->
<main class= "grid-container">
    <section class= "grid-100" id="cont2">
        <article>
                <div class="login-page">
                    <div class="form">
                        <form class="register-form" action = '<?{$_SERVER['PHP_SELF'];}?>' method = "POST">
                            <input type="text" placeholder="name"/>
                            <input type="password" placeholder="password"/>
                            <input type="text" placeholder="email address"/>
                            <button>create</button>
                            <p class="message">Already registered? <a href="#">Sign In</a></p>
                        </form>
                        <form class="login-form">
                            <input type="text" placeholder="username"/>
                            <input type="password" placeholder="password"/>
                            <button>login</button>
                            <p class="message">Not registered? <a href="#">Create an account</a></p>
                        </form>
                        <?php

                                $username = $_POST["username"];
                                $password = $_POST["password"];

                                if ($username=="user@gmail.com" && $password=="8865")
                                {
                                    session_start();
                                    $_SESSION['thisUser'] = $username;
                                    $_SESSION['accessLevel'] = "Standard";

                                    }

                                header('Location: index.php');
                        ?>




                        ?>
                    </div>
                </div>
        </article>
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

