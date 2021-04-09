<?php
    $conn = mysqli_connect("localhost","root","","tasin");
    if(!$conn){
        die("Failed to load this page");
    }
    $sql = "insert into student(name,roll,address) values(?,?,?)";
    //prepare
    $reult = mysqli_prepare($conn,$sql);
    //bind
    if($reult){
        mysqli_stmt_bind_param($reult,'sis',$name,$roll,$address);
        $name = "Sunjida";
        $roll = 101;
        $address = "Gangni";
        mysqli_stmt_execute($reult);
        $affected_row = mysqli_stmt_affected_rows($reult);
        echo $affected_row." Row inserted<br>";
    }

?>

