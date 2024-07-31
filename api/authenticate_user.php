<?php
require '../db.php';

$data = json_decode(file_get_contents("php://input"));

$sql = "SELECT * FROM users WHERE email = :email";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':email', $data->email);
$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if ($user && password_verify($data->password, $user['password'])) {
    echo json_encode(['message' => 'Authentication successful']);
} else {
    echo json_encode(['message' => 'Invalid credentials']);
}
?>
