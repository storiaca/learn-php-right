<?php

/* Strings */
$firstName = 'Will';
//$lastName = "$firstName Smith";
//$lastName = "{$firstName} Smith";
$lastName = 'Smith';

echo $lastName . "<br>";

$name = $firstName . " " . $lastName;

echo $name . "<br>";

echo $name[1] . "<br>"; // i
echo $name[-2] . "<br>"; // t

$name[1] = 'I';

echo $name . '<br>';

var_dump($name); // 10

echo "<br>";

// drugi nacin za baratanje stringova je Heredoc i Nowdoc
// Heredoc - koristi se kada zelimo da sacuvamo formatiranje stringa, mozemo da imamo variable unutar njega
$heredoc = <<<EOT
Hello, my name is $name
EOT;  // mora biti na pocetku reda  EOT;
echo $heredoc;

echo "<br>";

$text = <<<TEXT
Line 1
Line 2
Line 3
TEXT;

echo nl2br($text);

echo "<br>";
// Nowdoc
// Nowdoc - koristi se kada zelimo da sacuvamo formatiranje stringa i da se ne izvrsava nista unutar stringa, ne mozemo da imamo variable unutar njega
$nowdoc = <<<'EOT'
Hello, my name is $name 
EOT; // mora biti na pocetku reda  EOT;
echo $nowdoc;

echo "<br>";

