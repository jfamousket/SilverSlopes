<?php 
//to conect to database
$server = "localhost";
$user = "root";
$pass  = "";
$dbname = "silverslope";
$conn = new mysqli($server,$user,$pass,$dbname);

if($conn->connect_error){
	die("error: error conecting to database");
}


 ?>