<?php

include "conection.php";
$cone = conection();

$id = $_GET['id'];

$sql = "DELETE FROM users WHERE id = '$id'";
$query = mysqli_query($cone, $sql);

if($query){
    Header("Location: index.php");
};

?>