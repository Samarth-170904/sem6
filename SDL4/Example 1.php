<?php

// Initialize an associative array to store books
$library = [
    "To Kill a Mockingbird" => "Harper Lee",
    "1984" => "George Orwell",
    "Pride and Prejudice" => "Jane Austen"
];

// Function to add a new book
function addBook(&$library, $title, $author) {
    $library[$title] = $author;
}

// Function to remove a book
function removeBook(&$library, $title) {
    if (isset($library[$title])) {
        unset($library[$title]);
        echo "Book '$title' removed successfully.";
    } else {
        echo "Book '$title' not found in the library.";
    }
}

// Check if form is submitted
if (isset($_POST['submit'])) {
    if ($_POST['action'] == 'add') {
        addBook($library, $_POST['title'], $_POST['author']);
    } elseif ($_POST['action'] == 'remove') {
        removeBook($library, $_POST['title']);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Library Management System</h1>
        
        <!-- Display all books -->
        <h2>Library Collection:</h2>
        <ul class="book-list">
            <?php foreach ($library as $title => $author) { ?>
                <li><?php echo "$title by $author"; ?></li>
            <?php } ?>
        </ul>

        <!-- Form to add or remove books -->
        <form action="" method="post">
            <input type="text" name="title" placeholder="Book Title" required>
            <input type="text" name="author" placeholder="Author" required>
            <input type="submit" name="submit" value="Add Book">
            <input type="hidden" name="action" value="add">
        </form>
        <form action="" method="post">
            <input type="text" name="title" placeholder="Book Title to Remove" required>
            <input type="submit" name="submit" value="Remove Book">
            <input type="hidden" name="action" value="remove">
        </form>
    </div>
</body>
</html>
