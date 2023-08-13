<?php
require("connect.php");

if(isset($_GET["User_ID"]) && !empty($_GET["User_ID"])) {
    $userid = $_GET["User_ID"];
    
    $deleteQuery = "UPDATE users SET deleted = 1 WHERE User_ID = $userid";
    $deleteResult = $conn->query($deleteQuery);
    
    if($deleteResult) {
        header("Location: index.php");
        exit;
    } else {
        echo "Error deleting user.";
    }
} else {
    echo "Invalid request.";
    exit;
}
?>
