<?php
/* Arrays */

$programmingLanguages = ["PHP", "JavaScript", "Python", "Java", "C#"];
// ispisuje se ceo niz
var_dump($programmingLanguages);
echo "<br>";

echo $programmingLanguages[1];
echo "<br>";

// ne radi kada unesemo negativan broj kao kod stringova

// ako probamo da pristupimo elementu koji ne postoji, nece se desiti nista, zato sto vraca null
echo $programmingLanguages[5];
echo "<br>";

// mozemo da proverimo sa isset() da li imamo index
var_dump(isset($programmingLanguages[0])); // bool(true)
var_dump(isset($programmingLanguages[5])); // bool(false)
echo "<br>";

// muatate array na specijalnoj poziciji
$programmingLanguages[0] = "Lua";

echo $programmingLanguages[0]; // Lua a bilo je PHP
echo "<br>";

// mozemo da koristimo print_r za prikaz sadrzaja niza mnogo je citljivije od var_dump funkcije
print_r($programmingLanguages);
echo "<br>";