<?php
include("db_connection.php");

$id = $_GET['id'];
$status = $_GET['status'];

$q = "UPDATE `scrolling_link` SET `status`='$status' WHERE sl_id = $id";
mysqli_query($conn,$q);

header('location:../scrolling.php');
?>