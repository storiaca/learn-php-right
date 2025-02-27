<?php
echo "<br>";
/* Null */
// null je poseban tip podataka koji ima samo jednu vrednost - null
// null se koristi kada zelimo da proglasimo da promenljiva nema vrednost

// null promenljiva
$x = null;

echo $x; // nista se ne ispisuje
// zatos to ako pokusamo da ispisemo null promenljivu, nece se nista ispisati jer je to prazan string, kad nesto priakzujemo u browseru, prazan string se ne prikazuje a uvek ce da bude neki string

var_dump($x); // NULL - ispisuje se NULL jer var_dump ispisuje sve podatke o promenljivoj
echo "<br>";

// imamo funkciju da proverimo da li je promenljiva null
if (is_null($x)) {
  echo "Promenljiva je null";
} else {
  echo "Promenljiva nije null";
}

echo "<br>";

// imamo i === da proverimo da li je promenljiva null
var_dump($x === null);

// mozemo da koristimo unset da unistimo promenljivu  
$y = 1213;
unset($y);
echo "<br>";
var_dump($y);

echo "<br>";