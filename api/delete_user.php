<?php
require '../db.php';

$id = $_GET['id'];
$sql = "DELETE FROM users WHERE id = :id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id);

if ($stmt->execute()) {
    echo json_encode(['message' => 'User deleted successfully']);
} else {
    echo json_encode(['message' => 'User deletion failed']);
}
?>
