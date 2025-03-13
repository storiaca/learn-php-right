<?php

/* Functions */

function foo()
{
  echo 'Hello World';
}

foo();

echo '<br/>';

// ako koristimo return u funkciji vraticemo vrednost ovako:
function foo2()
{
  return 'Hello world';
}

echo foo2();
echo '<br/>';

// ako nista ne vratimo posle return, vratice nam se null

// inner functions

function foo3()
{
  echo 'Foo3';
  echo '<br/>';
  function bar()
  {
    echo 'Bar';
  }
}

foo3();
bar();
echo '<br/>';

// mora da se pozove ova inner funckija bar() da bi se izvrsila, ako zne pozovemo parent foo3() dobicemo undefined function gresku

// ne mozemo da imamo dve funkcije sa istim imenom

// return type - mozemod a definesemo kao u ts-u sta ce funkcija da vrati, koji tip
function foo4(): int
{
  return 1;
}

var_dump(foo4()); // int(1)

// ako napisemo da 1 bude string '1' necemo dobiti gresku zato sto ne koristimo strict type, pokusace da uvek prebaci tip ako moze da ga konvertuje
echo '<br/>';

// ako zelimo da vratimo null iz funkcije pisemo ovako
function foo5(): ?int
{
  return null;
}

var_dump(foo5()); // NULL 
echo '<br/>';

// ako zelimo da vratimo vise vrednosti koristimo |
function foo6(): int|float|array
{
  return 1.5;
}
var_dump(foo6()); // float(1.5)
echo '<br/>';

// mozemo da koristimo mixed ako ne znamo tacno sta cemo da vratimo iz funckije
function foo7(): mixed
{
  return [1.5];
}
var_dump(foo7()); // array(1) { [0]=> float(1.5) }
echo '<br/>';