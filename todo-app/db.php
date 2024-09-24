<?php
$hostname = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "todo_app";

// Establish database connection
$conn = new mysqli($hostname, $db_user, $db_password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}