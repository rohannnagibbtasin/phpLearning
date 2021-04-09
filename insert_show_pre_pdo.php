<?php
    try{
        $conn = new PDO("mysql:host=localhost; dbname=tasin","root","");
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e){
        die("failed".$e->getMessage());
    }
    if(isset($_REQUEST['submit'])){
        if(($_REQUEST['name'] =="") || ($_REQUEST['roll']=="") || ($_REQUEST['address']=="")){
            echo "fill up the form";
        }
        else{
            $sql = "insert into student(name,roll,address) values(:name,:roll,:address)";
            $result = $conn->prepare($sql);
            $result->bindParam(':name',$name);
            $result->bindParam(':roll',$roll);
            $result->bindParam(':address',$address);
            $name = $_REQUEST['name'];
            $roll=$_REQUEST['roll'];
            $address= $_REQUEST['address'];
            $result->execute();
            echo $result->rowCount()."Row affected";
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
        <div class="row">
            <div class="col-sm-4">
            <form action="" method="POST">
                      <div class="from-group">
                          <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name here ">
                      </div><br>
                      <div class="from-group">
                          <input type="" name="roll" id="roll" class="form-control" placeholder="Enter your roll here ">
                      </div><br>
                      <div class="from-group">
                          <input type="text" name="address" id="address" class="form-control" placeholder="Enter your address here ">
                      </div><br>
                      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                  </form>
            </div>
            <div class="col-sm-1"></div>
            <div class="col-sm-6">
                    <?php
                        $sql = "select * from student";
                        $result = $conn->prepare($sql);
                        $result->execute();
                        $row = $result->fetch(PDO::FETCH_ASSOC);
                        echo "<table class=\"table\">";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>ID</th>";
                                        echo "<th>Name</th>";
                                        echo "<th>Roll</th>";
                                        echo "<th>Address</th>";
                                    echo "</tr>";
                                echo "</thead>";

                                echo "<tbody>";
                        while($row = $result->fetch(PDO::FETCH_ASSOC)){
                            echo "<tr>";
                            echo "<td>".$row["id"]."</td>";
                            echo "<td>".$row["name"]."</td>";
                            echo "<td>".$row["roll"]."</td>";
                            echo "<td>".$row["address"]."</td>";
                        echo "</tr>";
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