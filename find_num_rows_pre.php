<?php 
    $conn = mysqli_connect("localhost","root","","tasin");
    if(!$conn){
        die("failed");
    }
    //  query 
    $sql = "select * from student";
    //  prepare
    $result = mysqli_prepare($conn,$sql);
    //execute
    mysqli_stmt_execute($result);
    //store result
    mysqli_stmt_store_result($result);
    //num of rows
    $total = mysqli_stmt_num_rows($result);
    
    echo "$total";

    


?>
