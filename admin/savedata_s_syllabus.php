<?php 
include('config/db_connection.php');
if (isset($_POST["submit"])) {

$syll_name = $_POST["syll_name"];
$status = $_POST["status"];
}
$file_name = $_FILES['syll_file']['name'];
$tempname = $_FILES['syll_file']['tmp_name'];
$folder = 'files/'.$file_name;

if(move_uploaded_file($tempname,$folder)){
    echo "<h3>Syllabus uploaded sucessfully</h3>";
}

$conn =mysqli_connect("localhost","root","","kitmdb") or die("connection failed");
$sql = "INSERT INTO `syllabus`( `syll_name`, `syll_file`, `created_at`, `status`) VALUES ('{$syll_name}','{$folder}',current_timestamp(),'{$status}')";

$syllabus = mysqli_query($conn,$sql) or die("Query Unsucessfully");

echo '<script>window.location.assign("syllabus.php");</script>';

mysqli_close($conn);

?>
