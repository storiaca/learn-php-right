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
// operator koji vraca prvi operand ako nije null, inace vraca drugi operand
// koristi se za proveru da li je vrednost null ili undefined, ili ako imamo undefined keys u nizu
// https://www.php.net/manual/en/language.operators.comparison.php#language.operators.comparison.coalesce
$p = null;
$b = $p ?? 'default';
echo $b; // default
echo "<br>";

// ako je prvi operand null, vraca drugi operand

// Error Control Operators (@)
// u ovom slucaju fajl foo.txt ne postoji, ako zelimo da zataskamo ovu gresku mozemo da koristimo ovaj @ operator, ne preporucuje se da se koristi osim bas ako treba
$f = @file('foo.txt');

// Increment / Decrement Operators (++, --)
// rade samo sa brojevima i stringovima, sa strigovima samo ++
$in = 7;

$in++; // 7
$in--; // 8
++$in; // 8
--$in; // 7
echo $in; // 7
echo "<br/>";

// Logical Operators (&& || ! and or xor)
$xc = true;
$yc = false;

var_dump($xc && $yc); // bool(false)
echo "<br/>";

$xo = 0;
$yo = true;
var_dump($xo || $yo); // bool(true)
echo "<br/>";

// za and primer, php koristi code precedence (prvensto) koji znak ima veci prioritet za izvsavanje
$xa = true;
$ya = false;

$za = $xa && $ya;
var_dump($za); //  bool(false)
echo "<br/>";
// medjutim ako koristimo and onda cemo da dobijemo true
$zd = $xa and $ya;
var_dump($zd); //  bool(true), zato sto znak = ima veci prioritet od and operatora i kada vidi $zd = $xa sto je true, nece dalje da gleda posle njega i zato je true
echo "<br/>";

// php ima nesto sto se zove short circuting kada su u pitanju logicki operatori
$xs = true;
$ys = false;

var_dump($xs || $ys); // bool(true)
echo "<br/>";
// u ovom primeru nece ni doci do $ys zato sto je prva variabla true, to se najbolje vidi ako je druga variabla za poredjenje neka funckija, koja se u ovom slucaju ako je pozovemo, nece nikad izvrsiti
function hello()
{
  echo 'Hello World';

  return false;
}
var_dump($xs || hello()); // bool(true)
echo "<br/>";

// ako stavimo && onda ce se i hello() izvrsiti, zato sto za && uzimamo oba operatora u obzir
var_dump($xs && hello()); // Hello Worldbool(false)
echo "<br/>";

// ako imamo ovakav primer, dobicemo true, zbog presence and associativity, ali funckija se nece opet izvsiti zato sto ce ceo izraz da bude false, && ima veci prioriter od || operatora, zato se funkcija hello() grupise sa $xf variablom
$xf = false;
var_dump($xf && hello() || true); // bool(true)
echo "<br/>";

// Bitwise Operators (& | ^ ~ << >>)
$xb = 6;
$yb = 3;
// 110 - 6 binarno
// &
// 011 - 3 binarno
// ----
// 010 = 2, zato je rezultat 2

var_dump($xb & $yb); // int(2)
echo "<br/>";

// primer za or (|)
$ub = 6;
$kb = 3;
// 110 - 6 binarno
// |
// 011 - 3 binarno
// ----
// 111 = 7, zato je rezultat 7
var_dump($ub | $kb); // int(7)
echo "<br/>";

// primer za xor (^)
$ub = 6;
$kb = 3;
// 110 - 6 binarno
// ^
// 011 - 3 binarno
// ----
// 101 = 5, zato je rezultat 5
var_dump($ub ^ $kb); // int(5)
echo "<br/>";

// primer za negation operator (~), obrce bitove od broja 1 u 0 ili 0 u 1
$ub = 6;
$kb = 3;
// 110 
// ~
// 001
// &
// 011 
// ----
// 001 = 1, zato je rezultat 1
var_dump(~$ub & $kb); // int(1)
echo "<br/>";

// << >> pomeraju bitove u levo i desno, kada se pomera i levo mnozi se sa 2, kada se pomera u desno deli se sa 2
$xl = 6;
$yl = 3;

// 110 
// <<<
// 110000 = 48

var_dump($xl << $yl); // rezultat je 48
echo "<br/>";

// ako koristimo znak >>> onda cemo da delimo sa 2
$xr = 6;
$yr = 3;

// 110 
// >>>
// 0

var_dump($xr >> $yr); // rezultat je 0
echo "<br/>";

// ako koristimo znak >>> onda cemo da delimo sa 2
$xrr = 6;
$yrr = 1;

// 110 
// >>
// 11

var_dump($xrr >> $yrr); // rezultat je 3
echo "<br/>";

// kada se ovo radi, oba operatora se konvertuju u integer, ukoliko nisu stringovi, onda ce da se koriste njihove ascii vredosti

// Array operators (+ == === != <> !==)
$xar = ['a', 'b', 'c'];
$yar = ['d', 'e', 'f'];

$zar = $xar + $yar; // ovo je unija za nizove, operator +, koristice iste elemente koje ima na istim kljucevima, tako da je rezultat zano vrednost iz $xar

var_dump($zar); // array(3) { [0]=> string(1) "a" [1]=> string(1) "b" [2]=> string(1) "c" 
echo "<br/>";

// ako dodamo nesto u $yar, onda ce ti novi elementi biti dodati u $zar niz

// ako promenimo da ovo bude asicijatican niz, onda se kljucevi nece poklapati i sve ce da se spoji:
$xarn = ['a' => 1, 'b' => 2, 'c' => 3];
$yarn = ['d' => 4, 'e' => 5, 'f' => 6, 'g' => 7, 'h' => 8];

$zarn = $xarn + $yarn;

print_r($zarn); // Array ( [a] => 1 [b] => 2 [c] => 3 [d] => 4 [e] => 5 [f] => 6 [g] => 7 [h] => 8 )
echo "<br/>";

// operator poredjenja == gleda da li dva niza imaju isti key => value parove, ako imaju bice true, sve mora da bude isto
// operator === ce da proveri i tip vrednosti
