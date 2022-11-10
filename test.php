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
        $sql = "INSERT INTO train_list (location, train_type, rail_op, reporting_mark, loco_num, loco_builder, loco_model);
        mysqli_query($conn, $sql);


    ?>




</body>
</html> 