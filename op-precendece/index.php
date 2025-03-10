<?php
// https://www.php.net/manual/en/language.operators.precedence.php

/* Operator Precedence & Associativity */

// gleda se prvo precedence pa ako je isto onda se gleda associativity
// associativity je uglavnom na levo

// primer
$x = 5 + 3 * 5;

echo $x; // 20
echo "<br/>";
// posto imamo * to ima vecu prednost od + i zato se prvo izvrsava 3 * 5, a znak = ima manju prednost od + i * zato se on poslednji primenjuje

// mozemo da koristimo i zagrade () ako zelimo da promenimo prednost

// asocijativnost se javlja kada imamo istu prednost, onda gledamo u tabeli sa koje strane krece, levo ili desno, ili cak moze da ne bude asocijativnosti uopste

$t = $k = 5;

// ovde znak = ima desno asocijativnost tako ce da i da se primeni

// ako imamo ovo:
$p = 5;
$l = 2;
$m = 10;

$result = $p / $l * $m; // 25

echo $result;
echo "<br/>";

// za ove operatore asocijativnost je na levo, tako da se prvo izvrsi deljenje pa mnozenje

// primer za logicke
$xo = true;
$yo = false;
$zo = true;

var_dump($xo && $yo || $zo); // true
// ovde && operator ima vecu prednost od || operatora zato se on prvi izvsava
echo "<br/>";

// operatori && i || imaju vecu prednost od operartora and i or, koji imaju manju prednost od =, pa moze da dodje do problema