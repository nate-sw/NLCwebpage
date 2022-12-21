<!DOCTYPE html>
<html>
<body>

    <script>
        window.alert("Page is for testing purposes only");
    </script>

<?php
    include_once 'dbh.inc.php';
    
    $location = mysqli_real_escape_string($conn, $_POST['location']);
    $type = mysqli_real_escape_string($conn, $_POST['type']);
    $operator = mysqli_real_escape_string($conn, $_POST['rail_operator']);
    $reporting = mysqli_real_escape_string($conn, $_POST['reporting_mark']);
    $number = mysqli_real_escape_string($conn, $_POST['loco_num']);
    $builder = mysqli_real_escape_string($conn, $_POST['loco_builder']);
    $model = mysqli_real_escape_string($conn, $_POST['loco_model']);

    echo ("train type = " . $_POST['type']);

    $sql = "INSERT INTO train_list (location, train_type, rail_op, reporting_mark, loco_num, loco_builder, loco_model) VALUES ('$location', '$type', '$operator', '$reporting', $number, '$builder', '$model')";
    mysqli_query($conn, $sql);


    header("Location: ../list.php?entry=success");