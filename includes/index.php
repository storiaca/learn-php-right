<?php

/* require / require_once / inlclude / include_once */

// require 'file.php';
require 'file.php';
require_once 'file.php';

echo 'Hello World';

// razlika izmedju include i require je da: include ce da izvrsi naredbu echo 'Hello World' i pokaze warning  iako nema file.php dok ce require da prekine izvrsavanje progama

// ako nije navedena putanja skritp ce da pogleda pod konfiguracionm fajlom php.ini pod include_path sekcijom, takodje nastavice da gleda da li se fajl nalazi u folderu od index.php

// require_once i include_once ca da ubace fajl samo jednom ako je vec ukljucen, dok ove druge mogu da ubace jedan fajl vise puta ako se pozovu.

echo "<br>";

// nekada cemo zeleti da ubacimo fajlu string, primer:
ob_start();
include './partials/nav.php';
$nav = ob_get_clean();

$nav = str_replace('About', 'About Us', $nav);

echo $nav;

echo "<br>";