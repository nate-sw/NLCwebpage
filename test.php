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
        $sql = "SELECT GREATEST * FROM train_list;";
        	
    	        
        $result = mysqli_query($conn, $sql);
        $result_check = mysqli_num_rows($result);
        	
        if ($result_check > 0){
        	while ($row = mysqli_fetch_assoc($result)){
        	    echo $row['rail_op']. "<br>";
        	}
        }
        mysqli_close($conn);
        


    ?>




</body>
</html> 