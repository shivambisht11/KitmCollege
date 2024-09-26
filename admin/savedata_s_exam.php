<?php 
include('config/db_connection.php');
if (isset($_POST["submit"])) {

$exam_s_name = $_POST["exam_s_name"];
$status = $_POST["status"];
}
$file_name = $_FILES['exam_s_file']['name'];
$tempname = $_FILES['exam_s_file']['tmp_name'];
$folder = 'files/'.$file_name;

if(move_uploaded_file($tempname,$folder)){
    echo "<h2>File uploaded sucessfully</h2>";
}

$conn =mysqli_connect("localhost","root","","kitmdb") or die("connection fail");
$sql = "INSERT INTO `exam_schedule`( `exam_s_name`, `exam_s_file`, `created_at`, `status`) VALUES ('{$exam_s_name}','{$folder}',current_timestamp(),'{$status}')";

$exam_schedule = mysqli_query($conn,$sql) or die("Query Unsucessfully");

echo '<script>window.location.assign("schedule.php");</script>';

mysqli_close($conn);

?>
