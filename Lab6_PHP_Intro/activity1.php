<head>
    <meta charset="UTF-8">
    <title>ACTIVITY 1 - SPECS, MUGS, AND SAUSAGE ROLLS</title>
</head>
<?php
/**
 * Created by PhpStorm.
 * User: 1314863
 * Date: 07/03/2016
 * Time: 10:29
 */

//SECTION 3
//ACTIVITY 1 - SPECS, MUGS, AND SAUSAGE ROLLS
//If Else
$age = 17;

$specs = 16;
$mugs = 18;
$sausage = 21;

if($age >= $specs) {
    print "Your are" . $age ."Years". ". You are eligible to buy Specs";
}else if ($age >= $mugs ) {
    print "Your are" . $age ."Years". ". You are eligible to buy Mugs";
}else if ($age >= $sausage ) {
    print "Your are" . $age . "Years" . ". You are eligible to Sausage";
}
else{
    print "You got to grow more.";
}

//Switch
$wantedgood = "mugs";

switch($wantedgood){
    case "specs":
        echo "You have to be 16 to buy 'Specs'";
        break;
    case "mugs":
        echo "You have to be 18 to buy 'Mugs'";
        break;
    case "sausage":
        echo "You have to be 21 to buy 'Sausage'";
        break;
}

//SECTION 4
//ARRAYS
$myArray = array("do", "re", "mi");  //Declaration of an array

echo $myArray[0] // Output element at index 0

    $myArray[1] = "la"; //Modifies content of element at index 1

unset($myArray[2]); //Removes the array in index 2


$provisionedActivities = array("Specs", "Drugs", "Rock and Roll");
foreach($provisionedActivity as $x) {
    print "<p>$x</p>";
}



<?>