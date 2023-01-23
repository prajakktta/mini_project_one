<?php
$message = "Ensure that you become familiar with php functions as they are extremely useful.";
$encoded = str_rot13($message);
echo $encoded;
echo "<br>";
$return = str_rot13($encoded);
echo $return;