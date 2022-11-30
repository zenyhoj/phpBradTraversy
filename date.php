<?php

$day = date('d'); // day
$month = date('F'); // month
$year = date('Y'); // year
$dayOfWeek = date('l'); //day of the week

echo "Today is $dayOfWeek, $month $day, $year";
echo '<br>';

$birthDate = mktime(11, 20, 20, 05, 15, 1984);

echo 'My birthday is on ' . date('F d, Y', $birthDate);

?>