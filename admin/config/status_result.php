<?php
include("db_connection.php");

$id = $_GET['id'];
$status = $_GET['status'];

$q = "UPDATE `result` SET `status`='$status' WHERE result_id = $id";
mysqli_query($conn,$q);

header('location:../result.php');

?>