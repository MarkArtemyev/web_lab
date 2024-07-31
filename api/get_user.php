<?php
require '../db.php';

$id = $_GET['id'];
$sql = "SELECT * FROM users WHERE id = :id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if ($user) {
    echo json_encode($user);
} else {
    echo json_encode(['message' => 'User not found']);
}
?>
