<?php
/* Integers */

// PHP_INT_MIN i PHP_INT_MAX su konstante koje nam daju najmanju i najvecu vrednost integera,imamo i PHP_INT_SIZE koja nam daje velicinu integera u bajtovima
echo PHP_INT_MIN . '<br>';
echo PHP_INT_MAX . '<br>';
echo PHP_INT_SIZE . '<br>';

// integer moze biti u decimalnom, oktalnom i heksadecimalnom formatu
$decimal = 123;
echo $decimal . '<br>';
$octal = decbin($decimal);
echo $octal . '<br>';

// heksadecimalni brojevi pocinju sa 0x
$hex = 0x1A;
echo $hex . '<br>';

// oktalni brojevi pocinju sa 0
$oct = 0123;
echo $oct . '<br>';

// binarni brojevi pocinju sa 0b
$bin = 0b1111011;
echo $bin . '<br>';

// ako dodje do prekoracnja integera, php ce automatski konvertovati integer u float
$bigInt = PHP_INT_MAX + 1;
echo $bigInt . '<br>';
var_dump($bigInt); // float(9223372036854775808)

echo '<br>';
// za castovanje u integer koristimo (int) ili (integer)
$float = 3.14;
$int = (int) $float;
echo $int . '<br>'; // 3

$x = (int) true;
echo $x . '<br>'; // 1
$y = (int) false;
echo $y . '<br>'; // 0

$s = (int) 'test';
echo $s . '<br>'; // 0

// provera da li je promenljiva integer
var_dump(is_int($int)); // bool(true)

echo '<br>';

// mozemod da koristimo underscore(_) da bi razdvojili cifre u integeru
$bigInt = 1_000_000;
echo $bigInt . '<br>';  // 1000000

