<?php
/* Match Expression */
// https://www.php.net/manual/en/control-structures.match.php
/*
  $return_value = match (subject_expression) {
    single_conditional_expression => return_expression,
    conditional_expression1, conditional_expression2 => return_expression,
  };

 */
// slicno je kao i switch statement, match radi strict comparison u uslovu (===) dok switch radi loose comparison (==)
// samo sto u telu moramo da obezbedimo key => value parove, key je single conditional expression, a value je return expression




$paymentStatus = 1;

$returnValue = match ($paymentStatus) {
  0 => 'Pending Payment',
  1 => 'Paid',
  2 => 'Payment Declined',
};

var_dump($returnValue);

$age = 18;

$output = match (true) {
  $age < 2 => "Baby",
  $age < 13 => "Child",
  $age <= 19 => "Teenager",
  $age >= 40 => "Old adult",
  $age > 19 => "Young adult",
};

var_dump($output);

echo "<br>";