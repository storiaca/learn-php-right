<?php
// https://www.youtube.com/watch?v=Zf9MWSUKpVM&ab_channel=ProgramWithGio

// https://www.php.net/manual/en/datetime.format.php
// https://www.php.net/manual/en/timezones.php
// https://www.php.net/manual/en/datetime.formats.php#datetime.formats.relative

/* How To Work With Dates & Time Zones */

echo time(); // 1742290981
echo '<br/>';

$currentTime = time();
echo $currentTime . '<br/>';

echo $currentTime + 5 * 24 * 60 * 60 . '<br/>'; // 5 dana unapred

echo $currentTime - 60 * 24 * 60 * 60 . '<br/>'; // 60 dana u proslost

// da bi formatirali datum pisemo
echo date('m/d/Y g:ia'); // 03/18/2025 9:49am
echo '<br/>';

echo date('m/d/Y g:ia', $currentTime + 5 * 24 * 60 * 60); // 03/23/2025 9:51am
echo '<br/>';

echo date('m/d/Y g:ia', $currentTime - 60 * 24 * 60 * 60); // 01/17/2025 9:51am
echo '<br/>';

// sva vremena su u mojoj lokalnoj vremenskoj zoni
// mozemo da promenimo vremensku zonu sa funkcijom: date_default_timezone_set()

date_default_timezone_set('America/Los_Angeles');

echo date('m/d/Y g:ia'); // 03/18/2025 2:56am
echo '<br/>';

echo date('m/d/Y g:ia', $currentTime + 5 * 24 * 60 * 60); // 03/23/2025 2:56am
echo '<br/>';

echo date('m/d/Y g:ia', $currentTime - 60 * 24 * 60 * 60); // 01/17/2025 1:56am
echo '<br/>';

// imamo funkciju za unix prikaz vremena
echo date('m/d/Y g:ia', mktime(0, 0, 0, 4, 10, null)); // 04/10/2025 12:00am
echo '<br/>';

// primer kako mozemo da prikazemo dan ili datum tacno odredjenog dana sa strtotime() funcijom
echo date('m/d/Y g:ia', strtotime('last day of february'));
echo '<br/>'; // 02/28/2025 12:00am

echo date('m/d/Y g:ia', strtotime('first day of february'));
echo '<br/>'; // 02/01/2025

echo date('m/d/Y g:ia', strtotime('last day of february 2020'));
echo '<br/>'; // 02/29/2020 12:00am

$date = date('m/d/Y g:ia', strtotime('second friday of January'));
echo '<br/>'; // 01/10/2025 12:00am

// mozemo da koristimo funkciju date_parse() za prikazivanje datuma

echo '<pre>';
print_r(date_parse($date));
echo '</pre>';

echo '<pre>';
print_r(date_parse_from_format('m/d/Y g:ia', $date));
echo '</pre>';