/**
* Created by PhpStorm.
* User: Kraine
* Date: 3/7/2016
* Time: 6:42 AM
*/

<html>
<title>Activity 2 - Specs, Mugs, and Sausage II</title>
</html>

<?php

/*
//Comparison: The Switch Statement
//Eg.
$numberofHobbits = 4;

switch($numberofHobbits){
    case 1:
        echo "Frodo Baggins";
        break;
    case 2:
        echo "Samwise Gamgee";
        break;
    case 3:
        echo "Pegerin Took";
        break;
    case 4:
        echo "Meriadoc Brandybuck";
        break;
    default:
        echo "The Fellowship from the Shire";
}
*/

//Activity 2 - Specs, Mugs, and Sausage II
$wantedgood = "mugs";

    switch($wantedgood){
        case "specs":
            echo "<p>You have to be 16 to buy 'Specs'</p>";
            break;
        case "mugs":
            echo "<p>You have to be 18 to buy 'Mugs'</p>";
            break;
        case "sausage":
            echo "<p>You have to be 21 to buy 'Sausage'</p>";
            break;
    }

?>