<?php
include("db_connection.php");

$id = $_GET['id'];
$status = $_GET['status'];

$q = "UPDATE `blog` SET `status`='$status' WHERE blog_id = $id";
mysqli_query($conn,$q);

header('location:../blog.php');
?>