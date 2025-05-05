<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="styles.css">
<title>List Products</title>
</head>
<body>
<h1>Films</h1>
<div>
<?php 

require 'dbconnection.php';

//SQL query to fetch all users
$sql = "SELECT product_id, product_name, release_year FROM products";
$result = mysqli_query($connection, $sql);

//check if there are results
if ($result && mysqli_num_rows($result) > 0) {
    echo "<table><tr><th>ID</th><th>Film Name</th><th>Year</th></tr>";

    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["product_id"] . "</td>";
        echo "<td>" . $row["product_name"] . "</td>";
        echo "<td>" . $row["release_year"] . "</td>";
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