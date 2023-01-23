<?php
$christmasDay = strtotime("December 25");
$daysToChristmas = ceil(($christmasDay - time()) / 60 / 60 / 24);
echo "There are " . $daysToChristmas . " days until Christmas.";
?>