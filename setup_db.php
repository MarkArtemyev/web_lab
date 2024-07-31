<?php
$host = 'localhost';
$db_name = 'my_db_name';
$username = 'my_db_username';
$password = 'my_db_password';

try {
    $conn = new PDO("mysql:host=$host", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "CREATE DATABASE IF NOT EXISTS $db_name";
    $conn->exec($sql);
    echo "Database created successfully<br>";

    $conn->exec("USE $db_name");

    $sql = "CREATE TABLE IF NOT EXISTS users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(100) NOT NULL,
        email VARCHAR(100) NOT NULL UNIQUE,
        password VARCHAR(255) NOT NULL
    )";
    $conn->exec($sql);
    echo "Table users created successfully<br>";
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;
?>
