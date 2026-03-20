<?php
include 'db.php';

$id = $_GET['id'];

$stmt = $conn->prepare("SELECT * FROM tasks WHERE id=?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$task = $result->fetch_assoc();
?>

<h2>Edit Task</h2>

<form action="update.php" method="POST">
  <input type="hidden" name="id" value="<?= $task['id'] ?>">
  <input type="text" name="title" value="<?= $task['title'] ?>" required>
  <button type="submit">Update</button>
</form>
