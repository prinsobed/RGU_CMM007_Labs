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

//Setting stock levels
$spec_qty =7;
$mug_qty =7;
$sausage_qty =7;

//Set date of the month
$date =1;

while(($spec_qty>0)&&($mug_qty>0)&&($sausage_qty>0)){

    $todaysGoods = rand(0,2);    //specs at 0, mugs at 1, sausage at 2

    switch($todaysGoods){
        case 0:
            $spec_qty --;
            echo "On day ".$date." of the month, Specs are available<br>";
            break;

        case 1:
            $mug_qty --;
            echo "On day ".$date." of the month, Mugs are available<br>";
            break;

        case 2:
            $sausage_qty --;
            echo "On day ".$date." of the month, Sausage are available<br>";
            break;
    }
    $date++;
    }

?>