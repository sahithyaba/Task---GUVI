<?php

session_start();
$connection = mysqli_connect("localhost", "root", "1234", "users_details",3307);

if (!$connection) {
    die("Connection failed: ");
}
?>