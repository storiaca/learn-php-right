<?php
/* Arrays */

$programmingLanguages = ["PHP", "JavaScript", "Python", "Java", "C#"];
// ispisuje se ceo niz
var_dump($programmingLanguages);
echo "<br>";

echo $programmingLanguages[1];
echo "<br>";

// ne radi kada unesemo negativan broj kao kod stringova

// ako probamo da pristupimo elementu koji ne postoji, nece se desiti nista, zato sto vraca null
echo $programmingLanguages[5];
echo "<br>";

// mozemo da proverimo sa isset() da li imamo index
var_dump(isset($programmingLanguages[0])); // bool(true)
var_dump(isset($programmingLanguages[5])); // bool(false)
echo "<br>";

// muatate array na specijalnoj poziciji
$programmingLanguages[0] = "Lua";

echo $programmingLanguages[0]; // Lua a bilo je PHP
echo "<br>";

// mozemo da koristimo print_r za prikaz sadrzaja niza mnogo je citljivije od var_dump funkcije
print_r($programmingLanguages);
echo "<br>";

// da bi izgledalo lepse mozemod a ga okruzmimo sa <pre> tagom
echo "<pre>";
print_r($programmingLanguages);
echo "</pre>";
echo "<br>";

// broj elemenata u nizu
echo count($programmingLanguages);
echo "<br>";

// dodavanje elemenata u niz
$programmingLanguages[] = "Ruby";
print_r($programmingLanguages);
echo "<br>";

// dodavanje elemenata na odredjenu poziciju
array_push($programmingLanguages, "C++");
print_r($programmingLanguages);
echo "<br>";

// mozemo da desinisemo niz sa kljucem, kada imamo imenovane kljuceve to se zove asocijativni niz
// $programmingLanguages = [
//     "frontend" => "HTML",
//     "backend" => "PHP",
//     "database" => "SQL"
// ];

$programmingLanguages["frontend"] = "HTML";
print_r($programmingLanguages);
echo "<br>";

// ovaj key moze da bude dinamican, da bude definisan u promenljivoj  
$newKey = "backend";
$programmingLanguages[$newKey] = "PHP";
print_r($programmingLanguages);
echo "<br>";

// niz moze da se sastoji od vise tipova podataka
$person = [
  "name" => "John",
  "age" => 30,
  "isEmployed" => true
];
print_r($person);
echo "<br>";

// niz moze da sadrzi i druge nizove
$person2 = [
  "name" => "John",
  "age" => 30,
  "isEmployed" => true,
  "programmingLanguages" => ["PHP", "JavaScript", "Python"]
];
print_r($person2);
echo "<br>";

// pristupanje elementima u nizu koji je u nizu treba da navedemo key koji je u nizu
echo $person2["programmingLanguages"][1];
echo "<br>";

// key moze da broj i string
$person3 = [
  0 => "John",
  1 => 30,
  2 => true
];
print_r($person3);
echo "<br>";

// key moze da bude i izostavljen, u tom slucaju ce se automatski generisati
$person4 = [
  "John",
  30,
  true
];
print_r($person4);
echo "<br>";

// primer za bool kao key, ako je true bice 1, ako je false bice prazan string
$person5 = [
  true => "John",
  false => 30
];
print_r($person5);
echo "<br>";

// jso jedan primer za bool kao key
$arr = [true => 'a', 1 => 'b', 1.5 => 'c', false => 'd', 0 => 'e', 0.5 => 'f'];
print_r($arr); // Array ( [1] => c [0] => f )
echo "<br>";

// oduzimanje elemenata iz niza, array_pop() funkcija uklanja poslednji element iz niza
$lastElement = array_pop($programmingLanguages);
print_r($programmingLanguages);
echo "<br>";

// imamo i array_shift() funkciju koja uklanja prvi element iz niza
$firstElement = array_shift($programmingLanguages);
print_r($programmingLanguages);
echo "<br>";

// imamo i unset() funkciju koja uklanja element iz niza, mozemo da uklonimo i vise elemenata, moramo da navedemo kljuc, ako ne navedemo kljuc onda ce se niz resetovati
unset($programmingLanguages[0]);
print_r($programmingLanguages);
echo "<br>";

// imamo i casting nizova, kada zelimo da konvertujemo niz u string, koriostimo implode() funkciju  
$programmingLanguages2 = ["PHP", "JavaScript", "Python", "Java", "C#"];
echo implode(", ", $programmingLanguages2);
echo "<br>";

// koristimo explode() funkciju kada zelimo da konvertujemo string u niz
$programmingLanguages3 = "PHP, JavaScript, Python, Java, C#";
print_r(explode(", ", $programmingLanguages3)); // Array ( [0] => PHP [1] => JavaScript [2] => Python [3] => Java [4] => C# )
echo "<br>";

// mozeo i ovako za broj
$x = 5;
var_dump((array) $x); // array(1) { [0]=> int(5) }
echo "<br>";

// mozemo da proverimo da li imamo key u nizu sa array_key_exists() funkcijom
$person6 = [
  "name" => "John",
  "age" => 30,
  "isEmployed" => true,
  "b" => null
];
var_dump(array_key_exists("name", $person6)); // bool(true)
var_dump(array_key_exists("email", $person6)); // bool(false)
var_dump(array_key_exists("b", $person6)); // bool(true)
echo "<br>";

// mozemo da koristim i isset() funkciju za proveru kljuca u nizu, porverava koja vrednost je setovana, ako je null vratice false
var_dump(isset($person6["name"])); // bool(true)
var_dump(isset($person6["email"])); // bool(false)
var_dump(isset($person6["b"])); // bool(false)