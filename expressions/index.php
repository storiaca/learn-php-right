<?php

/* Expressions */

$x = 5;
$y = $x;

$z = $x === $y; // ovo je izraz, jer se izvrsava i vraca vrednost
var_dump($z); // bool(true)
echo "<br>";

// funkcija koja vraca vrednost je takodje izraz
function add($a, $b)
{
  return $a + $b;
}

$g = sum(5, 3); // ovo je izraz
var_dump($g); // int(8)
echo "<br>";

// ternarni operator
$age = 20;
$canBuyAlcohol = $age >= 21 ? "Yes" : "No";
echo $canBuyAlcohol; // No
echo "<br>";

// izraz sa if-else
$age2 = 25;
if ($age2 >= 21) {
  $canBuyAlcohol = "Yes";
} else {
  $canBuyAlcohol = "No";
}
echo $canBuyAlcohol; // No
echo "<br>";