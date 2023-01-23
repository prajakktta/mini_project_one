<?php
$t = array(32.3, 31.3, 28.2, 29.3, 29.7, 29.9, 28.7, 28.4, 30.5, 30.5, 31.7, 30.6, 29.4, 32.0, 36.2, 31.3, 32.8, 33.3, 32.9, 28.8, 30.8, 28.0, 25.9, 30.8, 32.4, 32.0, 31.3, 25.2, 29.1, 28.6, 30.6);
$sum = array_sum($t);
$count = count($t);
$average = $sum / $count;
echo 'The average daily temperature is ' . round($average, 1) . '&degC';
sort($t);
$lowest = array_slice($t, 0, 5);
$highest = array_slice($t, -5, 5);
echo '<br>';
echo 'The 5 lowest temperature are: ';
foreach($lowest as $l)
{
echo $l . '&degC ';
}
echo '<br>';
echo 'The 5 highest temperature are: ';
foreach($highest as $h)
{
echo $h . '&degC ';
}