<?php 
    $conn = new mysqli("localhost","root","","tasin");
    if($conn->connect_error){
        die("failed");
    }
    echo "connected";


?>

