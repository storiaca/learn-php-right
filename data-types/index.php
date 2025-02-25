<?php
/**
 * 4 Data Types - Typecasting Overview & How It Works
 */
#  Scalar Data Types
# 1. Integer - int - 1, 2, 3, 4, 5, -6, -7, -8
$score = 70;
# 2. Float - float - 1.5, 2.5, 3.5, 4.5, -5.5, -6.5
$price = 0.99;
# 3. String - string - "Aca", "Hello World", "Hello PHP"
$greeting = "Hello PHP";
# 4. Boolean - bool - true or false
$completed = true;

echo $score . '<br/>';
echo $price . '<br/>';
echo $greeting . '<br/>';
echo $completed . '<br/>'; // 1 ce biti true a 0 ce biti false

// ako zelimo da vidimo tip promenjljive imamo funkciju gettype()
echo gettype($score) . '<br/>';
echo gettype($price) . '<br/>';
echo gettype($greeting) . '<br/>';
echo gettype($completed) . '<br/>';
// ako zelimo da vidimo da li je promenjliva boolean mozemo koristiti is_bool()
echo is_bool($completed) . '<br/>';
// ako zelimo da vidimo da li je promenjliva float mozemo koristiti is_float()
echo is_float($price) . '<br/>'; // is_double() je isto sto i is_float(), sve vraca 1
// ako zelimo da vidimo da li je promenjliva integer mozemo koristiti is_int(), vraca 1
echo is_int($score) . '<br/>'; // is_integer() je isto sto i is_int(), vraca 1

// imamo i var_dump() funkciju koja nam vraca tip promenjljive i vrednost
var_dump($score); // int(70)

# Compound Data Types 
# 1. Array  
$companies = [1, 2, 0.5, -9.3, 'A', 'b', true];
// da prikazemo niz mozemo da koristimo print_r()
print_r($companies);
# 2. Object 
# 3. Callable
# 4. Iterable

# Special Data Types
# 1. Resource   
# 2. NULL

// php ce da vidi koji je tip u runtime-u, ako zelimo da promenimo tip promenjljive mozemo koristiti typecasting
// typecasting je kada mi eksplicitno kazemo da zelimo da promenimo tip promenjljive
// ako zelimo da promenimo tip promenjljive u integer koristimo (int)
echo '<br/>';
// primer obicne funckije koja vraca zbir dva broja sa typecasting-om
function sum(int $a, int $b)
{
  $a = 5.5;
  var_dump($a, $b);
  echo '<br/>';
  return $a + $b;
}

// echo sum(2, 3); // 5
$sum = sum(2, '3'); // 5

echo $sum . '<br/>'; // 5

var_dump($sum);

// postoji nacin da omogucimo strict mode u php-u, to znaci da ce php da baci gresku ako se ne poklapaju tipovi promenjljivih
// da bismo omogucili strict mode moramo da dodamo declare(strict_types=1); na pocetak fajla
// declare(strict_types=1);
// echo sum(2, '3'); // Fatal error: Uncaught TypeError: Argument 2 passed to sum() must be of the type int, string given, called in /var/www/html/data-types/index.php on line 64 and defined in /var/www/html/data-types/index.php:56

// https://www.php.net/manual/en/language.types.type-juggling.php
// https://www.php.net/manual/en/types.comparisons.php
