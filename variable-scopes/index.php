<?php
/* Variable scopes */

$x = 5; // global scope

// include('script1.php');

// echo '<br/>';

// echo $x;

echo '<br/>';

// ako definisemo funkciju, variable u njoj ce imati local scope
// ako pokusamo da pozovemo ovo $x u funkciji to nece raditi
// imamo 3 nacina da pozovemo $x, prvi je da definsemo variablu unutar same funkcije $x=3;, ili da je prosledimo kao parametar foo($x)
// treci nacin je da koristimo rezervisanu rec GLOBAL za promenjljivu da bi bilo dostupno svuda u kodu
// function foo($x)
// {
//   $x = 4;
//   echo $x;
// }


// foo(8);
echo '<br/>';

function foo()
{
  global $x;
  echo $x;
}

foo();
echo '<br/>';
// php cuva globalne promenjljive u asocijativnom nizu koji se zove $GLOBALS, key je ime od variable a vrednost je vrednost od promenjljive
// ovo su super globals
// ovakve stvari trebalo bi da se izbegavaju

// function foo2()
// {
//   echo $GLOBALS['x'];
// }

// foo2();

// echo '<br/>';

// static variables, regularana varaibala sa lokalnim scope-om
// razlika izmedju regular i statci variable je da regiularna bude unistena van scope boundary, dok static variabla ne bude unistena, i cuva svoju vrednost
function getValue()
{
  $value = someVeryExpensiveFunction();
  // some more processomg with $value

  return $value;
}

function someVeryExpensiveFunction()
{
  sleep(2);
  return 10;
}

echo getValue() . '<br/>';

// ako je pozovemo jos 2 puta, cekacemo ukupno 6 sekundi
echo getValue() . '<br/>';
echo getValue() . '<br/>';


// zato mozemo da koristimo static variable da bi ovo kesirali
function getValue2()
{
  static $value = null;
  if ($value === null) {
    $value = someVeryExpensiveFunction2();
  }

  // some more processomg with $value

  return $value;
}

function someVeryExpensiveFunction2()
{
  sleep(2);

  echo 'Processing';

  return 10;
}

echo getValue2() . '<br/>';

// sada cemo cekati samo 2 sekunde, i ovaj tekst Processing ce se prikazati samo jednom
echo getValue2() . '<br/>';
echo getValue2() . '<br/>';