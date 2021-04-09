<?php
    try{
        $conn = new PDO("mysql:host=localhost; dbname=tasin","root","");
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e){
        die("failed".$e->getMessage());
    }

    try{
        $sql = "select * from student";
        $result = $conn->prepare($sql);
        $result->execute();
        $row = $result->fetch(PDO::FETCH_ASSOC);
        while($row = $result->fetch(PDO::FETCH_ASSOC)){
            echo $row['name'].$row['roll'].$row['address']."<br>";
        }
        
    }
    catch(PDOException $e){
        echo $e->getMessage();
    }
    unset($result);
    $conn = null;
?>