<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Activity 8: Factorial Calculator</title>
</head>
<body>
<?php
function calculateFactorial($n) {
    $factorial = 1;
    for ($i = 1; $i <= $n; $i++) {
        $factorial *= $i;
    }
    return $factorial;
}

$num = 5;
$result = calculateFactorial($num);
echo "Factorial of $num is: $result\n";
?>
</body>
</html>