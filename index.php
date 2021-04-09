
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    if(isset($_POST['email']) || isset($_POST['pass'])){
    echo $_POST['email']."<br>";
    echo $_POST['pass']."<br>";
    }
    else{
?>

    <form action="" method="POST" enctype="multipart/form-data">
        <input type="email" name="email" id="" required placeholder="Email"><br>
        <input type="password" name="pass" id="" required placeholder="Password"><br>
        <input type="submit" value="Submit">
    </form>
<?php
    }
?>
</body>
</html>