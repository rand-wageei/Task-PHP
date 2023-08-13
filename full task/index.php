<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management</title>
</head>
<body>
    <form action="create.php" method="post">
        <label for="username">User Name:</label>
        <input type="text" name="username" required>
        <label for="useremail">User Email:</label>
        <input type="text" name="useremail" required>
        <input type="submit" value="Add User">
    </form>

    <?php
    echo "<hr>";

    include("userData.php");
    ?>

</body>
</html>