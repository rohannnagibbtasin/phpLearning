<?php 
    $conn = mysqli_connect("localhost","root","","tasin");
    if(!$conn){
        die("failed");
    }
    //  query 
    $sql = "select * from student";
    //  prepare
    $result = mysqli_prepare($conn,$sql);
    //bind
    mysqli_stmt_bind_result($result,$id,$name,$roll,$address);
    //execute
    mysqli_stmt_execute($result);
    //fetch
    while(mysqli_stmt_fetch($result)){
        echo $id." ".$name." ".$roll." ".$address."<br>";
    }

    


?>