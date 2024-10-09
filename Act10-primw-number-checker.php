<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Activity 10: Prime Number Checker</title>
</head>
<body>
<?php
echo "Enter a number: ";
$num = trim(fgets(STDIN));

function isPrime($num) {
    if ($num <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

if (isPrime($num)) {
    echo "$num is a prime number.\n";
} else {
    echo "$num is not a prime number.\n";
}
?>
</body>
</html>