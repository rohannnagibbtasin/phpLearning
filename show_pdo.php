<?php
    $db_host="localhost";
    $db_name = "tasin";
    $db_user = "root";
    $db_pass = "";
    $conn = new PDO("mysql:host=$db_host; dbname=$db_name",$db_user,$db_pass);

    $sql = "select * from student";
    $result = $conn->query($sql);
    // if($result->rowCount()>0){
    //     while($row=$result->fetch(PDO::FETCH_ASSOC)){
    //         echo $row['name']."<br>";
    //     }
    //}

    // foreach($result as $row){
    //     echo "<pre>" . print_r($row) . "</pre>";
    // }
    foreach($result->fetch(PDO::FETCH_ASSOC) as $row){
        echo "<pre>" . print_r($row) . "</pre>";
    }

?>