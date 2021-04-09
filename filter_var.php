<?php
    // $email = "rntasin@gmail.com";
    // $vemail = filter_var($email,FILTER_VALIDATE_EMAIL);
    // if(!$vemail){
    //     echo "Invalid";
    // }
    // else{
    //     echo "Valid";
    // }



    // $email = "/////rntasin/////()@gmail.com";
    // $vemail = filter_var($email,FILTER_SANITIZE_EMAIL);
    // echo "Email is ".$vemail."<br>";

    $name = "hi there";
    echo filter_var($name,FILTER_CALLBACK, array("options"=>"strtoupper"));

?>