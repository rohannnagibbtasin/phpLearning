<?php
    $conn = new mysqli("localhost","root","","tasin");
    if($conn->connect_error){
        die("failed");
    }
    $sql = "insert into student(name,roll,address) values(?,?,?)";
    $result= $conn->prepare($sql);
    if($result){
        $result->bind_param('sis',$name,$roll,$address);
        $name = "Rahim";
        $roll = 304;
        $address = "Russia";
        $result->execute();
        echo $result->affected_rows."Row affected";
    }
    $result->close();
    
?>