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
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }
        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        input[type="text"], input[type="number"] {
            padding: 8px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            width: 100%;
        }
        input[type="submit"] {
            padding: 10px;
            margin-top: 15px;
            background-color: #4CAF50;
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        a {
            display: block;
            margin-top: 15px;
            color: #333;
            text-decoration: none;
            font-size: 14px;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Edit Book</h1>
        <form method="post" action="">
            <label>Title:</label>
            <input type="text" name="title" value="<?php echo $book['title']; ?>" required>
            
            <label>Author:</label>
            <input type="text" name="author" value="<?php echo $book['author']; ?>" required>
            
            <label>Published Year:</label>
            <input type="number" name="published_year" value="<?php echo $book['published_year']; ?>" required>
            
            <label>Genre:</label>
            <input type="text" name="genre" value="<?php echo $book['genre']; ?>" required>
            
            <input type="submit" value="Update Book">
        </form>
        <a href="index.php">Back to List</a>
    </div>
</body>
</html>

<?php
$conn->close();
?>
