<?php
/**
 * Created by PhpStorm.
 * User: 1314863
 * Date: 07/03/2016
 * Time: 09:47
 */

//SECTION 4
//ARRAYS
//Eg.
$myArray = array("do", "re", "mi"); //Declaration of an array

echo $myArray[0]; // Output element at index 0

$myArray[1] = "la"; //Modifies content of element at index 1

unset($myArray[2]); //Removes the array in index 2


//Activity 3 - Specs, Mugs, and Sausage III
$provisionedActivities = array("Mugs","Specs", "Drugs","Sausage", "Rock and Roll");

foreach($provisionedActivity as $item) {
    print "<p>$item</p>";
}
//1. Mugs modified to Hugs
$provisionedActivities[0] = "Hugs";
echo "'Mugs' ahs been changed to ".$provisionedActivities[0];

//2. Sausage removed
unset($provisionedActivities[3]);
echo $provisionedActivities[3]."Sorry, Item has been removed";