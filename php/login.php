<?php
$servername = "localhost";
$username = "root";
$user_password = "1234";
$dbname = "users_details";

// Create connection
$conn = new mysqli($servername, $username, $user_password, $dbname,3307);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// prepare and bind
$stmt = $conn->prepare("INSERT INTO registered_users (username, password) VALUES (?, ?)");
$stmt->bind_param("sss", $username, $password);

// set parameters and execute
$username = "John";
$password = "Doe";

echo "New records created successfully";

$stmt->close();
$conn->close();
?>