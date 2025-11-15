<?php
require "db.php";

if (!isset($_GET['id'])) {
    die("Invalid request.");
}

$id = $_GET['id'];

// Prepared DELETE query
$stmt = $conn->prepare("DELETE FROM posts WHERE id = ?");
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    echo "<h3>Post deleted successfully!</h3>";
} else {
    echo "<h3>Error deleting post: " . $stmt->error . "</h3>";
}

echo "<br><a href='list_posts.php'>Back to List</a>";
?>
