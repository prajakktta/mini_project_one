<?php
$string = "jewghvu 4 badword1 jiinereruhgnoviw badword1 fiuhcefu uhcqxwgfbyf badword2";
$badWords = array("badword1", "badword2");
foreach($badWords as $badWord)
{
$string = str_replace($badWord, "****", $string);
}
echo $string;