<?php
    $conn = mysqli_connect("localhost","root","","tasin");
    if(!$conn){
        die ("connected failed");
    }

    
    if(isset($_REQUEST['submit'])){
        echo $_REQUEST['id'];
    }



?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Form</title>
  </head>
  <body>
  
    <div class="container">
    <hr>
        <div class="row">
            <div class="col-sm-4">
                    <?php
                    if(isset($_REQUEST['edit'])){
                        $sql = "select * from student where id={$_REQUEST['id']}";
                        $result = mysqli_query($conn,$sql);
                        $row = mysqli_fetch_assoc($result);
                    }
                    
                    ?>
                <form action="" method="POST">
                    <div class="from-group">
                        <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name here " value="<?php if(isset($row["name"])){echo $row["name"];}?>">
                    </div><br>
                    <div class="from-group">
                        <input type="" name="roll" id="roll" class="form-control" placeholder="Enter your roll here " value="<?php if(isset($row["roll"])){echo $row["roll"];} ?>">
                    </div><br>
                    <div class="from-group">
                        <input type="text" name="address" id="address" class="form-control" placeholder="Enter your address here " value="<?php if(isset($row["address"])){echo $row["address"];} ?>">
                    </div><br>
                    <button type="submit" class="btn btn-primary" name="submit">Update</button>
                </form>
            </div>
            <div class="col-sm-6 offset-sm-2">
                <?php
                    $sql = "select * from student";
                    $result = mysqli_query($conn,$sql);
                    if(mysqli_num_rows($result) >0){
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
                                while($row = mysqli_fetch_assoc($result)){
                                    echo "<tr>";
                                        echo "<td>".$row["id"]."</td>";
                                        echo "<td>".$row["name"]."</td>";
                                        echo "<td>".$row["roll"]."</td>";
                                        echo "<td>".$row["address"]."</td>";
                                        echo '<td><form action="" method="POST"><input type="hidden" name="id" value=' .$row['id']. '><input type="submit" class ="btn btn-sm btn-primary" name="edit" value="Edit"></form></td>';
                                    echo "</tr>";
                                }
                            echo "</tbody>";

                    }
                    else{
                        echo 0;
                    }
                ?>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>


