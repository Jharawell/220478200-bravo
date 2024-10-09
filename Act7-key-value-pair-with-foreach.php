<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Activity 7: Key-Value Pairs with foreach</title>
</head>
<body>
<?php
$studentInfo = array(
    "Name" => "Alice",
    "Age" => 20,
    "Grade" => "A",
    "City" => "Baguio"
);

foreach ($studentInfo as $key => $value) {
    echo "$key: $value\n";
}
?>
</body>
</html>