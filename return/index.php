<?php
/* Return / Declare / Goto - not talk anout goto */
/* In this PHP tutorial, you will learn about the declare & return statements. When the return is used within a function it stops the execution of the function & returns the value of the expression it's given, if no expression is given it will return null. If the return is used in the global scope (out of a function) then the execution of that script will end & will return the value of the expression or null if no expression is given. Declare statement is used to set execution directives, there are three directives: ticks directive, encoding directive & strict_types directive. */

function sum(int $x, int $y)
{
  return $x + $y;
}

$x = sum(5, 10);
echo $x;

echo "<br>";

echo 'Hello';

// ako koristimo return izvan funkcije, globalno, onda ce se zavrsiti taj skript gde je return izvrsen, ovako: retrun;, slicno kao u js-u kada zelimo da prekinemo program

// declare - ticks
// $b = 3;
// $y = 5;
// $z = $b * $y;

##################
// function onTick()
// {
//   echo 'Tick<br/>';
// }

// register_tick_function('onTick');

// declare(ticks=1);

// $i = 0;
// $length = 10;

// while ($i < $length) {
//   echo $i++ . '<br/>';
// }

// declare  encoding

// declare - strict_types
declare(strict_types=1);
function sum2(int $u, int $m)
{
  return $u + $m;
}

echo sum2(6, 12); // mora da bude tip broj, ne moze nista drugo

// ovaj strict type se odnosi samo na ovaj fajl