<?php
// https://www.youtube.com/watch?v=LVEhccXXnOo&ab_channel=ProgramWithGio

// https://www.php.net/manual/en/ini.list.php
// https://www.php.net/manual/en/ini.core.php

/* php.ini & configuration */

// ini_get();
// ini_set();

// error_reporting, error_log, display_errors
var_dump(ini_get('error_reporting')); // string(5) "22527"

// ini_set('error_reporting', E_ALL & ~E_WARNING); // Onemoguci greske

$array = [1];

echo $array[3]; // Warning: Undefined array key 3 in /var/www/html/learn-php-right/php-ini-conf/index.php on line 17


echo '<br/>';

var_dump(ini_get('display_errors')); // posto je display_errors = on rezulat je: string(1) "1"

echo '<br/>';

var_dump(ini_get('memory_limit')); // string(4) "128M"