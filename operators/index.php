<?php

/* Operators */

// Aritmetic operators (+ - * / % **)
$x = 5;
$y = 3;
$z = '20';

$sum = $x + $y;
echo $sum; // 8
echo "<br>";

// mozemo da koristimo i casotvanje za stringove u brojeve ako stavimo + znak pre stringa, vazi i za negativne brojeva
$sum2 = $x + (+$z);
echo $sum2; // 25
echo "<br>";

// za deljenje koristimo / operator i njegov je rezultat float, osim ako nisu oba broja integer i deljiva su bez ostatka
$division = $x / $y;
echo $division; // 1.6666666666667
echo "<br>";

// akod delimo sa 0 u php 8 imamo infinity kao rezultat, u php 7 imamo warning, imamo takodje funkciju za to fdiv()
// $division2 = $x / 0;
// echo $division2; // INF
// echo "<br>";  

// modulo operator % vraca ostatak pri deljenju
$modulus = $x % $y;
echo $modulus; // 2
echo "<br>";

// ako zelimo da delimo float brojeve koristimo fmod() funkciju
$modulus2 = fmod(5.7, 1.3);
echo $modulus2; // 0.5
echo "<br>";

// za stepenovanje koristimo ** operator
$power = $x ** $y;
echo $power; // 125
echo "<br>";

// Assignment operators (= += -= *= /= %= **=)
$number = 5;
$number += 3; // $number = $number + 3; // 8
echo $number;
echo "<br>";

// assignment operatori se mogu koristiti i za stringove
$word = "Hello";
$word .= " World"; // $word = $word . " World";
echo $word; // Hello World
echo "<br>";

// assgnment operatori rade sa vrednostima, ne sa referencama
$a = 5;
$b = $a;
$b += 3;
echo $a; // 5
echo "<br>";

// String operators (. .=)
$firstName = "John";
$lastName = "Doe";
$fullName = $firstName . " " . $lastName;
echo $fullName; // John Doe
echo "<br>";

// Comparison operators (== === != !== < > <= >= ?? ?:)
// https://www.php.net/manual/en/types.comparisons.php
// https://www.php.net/manual/en/language.operators.comparison.php
// https://wiki.php.net/rfc/string_to_number_comparison
// == poredi vrednosti
// === poredi vrednosti i tipove
$number1 = 5;
$number2 = '5';

var_dump($number1 == $number2); // true
echo "<br>";
var_dump($number1 === $number2); // false
echo "<br>";
// <=> spaceship operator, moze da vraca -1, 0, 1
$jedan = 1;
$dva = 2;
var_dump($jedan <=> $dva); // -1
echo "<br>";

// u verziji 8 kada poredimo broj i string, broj se konvertuju u stringove, u verziji 7 se konvertuje string u broj i var_dump(0 == "hello"); vraca true
var_dump(5 == '5'); // true
echo "<br>";
var_dump(0 == "hello"); // false
echo "<br>";
var_dump(0 == "0"); // true
echo "<br>";

$h = 'Hello World';
$k = strpos($h, 'H');
if ($k === false) {
  echo "H not found";
} else {
  echo "H found at position: $k";
}

// ?: ternary operator
// u verziji 8 imamo novi operator match, koji je slican ternarnom operatoru
// https://www.php.net/manual/en/language.operators.comparison.php#language.operators.comparison.ternary
// https://www.php.net/manual/en/migration80.new-features.php#migration80.new-features.match-expr
// takodje u verziji 8 bi trebalo da koristimo zagade za uslove
// https://www.php.net/manual/en/migration80.new-features.php#migration80.new-features.match-expr
$age = 20;
$canBuyAlcohol = $age >= 21 ? "Yes" : "No";
echo $canBuyAlcohol; // No
echo "<br>";

// ?? null coalescing operator
// opertor koji vraca prvi operand ako nije null, inace vraca drugi operand
// koristi se za proveru da li je vrednost null ili undefined, ili ako imamo undefined keys u nizu
// https://www.php.net/manual/en/language.operators.comparison.php#language.operators.comparison.coalesce
$p = null;
$b = $p ?? 'default';
echo $b; // default
echo "<br>";

// ako je prvi operand null, vraca drugi operand