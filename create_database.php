<?php
    $conn = mysqli_connect("localhost","root","","test");
    if(!$conn){
        echo "connection failed";
    }
    $sql = "create table tasin (id int not null auto_increment primary key,name varchar (50),address text);";
    if(mysqli_query($conn,$sql)){
        echo "created ";
    }
    else{
        echo "failed to create";
    }


?>