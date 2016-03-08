<?php
/**
 * Created by PhpStorm.
 * User: 1314863
 * Date: 08/03/2016
 * Time: 09:32
 */

//SECTION 6 - FUNCTIONS
//String Functions

$x = "xylemphloem";

echo strlen($x);


//Creation of an array
$lotteryArray = array("Bilbo","Frodo","Gandalf","Samwise","Aragon","Logolas", "Gimli","Sauron","Elrond","Boromir");

//Sort the array
sort($lotteryArray);

//Select the Winner
$winner = (rand(0, count($lotteryArray))) - 1;



?>