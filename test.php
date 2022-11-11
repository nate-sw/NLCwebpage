<!DOCTYPE html>
<html>
<body>


<h1>test</h1>
    <?php
    
    include_once 'includes/dbh.inc.php';

    // Check for successful connection
    if (!$conn) {
    die("Connection failed: {mysqli_connect_error()}");
    }
    echo "Connected successfully". "<br>";
    
    ?>

    <?php
        $sql = "SELECT * FROM train_list ORDER BY id DESC LIMIT 1;";
        $result = $conn->query($sql);
    
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              echo "id: " . $row["id"]."<br>".
              " -Continent: " . $row["location"]."<br>".
                " -Train Type: " . $row["type"]."<br>".
                " -Rail Operator: " . $row["rail_op"]."<br>".
                " -Reporting Mark: " . $row["reporting_mark"]."<br>".
                " -Locomotive Number: " . $row["loco_num"]."<br>".
                " -Locomotive Builder: " . $row["loco_builder"]."<br>".
                " -Locomotive Model: " . $row["loco_model"]."<br>";
            }
          } else {
            echo "0 results";
          }
        


    ?>




</body>
</html> 

$sql = "SELECT * FROM train_list;";
        $result = $conn->query($sql);
    
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              echo "id: " . $row["id"]."<br>".
              " -Continent: " . $row["location"]."<br>".
                " -Train Type: " . $row["type"]."<br>".
                " -Rail Operator: " . $row["rail_op"]."<br>".
                " -Reporting Mark: " . $row["reporting_mark"]."<br>".
                " -Locomotive Number: " . $row["loco_num"]."<br>".
                " -Locomotive Builder: " . $row["loco_builder"]."<br>".
                " -Locomotive Model: " . $row["loco_model"]."<br>";
            }
          } else {
            echo "0 results";
          }