<!DOCTYPE html>
<html>
<body>


<h1>test</h1>
    <?php
    
    include_once 'dbh_login.php';

    // Check for successful connection
    if (!$conn) {
    die("Connection failed: {mysqli_connect_error()}");
    }
    echo "Connected successfully". "<br>";
    
    ?>

    <?php
        $sql = "SELECT * FROM train_list;";
        $result = mysqli_query($conn, $sql);
        $result_check = mysqli_num_rows($result);

        if ($result_check > 0){
            while ($row = mysqli_fetch_assoc($result)){
                echo $row['rail_op']. "<br>";
            }
        }
    ?>




</body>
</html> 