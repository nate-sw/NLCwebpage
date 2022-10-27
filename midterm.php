<?php
$server = "localhost";
$username = "php";
$password = "password";
$database = "products";
$conn = mysqli_connect($server, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql = "SELECT product_name, num_items FROM products"
$result = $conn->query($sql);

echo "There are " . $row["num_items"]. . $row["product_name"]. "in stock" "<br>";

mysqli_close($conn);
?>
    

