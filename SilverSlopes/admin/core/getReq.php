<?php 
require 'db.php';
 ?>
 <?php 
$id = $_GET['q'];


$get = "SELECT*FROM join_req WHERE id = {$id}";
$query = $conn->query($get);
$data = $query->fetch_assoc();
	$name = $data['name'];
	$date = $data['date'];
	$email = $data['num_email'];
	$skill = $data['skill'];
	$about = $data['about'];

	$out = array('name' =>$name ,'date'=>$date,'email'=>$email,'skill'=>$skill,'about'=>$about);
	echo json_encode($out);

	$conn->close();
  ?>