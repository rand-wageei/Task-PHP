<?php
require("connect.php");

if(isset($_GET["User_ID"]) && !empty($_GET["User_ID"])) {
    $userid = $_GET["User_ID"];
    
    $getUserQuery = "SELECT * FROM users WHERE User_ID = $userid";
    $getUserResult = $conn->query($getUserQuery);
    
    if($getUserResult->num_rows > 0) {
        $userRow = $getUserResult->fetch_assoc();
    } else {
        echo "User not found.";
        exit;
    }
} else {
    echo "Invalid request.";
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $newUsername = $_POST["new_username"];
    $newUseremail = $_POST["new_useremail"];
    
    $updateQuery = "UPDATE users SET username = '$newUsername', useremail = '$newUseremail' WHERE User_ID = $userid";
    $updateResult = $conn->query($updateQuery);
    
    if($updateResult) {
        header("Location: index.php");
        exit;
    } else {
        echo "Error updating user data.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
</head>
<body>
    <h2>Edit User</h2>
    <form action="" method="post">
        <label for="new_username">New User Name:</label>
        <input type="text" name="new_username" value="<?php echo $userRow['username']; ?>">
        <label for="new_useremail">New User Email:</label>
        <input type="text" name="new_useremail" value="<?php echo $userRow['useremail']; ?>">
        <input type="submit" value="Save Changes">
    </form>
    <br>
    <a href="index.php">Back to Main Page</a>
</body>
</html>
