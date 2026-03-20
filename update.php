<?php
include 'db.php';

$id = $_POST['id'];
$title = $_POST['title'];

$stmt = $conn->prepare("UPDATE tasks SET title=? WHERE id=?");
$stmt->bind_param("si", $title, $id);
$stmt->execute();

header("Location: index.php");
?>
