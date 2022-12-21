<?php
    include_once 'dbh.inc.php';
    
    $query = mysqli_real_escape_string($conn, $_GET['search_query']);
    $ip_addr = var_dump($_SERVER['REMOTE_ADDR']);
   

    $sql = "INSERT INTO final (query, ip_addr) VALUES ('$query', '$ip_addr')";
    mysqli_query($conn, $sql);

