<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $published_year = $_POST['published_year'];
    $genre = $_POST['genre'];

    $sql = "INSERT INTO books (title, author, published_year, genre) VALUES ('$title', '$author', $published_year, '$genre')";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Book</title>
</head>
<body>
    <h1>Add New Book</h1>
    <form method="post" action="">
        Title: <input type="text" name="title" required><br>
        Author: <input type="text" name="author" required><br>
        Published Year: <input type="number" name="published_year" required><br>
        Genre: <input type="text" name="genre" required><br>
        <input type="submit" value="Add Book">
    </form>
    <a href="index.php">Back to List</a>
</body>
</html>

<?php
$conn->close();
?>
