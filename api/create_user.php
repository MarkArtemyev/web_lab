<?php
require '../db.php';

$data = json_decode(file_get_contents("php://input"));

$sql = "INSERT INTO users (name, email, password) VALUES (:name, :email, :password)";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':name', $data->name);
$stmt->bindParam(':email', $data->email);
$stmt->bindParam(':password', password_hash($data->password, PASSWORD_BCRYPT));

if ($stmt->execute()) {
    echo json_encode(['message' => 'User created successfully']);
} else {
    echo json_encode(['message' => 'User creation failed']);
}
?>
