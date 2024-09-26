<?php
include("db_connection.php");

$id = $_GET['id'];
$status = $_GET['status'];

$q = "UPDATE `exam_schedule` SET `status`='$status' WHERE exam_s_id = $id";
mysqli_query($conn,$q);

header('location:../schedule.php');
?>