<?php
include("db_connection.php");

$id = $_GET['id'];
$status = $_GET['status'];

$q = "UPDATE `exam_form` SET `status`='$status' WHERE exam_id = $id";
mysqli_query($conn,$q);

header('location:../exam.php');
?>