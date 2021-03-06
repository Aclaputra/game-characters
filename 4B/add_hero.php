<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Add Hero</title>
</head>
<body>
    

    <div class="container">
        <a class="btn btn-warning m-4" href="index.php">Go Back</a>
        <br><br>

        <div class="card mx-auto" style="width: 50%;">
            <div class="card-header text-center">
            <h1>Add Hero</h1>
            </div>

            <div class="card-body">
                
                <form action="add_hero.php" method="post">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Hero Name:</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
                        
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Type id:</label>
                        <input type="number" class="form-control" id="exampleInputPassword1" name="typeId">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Insert Photo:</label>
                        <input type="file" class="form-control" id="exampleCheck1" name="photo">
                        
                    </div>
                    <input type="submit" class="btn btn-primary" name="submit"></input>
               </form>
            </div>

            <div class="card-footer text-muted text-center">
                Copyright 7Dumbways - 2021
            </div>

            <?php
            if(isset($_POST['submit'])){
                $name = $_POST['name'];
                $typeId = $_POST['typeId'];
                $photo = $_POST['photo'];
                
            //include database config
            include("config.php");

            $result = mysqli_query($mysqli, "INSERT INTO heroes_tb(name,type_id,photo) VALUES('$name',$typeId,'$photo')");

            //Message
            echo "<p class='text-center'>Heroes Added Successfully.</p> <a class='text-center' href='index.php'>View Heroes</a>";
            }
        ?>
        </div>

        
        
    </div>
</body>
</html>