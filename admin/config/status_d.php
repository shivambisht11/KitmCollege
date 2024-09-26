<?php
include("db_connection.php");

$id = $_GET['id'];
$status = $_GET['status'];

$q = "UPDATE `discover_more` SET `status`='$status' WHERE d_id = $id";
mysqli_query($conn,$q);

header('location:../discover.php');
?>