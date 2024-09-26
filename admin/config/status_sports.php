<?php
include("db_connection.php");

$id = $_GET['id'];
$status = $_GET['status'];

$q = "UPDATE `sports_activity` SET `status`='$status' WHERE s_id = $id";
mysqli_query($conn,$q);

header('location:../sports-activity.php');

?>