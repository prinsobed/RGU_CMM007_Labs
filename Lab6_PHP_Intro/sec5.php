<?php
/**
 * Created by PhpStorm.
 * User: 1314863
 * Date: 07/03/2016
 * Time: 09:48
 */
 //SECTION 5
        //FOR LOOPS
        //Eg.
        for ($i=1; $i<11; $i++){
            echo "<p> Hello World !</p>";
        }

        //Activity 4 - Specs, Mugs, and Sausage IV
        for ($x=1; $x<31; $x++){

            if ($x % 2 == 0){
                echo "<p>On the ".$x."th/nd of the Month, Specs are available</p>";
            }
            else if ($x % 3 == 0){
                echo "<p>On the ".$x."rd of the Month, Mugs are available</p>";
            }
            else if ($x % 4 == 0){
                echo "<p>On the ".$x."th/nd of the Month, Specs and Sausage are available</p>";
            };

        }


//Mike Crabb's Version
for ($i = 1; $i < 30; $i++)
{
    $y = 0; //I'm using this as a marker to tell that at least one thing is being made
    echo "<p>On day " . $i . " the following products are available: ";

    if ($i % 2 != 0)
    {
        echo "Sausage Rolls ";
        $y = 1;
    }
    if ($i % 3 != 0)
    {
        echo "Mugs ";
        $y = 1;
    }
    if ($i % 4 != 0)
    {
        echo "Specs";
        $y = 1;
    }
    if ($y != 1) //if one thing isn't being made on this day then it displays that nothing is available that day.
    {
        echo "NONE";
    }
    echo "</p>";
}

<?>
