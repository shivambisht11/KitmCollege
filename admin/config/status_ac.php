<?php
include("db_connection.php");

$id = $_GET['id'];
$status = $_GET['status'];

$q = "UPDATE `admit_card` SET `status`='$status' WHERE admit_card_id = $id";
mysqli_query($conn,$q);

header('location:../admit-card.php');

?>