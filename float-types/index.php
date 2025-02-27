<?php

/* Floats */

$x = 12.5;
$y = 13.4e3;

var_dump($x);
echo "<br>";

echo $x . "<br>";

echo $y . "<br>";

// imamo i za maksimalne i minimalne vrednosti float tipa
echo PHP_FLOAT_MAX . "<br>";
echo PHP_FLOAT_MIN . "<br>";

// zaokruzivanje
$z = floor((0.1 + 0.7) * 10);
echo $z . "<br>"; // 7

// ovo se desava zato sto interno se broje pretvarau binary i onda gubi svoju preciznost
// zato se koristi bc math funkcija
// $p = bcadd(bcadd(0.1, 0.7, 1), 0, 1);
// echo $p . "<br>"; // 0.8

// suprotno od floor je ceil
$g = ceil((0.1 + 0.7) * 10);
echo $g . "<br>"; // 8

// bug kada ceil ne vraca dobar broj
$k = ceil((0.1 + 0.2) * 10);
echo $k . "<br>"; // 3

// zato nikad ne bi trebalo da se float brojevi koriste za poredjenje
// umesto toga koristiti funkciju za poredjenje
if (abs($k - 3) < 0.00001) {
  echo "Jednaki su";
} else {
  echo "Nisu jednaki";
}
// https://floating-point-gui.de/

echo "<br>";
// postoji i NaN vrednost koja se koristi za nevalidne operacije
$nan = acos(8);
var_dump($nan); // NAN  (Not A Number)

echo "<br>";
// acos vraca NaN ako je argument manji od 1
$nan2 = acosh(0.5);
var_dump($nan2); // NAN

echo "<br>";

// postoji i infinity vrednost  
$inf = INF;
var_dump($inf); // INF

// inf se moze dobiti i deljenjem nule sa nulom ili kada predjemo maksimalnu vrednost float tipa

echo "<br>";

// postoje funkcieje za proveru da li je nesto NaN ili INF
var_dump(is_nan($nan)); // true
var_dump(is_nan($nan2)); // true
var_dump(is_infinite($inf)); // true

echo "<br>";

// postoji i is_finite funkcija
var_dump(is_finite($inf)); // false

echo "<br>";

// na kraju casting
$m = 5;
var_dump((float) $m); // float(5)

// imamo i funkciju floatval
var_dump(floatval($m)); // float(5)

// ako pokusamo da konvertujemo string 'asads' u float dobicemo 0
var_dump(floatval('asads')); // float(0)