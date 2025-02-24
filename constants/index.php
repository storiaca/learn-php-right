<?php
/**
 * Constants
 * 
 * konstante se ne mogu menjati
 */

// prvi nacin da definisemo konstantu sa define funkcijom, ima 3 parametra
// prvi je ime konstante, drugi je vrednost konstante, treci je boolean vrednost koja oznacava da li je case sensitive koji je zastareo i vise se ne koristi
// ovo je definisano u runtime-u

define('PI', 3.14);
define('STATUS_PAID', 'paid');

echo STATUS_PAID;

// drugi nacin da definisemo konstantu sa const kljucnom reci, ovo je definisina u compiled time-u
// ne mozemo da definisemo konstantu unutar funkcije ili petlje
const PI2 = 3.14;
const STATUS_PAID2 = 'paid';

// dinamicke konstante
$paid2 = 'PAID';

define('STATUS_' . $paid2, $paid2);

echo STATUS_PAID2;

/**
 * https://www.php.net/manual/en/reserved.constants.php
 * 
 * 
 */
echo PHP_VERSION;

// Magic constants
// https://www.php.net/manual/en/language.constants.magic.php
echo __LINE__; // prikazje liniju gde se nalazi
echo __DIR__; // prikazuje direktorijum gde se nalazi
echo __FILE__; // prikazuje fajl gde se nalazi
// echo __FUNCTION__; // prikazuje funkciju gde se nalazi, ovo je korisno za debugging

// Varaibles variables
$foo = 'bar';
$$foo = 'baz'; // $bar = 'baz' , uzima vrednost iz $foo i pravi novu promenljivu sa tim imenom

echo $foo, $bar;
echo "$foo, {$$foo}";
?>