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


if (isset($ppe) && $ppe =="masks")
echo "cool";

mysqli_close($conn);
?>
    

