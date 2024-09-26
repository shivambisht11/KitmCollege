<?php
include("db_connection.php");

$id = $_GET['id'];
$status = $_GET['status'];

$q = "UPDATE `admission` SET `status`='$status' WHERE a_id = $id";
mysqli_query($conn,$q);

header('location:../admission.php');
?>