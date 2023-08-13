<?php
require("connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $useremail = $_POST["useremail"];

    $query = "INSERT INTO users (username, useremail) VALUES ('$username', '$useremail')";
    $sql = $conn->query($query);

    if ($sql) {
        header("Location: index.php");
        exit;
    } else {
        echo "Error creating user.";
    }
}

$conn->close();
?>
