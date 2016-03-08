/**
* Created by PhpStorm.
* User: Kraine
* Date: 3/7/2016
* Time: 6:42 AM
*/

<html>
<title>Activity 1 - Specs, Mugs, and Sausage I</title>
</html>

<?php
    /**
        // Output message
        echo "Hello World!, How've you been";
        echo "Hello"." "."World"."!";

        // Simple Arithmetic
        echo 5*8;

        //Store variables
        $myname = "Denny Crane";
        $myage = "65";
        echo "My name is ".$myname."."." "."I am ".$myage."years Old.";

        // COMPARISON


        //SECTION 3
        //CONDITIONAL STATEMENTS

        //Comparison - If Else Statement
        //Eg.
        $name = "Hoover";
        if ($name == "Edgar") {
            print "Oh, You entered your first name rather.";
        }
        else if ($name == "Hoover"){
            print "There you are Director for CIA";
        }
        else{
            print "Who are you please";
        }
    **/
        //Activity 1 - Specs, Mugs, and Sausage I
        $age = 17;

        $specs = 16;
        $mugs = 18;
        $sausage = 21;

        if($age >= $specs) {
            print "<p>Your are" . $age ."Years". ". You are eligible to buy Specs</p>";
        }else if ($age >= $mugs ) {
            print "<p>Your are" . $age ."Years". ". You are eligible to buy Mugs</p>";
        }else if ($age >= $sausage ) {
            print "<p>Your are" . $age . "Years" . ". You are eligible to Sausage</p>";
        }
        else{
            print "<p>You got to grow more</p>";
        }
?>

