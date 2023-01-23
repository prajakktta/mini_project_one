<!DOCTYPE html>
<html>
<head>
<title>ISBN checker</title>
</head>
<body>
<form action="" method="post">
<input type="text" name="isbn">
<input type="submit" name="submit" value="check">
</form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
$isbn = $_POST['isbn'];
$total = 0;
$i = 1;
$digits = str_split($isbn);
foreach($digits as $digit)
{
$total += $digit * $i;
$i++;
}
if($total % 11 == 0)
{
echo "valid";
}
else 
{
echo "invalid";
}
}
?>