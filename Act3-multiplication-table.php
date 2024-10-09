<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Activity 3: Multiplication Table</title>
</head>
<body>
<?php
echo "<table border='1'>";
for ($i = 1; $i <= 10; $i++) {
    echo "<tr>";
 echo "<td>7 x $i = " . 7 * $i . "</td>";
    echo "</tr>";
}
echo "</table>";
?>
</body>
</html>