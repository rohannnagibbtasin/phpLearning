<?php

    $conn = mysqli_connect("localhost","root","","tasin");
    if(!$conn){
        die ("connected failed");
    }
    
    $sql = "select * from student";
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result)){
        echo $row["id"].$row["name"].$row["roll"].$row["address"]."<br>";
    }

?>