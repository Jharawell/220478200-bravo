<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Activity 6: Array Iteration with foreach</title>
</head>
<body>
<?php
$favoriteMovies = array(
    "The Shawshank Redemption",
    "Inception",
    "The Dark Knight",
    "Interstellar",
    "Parasite"
);

$i = 1;
foreach ($favoriteMovies as $movie) {
    echo "$i. $movie\n";
    $i++;
}
?>
</body>
</html>