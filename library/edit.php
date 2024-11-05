<?php
include 'db.php';

$id = $_GET['id'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $published_year = $_POST['published_year'];
    $genre = $_POST['genre'];

    $sql = "UPDATE books SET title='$title', author='$author', published_year=$published_year, genre='$genre' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$sql = "SELECT * FROM books WHERE id=$id";
$result = $conn->query($sql);
$book = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Book</title>
</head>
<body>
    <h1>Edit Book</h1>
    <form method="post" action="">
        Title: <input type="text" name="title" value="<?php echo $book['title']; ?>" required><br>
        Author: <input type="text" name="author" value="<?php echo $book['author']; ?>" required><br>
        Published Year: <input type="number" name="published_year" value="<?php echo $book['published_year']; ?>" required><br>
        Genre: <input type="text" name="genre" value="<?php echo $book['genre']; ?>" required><br>
        <input type="submit" value="Update Book">
    </form>
    <a href="index.php">Back to List</a>
</body>
</html>

<?php
$conn->close();
?>
