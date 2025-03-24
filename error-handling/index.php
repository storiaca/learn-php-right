<?php
// https://www.youtube.com/watch?v=rQntgj7yink&ab_channel=ProgramWithGio

// https://www.php.net/manual/en/function.set-error-handler.php

// https://www.php.net/manual/en/errorfunc.constants.php

/* PHP Error Handling & Error Handlers  */

// Error handling
//error_reporting(0); // nece prijavljivati greske
//error_reporting(E_All); // prijavljivace sve greske

// trebalo bi da uvek koristimo neke promenjljive ili bitmaske za vrednosti u zagradama

// trigger_error('Example error', E_USER_ERROR); // ovo ce da zaustavi skript jer izazvimo fatalnu gresku
// Fatal error: Example error in /var/www/html/learn-php-right/error-handling/index.php on line 16

// ako promenimo gresku u warning videcemo broj 1

trigger_error('Example error', E_USER_WARNING);
// Warning: Example error in /var/www/html/learn-php-right/error-handling/index.php on line 21
// 1
echo 1;

// mozemo da logujemo greske za error_log() funkcijom

// kreiracemo nasu funckiju za obradu gresaka, koja ce da prihvata 2 parametra i opciono 2 parametra, ovo ne bi trebali da radimo u produkciji
function errorHandler(int $type, string $msg, ?string $file = null, ?int $line = null)
{
  echo $type . ': ' . $msg . ' in ' . $file . ' on line ' . $line;

  exit;
}

error_reporting(E_ALL & ~E_WARNING);

set_error_handler('errorHandler', E_ALL); // ovo nase ce da pregazi sva obavestenja o gresci

echo $x;