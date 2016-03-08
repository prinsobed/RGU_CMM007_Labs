/**
* Created by PhpStorm.
* User: Kraine
* Date: 3/7/2016
* Time: 6:42 AM
*/

<html>
<title>Activity 3 - Specs, Mugs, and Sausage III</title>
</html>

<?php
//SECTION 4
//ARRAYS
//Eg.
$myArray = array("do", "re", "mi"); //Declaration of an array

echo $myArray[0]; // Output element at index 0

$myArray[1] = "la"; //Modifies content of element at index 1

unset($myArray[2]); //Removes the array in index 2


//Activity 3 - Specs, Mugs, and Sausage III
$provisionedActivities = array("Mugs","Specs", "Drugs","Sausage", "Rock and Roll");

    foreach($provisionedActivities as $item) {
    print "<p>$item</p>";
    }

//1. Mugs modified to Hugs
$provisionedActivities[0] = "Hugs";
    echo "<p>'Mugs' ahs been changed to ".$provisionedActivities[0]."</p>";

//2. Sausage removed
    unset($provisionedActivities[3]);
    echo $provisionedActivities[3]."<p>Sorry, Item has been removed</p>";

?>