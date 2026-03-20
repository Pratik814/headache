<?php include 'db.php'; ?>

<h2>Todo List</h2>

<form action="add.php" method="POST">
  <input type="text" name="title" placeholder="Enter task" required>
  <button type="submit">Add</button>
</form>

<br>

<table border="1" cellpadding="10">
<tr>
  <th>ID</th>
  <th>Task</th>
  <th>Actions</th>
</tr>

<?php
$result = $conn->query("SELECT * FROM tasks");

while ($row = $result->fetch_assoc()):
?>
<tr>
  <td><?= $row['id'] ?></td>
  <td><?= $row['title'] ?></td>
  <td>
    <a href="edit.php?id=<?= $row['id'] ?>">Edit</a> |
    <a href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Delete this task?')">Delete</a>
  </td>
</tr>
<?php endwhile; ?>

</table>
