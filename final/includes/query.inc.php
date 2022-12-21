<?php
    include_once 'dbh.inc.php';
    
    $query = htmlspecialchars($conn, $_GET['search']);
    $ip_addr = var_dump($_SERVER['REMOTE_ADDR']);
   

    $sql = "INSERT INTO final (query, ip_addr) VALUES ('$query', '$ip_addr')";
    mysqli_query($conn, $sql);

