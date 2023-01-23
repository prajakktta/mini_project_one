<?php
$radius = 5;
$area = pi() * pow($radius, 2);
$roundedArea = round($area, 2);
echo "The area is " . $roundedArea;