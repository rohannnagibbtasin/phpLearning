<?php
    try{
        $conn = new PDO("mysql:host=localhost; dbname=tasin","root","");
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e){
        die("failed".$e->getMessage());
    }

    try{
        $sql = "select * from student where id=?";
        $result = $conn->prepare($sql);
        $result->bindParam(1,$id);
        $id = 40;
        $result->execute();
        $row = $result->fetch(PDO::FETCH_ASSOC);
        echo $row['id'].$row['name'].$row['roll'].$row['address'];
        
    }
    catch(PDOException $e){
        echo $e->getMessage();
    }
    unset($result);
    $conn = null;
?>