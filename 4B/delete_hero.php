<?php

//include setup database
include("config.php");

//Get id
$id = $_GET['id'];

//Query Delete
$result = mysqli_query($mysqli, "DELETE FROM heroes_tb WHERE id=$id");

//After delet redirect to home
header("Location:index.php");

?>