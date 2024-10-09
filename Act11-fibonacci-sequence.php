<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Activity 11: Fibonacci Sequence</title>
</head>
<body>
  <?php
  $a = 0;
  $b = 1;
  echo "$a $b";

  $i = 2;
  while ($i <= 10) {
    $temp = $a + $b;
    echo "$temp";
    $a = $b;
    $b = $temp;
    $i++;
  }


?>
</body>
</html>