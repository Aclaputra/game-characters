<?php
include("config.php");

    //check data jika ingin di update
if(isset($_POST['update']))
{
    $id = $_POST['id'];
    $name = $_POST['name'];
    $type = $_POST['typeId'];
    $photo = $_POST['photo'];

    //update siswa data
    $result = mysqli_query($mysqli, "UPDATE heroes_tb SET name='$name',type_id='$type',photo='$photo' WHERE id=$id");

    // Redirect ke halaman index
    header("Location: index.php");
}

$id = $_GET['id'];
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<a class='btn btn-warning px-4 m-3' href='index.php'>Go Back</a>
<div class='container m-auto mt-4 d-flex justify-content-center'>
    <?php
        $result = mysqli_query($mysqli, "SELECT * FROM heroes_tb INNER JOIN type_tb ON heroes_tb.type_id = type_tb.id WHERE heroes_tb.id = $id");

        // print_r($result);
        // var_dump($result);
        while($wiki_data = mysqli_fetch_array($result)){
            $name = $wiki_data['name'];
            $photo = $wiki_data['photo'];
            $type = $wiki_data['Name'];
            $id = $wiki_data['id'];
            // print_r($id);
            // var_dump($id);

            echo "
            <div class='card shadow-lg text-center' style='width: 70%;'>
                <div class='card-header'>
                    <h1>Hero Details</h1>
                </div>
                <img class='mx-auto' src='img/".$wiki_data['photo']."' style='width: 40%;' alt=''>
                <h5>Hero Name: ".$wiki_data['name']."</h1>
                <h5>Type: ".$wiki_data['Name']."</h3>
                <a href='delete_hero.php?id=$wiki_data[id]'><button class='btn btn-danger px-4 m-3'>Delete</button></a>
                

            </div>";
        }  
    ?>

<div class="card mx-auto" style="width: 50%;">
            <div class="card-header text-center">
            <h1>Update Hero</h1>
            </div>
            
            <div class="card-body">
                
            <?php
            //Menampilkan data base on id
            //Gettin id from url
               
            //fetch siswa berdasarkan id
                // $result = mysqli_query($mysqli, "SELECT * FROM tb_siswa WHERE id=$id");

                while($hero_data = mysqli_fetch_array($result))
                {
                    $name = $wiki_data['name'];
                    $photo = $wiki_data['photo'];
                    $type = $wiki_data['Name'];
                    $id = $wiki_data['id'];
                }
            ?>

                <form action="detail.php" method="post">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Hero Name:</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" value=<?php echo $name; ?>>
                        
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Type id:</label>
                        <input type="number" class="form-control" id="exampleInputPassword1" name="typeId" value=<?php echo $type; ?>>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Insert Photo:</label>
                        <input type="file" class="form-control" id="exampleCheck1" name="photo" value=<?php echo $photo; ?>>
                        
                    </div>
                    <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
                    <input type="submit" class="btn btn-primary" name="update" value="Update"></input>
               </form>
            </div>

            <div class="card-footer text-muted text-center">
                Copyright 7Dumbways - 2021
            </div>
        </div>

</div>

</body>
</html>