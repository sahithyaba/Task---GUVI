<?php

// Establish Database connection
$conn = new mysqli("localhost", "root", "1234", "users_details",3307);
    
// check for errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

var_dump($_POST);

$username = $_POST['username'];
$user_password = $_POST['password'];

// Check form data
var_dump($username,$user_password);

// Prepare and execute Insert statement
$stmt = mysqli_prepare($conn, "INSERT INTO registered_users(username,password) VALUES(?,?)");

mysqli_stmt_bind_param($stmt,"ss",$username,$user_password);

if(mysqli_stmt_execute($stmt)){
    echo "User Registered Successfully!";
}
else{
    echo "Error: ".mysqli_error($conn);
}

// Close statement and connection

mysqli_stmt_close($stmt);
mysqli_close($conn);
?>