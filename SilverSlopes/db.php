<?php 
//to conect to database
$server = "mysql7002.site4now.net";
$user = "lfsoa7hh_admin";
$pass  = "MDGYOdHvMe!8";
$dbname = "lfsoa7hh_cm";
$conn = new mysqli($server,$user,$pass,$dbname);

if($conn->connect_error){
	die("error: error conecting to database");
}


 ?>