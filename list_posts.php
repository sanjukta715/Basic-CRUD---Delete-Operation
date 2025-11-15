<?php
require "db.php";

$sql = "SELECT id, title FROM posts ORDER BY id DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Posts List</title>
    <script>
        function confirmDelete(id) {
            if (confirm("Are you sure you want to delete this record?")) {
                window.location = "delete_post.php?id=" + id;
            }
        }
    </script>
</head>
<body>

<h1>All Blog Posts</h1>

<table border="1" cellpadding="10">
<tr>
    <th>ID</th>
    <th>Title</th>
    <th>Action</th>
</tr>

<?php while ($row = $result->fetch_assoc()) { ?>
<tr>
    <td><?= $row['id']; ?></td>
    <td><?= htmlspecialchars($row['title']); ?></td>
    <td>
        <button onclick="confirmDelete(<?= $row['id']; ?>)">Delete</button>
    </td>
</tr>
<?php } ?>

</table>

</body>
</html>
