<?php
    include ("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Document</title>
</head>
<body style="background-color: black;">

    <nav class="navbar text-light" style="background-color: black;">
    <div class="container-fluid">
        <h1 class="navbar-brand mb-0 h1"><span style="color: orange;">7</span>DW</h1>
        <div class="float-right">
            <a href="add_hero.php"><button class="btn btn-warning mx-2">Add Hero</button></a>
            <a href="add_type.php"><button class="btn btn-warning mx-2">Add Type</button></a>
        </div>
    </div>
    </nav>

    <div class="container d-flex justify-content-evenly mt-4 flex-wrap">


        <?php
            $result = mysqli_query($mysqli, "SELECT * FROM heroes_tb INNER JOIN type_tb ON heroes_tb.type_id = type_tb.id");

            while($wiki_data = mysqli_fetch_array($result)){
                
                $id = $wiki_data['id'];
                // print_r($id);
                // var_dump($id);

                echo "<div class='card m-1 bg-dark text-light' style='width: 20%;'>
                <img src='img/".$wiki_data['photo']."' class='card-img-top' alt='...'>
                <div class='card-body'>
                    <h5 class='card-title'>".$wiki_data['name']."</h5>
                    <p class='card-text'>".$wiki_data['Name']."</p>
                    <a href='detail.php?id= $id' ><button class='btn btn-danger' style='width:100%;'>detail</button></a>
                </div>
            </div>";
            }

        ?>

    </div>
    
<footer>
    <div class="container text-light text-center mt-4 mb-4">
    Copyright 7Dumbways - 2021
    </div>
</footer>

</body>
</html>