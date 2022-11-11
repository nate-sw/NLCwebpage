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
        	
    	        
        $result = mysqli_query($conn, $sql);
        
        echo $result. "<br>";
        	
        
        mysqli_close($conn);
        


    ?>




</body>
</html> 