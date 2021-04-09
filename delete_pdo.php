<?php 
    $db_host="localhost";
    $db_name = "tasin";
    $db_user = "root";
    $db_pass = "";
    $conn = new PDO("mysql:host=$db_host; dbname=$db_name",$db_user,$db_pass);
    if(!$conn){
        echo "failed";
    }
    if(isset($_REQUEST['submit'])){
        $sql = "delete from student where id= {$_REQUEST['id']}";
        if($conn->query($sql)){
            echo "deleted";
        }
        else{
            echo "failed to delete";
        }
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container"><br><hr>
      
        
        <div>
          <?php
                $sql = "select * from student";
                $result = $conn->query($sql);
                if($result->rowCount() >0){

                    echo "<table class=\"table\">";
                        echo "<thead>";
                            echo "<tr>";
                                echo "<th>ID</th>";
                                echo "<th>Name</th>";
                                echo "<th>Roll</th>";
                                echo "<th>Address</th>";
                                echo "<th>Action</th>";
                            echo "</tr>";
                        echo "</thead>";

                        echo "<tbody>";
                    while($row = $result->fetch(PDO::FETCH_ASSOC)){
                        echo "<tr>";
                            echo "<td>".$row["id"]."</td>";
                            echo "<td>".$row["name"]."</td>";
                            echo "<td>".$row["roll"]."</td>";
                            echo "<td>".$row["address"]."</td>";
                            echo '<td><form action="" method="POST"><input type="hidden" name="id" value='.$row['id'].'><input type="submit" class ="btn btn-sm btn-danger" name="submit" value="Delete"></form></td>';
                        echo "</tr>";
                    }
                }

          ?>
        </div>
      </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>