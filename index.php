<?php
/**
 * 1. Variables
 * 2. Data Types
 * 3. Operators
 * 4. Strings
 * 5. Arrays
 * 6. Functions
 * 7. Conditional Statements
 * 8. Loops
 * 9. Super Globals
 * 10. Form Handling
 * 11. File Handling
 * 12. Error Handling
 * 13. Object Oriented Programming
 * 14. Regular Expressions
 * 15. Date and Time
 */
// echo  "Hello World"; // echo is faster than print

// print "Hello World"; // print has return value of 1

// $name = "Gio";
// echo $name;

/* 1. Variable */
// $x = 1;
// $y = $x;

// $x = 3;

// echo $y // ovo je 1 jer je y = x = 1

// ako zelimo da y bude 3 onda moramo da stavimo $y = &$x;
// ovo znaci da je y referenca na x
// ako promenimo x, y ce se takodje promeniti

// $firstName = "Aleksandar";

// echo 'Hello ' . $firstName . '!';
// echo "Hello $firstName!"; // ovo radi zato sto koristimo dvostruke navodnike


?>
<!DOCTYPE html>
<html>

<body>

  <h1><?= "My First Heading!!" ?></h1>
  <p>My first paragraph.</p>

  <?php
  $x = 5;
  $y = 4;
  echo '<p>' . $x . ', ' . $y . '</p>';
  ?>
</body>

</html>