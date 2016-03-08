/**
* Created by PhpStorm.
* User: Kraine
* Date: 3/7/2016
* Time: 6:42 AM
*/

<html>
<title>Activity 4 - Specs, Mugs, and Sausage IV</title>
</html>

<?php

/*
//SECTION 5
//FOR LOOPS
//Eg.
for ($i=1; $i<11; $i++){
    echo "<p> Hello World !</p>";
}
*/

//Activity 4 - Specs, Mugs, and Sausage IV

for ($x=1; $x<31; $x++){

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

?>