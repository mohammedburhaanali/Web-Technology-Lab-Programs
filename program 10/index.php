<?php error_reporting(0); 
session_start();
$con = mysqli_connect("localhost","root","","student_db"); 
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
