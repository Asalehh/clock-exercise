<?php

$time_now = (int) date("Gi"); # Time in 24h format with minutes with leading zero compined together to output numbers like 100 for 01:00 and 1220 for 12:20 i got the idea from StackOverflow 
$time_now = 510;  // Manual set for testing.

$time_morning_start = 500;
$time_morning_end = 1059;

$time_afternoon_start = 1100;
$time_afternoon_end = 1559;

$time_evening_start = 1600;
$time_evening_end = 1959;

$time_night_start = 2000;
$time_night_end = 459;


if ($time_now >= $time_morning_start && $time_now <= $time_morning_end){
  $class= 'morning';
  $img = "<img src='images/$class.png' title='It is $class'>"; 
}

if ($time_now >= $time_afternoon_start && $time_now <= $time_afternoon_end){
  $class = 'afternoon';
  $img = "<img src='images/$class.png' title='It is $class'>"; 
}

if ($time_now >= $time_evening_start && $time_now <= $time_evening_end){
  $class = 'evening';
  $img = "<img src='images/$class.png' title='It is $class'>"; 
}

if ($time_now >= $time_night_start || ($time_now < 500 && $time_now >= 0) ){
  $class = 'night';
  $img = "<img src='images/$class.png' title='It is $class'>"; 
}



?>