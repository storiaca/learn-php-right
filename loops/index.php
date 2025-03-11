<?php

/* Loops */

// while
$i = 0;

while ($i <= 15) {
  echo $i++; // moramo da stavimo ++ znak da ne bi usli u infinite loop, jer ce $i uvek biti 0
}
echo "<br/>";
// imamo i break komandu da izadjemo iz loop-a
$iw = 0;
while (true) {
  if ($iw >= 15) {
    break;
  }
  echo $iw++;
}
echo "<br/>";

// mozemo da koristimo break kad imamo ugnjezden loop ovako
$in = 0;
while (true) {
  while ($in > 10) {
    break 2; // ovo radi zato sto imamo 2 while loop-a
  }
  echo $in++;
}
echo "<br/>";

// imamo i continue koja radi ovako
$ic = 0;
while ($ic <= 15):
  if ($ic % 2 === 0) {
    $ic++;
    continue;
  }
  echo $ic++ . ','; // 1,3,5,7,9,11,13,15
endwhile;
echo "<br/>";

// do-while
$do = 0;

do {
  echo $do++;
} while ($do <= 10);
echo "<br/>";

// for 
for ($i = 0; $i < 15; $i++) {
  echo $i;
}
echo "<br/>";

// za string for loop
$text = 'Hello World';
for ($j = 0; $j < strlen($text); $j++) {
  echo $text[$j] . '<br />';
}
echo "<br/>";

// za niz for loop
$arr = ['a', 'b', 'c', 'd'];
for ($k = 0; $k < count($arr); $k++) {
  echo $arr[$k] . '<br />';
}
echo "<br/>";

// mozemo da poboljsamo performanse ako bi dobili duzinu niza pre loop-a
$arrNew = ['a', 'b', 'c', 'd'];
$length = count($arrNew);
for ($k = 0; $k < $length; $k++) {
  echo $arrNew[$k] . '<br />';
}
echo "<br/>";

// foreach
// mogu da se koriste nad nizovima i objektima
$programmingLanguages = ['php', 'java', 'c++', 'go'];

foreach ($programmingLanguages as $language) {
  echo $language . '<br />';
}
echo "<br/>";
// da vidimo kljuceve
foreach ($programmingLanguages as $key => $language) {
  echo $key . ': ' . $language . '<br />';
}
echo "<br/>";

// ako zelim da menjamo vrednost unutar niza, mozemo da uradimo ovo, dodela po referenci dodamo znak &
// foreach ($programmingLanguages as $key => &$language) {
//   $language = 'php';
//   // echo $key . ': ' . $language . '<br />';
// }
print_r($programmingLanguages); // Array ( [0] => php [1] => php [2] => php [3] => php )
echo "<br/>";

// variabla $language nece biti unistena posle foreach loopa:
echo $language; // go

// zato mozemo da koristimo funkciju unset(), pogotovo kad koristimo referentni tip u foreach
unset($language);
echo "<br/>";

// primer za asocijativne nizove
$user = [
  'name' => 'Aca',
  'email' => 'aca@mail.com',
  'skills' => ['php', 'graphql', 'react'],
];

foreach ($user as $key => $value) {
  echo $key . ': ' . $value . '<br />';
}

// posto imamo niz pod skills mozemo da prikazemo ba vise nacina, prvi je da $value pretvorimo u json ovako: json_encode($value)
foreach ($user as $key => $value) {
  echo $key . ': ' . json_encode($value) . '<br />';
}
// drugi nacin je da proverimo u petlji da li je $value tipa niz i da koristimo funckiju impolde
foreach ($user as $key => $value) {
  if (is_array($value)) {
    $value = implode(',', $value);
  }
  echo $key . ': ' . $value . '<br />';
}

// ili mozemo da korisimo jos jedan foreach
foreach ($user as $key => $value):
  echo $key . ': ';
  if (is_array($value)) {
    foreach ($value as $skill) {
      echo $skill . ' - ';
    }
  } else {
    echo $value;
  }
  echo "<br/>";
endforeach;