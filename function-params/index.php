<?php
/* Function Parameters */
// https://www.php.net/manual/en/language.types.declarations.php#language.types.declarations.union.coercive
// https://www.php.net/manual/en/functions.arguments.php#functions.named-arguments
// https://wiki.php.net/rfc/named_params

// declare(strict_types=1)
function foo(int|float $x, int|float $y = 10)
{
  return $x * $y;
}
echo foo(5, 9);

echo '<br/>';

function foo2(int|float &$xf, int|float $yf): int|float
{
  if ($xf % 2 === 0) {
    $xf /= 2;
  }

  return $xf * $yf;
}

$a = 6.0;
$b = 7;

echo foo2($a, $b);
echo '<br/>';
var_dump($a, $b);

echo '<br/>';

function sum(...$numbers): int|float
{
  $sum = 0;
  foreach ($numbers as $number) {
    $sum += $number;
  }
  return $sum;

  // return array_sum($numbers);
}

$aa = 6.0;
$bb = 7;

echo sum($aa, $bb, 20);
echo '<br/>';
var_dump($aa, $bb);

echo '<br/>';

// named arguments, new in php 8
function namExample(int $xn, int $yn): int
{
  if ($xn % $yn === 0) {
    return $xn / $yn;
  }

  return $xn;
}

$xn = 6;
$yn = 3;

echo namExample(yn: $yn, xn: $xn);

echo '<br/>';

setcookie(name: 'foo', value: 'bar', httponly: true);