<?php
    $conn = new mysqli("localhost","root","","tasin");
    if($conn->connect_error){
        die("failed");
    }
    $sql = "select * from student";
    $result = $conn->prepare($sql);
    $result->bind_result($id,$name,$roll,$address);
    $result->execute();
    while($result->fetch()){
        echo $id.$name.$roll.$address."<br>";
    }
    

?>