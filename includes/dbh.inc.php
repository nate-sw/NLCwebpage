<?php
    $server = "localhost";
    $username = "php";
    $password = "password";
    $database = "train_list";
    $conn = mysqli_connect($server, $username, $password, $database);

    mysqli_close($conn);
