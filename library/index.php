<?php
include 'db.php';

// Create
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['create'])) {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $published_year = $_POST['published_year'];
    $genre = $_POST['genre'];

    $stmt = $pdo->prepare("INSERT INTO books (title, author, published_year, genre) VALUES (?, ?, ?, ?)");
    $stmt->execute([$title, $author, $published_year, $genre]);
}

// Read
$stmt = $pdo->query("SELECT * FROM books");
$books = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Update
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $stmt = $pdo->prepare("SELECT * FROM books WHERE id = ?");
    $stmt->execute([$id]);
    $book = $stmt->fetch(PDO::FETCH_ASSOC);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $author = $_POST['author'];
    $published_year = $_POST['published_year'];
    $genre = $_POST['genre'];

    $stmt = $pdo->prepare("UPDATE books SET title = ?, author = ?, published_year = ?, genre = ? WHERE id = ?");
    $stmt->execute([$title, $author, $published_year, $genre, $id]);
    header('Location: index.php');
}

// Delete
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $stmt = $pdo->prepare("DELETE FROM books WHERE id = ?");
    $stmt->execute([$id]);
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library CRUD</title>
</head>
<body>
    <h1>Library Management</h1>

    <form method="POST" action="">
        <input type="hidden" name="id" value="<?php echo isset($book) ? $book['id'] : ''; ?>">
        <input type="text" name="title" placeholder="Book Title" value="<?php echo isset($book) ? $book['title'] : ''; ?>" required>
        <input type="text" name="author" placeholder="Author" value="<?php echo isset($book) ? $book['author'] : ''; ?>" required>
        <input type="number" name="published_year" placeholder="Published Year" value="<?php echo isset($book) ? $book['published_year'] : ''; ?>" required>
        <input type="text" name="genre" placeholder="Genre" value="<?php echo isset($book) ? $book['genre'] : ''; ?>" required>
        <button type="submit" name="<?php echo isset($book) ? 'update' : 'create'; ?>">
            <?php echo isset($book) ? 'Update' : 'Add Book'; ?>
        </button>
    </form>

    <h2>Books List</h2>
    <table border="1">
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Published Year</th>
            <th>Genre</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($books as $book): ?>
        <tr>
            <td><?php echo htmlspecialchars($book['title']); ?></td>
            <td><?php echo htmlspecialchars($book['author']); ?></td>
            <td><?php echo htmlspecialchars($book['published_year']); ?></td>
            <td><?php echo htmlspecialchars($book['genre']); ?></td>
            <td>
                <a href="?edit=<?php echo $book['id']; ?>">Edit</a>
                <a href="?delete=<?php echo $book['id']; ?>" onclick="return confirm('Are you sure?');">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
