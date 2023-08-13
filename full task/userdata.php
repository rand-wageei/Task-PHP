<?php 
require("connect.php");
$userData = "SELECT User_ID, username, useremail FROM users WHERE deleted = 0"; // Use the correct column names
$sql = $conn->query($userData);

if($sql->num_rows > 0){
    echo "<table border=2>";
    echo "<tr>";
    echo "<th>User Name</th>";
    echo "<th>User Email</th>";
    echo "<th>Edit</th>";
    echo "<th>Delete</th>";
    echo "</tr>";
    while($row = $sql->fetch_assoc()){
        echo "<tr>";
        echo "<td>".$row['username']."</td>"; 
        echo "<td>".$row['useremail']."</td>";
        echo "<td><a href='edit.php?User_ID=".$row['User_ID']."'>Edit</a></td>";
        echo "<td><a href='delete.php?User_ID=".$row['User_ID']."' onclick=\"return confirm('Are you sure you want to delete this user?')\">Delete</a></td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No Data Found";
}
?>
