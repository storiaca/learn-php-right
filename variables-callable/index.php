<?php
/* Variable, Anonymous, Callable, Closure & Arrow Functions In PHP */
// https://www.youtube.com/watch?v=7_FOIxYLF-s&ab_channel=ProgramWithGio 

function sum(int|float ...$numbers): int|float
{
  return array_sum($numbers);
}

$x = 'sum';

if (is_callable($x)) {
  echo $x(1, 2, 3, 4);
} else {
  echo 'Not Callable';
}
echo '<br/>';

// anonimus functions
$b = 3;
$sumNumbers = function (int|float ...$numbers) use ($b): int|float {
  echo $b;
  return array_sum($numbers);
};

echo $sumNumbers(5, 6, 7, 8);

echo '<br/>';

// callable type and functions
$array = [1, 2, 3, 4];

$array2 = array_map(function ($element) {
  return $element * 2;
}, $array);

print_r($array);
echo '<br/>';

print_r($array2);

echo '<br/>';

// arrow functions
$arr = [1, 2, 3, 4];
$arr2 = array_map(fn($number) => $number * $number, $arr);

echo '<pre>';
print_r($arr2);
echo '<pre />';

echo '<br/>';