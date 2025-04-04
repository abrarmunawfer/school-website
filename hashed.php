<?php
require 'config.php';

$username = "admin3";
$password = "123"; // Change this to your desired password
$hashed_password = password_hash($password, PASSWORD_BCRYPT);

$sql = "INSERT INTO admin (username, password) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $username, $hashed_password);
$stmt->execute();

if ($stmt->affected_rows > 0) {
    echo "Admin user created successfully!";
} else {
    echo "Error creating admin user!";
}

$stmt->close();
$conn->close();
?>
