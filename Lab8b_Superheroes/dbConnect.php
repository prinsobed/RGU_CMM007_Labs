<?php
/**
 * Created by PhpStorm.
 * User: 1314863
 * Date: 14/03/2016
 * Time: 10:14
 */
define('DB_SERVER', 'ap-cdbr-azure-east-c.cloudapp.net');
define('DB_USERNAME','bf3d941a653cf6');
define('DB_PASSWORD', '68c64445');
define('DB_DATABASE', 'veesoft');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

if (!$db) {
    die("Connection Failed Buddie: " . mysqli_connect_error());
}

