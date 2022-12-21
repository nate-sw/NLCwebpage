<!DOCTYPE html>
<html>
<body>

    <script>
        window.alert("Page is for testing purposes only");
    </script>

<h1>test</h1>
    <?php
    
    include_once './includes/dbh.inc.php';

    // Check for successful connection
    if (!$conn) {
    die("Connection failed: {mysqli_connect_error()}");
    }
    echo "Connected successfully". "<br>";
    
    ?>

    <?php
        $sql = "SELECT * FROM final ORDER BY id DESC LIMIT 1;";
        $result = $conn->query($sql);
    
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              echo "query: " . $row["query"]."<br>".
              " -ip_addr: " . $row["ip_addr"]."<br>".;
            }
          } else {
            echo "0 results";
          }
        


    ?>




</body>
</html> 

