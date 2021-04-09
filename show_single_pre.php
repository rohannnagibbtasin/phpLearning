<?php 
    $conn = mysqli_connect("localhost","root","","tasin");
    if(!$conn){
        die("failed");
    }
    //  query 
    $sql = "select * from student where id = ?";
    //  prepare
    $result = mysqli_prepare($conn,$sql);
    //bind parameter
    mysqli_stmt_bind_param($result,'i',$id);
    $id = 1;
    //bind
    mysqli_stmt_bind_result($result,$id,$name,$roll,$address);
    //execute
    mysqli_stmt_execute($result);
    //fetch
    mysqli_stmt_fetch($result);
    echo $name;
    

    //close
    mysqli_stmt_close($result);
    //close connection
    mysqli_close($conn);

?>