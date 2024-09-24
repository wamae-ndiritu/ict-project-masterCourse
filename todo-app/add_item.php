<?php
include "db.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];

    $stmt = $conn->prepare("INSERT INTO item (`description`) VALUES (?)");
    $stmt->bind_param("s", $title);

    if ($stmt->execute()) {
        header("Location: index.php");
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
    $conn->close();
}