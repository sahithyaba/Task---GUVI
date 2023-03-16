<?php
    // connect to the MySQL database
    $mysqli = new mysqli("localhost", "root", "1234", "users_details",3307);
    
    // check for errors
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }
    echo "Connected successfully";
    
    // prepare the MySQL statement
    // $stmt = $mysqli->prepare("INSERT INTO users (usernamxe, email, password) VALUES (?, ?, ?)");
    // $stmt->bind_param("sss", $username, $email, $password);
    
    // // insert user data into MySQL
    // $username = $_POST['username'];
    // $email = $_POST['email'];
    // $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    // $stmt->execute();
    
    // // close the MySQL connection
    // $stmt->close();
    // $mysqli->close();
?>