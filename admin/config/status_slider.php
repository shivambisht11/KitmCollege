<?php
include("db_connection.php");

$id = $_GET['id'];
$status = $_GET['status'];

$q = "UPDATE `slider` SET `status`='$status' WHERE slider_id = $id";
mysqli_query($conn,$q);

header('location:../slider.php');
?>