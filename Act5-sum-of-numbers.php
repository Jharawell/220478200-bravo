<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Activity 5: Sum of Numbers</title>
</head>
<body>
<?php
$sum = 0;
$i = 1;

while ($i <= 100) {
    $sum += $i;
    $i++;
}

echo "The sum of numbers from 1 to 100 is: $sum\n";
?>
</body>
</html>