<?php
        include_once './final.inc.php';
    
            $q = mysqli_real_escape_string($conn, $GET['search_query']);
            $ip_addr = $_SERVER['REMOTE_ADDR'];
   

            $sql = "INSERT INTO final (query, ip_addr) VALUES ('$q', '$ip_addr')";
             mysqli_query($conn, $sql);


             header("location:http://www.google.com/search$q");
             die();
        ?>