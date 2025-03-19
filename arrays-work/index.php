<?php
// https://www.youtube.com/watch?v=E4FUeWa3WQk&ab_channel=ProgramWithGio

/* How To Work With Arrays In PHP */
// https://www.php.net/manual/en/ref.array.php

require 'helpers.php';

// array_chunk(array $array, int $length, bool $preserveKeys = false): array
$items = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];

prettyPrintArray(array_chunk($items, 2, true));

echo '<br/>';

// array_combine(array $keys, array $values): array
// moraju da se poklapaju duzine niza

$array1 = ['a', 'b', 'c'];
$array2 = [5, 10, 15];

prettyPrintArray(array_combine($array1, $array2));

echo '<br/>';

// array_filter(array 4array, callable|null $callable = null, int $mode = 0): array

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$even = array_filter($array, fn($number) => $number % 2 === 0);

// sada su indeksi poredjani kao sto su u original nizu, ako zelimo da indeksi budu po redu mozemo da upotrebimo array_values() funkciju
// Array
// (
//     [1] => 2
//     [3] => 4
//     [5] => 6
//     [7] => 8
//     [9] => 10
// )

$even = array_values($even);

prettyPrintArray($even);

// Array
// (
//     [0] => 2
//     [1] => 4
//     [2] => 6
//     [3] => 8
//     [4] => 10
// )
echo '<br/>';

// array_keys(array $keys, mixed $search_value, bool $strict = false): array
$arrKeys = ['a' => 5, 'b' => 10, 'c' => 15, 'd' => 5, 'e' => 10];

$keysArr = array_keys($arrKeys);

prettyPrintArray($keysArr);

// mozemo da uradimo pretragu po kljucu ovako:
$keysArrS = array_keys($arrKeys, 10);

prettyPrintArray($keysArrS);
// Array
// (
//     [0] => b
//     [1] => e
// )

echo '<br/>';

// array_map(callable|null $callback, array $array, $array ...$arrays): array

$arrayMa = [1, 2, 3, 4, 5, 6];

$arrayMult = array_map(fn($number) => $number * 3, $arrayMa);

prettyPrintArray($arrayMult);

echo '<br/>';

$arrayPam1 = ['a' => 1, 'b' => 2, 'c' => 3];
$arrayPam2 = ['d' => 4, 'e' => 5, 'f' => 6];

$arrayPamCom = array_map(fn($number1, $number2) => $number1 * $number2, $arrayPam1, $arrayPam2);

prettyPrintArray($arrayPamCom);
// Array
// (
//     [0] => 4
//     [1] => 10
//     [2] => 18
// )

// za ovakve stvari treba da nizovi budu iste duzine

echo '<br/>';
list($a, $b, $c, $d) = $arrayDe;
// array_merge(array ...$arrays): array

$arrayMer1 = [1, 2, 3];
$arrayMer2 = [4, 5, 6];
$arrayMer3 = [7, 8, 9];

$merged = array_merge($arrayMer1, $arrayMer2, $arrayMer3);

prettyPrintArray($merged);

echo '<br/>';
// array_reduce(array $array, callable $callback, mixed $initialValue = null): mixed

$invoiceItems = [
  ['price' => 9.99, 'qty' => 3, 'desc' => 'Item 1'],
  ['price' => 29.99, 'qty' => 1, 'desc' => 'Item 2'],
  ['price' => 149, 'qty' => 1, 'desc' => 'Item 3'],
  ['price' => 14.99, 'qty' => 2, 'desc' => 'Item 4'],
  ['price' => 4.99, 'qty' => 4, 'desc' => 'Item 5'],
];

$total = array_reduce($invoiceItems, fn($sum, $item) => $sum + $item['qty'] * $item['price'], 0);

prettyPrintArray($total); // 258.9

echo '<br/>';

// array_search(mixed $needle, array $haystack, bool $strict = false): int|string|false
$arraySearch = ['a', 'b', 'c', 'D', 'E', 'ab', 'bc', 'cd', 'b', 'd'];

$keySearch = array_search('b', $arraySearch);

var_dump($keySearch); // int(1), vratio je samo prvi rezultat na koji je naisao, tj njegov kljuc

echo '<br/>';
$arrayPri1 = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
$arrayPri2 = ['f' => 4, 'g' => 5, 'i' => 6, 'j' => 7, 'k' => 8];
$arrayPri3 = ['l' => 3, 'm' => 9, 'n' => 10];

prettyPrintArray(array_diff($arrayPri1, $arrayPri2, $arrayPri3));
// Array
// (
//     [a] => 1
//     [b] => 2
// )
echo '<br/>';

prettyPrintArray(array_diff_assoc($arrayPri1, $arrayPri2, $arrayPri3));
// Array
// (
//     [a] => 1
//     [b] => 2
//     [c] => 3
//     [d] => 4
//     [e] => 5
// )
echo '<br/>';

$arraySort1 = ['d' => 3, 'b' => 1, 'c' => 4, 'a' => 2, 'e' => 10];

$arraySort2 = ['d' => 3, 'b' => 1, 'c' => 4, 'a' => 2];

prettyPrintArray($arraySort1);

echo '<br/>';
asort($arraySort1); // sortira po vrednosti
prettyPrintArray($arraySort1);
// Array
// (
//     [b] => 1
//     [a] => 2
//     [d] => 3
//     [c] => 4
//     [e] => 10
// )
echo '<br/>';

ksort($arraySort1); // sortira po kljucu
prettyPrintArray($arraySort1);
// Array
// (
//     [a] => 2
//     [b] => 1
//     [c] => 4
//     [d] => 3
//     [e] => 10
// )

echo '<br/>';

usort($arraySort2, fn($a, $b) => $a <> $b);
prettyPrintArray($arraySort2);
// Array
// (
//     [0] => 2
//     [1] => 1
//     [2] => 4
//     [3] => 3
// )
echo '<br/>';

// array desctructing
$arrayDe = [1, 2, 3, 4];
//list($a, $b, $c, $d) = $arrayDe;
// ili moze ovako
[$a, $b, $c, $d] = $arrayDe;

echo ($a); // 1

echo '<br/>';
