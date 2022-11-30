<?php

/*$day = date('d'); // day
$month = date('F'); // month
$year = date('Y'); // year
$dayOfWeek = date('l'); //day of the week

echo "Today is $dayOfWeek, $month $day, $year";
echo '<br>';
                    //hour, min, s, month, day, year
$birthDate = mktime(11, 20, 20, 05, 15, 1984);

echo 'My birthday is on ' . date('F d, Y', $birthDate);*/

//Using strtotime()

$timestamp2 = strtotime("7:00pm March 7, 2022");
$timestamp3 = strtotime("tomorrow");
$timestamp4 = strtotime("next Sunday");
$timestamp5 = strtotime("+2 months"); 

echo '<h1>You have client appointment on: </h1>' . date('m/d/Y h:i:sa', $timestamp5);
echo '<br>';



?>