<?php

function conection(){
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "users_crud_php";

    $cone = mysqli_connect($host, $user, $pass, $db);

    mysqli_select_db($cone, $db);

    return $cone;
};



?>

