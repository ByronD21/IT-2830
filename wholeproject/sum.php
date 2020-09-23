<!DOCTYPE html>
<html lang="en">
<head>
<title>Sum</title>
</head>
<body>
<?
$n1 = intval( $_GET["n1"] );
$n2 = intval( $_GET["n2"] );
$sum = 0;

for ( $i = $n1; $i <= $n2; $i++ ) {
    $sum += $i * $i;
}

echo $sum;
?>
</body>
</html>