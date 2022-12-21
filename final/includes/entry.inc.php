<?php
        include_once './final.inc.php';
    
            $query = mysqli_real_escape_string($conn, $GET['search']);
            $ip_addr = $_SERVER['REMOTE_ADDR'];
   

            $sql = "INSERT INTO final (query, ip_addr) VALUES ('$query', '$ip_addr')";
             mysqli_query($conn, $sql);


             header("location: http://www.google.com/search"$query)
        ?>