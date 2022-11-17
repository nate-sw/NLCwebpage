<?php
    include_once 'dbh.inc.php';
    
    $location = mysqli_real_escape_string($conn, $_POST['location']);
    $type = mysqli_real_escape_string($conn, isset($_POST['type']));
    $operator = mysqli_real_escape_string($conn, $_POST['rail_operator']);
    $reporting = mysqli_real_escape_string($conn, $_POST['reporting_mark']);
    $number = mysqli_real_escape_string($conn, $_POST['loco_num']);
    $builder = mysqli_real_escape_string($conn, $_POST['loco_builder']);
    $model = mysqli_real_escape_string($conn, $_POST['loco_model']);

    $sql = "INSERT INTO train_list (location, train_type, rail_op, reporting_mark, loco_num, loco_builder, loco_model) VALUES ('$location', '$type', '$operator', '$reporting', $number, '$builder', '$model')";
    mysqli_query($conn, $sql);

    $entry_echo = "SELECT * FROM train_list ORDER BY id DESC LIMIT 1;";
    $echo_result = $conn->query($echo_result);

    if ($echo_result->num_rows > 0) {
        // output data of each row
        while($row = $echo_result->fetch_assoc()) {
          echo "id: " . $row["id"]."<br>".
          " -Continent" . $row["location"]."<br>".
            " -Train Type " . $row["type"]."<br>".
            " -Rail Operator " . $row["rail_op"]."<br>".
            " -Reporting Mark " . $row["reporting_mark"]."<br>".
            " -Locomotive Number " . $row["loco_num"]."<br>".
            " -Locomotive Builder " . $row["loco_builder"]."<br>".
            " -Locomotive Model " . $row["loco_model"]."<br>";
        }
      } else {
        echo "0 results";
      }

    header("Location: ../list.php?entry=success");