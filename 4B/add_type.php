<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Add Type</title>
</head>
<body>
    

    <div class="container">
        <a class="btn btn-warning m-4" href="index.php">Go Back</a>
        <br><br>

        <div class="card mx-auto" style="width: 50%;">
            <div class="card-header text-center">
            <h1>Add Type</h1>
            </div>

            <div class="card-body">
                
                <form action="add_type.php" method="post">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">New Type:</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="typeName">
                    </div>
                    
                    <input type="submit" class="btn btn-primary" name="submit"></input>
               </form>
            </div>

            <div class="card-footer text-muted text-center">
                Copyright 7Dumbways - 2021
            </div>
        </div>

        <?php
        if(isset($_POST['submit'])){
            $typeName = $_POST['typeName'];
            
        //include database config
        include("config.php");

        $result = mysqli_query($mysqli, "INSERT INTO type_tb(Name) VALUES('$typeName')");

        //Message
        echo "New type Added Successfully. <a class='text-center' href='index.php'>View Types</a>";
        }
       ?>
    </div>

    
</body>
</html>