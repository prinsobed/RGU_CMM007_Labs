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


//ACTIVITY 1 - SPECS, MUGS, AND SAUSAGE ROLLS
$kofi_age = 17;

$specs = 16;
$mugs = 18;
$sausage = 21;

if($kofi_age >= $specs) {
    print "Your are" . $kofi_age ."Years". ". You are eligible to buy Specs";
}else if ($kofi_age >= $mugs ) {
    print "Your are" . $kofi_age ."Years". ". You are eligible to buy Mugs";
}else if ($kofi_age >= $sausage ) {
    print "Your are" . $kofi_age . "Years" . ". You are eligible to Sausage";
}
else
    print "You got to grow more Kofi.";


<?>