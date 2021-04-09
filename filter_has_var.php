<?php

    if(isset($_REQUEST['submit'])){
        if(filter_has_var(INPUT_GET,'name')){
            echo "Found";
        }
        else{
            echo "failed";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        Name : <input type="text" name="name"> 
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>