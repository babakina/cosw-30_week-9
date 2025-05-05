<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="styles.css">
<title>List Orders</title>
</head>
<body>
<h1>Customer Orders</h1>
<div>
<?php 

require 'dbconnection.php';

//SQL query to fetch all users
$sql = "SELECT order_id, product_id, user_id, order_status FROM orders";
$result = mysqli_query($connection, $sql);

//check if there are results
if ($result && mysqli_num_rows($result) > 0) {
    echo "<table><tr><th>ID</th><th>Product ID</th><th>User ID</th><th>Order Status</th></tr>";

    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["order_id"] . "</td>";
        echo "<td>" . $row["product_id"] . "</td>";
        echo "<td>" . $row["user_id"] . "</td>";
        echo "<td>" . $row["order_status"] . "</td>";
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