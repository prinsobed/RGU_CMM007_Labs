<?php
/**
 * Created by PhpStorm.
 * User: 1314863
 * Date: 14/03/2016
 * Time: 10:14
 */
define('DB_SERVER', 'ap-cdbr-azure-east-c.cloudapp.net');
define('DB_USERNAME','bed8c15b456030');
define('DB_PASSWORD', '58380471');
define('DB_DATABASE', 'db_prodpredict');

$dbConn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>