<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Activity 12: Reverse a String</title>
</head>
<body>
  <?php
  echo "Enter a string:";
  $str = trim(fgets(STDIN));

  $reversedString = '';
  for ($i = strlen($str) - 1; $i >= 0; $i--){
    $reversedString . $str[$i];
  }

  echo "Reversed string: $reversedString\n";

  ?>
</body>
</html>