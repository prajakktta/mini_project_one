<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Calculating the length of a string</title>
</head>
<body>
<form action="" method="post">
<input type="text" name="string">
<input type="submit" name="submit">
</form>
</body>
</html>
<?php
if (isset($_POST['submit']))
{
$string = $_POST['string'];
$length = strlen($string);
echo "The string is $length characters long";
}
?>