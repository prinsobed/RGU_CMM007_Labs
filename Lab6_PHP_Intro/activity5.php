<html>
<title>Activity 5 - Specs, Mugs, and Sausage V</title>
</html>

<?php
/**
 * Created by PhpStorm.
 * User: Kraine
 * Date: 3/7/2016
 * Time: 6:42 AM
 */

//WHILE LOOPS

$items = 7;
$todaysGood = rand(0,2);

for ($=1; $x<=31; $x++)

do{

        if ($x%2==0){
            echo "<p>On day ".$x." of the Month, Specs are available</p>";
        }
        else if ($x%3==0 ){
            echo "<p>On day ".$x." of the Month, Mugs are available</p>";
        }
        else if ($x>=4 && $x % 4==0){
            echo "<p>On day ".$x." of the Month, Specs and Sausage are available</p>";
        }
        else echo "<p>On day ".$x." of the Month, No products available. Sorry!</p>";

    }

}while($items <= 7);

?>