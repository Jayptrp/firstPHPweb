<?php
    $conn = mysqli_connect("localhost", "root", "", "registerdb");

    if (!$conn) {
        die("Connection failed: " . $conn->connect_error);
    }
?>