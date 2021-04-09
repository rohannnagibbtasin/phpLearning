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
        // $result->bindColumn(1,$id);
        // $result->bindColumn(2,$name);
        // $result->bindColumn(3,$roll);
        // $result->bindColumn(4,$address);
        $result->bindColumn('id',$id);
        $result->bindColumn('name',$name);
        $result->bindColumn('roll',$roll);
        $result->bindColumn('address',$address);
        while($result->fetch(PDO::FETCH_BOUND)){
            echo $id.$name.$roll.$address."<br>";
        }
        
    }
    catch(PDOException $e){
        echo $e->getMessage();
    }
    unset($result);
    $conn = null;
?>