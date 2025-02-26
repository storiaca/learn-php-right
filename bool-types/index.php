<?php
/* Booleans */

$isComplete = true;

echo $isComplete; // prikazuje 1 na ekranu, ako je false prikazuje prazan string, tj nista ne ekranu, razlog je kada nesto zelimo da prikazemo u php on ce hteti uvek to da castuje u string, pa ako je true on ce to castovati u 1, a ako je false on ce to castovati u prazan string

// mozemo da koristimo var_dump() funkciju da vidimo sta je tacno u promenljivoj
var_dump($isComplete);

// mozemo da koristimo is_bool() funkciju da proverimo da li je promenljiva boolean
var_dump(is_bool($isComplete));

if ($isComplete) {
  echo 'Task is complete';
} else {
  echo 'Task is incomplete';
}

// neke promenjlive mogu da budu true ili false
// integer 0 i -0 je false, sve ostalo je true
// float 0.0 i -0.0 je false, sve ostalo je true
// string '' i '0' je false, sve ostalo je true
// array() ili [] je false, sve ostalo je true
// null je false
// objekat je true
// resource je true
// 'false' je true
