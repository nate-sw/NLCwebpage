<html>
<body>


<h1>midterm</h1>
<?php
$server = "localhost";
$username = "php";
$password = "password";
$database = "products";
$conn = mysqli_connect($server, $username, $password, $database);

// Check for successful connection
if (!$conn) {
  die("Connection failed: {mysqli_connect_error()}");
}
echo "Connected successfully";
?>




</body>
</html> 

