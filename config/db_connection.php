<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "kitmdb";

$conn= mysqli_connect($server,$username,$password,$database);

if(!$conn){
    die("error detected".mysqli_error($conn));
}
?>