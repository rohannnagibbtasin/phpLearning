<?php
    $conn = new mysqli("localhost","root","","tasin");
    if($conn->connect_error){
        die("failed");
    }
    $sql = "select * from student";
    $result = $conn->prepare($sql);
    $result->execute();
    $result->store_result();
    echo $result->num_rows;
    $result->free_result();
    $result->close();
    $conn->close();

?>