<!--Check Username from DB-->
<?php
/**
 * Created by PhpStorm.
 * User: Kraine
 * Date: 4/11/2016
 * Time: 6:50 AM
 */

$username = $_POST["username"];
$password = $_POST["password"];

if ($username=="user@gmail.com" && $password=="8865")
{
//    set_session('access_level_cookie','standarduser');
//    set_session('username_cookie',$username);
    session_start();
    $_SESSION['thisUser'] = $username;
    $_SESSION['accessLevel'] = "Standard";

}

header('Location: index.php');

?>

<!--xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx-->

<!--Display Username to page-->
<?php
/**
 * Created by PhpStorm.
 * User: 1314863
 * Date: 03/05/2016
 * Time: 16:44
 */

session_start();
$user = $_SESSION['thisUser'];
$level = $_SESSION['accessLevel'];

displayUserNameInformation($user);
displayAccessLevelInformation($level);
$username = "";
$level = "";


function displayUserNameInformation($user)
{
    if ($user == "user@gmail.com"){
        $user = $username;
    }
}

?>