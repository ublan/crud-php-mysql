<?php
include "conection.php";
$cone = conection();

$id = null;
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

$sql = "INSERT INTO users VALUES('$id', '$name', '$lastname', '$username', '$password', '$email')";
$query = mysqli_query($cone, $sql);

if($query){
    Header("Location: index.php");
};

?>