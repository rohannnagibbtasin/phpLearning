<?php
    try{
        $conn = new PDO("mysql:host=localhost; dbname=tasin","root","");
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e){
        die("failed".$e->getMessage());
    }

    $sql = "insert into student(name,roll,address) values(:name,:roll,:address)";
    $result = $conn->prepare($sql);
    $result->execute(array(':name'=>'Nagibb',':roll'=>230,':address'=>'Gangni'));
    echo $result->rowCount()."Row affected";

?>