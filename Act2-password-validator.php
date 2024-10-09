<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Activity 2: Password Validator</title>
</head>
<body>
<?php
$password = "";
$correctPassword = "password123";

do {
    echo "Please enter the password: ";
    $password = trim(fgets(STDIN));
    
    if ($password != $correctPassword) {
        echo "Incorrect password.\n";
    }
} while ($password != $correctPassword);

echo "Access Granted.\n";
?>
</body>
</html>