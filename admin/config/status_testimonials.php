<?php
include("db_connection.php");

$id = $_GET['id'];
$status = $_GET['status'];

$q = "UPDATE `testimonials` SET `status`='$status' WHERE t_id = $id";
mysqli_query($conn,$q);

header('location:../testimonials.php');
?>