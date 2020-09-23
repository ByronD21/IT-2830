<!DOCTYPE html>
<html lang="en">
<head>
<title>Number</title>
</head>
<body>
<?php  
$num = $_GET["number"];  
$factorial = 1;  
for ($x=$num; $x>=1; $x--)   
{  
  $factorial = $factorial * $x;  
}  
echo "Factorial of $num is $factorial";  
?> 
</body>
</html>