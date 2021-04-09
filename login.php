<?php
    session_start();
    if(!isset($_SESSION['uname'])){
        if(isset($_REQUEST['username']) || isset($_REQUEST['password'])){
            $username = $_REQUEST['username'];
            $password = $_REQUEST['password'];
            $_SESSION['uname'] = $username;
            $_SESSION['pass'] = $password;
            echo "<script>location.href='welcome.php'</script>";
        }
    }
    else{
        echo "<script>location.href='welcome.php'</script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
            max-width: 1000px;
            margin: 0px auto;
        }
    </style>
</head>
<body class="container">
    <form action="" method="POST">
        <label for="username">Username</label><br>
        <input type="text" name="username" id="username"><br>
        <label for="password">Password</label><br>
        <input type="password" name="password" id="password"><br><br>
        <input type="submit" value="Login" name="login">
    </form>
</body>
</html>