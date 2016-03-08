<?php
/**
 * Created by PhpStorm.
 * User: 1314863
 * Date: 08/03/2016
 * Time: 09:32
 */

//SECTION 6 - FUNCTIONS
//String Functions

//Lenght of String
$x = "xylemphloem";
echo strlen($x);






//Creation of an array
$lotteryArray = array("Bilbo","Frodo","Gandalf","Samwise","Aragon","Logolas", "Gimli","Sauron","Elrond","Boromir");

//Sort the array
sort($lotteryArray);

//Select the Winner
$winner = (rand(0, count($lotteryArray))) - 1;

//Prints the winner
echo "<p>The winner of all the specs is " . strtoupper($lotteryArray[$winner]) . "</p>";


//Remove the person from the array
unset($lotteryArray[$winner]);

//Do the same again for mugs
$winner = (rand(0,count($lotteryArray))) - 1;
echo "<p>The winner of all the mugs is " . strtoupper($lotteryArray[$winner]) . "</p>";
unset($lotteryArray[$winner]);


//and the sausuage rolls
$winner = (rand(0,count($lotteryArray))) - 1;
echo "<p>The winner of all the sausage rolls is " . strtoupper($lotteryArray[$winner]) . "</p>";
?>


?>