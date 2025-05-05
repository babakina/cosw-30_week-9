<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="styles.css">
<title>List Users</title>
</head>
<body>
    <h1>Users</h1>
    <div>
<?php 

require 'dbconnection.php';

//SQL query to fetch all users
$sql = "SELECT first_name, last_name FROM users_tbl";
$result = mysqli_query($connection, $sql);

//check if there are results
if ($result && mysqli_num_rows($result) > 0) {
    echo "<table><tr><th>First Name</th><th>Last Name</th></tr>";

    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["first_name"] . "</td>";
        echo "<td>" . $row["last_name"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

?>
</div>
</body>
</html>